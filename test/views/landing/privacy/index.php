﻿<?=$this->load->view(branded_view('common/header'));?>



<style rel="stylesheet">

html#iubenda_policy,#iubenda_policy body{margin:0;padding:0}html#iubenda_policy{overflow-y:scroll;font-size:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}#iubenda_policy h1,#iubenda_policy h2,#iubenda_policy h3,#iubenda_policy h4,#iubenda_policy h5,#iubenda_policy h6,#iubenda_policy p,#iubenda_policy blockquote,#iubenda_policy pre,#iubenda_policy a,#iubenda_policy abbr,#iubenda_policy acronym,#iubenda_policy address,#iubenda_policy cite,#iubenda_policy code,#iubenda_policy del,#iubenda_policy dfn,#iubenda_policy em,#iubenda_policy img,#iubenda_policy q,#iubenda_policy s,#iubenda_policy samp,#iubenda_policy small,#iubenda_policy strike,#iubenda_policy strong,#iubenda_policy sub,#iubenda_policy sup,#iubenda_policy tt,#iubenda_policy var,#iubenda_policy dd,#iubenda_policy dl,#iubenda_policy dt,#iubenda_policy li,#iubenda_policy ol,#iubenda_policy ul,#iubenda_policy fieldset,#iubenda_policy form,#iubenda_policy label,#iubenda_policy legend,#iubenda_policy button,#iubenda_policy table,#iubenda_policy caption,#iubenda_policy tbody,#iubenda_policy tfoot,#iubenda_policy thead,#iubenda_policy tr,#iubenda_policy th,#iubenda_policy td{margin:0;padding:0;border:0;font-weight:normal;font-style:normal;font-size:100%;line-height:1;font-family:inherit}#iubenda_policy table{border-collapse:collapse;border-spacing:0}#iubenda_policy ol,#iubenda_policy ul{list-style:none}#iubenda_policy q:before,#iubenda_policy q:after,#iubenda_policy blockquote:before,#iubenda_policy blockquote:after{content:""}#iubenda_policy a:focus{outline:thin dotted}#iubenda_policy a:hover,#iubenda_policy a:active{outline:0}#iubenda_policy article,#iubenda_policy aside,#iubenda_policy details,#iubenda_policy figcaption,#iubenda_policy figure,#iubenda_policy footer,#iubenda_policy header,#iubenda_policy hgroup,#iubenda_policy nav,#iubenda_policy section{display:block}#iubenda_policy audio,#iubenda_policy canvas,#iubenda_policy video{display:inline-block;*display:inline;*zoom:1}#iubenda_policy audio:not([controls]){display:none}#iubenda_policy sub,#iubenda_policy sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}#iubenda_policy sup{top:-0.5em}#iubenda_policy sub{bottom:-0.25em}#iubenda_policy img{border:0;-ms-interpolation-mode:bicubic}#iubenda_policy button,#iubenda_policy input,#iubenda_policy select,#iubenda_policy textarea{font-size:100%;margin:0;vertical-align:baseline;*vertical-align:middle}#iubenda_policy button,#iubenda_policy input{line-height:normal;*overflow:visible}#iubenda_policy button::-moz-focus-inner,#iubenda_policy input::-moz-focus-inner{border:0;padding:0}#iubenda_policy button,#iubenda_policy input[type="button"],#iubenda_policy input[type="reset"],#iubenda_policy input[type="submit"]{cursor:pointer;-webkit-appearance:button}#iubenda_policy input[type="search"]{-webkit-appearance:textfield;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}#iubenda_policy input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}#iubenda_policy textarea{overflow:auto;vertical-align:top}html#iubenda_policy{-webkit-font-smoothing:antialiased}#iubenda_policy p{font-size:13px;font-weight:normal;line-height:18px;margin-bottom:9px}#iubenda_policy p small{font-size:11px;color:#bfbfbf}#iubenda_policy h1,#iubenda_policy h2,#iubenda_policy h3,#iubenda_policy h4,#iubenda_policy h5,#iubenda_policy h6{font-weight:bold;color:#59636d}#iubenda_policy h1{margin-bottom:18px;font-size:30px;line-height:36px}#iubenda_policy h1 small{font-size:18px}#iubenda_policy h2{font-size:24px;margin-bottom:18px;line-height:27px}#iubenda_policy h2 small{font-size:14px}#iubenda_policy h3,#iubenda_policy h4,#iubenda_policy h5,#iubenda_policy h6{margin-bottom:9px}#iubenda_policy h3{font-size:18px}#iubenda_policy h3 small{font-size:14px}#iubenda_policy h4{font-size:16px}#iubenda_policy h4 small{font-weight:bold;font-size:13px}#iubenda_policy h5{font-size:14px}#iubenda_policy h6{font-size:13px;color:#bfbfbf;text-transform:uppercase}#iubenda_policy ul,#iubenda_policy ol{margin:0 0 18px 25px}#iubenda_policy ul ul,#iubenda_policy ul ol,#iubenda_policy ol ol,#iubenda_policy ol ul{margin-bottom:0}#iubenda_policy ul.styled{list-style:disc;padding-top:5px}#iubenda_policy ul.styled li{list-style:disc;line-height:19px;font-size:13px;margin-left:30px;margin-top:2px}#iubenda_policy ol{list-style:decimal}#iubenda_policy ul.unstyled{list-style:none;margin-left:0}#iubenda_policy dl{margin-bottom:18px}#iubenda_policy dl dt,#iubenda_policy dl dd{line-height:18px}#iubenda_policy dl dt{font-weight:bold}#iubenda_policy dl dd{margin-left:9px}#iubenda_policy hr{margin:0 0 19px;border:0;border-bottom:1px solid #eee}#iubenda_policy strong{font-style:inherit;font-weight:bold}#iubenda_policy em{font-style:italic;font-weight:inherit;line-height:inherit}#iubenda_policy .muted{color:#bfbfbf}#iubenda_policy blockquote{margin-bottom:18px;border-left:5px solid #eee;padding-left:15px}#iubenda_policy blockquote p{font-size:14px;font-weight:300;line-height:18px;margin-bottom:0}#iubenda_policy blockquote small{display:block;font-size:12px;font-weight:300;line-height:18px;color:#bfbfbf}#iubenda_policy blockquote small:before{content:'\2014 \00A0'}#iubenda_policy address{display:block;line-height:18px;margin-bottom:18px}#iubenda_policy code,#iubenda_policy pre{padding:0 3px 2px;font-family:Monaco,Andale Mono,Courier New,monospace;font-size:12px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}#iubenda_policy code{background-color:#fee9cc;color:rgba(0,0,0,0.75);padding:1px 3px}#iubenda_policy pre{background-color:#f5f5f5;display:block;padding:17px;margin:0 0 18px;line-height:18px;font-size:12px;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.15);-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;white-space:pre;white-space:pre-wrap;word-wrap:break-word}#iubenda_policy .breadcrumbs{padding:0 0 10px 0;margin-bottom:30px;border-bottom:1px solid #f6f6f6;width:100%}#iubenda_policy .breadcrumbs>li{float:left;filter:alpha(opacity=50);-khtml-opacity:.5;-moz-opacity:.5;opacity:.5}#iubenda_policy .breadcrumbs>li:not(:last-child):after{color:#333b43;padding:0 10px;content:"\203a"}#iubenda_policy .breadcrumbs+.pills,#iubenda_policy .breadcrumbs+.sec_tabs{margin-top:-15px}#iubenda_policy .table{display:table;border-collapse:collapse;padding:0 !important;margin:0}#iubenda_policy .cust_row{display:table-row;margin:0}#iubenda_policy .column{display:table-cell;vertical-align:top;padding:30px}#iubenda_policy .box_primary{border:1px solid #c0c1c1;border-bottom-color:#a8aaab;-webkit-box-shadow:0 1px 0 #ebebec;-moz-box-shadow:0 1px 0 #ebebec;box-shadow:0 1px 0 #ebebec;-webkit-box-shadow:0 1px 0 rgba(0,0,0,0.1);-moz-box-shadow:0 1px 0 rgba(0,0,0,0.1);box-shadow:0 1px 0 rgba(0,0,0,0.1);background:#FFF}#iubenda_policy .box_content{-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;padding:30px}#iubenda_policy .box_content .iub_content{padding:30px}#iubenda_policy .box_content .iub_content>hr{width:686px;margin-left:-30px;margin-right:-30px}#iubenda_policy .box_content .aside{width:191px;padding:30px}#iubenda_policy .box_content .aside.aside-right{border-left:1px solid #dfdfdf}#iubenda_policy .table>.box_content{padding:0}#iubenda_policy .box_10{padding:10px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;margin-bottom:15px}#iubenda_policy .box_10>h4{margin-bottom:0;font-size:13px}#iubenda_policy .box_10>.w_icon,#iubenda_policy .box_10.expand>.w_icon,#iubenda_policy .box_10>.w_icon.expand-click,#iubenda_policy .box_10.expand>.w_icon.expand-click{padding-left:45px;background-repeat:no-repeat;background-color:transparent;background-position-x:10px;background-position-y:7px;background-position:10px 7px}#iubenda_policy .box_10>.w_icon_16,#iubenda_policy .box_10.expand>.w_icon_16,#iubenda_policy .box_10>.w_icon_16.expand-click,#iubenda_policy .box_10.expand>.w_icon_16.expand-click{padding-left:40px;background-repeat:no-repeat;background-color:transparent;background-position-x:11px;background-position-y:11px;background-position:11px 11px}#iubenda_policy .box_10>.w_icon_24,#iubenda_policy .box_10.expand>.w_icon_24,#iubenda_policy .box_10>.w_icon_24.expand-click,#iubenda_policy .box_10.expand>.w_icon_24.expand-click{padding-left:45px;background-repeat:no-repeat;background-color:transparent;background-position-x:10px;background-position-y:10px;background-position:10px 10px}#iubenda_policy .box_5{padding:5px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;font-size:11px;margin-bottom:15px}#iubenda_policy .box_5 hr{padding-top:5px;margin:0 -5px 5px -5px;border:0;border-bottom:1px solid #ac3737}#iubenda_policy .box_5.w_icon_16{padding-left:30px;background-repeat:no-repeat;background-position-x:8px;background-position-y:6px;background-position:8px 6px}#iubenda_policy .box_5.w_icon_16 hr{width:100%;padding-left:30px;padding-right:5px;margin-left:-30px;margin-right:-5px}#iubenda_policy .box_5.w_icon_16.red{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAATlBMVEUAAAD%2F%2F%2F8AAAD%2F%2F%2F8AAAAAAAD%2F%2F%2F%2F%2F%2F%2F%2FT09P%2F%2F%2F%2F9%2Ff3Y2Nj9%2Ff39%2Ff3d3d3%2F%2F%2F%2F8%2FPz39%2Ff19fX%2B%2Fv79%2Ff34%2BPj5%2Bfn8%2FPz9%2Ff3%2F%2F%2F8ZO4GEAAAAGXRSTlMAEB0gMDNAUHSAgYSRoaWwsra3weLl5fLyUJhrdwAAAF1JREFUeF6NzUcWhCAAwFAQsIPOWCD3v6gPxLYjy7%2BJKE1Ok%2FxAD%2BMbFIB6wYIxLA%2FUbEJAc8PKHmG9oAOkArq8DICdgXCuLUA7EDkBsd%2BfWALnyXmXoNImpytR0AEwdQcUE5t8VQAAAABJRU5ErkJggg%3D%3D)}#iubenda_policy .box_thumb{background:#FFF;-webkit-box-shadow:0 0 1px #a3a3a3,0 1px 1px #a3a3a3;-moz-box-shadow:0 0 1px #a3a3a3,0 1px 1px #a3a3a3;box-shadow:0 0 1px #a3a3a3,0 1px 1px #a3a3a3;padding:6px}#iubenda_policy footer{margin-top:17px;padding-top:17px;border-top:1px solid #eee}#iubenda_policy hr{padding-top:15px;margin:0 0 15px 0}#iubenda_policy hr.primary{border:0;border-bottom:1px solid #dfdfdf;-webkit-box-shadow:0 1px 0 #f7f7f7;-moz-box-shadow:0 1px 0 #f7f7f7;box-shadow:0 1px 0 #f7f7f7}#iubenda_policy .btn{cursor:pointer;display:inline-block;font-weight:bold;background-color:#f3f3f3;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#fafafa),to(#f3f3f3));background-image:-moz-linear-gradient(top,#fafafa,#f3f3f3);background-image:-ms-linear-gradient(top,#fafafa,#f3f3f3);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#fafafa),color-stop(100%,#f3f3f3));background-image:-webkit-linear-gradient(top,#fafafa,#f3f3f3);background-image:-o-linear-gradient(top,#fafafa,#f3f3f3);background-image:linear-gradient(top,#fafafa,#f3f3f3);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fafafa',endColorstr='#f3f3f3',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#f3f3f3 #f3f3f3 #cdcdcd;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);padding:0 20px;line-height:38px;text-shadow:0 1px 1px rgba(255,255,255,0.75);color:#54616b;font-size:13px;border:1px solid #ccc;border-bottom-color:#bbb;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:inset 0 0 0 1px #fff,0 1px 0 #ddd;-moz-box-shadow:inset 0 0 0 1px #fff,0 1px 0 #ddd;box-shadow:inset 0 0 0 1px #fff,0 1px 0 #ddd;border-collapse:separate;-webkit-transition:.1s linear all;-moz-transition:.1s linear all;-ms-transition:.1s linear all;-o-transition:.1s linear all;transition:.1s linear all}#iubenda_policy .btn:hover{background-position:0 -15px;text-decoration:none}#iubenda_policy .btn:focus{outline:1px dotted #666}#iubenda_policy .btn.primary{color:#fff;background-color:#018ff3;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#0d9bff),to(#018ff3));background-image:-moz-linear-gradient(top,#0d9bff,#018ff3);background-image:-ms-linear-gradient(top,#0d9bff,#018ff3);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#0d9bff),color-stop(100%,#018ff3));background-image:-webkit-linear-gradient(top,#0d9bff,#018ff3);background-image:-o-linear-gradient(top,#0d9bff,#018ff3);background-image:linear-gradient(top,#0d9bff,#018ff3);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0d9bff',endColorstr='#018ff3',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#018ff3 #018ff3 #0162a7;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);-webkit-box-shadow:inset 0 0 0 1px #48aef6,0 1px 0 #ccc;-moz-box-shadow:inset 0 0 0 1px #48aef6,0 1px 0 #ccc;box-shadow:inset 0 0 0 1px #48aef6,0 1px 0 #ccc;text-shadow:0 1px 1px #0493f6;border-color:#0c6eb3}#iubenda_policy .btn:active{-webkit-box-shadow:inset 0 2px 4px rgba(0,0,0,0.25),0 1px 2px rgba(0,0,0,0.05);-moz-box-shadow:inset 0 2px 4px rgba(0,0,0,0.25),0 1px 2px rgba(0,0,0,0.05);box-shadow:inset 0 2px 4px rgba(0,0,0,0.25),0 1px 2px rgba(0,0,0,0.05)}#iubenda_policy .btn.disabled{cursor:default;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);filter:alpha(opacity=65);-khtml-opacity:.65;-moz-opacity:.65;opacity:.65;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}#iubenda_policy .btn[disabled]{cursor:default;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);filter:alpha(opacity=65);-khtml-opacity:.65;-moz-opacity:.65;opacity:.65;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}#iubenda_policy .btn.large{font-size:16px;line-height:normal;padding:0 14px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px}#iubenda_policy .btn.mid_large{padding:0 10px;line-height:32px;font-size:13px}#iubenda_policy .btn.mid{padding:0 10px;line-height:28px;font-size:11px}#iubenda_policy .btn.small{padding:0 8px;line-height:18px;font-size:11px}#iubenda_policy :root .alert-message,#iubenda_policy :root .btn{border-radius:0 \0}#iubenda_policy button.btn::-moz-focus-inner,#iubenda_policy input[type=submit].btn::-moz-focus-inner{padding:0;border:0}#iubenda_policy .circle{font-size:11px;line-height:18px;width:18px;padding:0;text-align:center;-webkit-border-radius:11px;-moz-border-radius:11px;border-radius:11px}#iubenda_policy .circle.small{width:14px;line-height:14px;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px;padding:0}#iubenda_policy .blue{color:#fff;background-color:#018ff3;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#0d9bff),to(#018ff3));background-image:-moz-linear-gradient(top,#0d9bff,#018ff3);background-image:-ms-linear-gradient(top,#0d9bff,#018ff3);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#0d9bff),color-stop(100%,#018ff3));background-image:-webkit-linear-gradient(top,#0d9bff,#018ff3);background-image:-o-linear-gradient(top,#0d9bff,#018ff3);background-image:linear-gradient(top,#0d9bff,#018ff3);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0d9bff',endColorstr='#018ff3',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#018ff3 #018ff3 #0162a7;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);-webkit-box-shadow:inset 0 0 0 1px #48aef6,0 1px 0 #ccc;-moz-box-shadow:inset 0 0 0 1px #48aef6,0 1px 0 #ccc;box-shadow:inset 0 0 0 1px #48aef6,0 1px 0 #ccc;text-shadow:0 1px 1px #0493f6;border-color:#0c6eb3}#iubenda_policy .yellow{color:#6d693d;background-color:#fbf9e3;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#fbf9e3),to(#fbf9e3));background-image:-moz-linear-gradient(top,#fbf9e3,#fbf9e3);background-image:-ms-linear-gradient(top,#fbf9e3,#fbf9e3);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#fbf9e3),color-stop(100%,#fbf9e3));background-image:-webkit-linear-gradient(top,#fbf9e3,#fbf9e3);background-image:-o-linear-gradient(top,#fbf9e3,#fbf9e3);background-image:linear-gradient(top,#fbf9e3,#fbf9e3);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fbf9e3',endColorstr='#fbf9e3',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#fbf9e3 #fbf9e3 #f1eba0;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);-webkit-box-shadow:inset 0 0 0 1px #fdfcf2,0 1px 0 #e7e3bd;-moz-box-shadow:inset 0 0 0 1px #fdfcf2,0 1px 0 #e7e3bd;box-shadow:inset 0 0 0 1px #fdfcf2,0 1px 0 #e7e3bd;text-shadow:0 1px 1px #fdfcf1;border-color:#c9c6a2}#iubenda_policy .red{color:#FFF;background-color:#d34141;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#d34141),to(#d34141));background-image:-moz-linear-gradient(top,#d34141,#d34141);background-image:-ms-linear-gradient(top,#d34141,#d34141);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#d34141),color-stop(100%,#d34141));background-image:-webkit-linear-gradient(top,#d34141,#d34141);background-image:-o-linear-gradient(top,#d34141,#d34141);background-image:linear-gradient(top,#d34141,#d34141);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d34141',endColorstr='#d34141',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#d34141 #d34141 #a22626;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);-webkit-box-shadow:inset 0 0 0 1px #d56264,0 1px 0 #d6c3c4;-moz-box-shadow:inset 0 0 0 1px #d56264,0 1px 0 #d6c3c4;box-shadow:inset 0 0 0 1px #d56264,0 1px 0 #d6c3c4;text-shadow:0 1px 1px #a93434;border-color:#ac3737}#iubenda_policy .red a,#iubenda_policy .red a:hover:not(.btn){color:#FFF}#iubenda_policy .red a{border-bottom-color:rgba(247,247,247,0.3)}#iubenda_policy .red a:hover{border-bottom-color:rgba(247,247,247,0.6)}#iubenda_policy .green{color:#4d6c47;background-color:#e8fae3;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#e9fae5),to(#e8fae3));background-image:-moz-linear-gradient(top,#e9fae5,#e8fae3);background-image:-ms-linear-gradient(top,#e9fae5,#e8fae3);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#e9fae5),color-stop(100%,#e8fae3));background-image:-webkit-linear-gradient(top,#e9fae5,#e8fae3);background-image:-o-linear-gradient(top,#e9fae5,#e8fae3);background-image:linear-gradient(top,#e9fae5,#e8fae3);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9fae5',endColorstr='#e8fae3',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#e8fae3 #e8fae3 #b3eea2;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);-webkit-box-shadow:inset 0 0 0 1px #edfbe9,0 1px 0 #dfeadd;-moz-box-shadow:inset 0 0 0 1px #edfbe9,0 1px 0 #dfeadd;box-shadow:inset 0 0 0 1px #edfbe9,0 1px 0 #dfeadd;text-shadow:0 1px 1px #FFF;border-color:#9fca96}#iubenda_policy .iubgreen{color:#fff;background-color:#1aa779;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#26b385),to(#1aa779));background-image:-moz-linear-gradient(top,#26b385,#1aa779);background-image:-ms-linear-gradient(top,#26b385,#1aa779);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#26b385),color-stop(100%,#1aa779));background-image:-webkit-linear-gradient(top,#26b385,#1aa779);background-image:-o-linear-gradient(top,#26b385,#1aa779);background-image:linear-gradient(top,#26b385,#1aa779);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#26b385',endColorstr='#1aa779',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#1aa779 #1aa779 #106549;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);-webkit-box-shadow:inset 0 0 0 1px #67c8af,0 1px 0 #dfeadd;-moz-box-shadow:inset 0 0 0 1px #67c8af,0 1px 0 #dfeadd;box-shadow:inset 0 0 0 1px #67c8af,0 1px 0 #dfeadd;text-shadow:0 1px 1px #1a926a;border-color:#1a926a}#iubenda_policy .azure{color:#364048;background-color:#d5dfeb;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#d5dfeb),to(#d5dfeb));background-image:-moz-linear-gradient(top,#d5dfeb,#d5dfeb);background-image:-ms-linear-gradient(top,#d5dfeb,#d5dfeb);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#d5dfeb),color-stop(100%,#d5dfeb));background-image:-webkit-linear-gradient(top,#d5dfeb,#d5dfeb);background-image:-o-linear-gradient(top,#d5dfeb,#d5dfeb);background-image:linear-gradient(top,#d5dfeb,#d5dfeb);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d5dfeb',endColorstr='#d5dfeb',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#d5dfeb #d5dfeb #a1b8d2;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);-webkit-box-shadow:inset 0 0 0 1px #e5ecf3,0 1px 0 #dfe2e4;-moz-box-shadow:inset 0 0 0 1px #e5ecf3,0 1px 0 #dfe2e4;box-shadow:inset 0 0 0 1px #e5ecf3,0 1px 0 #dfe2e4;text-shadow:0 1px 1px #FFF;border-color:#a6b1b9}#iubenda_policy .white{color:#54616b;background-color:#f3f6f9;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#fff),to(#f3f6f9));background-image:-moz-linear-gradient(top,#fff,#f3f6f9);background-image:-ms-linear-gradient(top,#fff,#f3f6f9);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#fff),color-stop(100%,#f3f6f9));background-image:-webkit-linear-gradient(top,#fff,#f3f6f9);background-image:-o-linear-gradient(top,#fff,#f3f6f9);background-image:linear-gradient(top,#fff,#f3f6f9);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',endColorstr='#f3f6f9',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#f3f6f9 #f3f6f9 #c0d0e0;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);-webkit-box-shadow:inset 0 0 0 1px #f9fbfc,0 1px 0 #dfe2e4;-moz-box-shadow:inset 0 0 0 1px #f9fbfc,0 1px 0 #dfe2e4;box-shadow:inset 0 0 0 1px #f9fbfc,0 1px 0 #dfe2e4;text-shadow:0 1px 1px #FFF;border-color:#c3c7cf}#iubenda_policy .black{color:#FFF;background-color:#394147;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#394147),to(#394147));background-image:-moz-linear-gradient(top,#394147,#394147);background-image:-ms-linear-gradient(top,#394147,#394147);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#394147),color-stop(100%,#394147));background-image:-webkit-linear-gradient(top,#394147,#394147);background-image:-o-linear-gradient(top,#394147,#394147);background-image:linear-gradient(top,#394147,#394147);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#394147',endColorstr='#394147',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#394147 #394147 #171a1d;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);-webkit-box-shadow:inset 0 0 0 1px #4a555c,0 1px 0 #a3a3a3;-moz-box-shadow:inset 0 0 0 1px #4a555c,0 1px 0 #a3a3a3;box-shadow:inset 0 0 0 1px #4a555c,0 1px 0 #a3a3a3;text-shadow:0 1px 1px #32393f;border-color:#0e1012}#iubenda_policy .trasp{color:#333b43;background-color:#fff;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#fff),to(#fff));background-image:-moz-linear-gradient(top,#fff,#fff);background-image:-ms-linear-gradient(top,#fff,#fff);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#fff),color-stop(100%,#fff));background-image:-webkit-linear-gradient(top,#fff,#fff);background-image:-o-linear-gradient(top,#fff,#fff);background-image:linear-gradient(top,#fff,#fff);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',endColorstr='#ffffff',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#fff #fff #d9d9d9;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);-webkit-box-shadow:0 1px 1px #979797,0 1px 0 #6c6c6c;-moz-box-shadow:0 1px 1px #979797,0 1px 0 #6c6c6c;box-shadow:0 1px 1px #979797,0 1px 0 #6c6c6c;border:0}#iubenda_policy .alert-message{position:relative;padding:7px 15px;margin-bottom:18px;color:#404040;background-color:#eedc94;background-repeat:repeat-x;background-image:-khtml-gradient(linear,left top,left bottom,from(#fceec1),to(#eedc94));background-image:-moz-linear-gradient(top,#fceec1,#eedc94);background-image:-ms-linear-gradient(top,#fceec1,#eedc94);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#fceec1),color-stop(100%,#eedc94));background-image:-webkit-linear-gradient(top,#fceec1,#eedc94);background-image:-o-linear-gradient(top,#fceec1,#eedc94);background-image:linear-gradient(top,#fceec1,#eedc94);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fceec1',endColorstr='#eedc94',GradientType=0);text-shadow:0 -1px 0 rgba(0,0,0,0.25);border-color:#eedc94 #eedc94 #e4c652;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);text-shadow:0 1px 0 rgba(255,255,255,0.5);border-width:1px;border-style:solid;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.25);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.25);box-shadow:inset 0 1px 0 rgba(255,255,255,0.25)}#iubenda_policy .alert-message .close{*margin-top:3px}#iubenda_policy .alert-message h5{line-height:18px}#iubenda_policy .alert-message p{margin-bottom:0}#iubenda_policy .alert-message div{margin-top:5px;margin-bottom:2px;line-height:28px}#iubenda_policy .alert-message .btn{-webkit-box-shadow:0 1px 0 rgba(255,255,255,0.25);-moz-box-shadow:0 1px 0 rgba(255,255,255,0.25);box-shadow:0 1px 0 rgba(255,255,255,0.25)}#iubenda_policy .alert-message.block-message{background-image:none;background-color:#fdf5d9;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);padding:14px;border-color:#fceec1;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}#iubenda_policy .alert-message.block-message ul,#iubenda_policy .alert-message.block-message p{margin-right:30px}#iubenda_policy .alert-message.block-message ul{margin-bottom:0}#iubenda_policy .alert-message.block-message li{color:#404040}#iubenda_policy .alert-message.block-message .alert-actions{margin-top:5px}#iubenda_policy .alert-message.block-message.error,#iubenda_policy .alert-message.block-message.success,#iubenda_policy .alert-message.block-message.info{color:#404040;text-shadow:0 1px 0 rgba(255,255,255,0.5)}#iubenda_policy .alert-message.block-message.error{background-color:#fddfde;border-color:#fbc7c6}#iubenda_policy .alert-message.block-message.success{background-color:#d1eed1;border-color:#bfe7bf}#iubenda_policy .alert-message.block-message.info{background-color:#ddf4fb;border-color:#c6edf9}#iubenda_policy .fade{-webkit-transition:opacity .15s linear;-moz-transition:opacity .15s linear;-ms-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear;opacity:0}#iubenda_policy .fade.in{opacity:1}#iubenda_policy .expand-click{cursor:pointer;position:relative}#iubenda_policy .box_10.expand .expand-click{margin:-10px;padding:12px 25px 13px 10px}#iubenda_policy .box_10.expand .expand-content{margin-top:10px}#iubenda_policy .box_10.expand .expand-content>*:first-child{margin-top:0;padding-top:0}#iubenda_policy .expand.expanded .expand-click:after,#iubenda_policy .box_10.expand.expanded .expand-click:after{content:"";position:absolute;right:10px;top:19px;border:5px;border-color:transparent;border-style:solid;border-top-color:#333b43}#iubenda_policy .expand .expand-click,#iubenda_policy .box_10.expand .expand-click,#iubenda_policy .expand.expanded .expand-click,#iubenda_policy .box_10.expand.expanded .expand-click{border-bottom:1px dotted #DDD;margin-bottom:10px;-webkit-transition:.2s linear all;-moz-transition:.2s linear all;-ms-transition:.2s linear all;-o-transition:.2s linear all;transition:.2s linear all}#iubenda_policy .expand.collapsed .expand-click:after{content:"";position:absolute;right:10px;top:17px;border:5px;border-color:transparent;border-style:solid;border-right-color:#333b43}#iubenda_policy .expand.collapsed .expand-click{border-bottom:0;margin-bottom:-10px}html#iubenda_policy,#iubenda_policy body{background-color:#FFF}#iubenda_policy{font-family:"Helvetica Neue",Helvetica,Arial,FreeSans,sans-serif;font-size:13px;font-weight:normal;line-height:18px;color:#59636d}#iubenda_policy body{margin:0}#iubenda_policy .iub_container-fluid{position:relative;min-width:940px;padding-left:20px;padding-right:20px;zoom:1}#iubenda_policy .iub_container-fluid:before,#iubenda_policy .iub_container-fluid:after{display:table;content:"";zoom:1;*display:inline}#iubenda_policy .iub_container-fluid:after{clear:both}#iubenda_policy .iub_container-fluid>.sidebar{float:left;width:220px}#iubenda_policy .iub_container-fluid>.iub_content{margin-left:240px}#iubenda_policy a{text-decoration:none;line-height:inherit;font-weight:bold;border-bottom:1px solid #f6f6f6;color:#333b43}#iubenda_policy a.unstyled{border-bottom:0}#iubenda_policy a:hover:not(.btn){color:#121518;border-bottom-color:#d6d6d6;-webkit-transition:.1s linear all;-moz-transition:.1s linear all;-ms-transition:.1s linear all;-o-transition:.1s linear all;transition:.1s linear all}#iubenda_policy a:focus{outline:0}#iubenda_policy a.no_border,#iubenda_policy a.no_border:hover{border-bottom-width:0}#iubenda_policy .pull-right{float:right}#iubenda_policy .pull-left{float:left}#iubenda_policy .hide{display:none}#iubenda_policy .show{display:block}#iubenda_policy .link_on_dark a{border-bottom-color:rgba(247,247,247,0.3)}#iubenda_policy .link_on_dark a:hover{border-bottom-color:rgba(247,247,247,0.6)}#iubenda_policy [class*="policyicon_"]{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYBAMAAAASWSDLAAAAGFBMVEUAAAA%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz9%2BjSc3AAAAB3RSTlMAEEBQgMzQxeXuPgAAADJJREFUGFdjYMAJWEPhIAAPh70cDgoGK6cI5B8Yp6S8TACJk4gkA5RAcBKR9BQLoAUOAATNYYOCulUNAAAAAElFTkSuQmCC)}#iubenda_policy .policyicon_pdt_68{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAM1BMVEUAAAA%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz%2F10LmwAAAAEHRSTlMAECAwQFBgcICQoLDA0ODwVOCoyAAAAKVJREFUeF51jlmWwyAMBGXEboT6%2FqedIZAAJqnfer3QJKpGOrkKakW5noIrAlFA5V0EKL%2B8Iqw1d%2B%2FojflTx4JlNUJGnVe1tOBUfRMZYmjDCDKRINFBglCLnXiltnTClfAtEgACxvHJldHF4xYL3gLq1l1Mgfk5AZtQx%2FYfdroL4TySXFeRWTAQc0%2Fhe0FHbRiicsJGZG3iNgUPiimgYBUHlQP94g9%2BZg8xOTGEFAAAAABJRU5ErkJggg%3D%3D)}#iubenda_policy .policyicon_purpose_5{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYBAMAAAASWSDLAAAAElBMVEUAAAA%2FPz8%2FPz8%2FPz8%2FPz8%2FPz%2BtTDCxAAAABXRSTlMAECBAgLf%2B2%2BsAAABGSURBVBhXY2AAA5ZQBwY4YA0NIJfjCjYHygkNDUTmBGPhgOyFc1iB6pE4wSAOUAGCIxoaiOCYhgYjOKqhQThkyODAAR4OAI98N9LK6tL3AAAAAElFTkSuQmCC)}#iubenda_policy .policyicon_purpose_7{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAM1BMVEUAAAA%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz%2F10LmwAAAAEHRSTlMAECAwQFBgcICQoLDA0ODwVOCoyAAAAINJREFUeF6V0UsOxCAIBmB8tVoZ4f6nnUqaoFUW%2FVeEj0hUMOKM9kE7CBcxr93SuGcCf%2FRZniCmXGVUwZV2M78DgYRXQDaAP0OzIJIB4C%2FaQo%2BTCyK9ISFizimAPyuNACjlKXW6SMF30B9I9YFndRieuZCCHKU0QIU1LDEhrvDrQG6EP%2FDZElAL0vLHAAAAAElFTkSuQmCC)}#iubenda_policy .policyicon_purpose_9{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAACC0lEQVQ4y7XSO2gWVhQH8BPxDRG%2BEhurMcSI4GsoPqjkZ6BLwcFFHUQJKqbEwRciDqZDF90cpIsILtZHh0KTIdQMgkTRiIshBoWgTRpbsVaxgqRf4uM4JCHfRzpIwXun8%2Bf%2BuHDOifj%2FxwoD2qek7Qat%2FG9Qr1%2FblLRNv%2FqyqKHCjIgIqw3oGE9mmtlQERGhw4DVERFmNFREhG91uq6gxUspnVdlky5dNqlyXkovtSi4rtPe8JeUaq1yWLN9tkVoklJThK1a7HXISrVSehpSGrXb5woWqFZljZNSOmmtBRapUe0Lu4xKOQZSr0633dejS7chKQ25p0%2BvHn3u6Bt7OQFSeuWG3pI6DbvpZ5dc8WwimwTPbYswx49Sei89sDNCpaoI6%2FyqWA5OmxUR4StF6Z0hX5puvyH%2FOmeeudrLwXfjg1prUCo6FuGyty444W89CpYZKQU%2FmF3ywwvVthtxwpwImz1yzjSdpWBYq2nWuzbWoQgX%2FaPOAd%2Br1O55hDOl4LHdDRXqnPVWehLhlPSNgiURFlof4adJMGC7eRERarRKr32t2qBn9lhlg%2BVq7fDbJDhasp%2BfueW9brOscdULv7vntlselnZpadlKH5fSRYvN16ytdJgT4KBGGzVqtNFmv4yndzWrt8WjqSCNGFZUNOxN2Xq8K6%2FD47Et%2FKg7ajAc9edHgz8ciU9%2BPgBKt4%2FTzlslzAAAAABJRU5ErkJggg%3D%3D)}#iubenda_policy .policyicon_purpose_10,#iubenda_policy .policyicon_purpose_15{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAM1BMVEUAAAA%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz%2F10LmwAAAAEHRSTlMAECAwQFBgcICQoLDA0ODwVOCoyAAAAKVJREFUeF51jlmWwyAMBGXEboT6%2FqedIZAAJqnfer3QJKpGOrkKakW5noIrAlFA5V0EKL%2B8Iqw1d%2B%2FojflTx4JlNUJGnVe1tOBUfRMZYmjDCDKRINFBglCLnXiltnTClfAtEgACxvHJldHF4xYL3gLq1l1Mgfk5AZtQx%2FYfdroL4TySXFeRWTAQc0%2Fhe0FHbRiicsJGZG3iNgUPiimgYBUHlQP94g9%2BZg8xOTGEFAAAAABJRU5ErkJggg%3D%3D)}#iubenda_policy .policyicon_purpose_13{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAJ1BMVEUAAAA%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz9PhkGkAAAADHRSTlMAECBAUHCQoLDA4PB7ua%2BoAAAAa0lEQVR42p3QQQ6AIAxE0aEIFdr7n1eMxIAOMfEt%2B9sF4IOkYt5YSTKO1Qd6p%2BQP6Zqrvyjd7zdiLJggO5VReajwhR%2FBnDIoDwrhQcAfkhd%2FtQO0KDqf1A0kmEZgDjk2AZPzPoJo6wFEYOsHFFISOn%2BKxfoAAAAASUVORK5CYII%3D)}#iubenda_policy .policyicon_purpose_14{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAMFBMVEUAAAA%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz%2Fjai5RAAAAD3RSTlMAECAwUGBwgJCgsMDQ4PASl6hyAAAAfklEQVR42pXRUQ6EMAgE0MEWW21l7n9btanJWnE3%2Bz4hhCHgq5jKooKD6FJS7OVQebIIROOphlY3dqrsLABidJgg0ZWw0bWBL%2F5vvO%2FIdGVM%2Fh0TMNMx47DwYcVJKgdV0MgwUwSXfA%2F0QY2dKW7CxutHA1lbHMFTavE9qsBvOztlFTRVyS%2BYAAAAAElFTkSuQmCC)}#iubenda_policy .policyicon_purpose_16{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAM1BMVEUAAAA%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz%2F10LmwAAAAEHRSTlMAECAwQFBgcICQoLDA0ODwVOCoyAAAAJFJREFUeF6V0NsOAyEIRVE6I4rFwvn%2Fr63N3CR10nQnPK2IUdpbpKmsorJQqOKTl2xeRhDsycMgA7QDGkmfq9cI%2FvNEhGcAO8CowAbAGTEwX1XDKvYNnJM7f78clVqfydOlgwRIG6S1TwDdQEnD3cv1iWw4f54VQ1qfUO5QDDGYVLNCmOQ5O2Ea8R2kP8FWobvefhoT%2FSVCMbAAAAAASUVORK5CYII%3D)}#iubenda_policy .icon_ribbon{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAW0lEQVR42u3OwQkAIQxE0XSWVrazlJpdQdGDC0pQEf7A3ELmibsPV1V9pDM%2FAQAAAAAAAAAAAAAAEAXY1%2BcUwCQnITYD6niL2ASo4z3EaoDKf8qNBQHxArgK8ALKMXCw%2Bim7vwAAAABJRU5ErkJggg%3D%3D)}#iubenda_policy .icon_owner{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAMFBMVEUAAAA%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz%2Fjai5RAAAAD3RSTlMAECAwQGBwgJCgsMDQ4PC8YWy5AAAAiElEQVR42o2QwRKFIAhFIcwyRP7%2Fb3uNlkBv0dkw3jODd4AbPHhNC7xAafqjYBRZOzUa0cHmc9IbiZsefIFtiuQ68RS7FUkNnwTWmRewLE9ewSPh73dfCgJbzxkiRxcrDGJhWVxa5MqYr1HzcLSPRo2ojcoZAcyV2F1MzaPoxIqcP4gGkP5BcAIxQBCQ7o5t3AAAAABJRU5ErkJggg%3D%3D)}#iubenda_policy .icon_general{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYBAMAAAASWSDLAAAAGFBMVEUAAAA%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz8%2FPz9%2BjSc3AAAAB3RSTlMAEEBQgMzQxeXuPgAAADJJREFUGFdjYMAJWEPhIAAPh70cDgoGK6cI5B8Yp6S8TACJk4gkA5RAcBKR9BQLoAUOAATNYYOCulUNAAAAAElFTkSuQmCC)}#iubenda_policy .icon_temple_24{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABwklEQVR42s3Wu0vDUBjGYS%2BLsbZSSaWgguAFHFztYEmFbp0E%2FwOrgotQFyetOKiTLqKCWCenbl20S8FFERydBLt1KV7QwUGR4094hQymjYpi4SGH9zvf%2BUgCoQ3GmF%2F1dwNq%2FRzHaUwkEn24lP73rEaL%2FwEcZmEcJexiDyfKrG8P0OG9OIDBrCvPKMuh98sDaApiAmWYj8fiqg%2FjSrWy9gbrDlDzEHIwLi9YRieiWMOrakIPvZ4DKHYhjTsYD%2Be48Kqrdwpdnw1I4RAFbCKHHWxhX%2BtjHGFb2ZbynHoKOiNV7x3YrnWLrmFFWqvm6vH7DmK4ho0l5NGGCialoiyvPbZ6Yn4GOHhCFBsoIQSDOTHKStoTVY%2FjZ0Act7CxiiICqGJaqsqK2mOrJ%2F6VARGs6ZA2ZTNyq6yoPZF%2FNWC0xiOaEq9HNOpnQBIG3djFGcLKFsQoO8UOepQl%2FQyIIKtP9BjSylcwghhWlKWR0N4sIp4D1NCKDgR0DSIEGxbCYikLibvH8voWNWMdD6jiEXe4waOye1GdGntc9Qcso8nrDtoxgEFdIcp81INed7CIBWQw%2F00ZnbH42YAXef4RnfNn%2FyreALybXwSLU3v7AAAAAElFTkSuQmCC)}#iubenda_policy .icon_box_24{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABv0lEQVR42t3Vz0uTcRzAcUMyWhmWdAgqkKDMiBHt0A%2FYsploddwpO1gk0l%2BQEEQU0iUPgd0LIpCOCh2KkG4GTaI6mqAmWhG0CQ5jfXsdntN4bJPRxS%2B84IFnz%2Ff97Nl4Pg0hhP9qkwT%2BtTKZTCN7uM0qeTrZuc4ltQVs0EqK%2B3xmigc8Z5E39HOI7TUFfHAbJxngNQtM0kdzg5VOp7c4TvKYeeZ4wmXaYgNONHGcW7zjA6Mkqzy%2BZq4zzgxj5DhcGUgxwzSZ9TasEtvFCL%2F4WBm4SKDAPXrZV%2BPGWznFVSYIhMpAliILhEieO5ynMWbjDgZ4xjxlAn%2FiAt0skeMG44TIT8boo51zDPOeEqFSXKAnCrRHd5fgNMN8IrDCFLOUCVB74CsdZBlkL03s5xG%2FCcAGA73M0cIViswyQisn%2BFZPoIdljkWP6AIvKDFIiuV6Al2s8JIciSh0hqNk%2BVHvNwiRNd5ylwNRqKvewNnYv1z0O%2FCQ7xsIFCsDCS4xyhKhwiprhCqmGaIz%2Fm0qxBGu8YoCoYpFntLNwbS3ba3zYDdJhshTohwpMEE%2FbeyoMg%2BqTrQWbvKFSSxDJn5tsqH%2FF0QW2NxzTlYFAAAAAElFTkSuQmCC)}#iubenda_policy .icon_tools_24{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABdklEQVR42rXVzyuDcRzA8WU3ctOag0RiO5mEg8MKcaJc%2FAlcdxppKPlZdpeTE0dqxZWaaEnh7DShlYuJbG0f78Nz%2BPj2zfM89Wz1qmff5%2FPdu%2B27tpCINNTfJzySyeQGhkPGg7UljBtrEbxDMOkaYCiKJ8QtgR0cGWt9EMe8l8AIBAOWwCGKxtqMCux5CSRQxyW61QtNo4yCEVhWgRzCboFm5CF4xTVuUYUgZQTOVeAZHV4OeRSfEMMFWoxAVt2%2FQtQ14Gzsx43anEWr5Vx61Eza9Qz%2B%2BXw71S09M6hm1v0GVtXmWCMCa2pz3BpgXc1kAg2w1oW0mjnGRJCBOYjhLshAO96MQCroM3hQMzUMBfkOZvEDUU78BFbUxl5LYBdiqPgJbKmNCUtg2xL48PpTMYVvFFDEPdqCDDwi51xHIVi0%2FAGJoew18IJ957oJFWx6CHx5DSygjgPkUULM8i2qGoFTP4ecgaCEMcshh5FFDYIzRGyBhvoF3n%2ByMxzF1ykAAAAASUVORK5CYII%3D)}#iubenda_policy .icon_paper_24{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABYklEQVR42t3VP0vDQBjH8Tq4SKXiWFwcRHARVyspgq9AOjkoLoKTcymk%2BjKKYDcnO6iLKPgHRJ11aVGkgt2M2IiWlobzKzyB4zBwBGvBwIdc7rnjR8ITLqGU6qm%2FC8hms%2Bo39TWgg0fUUJX7PV7RlVo1Qtsm4Ckhl%2BM4A%2BGY%2BQJ8TCYiLmp1m4AHWbyGa%2BxiFEtQMneIY80RTtCyCahJwDpOsYc0FtHGDS5wbjjDp03AM6aRRhIpTGAbH5jBEJIm208UwMcbmuIFHam34KEZ0tYGNgEeXFEUW9jAKvLYRFHjCs8moIEMZpHRxnNwzJrx3Oj%2Fj2a%2BQbT4b%2BDBjcmz6iK9M6LF76I6UnHY%2Fgc%2BythB2YK%2B1tcC%2Ful54COPMeT0tsMBxsW%2B0dY52VPAe1RAgAoGw7OA8QoUbvVzgPEU7qS2HJ4b33tRQfBTQBcl4wBZgMIlhrX5EVxJbd7YU0JXD%2BipLw8sG8DBrCLzAAAAAElFTkSuQmCC)}#iubenda_policy .icon_man_24{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABLUlEQVR42t3VsUrDUBSAYaWtSwSp6NAH6CbOVSHZ9QEEBx9AEPc6OAh9Bp0KDg6igqs4tktXFQQnKQiKiNRAp%2BT4C2cImqbXc3Fp4VsazvlpuUmmRORfTUig6BNFURnbeISoB2yhlDPiHvhegF18Qn74wA5KPoE13EFGuEXDFGBwBoeQMQ5QsQSqOHUInGDOEljElUPgEguWwDzOHQJnqFoCszh2CBwhsAQq2EdSsDxFE2XrMV3HS0HgFRs%2B90ENNwWBa9TMgTAMp%2FWR8J6z%2FA2bXo8K%2FRXLuB9xFy%2BZAwwHWMUF4pxArNdWnE%2BRLm2ghS76SMecoj66aOls8CvAl3XsoYNnDCF%2FNNTZju6qZwO93L%2FBLkYvGxggVeIpVYNsoI0nJBBPie5qT8ZL%2FwsLLryq%2FnnTDAAAAABJRU5ErkJggg%3D%3D)}#iubenda_policy .icon_keyhole_24{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABIUlEQVR42rXUP0vCQRjA8bIoiAppLmwQEmehSX5RLTb2Huw9RGODLvUCXG0Kp16ALhENNRjRXLRlIeafJOyevkNu14M89%2FPgMx133%2BF4bkZEpkrdHK8oipIoowuHK2QxGxzgkk1cYgD3R9BEAQlzgMOruMA3xOMZuZDAEToQxRkWrYEHOIiiibQ1IBMEOtixBn4mCLSRtwbqIKIGbrFhDRzgA6I4xpw1kMA5ep6LHa6RCh20ddx4Aq%2FYj2OSF1D3BJ6QjCOQwosn8IbtOAK7%2BPQEvlAcf3ghj1zE4J9HrmApJDCPkvLZ3WMtJLCCmjLNLWRCAmk8KkPWxyHMgQLaSmCIk5BJPkVfCYxQxbI10MBQCTjcYcsaeMcIomhhTwtM1S9g12NLa1YPRQAAAABJRU5ErkJggg%3D%3D)}#iubenda_policy .iub_base_container{-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;background:#fff;color:#6b6b6b;position:relative}#iubenda_policy .iub_base_container>.close{background:transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAYCAMAAAAmopZHAAAAw1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB4eHh1dXUAAAAAAAAAAAAAAAAAAABfX18AAAAAAAAAAAAAAAAAAAAAAAA2NjYAAAAAAAArKyvJycne3t7X19eFhYWxsbGVlZWsrKzr6%2BvLy8vJycnv7%2B%2Fp6enS0tLi4uL09PTv7%2B%2F8%2FPz7%2B%2Fv4%2BPj39%2FcAAABPT09fX19vb2%2F%2F%2F%2F9S%2BfXQAAAAPHRSTlMAAgMEBQYHCgsMDQ4PEhMWGRobHB8gIiMkJScoKSs0NT1DRUpMWF5gjpOYmaGjpr%2FIys3S1dnZ7vP09vfFQC13AAAA9ElEQVR42oXQZ6%2BCMBiG4aeCAoqiuPceuPes8P7%2FX6Xn5RgBTbw%2BNO3dpG2KH0RcM5JJQ4uLUE2UnSM9HZ1y4r0TM50z%2FTs7ZuyVSysKWJX8DZHeUsg2zUfpU4qY6gBE8xLtl6YAtAnP79Ij8uSdFxMNsHY8lVK67nPgxc4CisQ8yTxiRaBGPvcvu%2BSrAY1vvQHUv51TByqHz3sPFcCef75zbgOpwZUiroMUoFSX0b6sKgDMzjqc1x2Tvznb2wTzppf1P1q1u7PTq55mXVuFT7Va48X%2BRnTbL8YtizMTRqHdH45Gw367YAgEKHoml8%2FnMroC9gCKfVabzD1q%2BwAAAABJRU5ErkJggg%3D%3D) no-repeat;border:0;display:block;position:absolute;z-index:110;top:-10px;right:-9px;height:24px;width:23px}#iubenda_policy p{line-height:19px;margin:0;padding-top:11px}#iubenda_policy address{margin:0;line-height:inherit;display:inline}#iubenda_policy a{font-weight:normal;border-bottom:1px solid #f0f0f0}#iubenda_policy .iub_content{position:relative;padding:25px 30px;margin:0 auto;-webkit-border-radius:3px 3px 0 0;-moz-border-radius:3px 3px 0 0;border-radius:3px 3px 0 0}#iubenda_policy #wbars{position:relative;overflow-y:auto;overflow-x:hidden}#iubenda_policy #wbars .horizontal{display:none}#iubenda_policy .iub_header{border-bottom:1px dotted #dfdfdf;padding-bottom:25px;position:relative}#iubenda_policy .iub_header p{margin:0;padding:0}#iubenda_policy .iub_header img{display:block;position:absolute;top:5px;right:0}#iubenda_policy h1,#iubenda_policy h2,#iubenda_policy h3{color:#3f3f3f;margin:0}#iubenda_policy h1+p,#iubenda_policy h2+p,#iubenda_policy h3+p{padding-top:5px}#iubenda_policy h1{font-size:19px;font-weight:normal;line-height:23px;margin-bottom:5px}#iubenda_policy h2{font-size:17px;font-weight:bold;line-height:21px;padding-top:21px}#iubenda_policy h3{font-size:13px;line-height:19px;font-weight:bold;padding-top:24px}#iubenda_policy h3+p{padding-top:0}#iubenda_policy .iconed ul li h3{padding-top:10px;color:#787878}#iubenda_policy h4{font-size:13px;font-weight:bold;padding-top:19px;margin-bottom:0}#iubenda_policy h4:first-child{padding-top:0}#iubenda_policy ul,#iubenda_policy li{list-style:none;padding:0;margin:0}#iubenda_policy ul.for_boxes{zoom:1}#iubenda_policy ul.for_boxes:before,#iubenda_policy ul.for_boxes:after{display:table;content:"";zoom:1;*display:inline}#iubenda_policy ul.for_boxes:after{clear:both}#iubenda_policy .half_col{float:left;width:50%;zoom:1}#iubenda_policy .half_col:before,#iubenda_policy .half_col:after{display:table;content:"";zoom:1;*display:inline}#iubenda_policy .half_col:after{clear:both}#iubenda_policy .half_col:nth-child(2n+1)>*{margin-right:15px}#iubenda_policy .half_col:nth-child(2n)>*{margin-left:15px}#iubenda_policy .half_col+.one_line_col,#iubenda_policy .half_col+.iub_footer{border-top:1px dotted #dfdfdf}#iubenda_policy .one_line_col{zoom:1;float:left;width:100%;border-bottom:1px dotted #dfdfdf}#iubenda_policy .one_line_col:before,#iubenda_policy .one_line_col:after{display:table;content:"";zoom:1;*display:inline}#iubenda_policy .one_line_col:after{clear:both}#iubenda_policy .one_line_col>ul.for_boxes>li{float:left;width:50%}#iubenda_policy .one_line_col>ul.for_boxes>li:nth-child(2n+1){clear:left}#iubenda_policy .one_line_col>ul.for_boxes>li:nth-child(2n+1)>div{margin-right:15px}#iubenda_policy .one_line_col>ul.for_boxes>li:nth-child(2n){clear:right}#iubenda_policy .one_line_col>ul.for_boxes>li:nth-child(2n)>div{margin-left:15px}#iubenda_policy .one_line_col.wide{width:100%}#iubenda_policy .one_line_col.wide>ul.for_boxes>li{clear:both;width:100%}#iubenda_policy .one_line_col.wide>ul.for_boxes>li:nth-child(2n+1)>div{margin-right:0}#iubenda_policy .one_line_col.wide>ul.for_boxes>li:nth-child(2n)>div{margin-left:0}#iubenda_policy ul.normal_list{list-style:disc;display:block;padding-top:11px}#iubenda_policy ul.normal_list li{list-style:disc;float:none;line-height:19px;margin:5px 25px}#iubenda_policy .simple_pp>ul>li{padding-bottom:21px}#iubenda_policy .simple_pp>ul>li>ul .iconed{padding-left:40px;background-repeat:no-repeat;background-color:transparent;background-position-x:2px;background-position-y:26px;background-position:2px 26px}#iubenda_policy .simple_pp .for_boxes>.one_line_col>ul.for_boxes{margin-top:0}#iubenda_policy .legal_pp .one_line_col{float:none;border-top:0;padding-bottom:21px}#iubenda_policy .legal_pp .one_line_col>ul.for_boxes{margin-top:21px}#iubenda_policy .legal_pp .one_line_col>ul.for_boxes>li:nth-child(2n+1){clear:left;float:left}#iubenda_policy .legal_pp .one_line_col>ul.for_boxes>li:nth-child(2n){float:right;clear:right}#iubenda_policy .legal_pp .definitions{margin-top:21px}#iubenda_policy .legal_pp .definitions .expand-click.w_icon_24{margin-top:-11px;padding:14px 10px 12px 45px;background-repeat:no-repeat;background-color:transparent;background-position-x:5px;background-position-y:0;background-position:5px 0}#iubenda_policy .legal_pp .definitions .expand-content{padding-left:5px;padding-right:5px}#iubenda_policy .iub_footer{clear:both;position:relative;font-size:11px}#iubenda_policy .iub_footer p{font-size:11px;padding:0}#iubenda_policy .iub_content .iub_footer{padding:24px 0}#iubenda_policy .iub_content .iub_footer .show_comp_link{display:block;position:absolute;top:30px;right:0}#iubenda_policy .iub_container>.iub_footer{min-height:21px;background-color:#f6f6f6;color:#949494;padding:30px;-webkit-box-shadow:0 -1px 6px #cfcfcf;-moz-box-shadow:0 -1px 6px #cfcfcf;box-shadow:0 -1px 6px #cfcfcf;-webkit-border-radius:0 0 3px 3px;-moz-border-radius:0 0 3px 3px;border-radius:0 0 3px 3px}#iubenda_policy .iub_container>.iub_footer>.btn{position:absolute;top:25px;right:30px}#iubenda_policy .iub_container>.iub_footer .btn{padding:0 10px;line-height:29px}#iubenda_policy .iub_container>.iub_footer .button-stack{margin:-4px 0}#iubenda_policy .iub_container>.iub_footer .button-stack .btn+.btn{margin-left:5px}#iubenda_policy .iub_container>.iub_footer img{margin:0 0 -4px 2px}#iubenda_policy .wide{width:150px}@media(max-width:767px){#iubenda_policy .legal_pp .one_line_col,#iubenda_policy .legal_pp .half_col{width:100%}#iubenda_policy .legal_pp .one_line_col>ul.for_boxes>li,#iubenda_policy .legal_pp .half_col>ul.for_boxes>li{clear:both;width:100%}#iubenda_policy .legal_pp .one_line_col>ul.for_boxes>li:nth-child(2n+1)>div,#iubenda_policy .legal_pp .half_col>ul.for_boxes>li:nth-child(2n+1)>div{margin-right:0}#iubenda_policy .legal_pp .one_line_col>ul.for_boxes>li:nth-child(2n)>div,#iubenda_policy .legal_pp .half_col>ul.for_boxes>li:nth-child(2n)>div{margin-left:0}#iubenda_policy .iub_header img{position:static;margin-bottom:12.5px}#iubenda_policy .iub_content>.iub_footer .show_comp_link{position:static;display:inline}#iubenda_policy .iub_container>.iub_footer{padding:20px}#iubenda_policy .iub_container>.iub_footer .btn{top:15px;right:15px}#iubenda_policy .iub_base_container>.close{content:"X";color:#000;font-size:11px;line-height:18px;padding:0;text-align:center;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;display:block;background:#fff url(../design/images/close_big.png) no-repeat;background-position-x:18px;background-position-y:18px;background-position:18px 18px;position:absolute;z-index:110;top:-10px;right:-10px;margin:5px 5px 0 0;height:57px;width:60px;-webkit-box-shadow:0 1px 1px #000;-moz-box-shadow:0 1px 1px #000;box-shadow:0 1px 1px #000}#iubenda_policy .iub_base_container>.close.small{width:14px;line-height:14px;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px;padding:0}}@media(max-width:480px){html#iubenda_policy{padding:0}#iubenda_policy body{padding:0}#iubenda_policy .iub_base_container,#iubenda_policy .iub_container{margin:0}#iubenda_policy .half_col:nth-child(2n+1)>*{margin-right:0}#iubenda_policy .half_col:nth-child(2n)>*{margin-left:0}#iubenda_policy .one_line_col,#iubenda_policy .half_col{width:100%}#iubenda_policy .one_line_col>ul.for_boxes>li,#iubenda_policy .half_col>ul.for_boxes>li{clear:both;width:100%}#iubenda_policy .one_line_col>ul.for_boxes>li:nth-child(2n+1)>div,#iubenda_policy .half_col>ul.for_boxes>li:nth-child(2n+1)>div{margin-right:0}#iubenda_policy .one_line_col>ul.for_boxes>li:nth-child(2n)>div,#iubenda_policy .half_col>ul.for_boxes>li:nth-child(2n)>div{margin-left:0}#iubenda_policy .iub_header img{position:static;margin-bottom:12.5px}#iubenda_policy .iub_content>.iub_footer .show_comp_link{position:static;display:inline}#iubenda_policy .iub_container>.iub_footer{padding:10px;text-align:center}#iubenda_policy .iub_container>.iub_footer .btn{position:static;width:auto;display:block;margin:10px auto 0 auto;max-width:200px}#iubenda_policy .iub_container>.iub_footer.in_preview{padding:30px 10px}#iubenda_policy .iub_content{padding-left:20px;padding-right:20px}#iubenda_policy .iub_base_container>.close{content:"X";color:#000;font-size:11px;line-height:18px;padding:0;text-align:center;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;display:block;background:#fff url(../design/images/close_big.png) no-repeat;background-position-x:18px;background-position-y:18px;background-position:18px 18px;position:absolute;z-index:110;top:-10px;right:-10px;margin:5px 5px 0 0;height:57px;width:60px;-webkit-box-shadow:0 1px 1px #000;-moz-box-shadow:0 1px 1px #000;box-shadow:0 1px 1px #000}#iubenda_policy .iub_base_container>.close.small{width:14px;line-height:14px;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px;padding:0}}#iubenda_policy.iubenda_fixed_policy .iub_base_container{max-width:800px}#iubenda_policy.iubenda_fixed_policy .iub_container{margin-left:auto;margin-right:auto;zoom:1}#iubenda_policy.iubenda_fixed_policy .iub_container:before,#iubenda_policy.iubenda_fixed_policy .iub_container:after{display:table;content:"";zoom:1;*display:inline}#iubenda_policy.iubenda_fixed_policy .iub_container:after{clear:both}#iubenda_policy.iubenda_fluid_policy #wbars{overflow-y:auto;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;height:auto}#iubenda_policy.iubenda_fluid_policy .iub_container{margin-top:30px;margin-bottom:30px}#iubenda_policy.iubenda_fluid_policy .half_col:nth-child(2n+1)>*{margin-right:0}#iubenda_policy.iubenda_fluid_policy .half_col:nth-child(2n)>*{margin-left:0}#iubenda_policy.iubenda_fluid_policy .one_line_col,#iubenda_policy.iubenda_fluid_policy .half_col{width:100%}#iubenda_policy.iubenda_fluid_policy .one_line_col>ul.for_boxes>li,#iubenda_policy.iubenda_fluid_policy .half_col>ul.for_boxes>li{clear:both;width:100%}#iubenda_policy.iubenda_fluid_policy .one_line_col>ul.for_boxes>li:nth-child(2n+1)>div,#iubenda_policy.iubenda_fluid_policy .half_col>ul.for_boxes>li:nth-child(2n+1)>div{margin-right:0}#iubenda_policy.iubenda_fluid_policy .one_line_col>ul.for_boxes>li:nth-child(2n)>div,#iubenda_policy.iubenda_fluid_policy .half_col>ul.for_boxes>li:nth-child(2n)>div{margin-left:0}#iubenda_policy.iubenda_embed_policy .iub_base_container{background:0}#iubenda_policy.iubenda_embed_policy .iub_container>.iub_footer{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;-webkit-border-radius:none;-moz-border-radius:none;border-radius:none}#iubenda_policy.iubenda_embed_policy .expand-click{cursor:default}#iubenda_policy.iubenda_vip_policy.iubenda_fixed_policy .iub_container{max-width:660px;padding-top:80px}#iubenda_policy.iubenda_vip_policy .iub_base_container{color:#777}#iubenda_policy.iubenda_vip_policy p{font-size:14px;line-height:1.6}#iubenda_policy.iubenda_vip_policy ul.styled li{font-size:14px;line-height:1.6}#iubenda_policy.iubenda_vip_policy h1{font-size:30px;color:#141414;line-height:1.6;margin-bottom:60px}#iubenda_policy.iubenda_vip_policy h2{font-size:18px;color:#141414;line-height:1.6;padding-top:50px;padding-bottom:15px}#iubenda_policy.iubenda_vip_policy h3{color:#141414;font-size:16px;line-height:1.6;margin-bottom:10px}#iubenda_policy.iubenda_vip_policy .legal_pp .one_line_col{padding-bottom:50px}#iubenda_policy.iubenda_vip_policy .half_col:nth-child(2n+1)>*{margin-right:0}#iubenda_policy.iubenda_vip_policy .half_col:nth-child(2n)>*{margin-left:0}#iubenda_policy.iubenda_vip_policy .one_line_col,#iubenda_policy.iubenda_vip_policy .half_col{width:100%}#iubenda_policy.iubenda_vip_policy .one_line_col>ul.for_boxes>li,#iubenda_policy.iubenda_vip_policy .half_col>ul.for_boxes>li{clear:both;width:100%}#iubenda_policy.iubenda_vip_policy .one_line_col>ul.for_boxes>li:nth-child(2n+1)>div,#iubenda_policy.iubenda_vip_policy .half_col>ul.for_boxes>li:nth-child(2n+1)>div{margin-right:0}#iubenda_policy.iubenda_vip_policy .one_line_col>ul.for_boxes>li:nth-child(2n)>div,#iubenda_policy.iubenda_vip_policy .half_col>ul.for_boxes>li:nth-child(2n)>div{margin-left:0}#iubenda_policy.iubenda_vip_policy .definitions,#iubenda_policy.iubenda_vip_policy .iub_footer,#iubenda_policy.iubenda_vip_policy .for_boxes{color:#59636d}#iubenda_policy.iubenda_vip_policy .definitions h3,#iubenda_policy.iubenda_vip_policy .iub_footer h3,#iubenda_policy.iubenda_vip_policy .for_boxes h3{font-size:13px}#iubenda_policy.iubenda_vip_policy .definitions p,#iubenda_policy.iubenda_vip_policy .iub_footer p,#iubenda_policy.iubenda_vip_policy .for_boxes p{font-size:13px}#iubenda_policy.iubenda_vip_policy .w_icon_24{background-image:none}#iubenda_policy.iubenda_vip_policy .box_10.expand .expand-click.w_icon_24{padding-left:10px}#iubenda_policy.iubenda_vip_policy .box_primary{border-color:#e0e0e0;border-bottom-color:#d3d3d3;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}#iubenda_policy.iubenda_vip_policy .box_primary h3{color:#333}


#myPrivacyCarousel {
  background: url(https://everpayinc.com/assets/img/showcase-2.jpg) no-repeat;
  height: 660px;
  margin-bottom: -10px;
}

.slide-text {
  margin-top: 180px;
}

section p, section ul {
  font: inherit;
  line-height: 20px;
  color: #444;
  margin-top: 20px;
  margin-right: 20px;
}

.navbar-inverse {
   background-color: #05101b!important;
	
border-bottom: 1px solid rgba(255,255,255,0.05);
}

.banner {
color: #fff;
text-align: center;
padding-top: 0px;
padding-bottom: 1px;
margin-bottom: 1px;
position: relative;
overflow: hidden;
background-color: #05101b;
background: linear-gradient(180deg,#05101b 0%,#05101b 200%);
padding: 0px;
margin-top: -30px;
border-bottom: 1px solid rgba(255,255,255,0.05);
}

.banner .container {
position: absolute;
width: 100%;
top: 28%;
}

.banner .carousel-indicators {
bottom: 0%;
}

ol, ul {
padding: 0 0 0 0px!important;
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
    
    
ol, ul {
padding: 0 0 0 0px!important;
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


.col-copy h3 {
color: #fff;
font-weight: 300!important;
opacity: .6;
font-size: 1.9rem;
margin-top: 0;
margin-bottom: 30px;
text-shadow: 1px 1px 1px #555;
}

section.section {
margin-bottom: 40px;
}

.active-section {
top: 0px;
margin-bottom: -20px;
}

.section {
padding: 20px 0!important;
}

#slider {
background-color: #ecf0f1;
height: 230px;
}

.opt-container {
text-align: center;
height: 320px;
}

.opt-container h1 {
font-size: 40px;
color: #fff;
font-weight: bold;
margin: 40px 0 0 0;
padding-top: 20px;
}

.opt-container h2 {
font-size: 22px;
color: #fff;
margin: 10px 0 10px 0;
}


#contactform{
margin-top:-20px;
}


.col-md-3 {
border-right: 0px solid #f1f1f1!important;
padding-top: 30px;
padding-bottom: 0;
width: 25%;
overflow: hidden;
vertical-align: top;
height: 100%;
min-height: 80px!important;
}

.carousel-inner blockquote {
border: none;
text-align: center;
padding: 2px 5%!important;
}

#features {
background-color: #FFF;
height: 680px!important;
}

.input-lg, .form-horizontal .form-group-lg .form-control {
height: 50px;
padding: 10px 16px;
font-size: 18px;
line-height: 1.33;
border-radius: 6px;
}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus {
color: #3498db!important;
background-color: #FFF!important;
}

#hero {
background: #05101b!important;
color: #FFF;
margin-top: 10px!important;
padding: 0;
}

h2 {
font-size: 32px;
color: #444;
font-weight: 900;
margin: 0px;
text-shadow: 1px 2px 2px rgba(0,0,0,.6);
}

a:hover {
text-decoration: none;
color: #2a6496!important;
}

footer.site-footer .active>a footer.site-footer .active>a:focus footer.site-footer.active>a:hover{
color:#2a6496!important;
}

h2 {
    font-size: 32px;
    color: #444;
    font-weight: 900;
    margin: 0px;
    text-shadow: 1px 2px 2px rgba(0,0,0,.6);
    margin-bottom: 15px;
}

</style>



<!--  ================================================== End Header -->
<div class="why-page page-content">

<!--  Start Hero Section================================================== -->

<div class="banner" style="height: 280px;">
<div class="container banner-container" style="margin-top: 80px;">
<div class="col-sm-12">
<h1 style="color:#FFF;">Privacy Policy</h1>
</div>
</div>
</div>
<!--  ================================================== End Hero -->


<div class="clearfix" style="margin-top: 40px;"></div>
  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <div class="iub_header">
<h2>This Application collects some Personal Data from its Users.</h2>
</div>  
<div class="row-fluid" style="padding-left:20px; text-align:left;">
    <p class="lead">
        We collect the email addresses of everyone who uses our product, both merchants and customers.  We also collect usage and survey information
        for the betterment of our service. The information we collect is not shared with or sold to any other organization for commercial purposes,
        except under the following conditions:
      </p>

      <ul style="list-style:none; font-weight: 500;">
        <li>
          When requested in order to investigate, prevent, or take action
          regarding illegal activities, such as fraud or threats to the physical safety of any person.
        </li>
        <li>
          When violations of our Terms of Service are being investigated.
        </li>
        <li>We transfer information when an acquisition or merger happens.</li>
      </ul>

      <h2>Use of gathered information</h2>

      <p class="lead">
        Everpay Corporation. will collect your personal information only when you
        purchase a product or subscription sold by one of our merchants, when
        you voluntarily sign up for a merchant or customer account, or when you
        sign up for one of our mailing lists.  Your personal information will
        never be sold or shared with any third-parties, except in the cases
        mentioned above.
      </p>

      <h2>Cookies <span class="weak">(not the yummy kind)</span></h2>

      <p class="lead">
        A cookie is a small text file, which often includes an anonymous unique
        identifier, that is stored in your browser.  This is associated with
        data on the Everpay servers and is required for the use of any Everpay
        website.
      </p>

      <h2>Data storage</h2>

      <p class="lead">
        Everpay Corporation uses third-party vendors and hosting partners for certain
        aspects of our service.  Everpay Corporation owns all of the code, databases,
        and all rights to the software.  You retain all rights to your data.
      </p>

      <h2>IP address</h2>

      <p class="lead">
        Your IP address is associated with the place from which you connect to
        the Internet.  We may use your IP address to help fix problems with the
        Everpay website, gather broad demographic information, and assist you in
        servicing your merchant or customer account on Everpayinc.com
      </p>

      <h2>Occasional emails</h2>

      <p class="lead">
        As a merchant or customer on our website, you may receive occasional
        email announcements or newsletters.  If you choose not to receive these
        periodic mailings, you can click the "unsubscribe" link in the footer
        of each one of them.  If you unsubscribe from general announcements,
        specific emails pertaining to your account?—?like
        an order receipt?—?will still be sent.
      </p>

      <h2>Committed to individual privacy</h2>

      <p class="lead">
        Everpay Corporation is committed to anything that preserves individual privacy
        rights on the Internet, including the <a href="https://www.eff.org/">EFF</a>.
      </p>

      <h2>Changes</h2>

      <p class="lead">
        Everpay Corporation. may periodically update this policy.  We will notify you of
        any significant changes by sending you an email, or placing a prominent
        notice on our site.  You can always access, amend, correct, or delete
        your personal information.
      </p>

  
  <div class="iub_content legal_pp">
<div class="one_line_col">
<h2>Data Controller and Owner</h2>
<p>
Everpay Corporation Bloor &amp; Yonge Center: 2nd Bloor St West - Suite 700 Toronto, Ontario, M4W 3R1 (Canada),<br>
privacy@everpayinc.com<script cf-hash="f9e31" type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("cf-hash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}}}catch(u){}}();/* ]]> */</script><br>
</p>
</div>  
<div class="one_line_col">
<h2>Types of Data collected</h2>
<p>
Among the types of Personal Data that this Application collects, by itself or through third parties, there are:
Email address, First Name and Phone number.
</p>
<p>Other Personal Data collected may be described in other sections of this privacy policy or by dedicated explanation text contextually with the Data collection.<br>The Personal Data may be freely provided by the User, or collected automatically when using this Application.<br>Any use of Cookies - or of other tracking tools - by this Application or by the owners of third party services used by this Application, unless stated otherwise, serves to identify Users and remember their preferences, for the sole purpose of providing the service required by the User.<br>Failure to provide certain Personal Data may make it impossible for this Application to provide its services.</p>
<p>Users are responsible for any Personal Data of third parties obtained, published or shared through this Application and confirm that they have the third party's consent to provide the Data to the Owner.</p>
</div>  
<div class="one_line_col">
<h2>Mode and place of processing the Data</h2>
<h3>Methods of processing</h3>
<p>The Data Controller processes the Data of Users in a proper manner and shall take appropriate security measures to prevent unauthorized access, disclosure, modification, or unauthorized destruction of the Data.<br>The Data processing is carried out using computers and/or IT enabled tools, following organizational procedures and modes strictly related to the purposes indicated. In addition to the Data Controller, in some cases, the Data may be accessible to certain types of persons in charge, involved with the operation of the site (administration, sales, marketing, legal, system administration) or external parties (such as third party technical service providers, mail carriers, hosting providers, IT companies, communications agencies) appointed, if necessary, as Data Processors by the Owner. The updated list of these parties may be requested from the Data Controller at any time.</p>
<h3>Place</h3>
<p>The Data is processed at the Data Controller's operating offices and in any other places where the parties involved with the processing are located. For further information, please contact the Data Controller.</p>
<h3>Retention time</h3>
<p>The Data is kept for the time necessary to provide the service requested by the User, or stated by the purposes outlined in this document, and the User can always request that the Data Controller suspend or remove the data.</p>
</div>  
<div class="one_line_col">
<h2>The use of the collected Data</h2>
<p>
The Data concerning the User is collected to allow the Owner to provide its services, as well as for the following purposes:
Registration and authentication, Access to third party services' accounts and Contacting the User.
</p>
<p>The Personal Data used for each purpose is outlined in the specific sections of this document.</p>
</div>  
<div class="one_line_col">
<h2>Detailed information on the processing of Personal Data</h2>
<p>Personal Data is collected for the following purposes and using the following services:</p>
<ul class="for_boxes">
<li>
<div class="box_primary box_10 expand collapsed">
<h3 class="expand-click w_icon_24 policyicon_purpose_1297581">Access to third party services' accounts</h3>
<div class="expand-content" style="display: none;">
<p>These services allow this Application to access Data from your account on a third party service and perform actions with it.<br>
These services are not activated automatically, but require explicit authorization by the User.</p>
<h4>Access to the Stripe account (Stripe Inc)</h4>
<p>This service allows this Application to connect with the User's account on Stripe, provided by Stripe, Inc.</p>
<p>
Personal Data collected:
Various types of Data as specified in the privacy policy of the service.
</p>
<p>
Place of processing: USA
–
<a href="https://stripe.com/us/privacy" target="_blank">Privacy Policy</a>
</p>
</div>  
</div>  
</li>
<li>
<div class="box_primary box_10 expand collapsed">
<h3 class="expand-click w_icon_24 policyicon_purpose_1297588">Contacting the User</h3>
<div class="expand-content" style="display: none;">
<h4>Contact form (This Application)</h4>
<p>By filling in the contact form with their Data, the User authorizes this Application to use these details to reply to requests for information, quotes or any other kind of request as indicated by the form’s header.</p>
<p>
Personal Data collected:
Email address, First Name and Phone number.
</p>
</div>  
</div>  
</li>
<li>
<div class="box_primary box_10 expand collapsed">
<h3 class="expand-click w_icon_24 policyicon_purpose_1297578">Registration and authentication</h3>
<div class="expand-content" style="display: none;">
<p>By registering or authenticating, Users allow this Application to identify them and give them access to dedicated services.<br>
Depending on what is described below, third parties may provide registration and authentication services.<br>
In this case, this Application will be able to access some Data, stored by these third party services, for registration or identification purposes.</p>
<h4>Direct registration (This Application)</h4>
<p>The User registers by filling out the registration form and providing the Personal Data directly to this Application.</p>
<p>
Personal Data collected:
Email address.
</p>
<h4>Linkedin OAuth (LinkedIn Corporation)</h4>
<p>Linkedin Oauth is a registration and authentication service provided by Linkedin Corporation and is connected to the Linkedin social network.</p>
<p>
Personal Data collected:
Various types of Data as specified in the privacy policy of the service.
</p>
<p>
Place of processing: USA
–
<a href="https://www.linkedin.com/legal/privacy-policy" target="_blank">Privacy Policy</a>
</p>
</div>  
</div>  
</li>
</ul>
</div>  
<div class="one_line_col">
<h2>Additional information about Data collection and processing</h2>
<h3>Legal action</h3>
<p>
The User's Personal Data may be used for legal purposes by the Data Controller, in Court or in the stages leading to possible legal action arising from improper use of this Application or the related services.<br>The User declares to be aware that the Data Controller may be required to reveal personal data upon request of public authorities.
</p>
<h3>Additional information about User's Personal Data</h3>
<p>
In addition to the information contained in this privacy policy, this Application may provide the User with additional and contextual information concerning particular services or the collection and processing of Personal Data upon request.
</p>
<h3>System Logs and Maintenance</h3>
<p>
For operation and maintenance purposes, this Application and any third party services may collect files that record interaction with this Application (System Logs) or use for this purpose other Personal Data (such as IP Address).
</p>
<h3>Information not contained in this policy</h3>
<p>
More details concerning the collection or processing of Personal Data may be requested from the Data Controller at any time. Please see the contact information at the beginning of this document.
</p>
<h3>The rights of Users</h3>
<p>
Users have the right, at any time, to know whether their Personal Data has been stored and can consult the Data Controller to learn about their contents and origin, to verify their accuracy or to ask for them to be supplemented, cancelled, updated or corrected, or for their transformation into anonymous format or to block any data held in violation of the law, as well as to oppose their treatment for any and all legitimate reasons. Requests should be sent to the Data Controller at the contact information set out above.
</p>
<p>
This Application does not support “Do Not Track” requests.<br>To determine whether any of the third party services it uses honor the “Do Not Track” requests, please read their privacy policies.
</p>
<h3>Changes to this privacy policy</h3>
<p>
The Data Controller reserves the right to make changes to this privacy policy at any time by giving notice to its Users on this page. It is strongly recommended to check this page often, referring to the date of the last modification listed at the bottom. If a User objects to any of the changes to the Policy, the User must cease using this Application and can request that the Data Controller removes the Personal Data. Unless stated otherwise, the then-current privacy policy applies to all Personal Data the Data Controller has about Users.
</p>
<h3>Information about this privacy policy</h3>
<p>
The Data Controller is responsible for this privacy policy, prepared starting from the modules provided by Iubenda and hosted on Iubenda's servers.
</p>
</div>  
<div class="one_line_col">
<div class="box_primary box_10 definitions expand collapsed">
<h3 class="expand-click w_icon_24 icon_ribbon">
Definitions and legal references
</h3>
<div class="expand-content" style="display: none;">
<h4>Personal Data (or Data)</h4>
<p>Any information regarding a natural person, a legal person, an institution or an association, which is, or can be, identified, even indirectly, by reference to any other information, including a personal identification number.</p>
<h4>Usage Data</h4>
<p>Information collected automatically from this Application (or third party services employed in this Application), which can include: the IP addresses or domain names of the computers utilized by the Users who use this Application, the URI addresses (Uniform Resource Identifier), the time of the request, the method utilized to submit the request to the server, the size of the file received in response, the numerical code indicating the status of the server's answer (successful outcome, error, etc.), the country of origin, the features of the browser and the operating system utilized by the User, the various time details per visit (e.g., the time spent on each page within the Application) and the details about the path followed within the Application with special reference to the sequence of pages visited, and other parameters about the device operating system and/or the User's IT environment.</p>
<h4>User</h4>
<p>The individual using this Application, which must coincide with or be authorized by the Data Subject, to whom the Personal Data refer.</p>
<h4>Data Subject</h4>
<p>The legal or natural person to whom the Personal Data refers.</p>
<h4>Data Processor (or Data Supervisor)</h4>
<p>The natural person, legal person, public administration or any other body, association or organization authorized by the Data Controller to process the Personal Data in compliance with this privacy policy.</p>
<h4>Data Controller (or Owner)</h4>
<p>The natural person, legal person, public administration or any other body, association or organization with the right, also jointly with another Data Controller, to make decisions regarding the purposes, and the methods of processing of Personal Data and the means used, including the security measures concerning the operation and use of this Application. The Data Controller, unless otherwise specified, is the Owner of this Application.</p>
<h4>This Application</h4>
<p>The hardware or software tool by which the Personal Data of the User is collected.</p>
<hr>
<h4>Legal information</h4>
<p>Notice to European Users: this privacy statement has been prepared in fulfillment of the obligations under Art. 10 of EC Directive n. 95/46/EC, and under the provisions of Directive 2002/58/EC, as revised by Directive 2009/136/EC, on the subject of Cookies.</p>
<p>This privacy policy relates solely to this Application.</p>
</div>  
</div>  
</div>  
<div class="iub_footer">
<p>
Latest update: July 31, 2015
</p>
</div>  
<script type="text/javascript">
  function tryFunc(fName,args){
    if(typeof window[fName]==='function'){
      window[fName](args);
    }else{
      if(args){
        // default behaviour is link
        if(args.href){
          // default link is target='_blank'
          window.open(args.href)
        }
      }
    }
    return false; // inhibit default behaviour
  }
</script>
</div>
</div>
</div>

  </div>

<br></br>
</div>
<!-- Footer================================================== -->
<?=$this->load->view(branded_view('common/footer'));?>