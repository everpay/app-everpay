<?=$this->load->view(branded_view('common/header'));?>

 <style rel="stylesheet" type="text/css">
 
@media screen and (min-width: 992px)
.banner {
    padding-top: 160px;
}
@media (min-width: 992px)
.why-page .banner {
    min-height: 655px!important;
}
@media (min-width: 768px)
.why-page .banner {
    padding-top: 160px;
}
.why-page .banner {
    background: url("/assets/app/img/bgs/video-preview.png") center center;
    background-size: cover;
    margin: 0;
    text-align: center;
	height: 655px!important;
}

.why-page .banner h1 {
    font-size: 3.6em!important;
    line-height: 44px;
    margin: 0 0 44px 0;
    color: #666;
}

@media (min-width: 768px)
.why-page .banner p {
    font-size: 24px;
}

.why-page .banner p {
    max-width: 100%;
    font-size: 24px;
    font-weight: 300;
    color: #666;
    margin: 0;
    visibility: hidden;
}

.why-page .banner .btn-play:hover {
    background: rgba(255,255,255,0.3);
    -webkit-transition: .2s ease;
    transition: .2s ease;
}
.why-page .banner .btn-play {
    background: rgba(255,255,255,0.2);
    width: 79px;
    height: 79px;
    border: 6px solid #fff;
    cursor: pointer;
    position: relative;
    margin:40px auto 60px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    background-clip: padding-box;
    -webkit-box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    display: block;
    visibility: hidden;
}

.btn.btn-success:hover, a.btn.btn-success:hover {
    background-color: #ae3610;
    color: #fff;
}
.btn.btn-success:hover, a.btn.btn-success:hover {
    background-color: #ae3610;
    color: #fff;
}

</style>















<!-- End Content================================================== -->
<?=$this->load->view(branded_view('common/footer'));?>