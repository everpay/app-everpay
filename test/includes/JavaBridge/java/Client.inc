<?php /*-*- mode: php; tab-width:4 -*-*/

  /* java_Client.php -- parser callbacks for the PHP/Java Bridge.

  Copyright (C) 2003-2007 Jost Boekemeier

  This file is part of the PHP/Java Bridge.

  The PHP/Java Bridge ("the library") is free software; you can
  redistribute it and/or modify it under the terms of the GNU General
  Public License as published by the Free Software Foundation; either
  version 2, or (at your option) any later version.

  The library is distributed in the hope that it will be useful, but
  WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
  General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with the PHP/Java Bridge; see the file COPYING.  If not, write to the
  Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA
  02111-1307 USA.

  Linking this file statically or dynamically with other modules is
  making a combined work based on this library.  Thus, the terms and
  conditions of the GNU General Public License cover the whole
  combination.

  As a special exception, the copyright holders of this library give you
  permission to link this library with independent modules to produce an
  executable, regardless of the license terms of these independent
  modules, and to copy and distribute the resulting executable under
  terms of your choice, provided that you also meet, for each linked
  independent module, the terms and conditions of the license of that
  module.  An independent module is a module which is not derived from
  or based on this library.  If you modify this library, you may extend
  this exception to your version of the library, but you are not
  obligated to do so.  If you do not wish to do so, delete this
  exception statement from your version. */

require_once("${JAVA_BASE}/JavaProxy.inc");
require_once("${JAVA_BASE}/Parser.inc");
require_once("${JAVA_BASE}/Protocol.inc");
require_once("${JAVA_BASE}/GlobalRef.inc");

class java_SimpleFactory {
  var $client;
  function java_SimpleFactory($client) {
	$this->client = $client;
  }
  function getProxy($result, $signature, $wrap) {
	return $result;
  }
  function checkResult($result) {}
}
class java_ProxyFactory extends java_SimpleFactory {
  function java_ProxyFactory($client) {
	parent::__construct($client);
  }
  function create($result, $signature) {
	return new java_JavaProxy($result, $signature);
  }
  function createInternal($proxy) {
	return new java_InternalJava($proxy);
  }
  function getProxy($result, $signature, $wrap) {
	$proxy = $this->create($result, $signature);
	if($wrap) $proxy = $this->createInternal($proxy);
	return $proxy;
  }
}
class java_ArrayProxyFactory extends java_ProxyFactory {
  function java_ArrayProxyFactory($client) {
	parent::__construct($client);
  }
  function create($result, $signature) {
	return new java_ArrayProxy($result, $signature);
  }
}
class java_IteratorProxyFactory extends java_ProxyFactory {
  function java_IteratorProxyFactory($client) {
	parent::__construct($client);
  }
  function create($result, $signature) {
	return new java_IteratorProxy($result, $signature);
  }
}
class java_ExceptionProxyFactory extends java_SimpleFactory {
  function java_ExceptionProxyFactory($client) {
	parent::java_SimpleFactory($client);
  }
  function create($result, $signature) {
	static $count = 0;
	return new java_ExceptionProxy($result, $signature);
  }
  function getProxy($result, $signature, $wrap) {
	$proxy = $this->create($result, $signature);
	if($wrap) $proxy = new java_InternalException($proxy);
	return $proxy;
  }
}
class java_ThrowExceptionProxyFactory extends java_ExceptionProxyFactory {
  function java_ThrowExceptionProxyFactory($client) {
	parent::__construct($client);
  }
  function getProxy($result, $signature, $wrap) {
	$proxy = $this->create($result, $signature);
	// don't check for $wrap, which may be wrong (type Java instead of
	// JavaException) when the user has managed to create an exception
	// from a Java constructor, e.g.: new Java("java.lang.String",
	// null). Since we'll discard the possibly wrong type anyway, we
	// can create a fresh proxy without any further checks:
	$proxy = new java_InternalException($proxy);
	return $proxy;
  }
  function checkResult($result) {
	throw $result;
  }
}

class java_CacheEntry {
  var $fmt, $signature, $factory, $java;
  var $resultVoid;

  function java_CacheEntry($fmt, $signature, $factory, $resultVoid) {
	$this->fmt = $fmt;
	$this->signature = $signature;
	$this->factory = $factory;
	$this->resultVoid = $resultVoid;
  }
}

class java_Arg {
  var $client;
  var $exception; 				// string representation for php4
  var $factory, $val;
  var $signature; // class type

  function java_Arg($client) {
	$this->client = $client;
	$this->factory = $client->simpleFactory;
  }
  function linkResult(&$val) {
	$this->val = &$val;
  }
  function setResult($val) {
	$this->val = &$val;
  }
  function getResult($wrap) {
	$rc = $this->factory->getProxy($this->val, $this->signature, $wrap);
	$factory = $this->factory;

	$this->factory = $this->client->simpleFactory;
	$factory->checkResult($rc);
	return $rc;
  }
  function setFactory($factory) {
	$this->factory = $factory;
  }
  function setException($string) {
	$this->exception = $string;
  }
  function setVoidSignature() {
	$this->signature = "@N";
	// update cache
	$key = $this->client->currentCacheKey;
	$this->client->currentArgumentsFormat[6]="3";
	if(JAVA_DEBUG) {
	  echo "ignore further results:";  echo "\n";
	}
	if(JAVA_DEBUG) {
	  echo "updating cache $key, argformat: {$this->client->currentArgumentsFormat}, classType: {$this->signature}\n";
	}
	$cacheEntry = new java_CacheEntry($this->client->currentArgumentsFormat, $this->signature, $this->factory, true);
	$this->client->methodCache[$key]=$cacheEntry;
  }
  function setSignature($signature) {
	$this->signature = $signature;
	// update cache
	$key = $this->client->currentCacheKey;
	if($key && $key[0]!='~') {			// don't cache array(...) or non-java objects
	  if(JAVA_DEBUG) {
		echo "updating cache $key, argformat: {$this->client->currentArgumentsFormat}, classType: {$this->signature}\n";
	  }
	  $cacheEntry = new java_CacheEntry($this->client->currentArgumentsFormat, $this->signature, $this->factory, false);
	  $this->client->methodCache[$key]=$cacheEntry;
	}
  }
}
class java_CompositeArg extends java_Arg {
  var $parentArg;
  var $idx;						// position within $val;
  var $type;					// for A and X
  var $counter;

  function java_CompositeArg($client, $type) {
	parent::__construct($client);
	$this->type = $type;
	$this->val = array();
	$this->counter = 0;
  }
  function setNextIndex() {
	$this->idx = $this->counter++;
  }
  function setIndex($val) {
	$this->idx = $val;
  }
  function linkResult(&$val) {
	$this->val[$this->idx]=&$val;
  }
  function setResult($val) {
	$this->val[$this->idx]=$this->factory->getProxy($val, $this->signature, true);
	$this->factory = $this->client->simpleFactory;
  }
}
class java_ApplyArg extends java_CompositeArg {
  var $m, $p, $v, $n; 			// see PROTOCOL.TXT

  function java_ApplyArg($client, $type, $m, $p, $v, $n) {
	parent::__construct($client, $type);
	$this->m = $m;
	$this->p = $p;
	$this->v = $v;
	$this->n = $n;
  }
}
/**@deprecated*/
class java_Handler {
  var $client;

  function java_Handler($client) {
	$this->client = $client;
  }

  function flush() {}

  function sendData() {
    $this->client->protocol->sendData();
  }

  function handleRequests() {
	$client = $this->client;
	do {
	  $tail_call = false;
	  $this->client->stack=array($this->client->arg=$this->client->simpleArg);
	  $client->idx = 0;
	  $client->parser->parse();

	  /* pull off A, if any */
	  if((count($client->stack)) > 1) {
		$arg = array_pop($client->stack);
		$client->apply($arg);
		$tail_call = 1;			// we don't expect a result
	  } else {
		$tail_call = 0;
	  }

	  $client->stack=null;
	} while($tail_call);
	return 1;
  }
}
/**@deprecated*/
class java_AsyncHandler extends java_Handler {
  var $arg;
  function java_AsyncHandler($client) {
	$this->client = $client;
	$this->arg = $client->simpleArg;
  }
  function flush() {
    $this->client->protocol->sendData();
  }
  function sendData() {
    $this->client->protocol->sendAsyncData();
  }

  function handleRequests() {
	$this->arg->setFactory($this->client->proxyFactory);
	$this->arg->setResult(++$this->client->asyncCtx);
  }
}

class java_Client /* implements IDocHandler */ {
  var $RUNTIME;

  const RECV_SIZE=8192;
  const SEND_SIZE=8192;

  var $result, $exception;
  var $parser;

  var $simpleArg, $compositeArg;
  var $simpleFactory,
	$proxyFactory, $iteratorProxyFacroty,
	$arrayProxyFactory, $exceptionProxyFactory, $throwExceptionProxyFactory;

  var $arg;
  var $asyncCtx;
  var $globalRef;

  var $stack;

  // the cache
  var $methodCache = array(), $currentCacheKey, $currentArgumentsFormat;
  var $cachedJavaPrototype;

  // send buffer
  var $sendBuffer, $preparedToSendBuffer;

  /**@deprecated*/
  var $defaultHandler, $asyncHandler, $handler;

  function java_Client() {
	$this->RUNTIME = array();
	// named pipes are enabled if shared memory is accessible
	if(JAVA_PIPE_DIR && function_exists("posix_mkfifo"))
	  $this->RUNTIME['PIPE_DIR']=JAVA_PIPE_DIR;
	else
	  $this->RUNTIME['PIPE_DIR']=null;

	$this->parser = new java_Parser($this);
	$this->protocol = new java_Protocol($this);

	$this->simpleFactory = new java_SimpleFactory($this);
	$this->proxyFactory = new java_ProxyFactory($this);
	$this->arrayProxyFactory = new java_ArrayProxyFactory($this);
	$this->iteratorProxyFactory = new java_IteratorProxyFactory($this);
	$this->exceptionProxyFactory = new java_ExceptionProxyFactory($this);
	$this->throwExceptionProxyFactory = new java_ThrowExceptionProxyFactory($this);

	$this->cachedJavaPrototype=new java_JavaProxyProxy($this);

	$this->simpleArg = new java_Arg($this);

	$this->globalRef = new java_GlobalRef();

	$this->asyncCtx = 0;

	/**@deprecated*/
	$this->handler = $this->defaultHandler = new java_Handler($this);
	$this->asyncHandler = new java_AsyncHandler($this);
  }

  function __destruct() {
	if(JAVA_DEBUG) echo "the client destroyed\n";
	$this->protocol->flush();
	$this->protocol->keepAlive();
  }

  function read($size) {
	return $this->protocol->read($size);
  }

  function setDefaultHandler() {
	$this->handler->flush();
	$this->handler = $this->defaultHandler;
  }

  function setAsyncHandler() {
	$this->handler = $this->asyncHandler;
  }

  function isAsync() {
	return $this->handler === $this->asyncHandler;
  }

  function handleRequests() {
	if(!JAVA_CACHE_ENABLED) { $this->handler->handleRequests(); return 1;}

	do {
	  $tail_call = false;
	  $this->stack=array($this->arg=$this->simpleArg);
	  $this->idx = 0;
	  $this->parser->parse();

	  /* pull off A, if any */
	  if((count($this->stack)) > 1) {
		$arg = array_pop($this->stack);
		$this->apply($arg);
		$tail_call = 1;			// we don't expect a result
	  } else {
		$tail_call = 0;
	  }

	  $this->stack=null;
	} while($tail_call);
	return 1;
  }

  function getWrappedResult($wrap) {
	return $this->simpleArg->getResult($wrap);
  }
  function getInternalResult() {
	return $this->getWrappedResult(false);
  }
  function getResult() {
	return $this->getWrappedResult(true);
  }
  function getProxyFactory($type) {
	switch($type[0]) {
	case 'E':
	  $factory = $this->exceptionProxyFactory;
	  break;
	case 'C':
	  $factory = $this->iteratorProxyFactory;
	  break;
	case 'A':
	  $factory = $this->arrayProxyFactory;
	  break;
	case 'O':
	  $factory = $this->proxyFactory;
	}
	return $factory;
  }
  function link(&$arg, &$newArg) {
	$arg->linkResult($newArg->val);
	$newArg->parentArg = $arg;
  }
  function getExact($str) {
	return hexdec($str);
  }
  function getInexact($str) {
	sscanf($str, "%e", $val);
	return $val;
  }
  function begin($name, $st) {
	$arg = $this->arg;
    switch($name[0]) {
	case 'A':						/* receive apply args as normal array */
	  $object = $this->globalRef->get($this->getExact($st['v']));
	  $newArg = new java_ApplyArg($this, 'A',
								  $this->parser->getData($st['m']),
								  $this->parser->getData($st['p']),
								  $object,
								  $this->getExact($st['n']));
	  $this->link($arg, $newArg);
	  array_push($this->stack, $this->arg = $newArg);
	  break;
	case 'X':
	  $newArg = new java_CompositeArg($this, $st['t']);
	  $this->link($arg, $newArg);
	  array_push($this->stack, $this->arg = $newArg);
	  break;
	case 'P':
	  if($arg->type=='H') { /* hash table */
		$s = $st['t'];
		if($s[0]=='N') { /* number */
		  $arg->setIndex($this->getExact($st['v']));
		} else {
		  $arg->setIndex($this->parser->getData($st['v']));
		}
	  } else {					/* array */
		$arg->setNextIndex();
	  }
	  break;
	case 'S':
	  $arg->setResult($this->parser->getData($st['v']));
	  break;
	case 'B':
	  $s=$st['v'];
	  $arg->setResult($s[0]=='T');
	  break;
	case 'L':					// unsigned long
	  $sign = $st['p'];
	  $val = $this->getExact($st['v']);
	  if($sign[0]=='A') $val*=-1;
	  $arg->setResult($val);
	  break;
	case 'D':
	  $arg->setResult($this->getInexact($st['v']));
	  break;
	case 'V':
	  if(JAVA_DEBUG) {echo "setresult VOID:"; echo "\n";}
	  /* fall through */
	case 'N':					// FIXME
	  $arg->setVoidSignature();
	  $arg->setResult(null);
	  break;
	case 'F':
	  break;
	case 'O':
	  $arg->setFactory($this->getProxyFactory($st['p']));
	  $arg->setResult($this->asyncCtx=$this->getExact($st['v']));
	  $arg->setSignature($st['m']);
	  if(JAVA_DEBUG) {echo "setresult object:"; echo sprintf("%x", $this->asyncCtx); echo "\n";}
	  break;
	case 'E':
	  $arg->setFactory($this->throwExceptionProxyFactory);
	  $arg->setResult($this->asyncCtx=$this->getExact($st['v']));
	  if(JAVA_DEBUG) {echo "setresult exception:"; echo sprintf("%x", $this->asyncCtx); echo "\n";}
	  $arg->setException($st['m']);
	  break;
	default:
	  $this->parser->parserError();
	}
  }
  function end($name) {
    switch($name[0]) {
	case 'X':
	  $frame = array_pop($this->stack);
	  $this->arg = $frame->parentArg;
	  break;
	}
  }
  function createParserString() {
	return new java_ParserString();
  }

  function writeArg($arg) {
	if(is_string($arg)) {
	  $this->protocol->writeString($arg);
	} else if(is_object($arg)) {
	  $this->protocol->writeObject($arg->__java);
	  return $arg;
	} else if(is_null($arg)) {
	  $this->protocol->writeObject(null);
	} else if(is_bool($arg)) {
	  $this->protocol->writeBoolean($arg);
	} else if(is_integer($arg)) {
	  $this->protocol->writeLong($arg);
	} else if(is_float($arg)) {
	  $this->protocol->writeDouble($arg);
	} else if(is_array($arg)) {
	  $wrote_begin=false;
	  foreach($arg as $key=>$val) {
		if(is_string($key)) {
		  if(!$wrote_begin) {
			$wrote_begin=1;
			$this->protocol->writeCompositeBegin_h();
		  }
		  $this->protocol->writePairBegin_s($key);
		  $this->writeArg($val);
		  $this->protocol->writePairEnd();
		} else {
		  if(!$wrote_begin) {
			$wrote_begin=1;
			$this->protocol->writeCompositeBegin_h();
		  }
		  $this->protocol->writePairBegin_n($key);
		  $this->writeArg($val);
		  $this->protocol->writePairEnd();
		}
	  }
	  if(!$wrote_begin) {
		$this->protocol->writeCompositeBegin_a();
	  }
	  $this->protocol->writeCompositeEnd();
	}
	return null;
  }
  function writeArgs($args) {
	$n = count($args);
	for($i=0; $i<$n; $i++) {
	  $this->writeArg($args[$i]);
	}
  }
  function createObject($name, $args) {
    $this->protocol->createObjectBegin($name);
    $this->writeArgs($args);
    $this->protocol->createObjectEnd();
	$val = $this->getInternalResult();
	return $val;
  }
  function referenceObject($name, $args) {
    $this->protocol->referenceBegin($name);
    $this->writeArgs($args);
    $this->protocol->referenceEnd();
	$val = $this->getInternalResult();
	return $val;
  }
  function getProperty($object, $property) {
	$this->protocol->propertyAccessBegin($object, $property);
	$this->protocol->propertyAccessEnd();
	return $this->getResult();
  }
  function setProperty($object, $property, $arg) {
	$this->protocol->propertyAccessBegin($object, $property);
	$this->writeArg($arg);
	$this->protocol->propertyAccessEnd();
	$this->getResult();
  }
  function invokeMethod($object, $method, $args) {
	$this->protocol->invokeBegin($object, $method);
	$this->writeArgs($args);
	$this->protocol->invokeEnd();
	$val = $this->getResult();
	return $val;
  }
  function unref($object) {
	$this->protocol->writeUnref($object);
  }
  function apply($arg) {
	$name = $arg->p;
	$object = $arg->v;
	$ob = $object ? array(&$object, $name) : $name;
	try {
  	$res = $arg->getResult(true);
	  if((!$object && !function_exists($name)) || ($object && !method_exists($object, $name))) throw new JavaException("java.lang.NoSuchMethodException", "$name");

	  $res = call_user_func_array($ob, $res);
	  $this->protocol->resultBegin();
	  $this->writeArg($res);
	  $this->protocol->resultEnd();
	} catch (JavaException $e) {
	  $trace = $e->getTraceAsString();
	  $this->protocol->resultBegin();
	  $this->protocol->writeException($e->__java, $trace);
	  $this->protocol->resultEnd();
	} catch(Exception $ex) {
	  $e = new Java("java.lang.Exception", $ex->getMessage);
	  $t = new Java("java.lang.reflect.UndeclaredThrowableException",$e);
	  $trace = $ex->getTraceAsString();
	  $this->protocol->resultBegin();
	  $this->protocol->writeException($t->__java, $trace);
	  $this->protocol->resultEnd();
	}
  }
  function cast($object, $type) {
    switch($type[0]) {
	case 'S': case 's':
	  return $this->invokeMethod(0, "castToString", array($object));
	case 'B': case 'b':
	  return $this->invokeMethod(0, "castToBoolean", array($object));
	case 'L': case 'I': case 'l': case 'i':
	  return $this->invokeMethod(0, "castToExact", array($object));
	case 'D': case 'd': case 'F': case 'f':
	  return $this->invokeMethod(0, "castToInExact", array($object));
	case 'N': case 'n':
	  return null;
	case 'A': case 'a':
	  return $this->invokeMethod(0, "castToArray", array($object));
	case 'O': case 'o':			// eh?
	  return $object;
	default:
	  throw new java_RuntimeException("$type illegal");
	}
  }
  function getContext() {
	return $this->invokeMethod(0, "getContext", array());
  }
  function getSession($args) {
	return $this->invokeMethod(0, "getSession", $args);
  }
  function getServerName() {
	return $this->protocol->getServerName();
  }
}
?>