<?php 
$GZipEncodingEnable = true;
function GZipAccepts()
{
$accept = str_replace(" ","",strtolower($_SERVER['HTTP_ACCEPT_ENCODING']));
$accept = explode(",",$accept);
return in_array("gzip",$accept);
}
function MinifyHTML($HtmlOutput)
{
return preg_replace("/\s+/"," ",$HtmlOutput);
}
function CompressPage($HtmlOutput)
{
global $GZipEncodingEnable;
$HtmlOutput = MinifyHTML($HtmlOutput);
if(!GZipAccepts() || headers_sent() || !$GZipEncodingEnable) return $HtmlOutput;
header("Content-Encoding: gzip");
return gzencode($HtmlOutput);
}
ob_start("CompressPage");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Acai Advanced</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow">
	<meta name="robots" content="noindex">
	<meta name="robots" content="nofollow"> 
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <style type="text/css">

@font-face{font-family:'OpenSans-Regular';src:url(assets/fonts/OpenSans-Regular/OpenSans-Regular.woff2) format('woff2'),url(assets/fonts/OpenSans-Regular/OpenSans-Regular.woff) format('woff');font-weight:;font-style:normal}@font-face{font-family:'OpenSans-Semibold';src:url(assets/fonts/OpenSans-Semibold/OpenSans-Semibold.woff2) format('woff2'),url(assets/fonts/OpenSans-Semibold/OpenSans-Semibold.woff) format('woff');font-weight:;font-style:normal}@font-face{font-family:'OpenSans-Bold';src:url(assets/fonts/OpenSans-Bold/OpenSans-Bold.woff2) format('woff2'),url(assets/fonts/OpenSans-Bold/OpenSans-Bold.woff) format('woff');font-weight:;font-style:normal}@font-face{font-family:'OpenSansItalic';src:url(assets/fonts/OpenSansItalic/OpenSansItalic.woff2) format('woff2'),url(assets/fonts/OpenSansItalic/OpenSansItalic.woff) format('woff');font-weight:;font-style:normal}@font-face{font-family:'Vollkorn-Semibold';src:url(assets/fonts/Vollkorn-Semibold/Vollkorn-Semibold.woff2) format('woff2'),url(assets/fonts/Vollkorn-Semibold/Vollkorn-Semibold.woff) format('woff');font-weight:;font-style:italic}@font-face{font-family:'Vollkorn-Bold';src:url(assets/fonts/Vollkorn-Bold/Vollkorn-Bold.woff2) format('woff2'),url(assets/fonts/Vollkorn-Bold/Vollkorn-Bold.woff) format('woff');font-weight:;font-style:normal}@font-face{font-family:'Merriweather-Black';src:url(assets/fonts/Merriweather-Black/Merriweather-Black.woff2) format('woff2'),url(assets/fonts/Merriweather-Black/Merriweather-Black.woff) format('woff');font-weight:;font-style:normal}@font-face{font-family:'Barlow-Bold';src:url(assets/fonts/Barlow-Bold/barlow-bold-webfont.woff2) format('woff2'),url(assets/fonts/Barlow-Bold/barlow-bold-webfont.woff) format('woff');font-weight:;font-style:normal}@font-face{font-family:'BarlowCondensed-Regular';src:url(assets/fonts/BarlowCondensed-Regular/BarlowCondensed-Regular.woff2) format('woff2'),url(assets/fonts/BarlowCondensed-Regular/BarlowCondensed-Regular.woff) format('woff');font-weight:;font-style:normal}@font-face{font-family:'Barlow-Medium';src:url(assets/fonts/Barlow-Medium/Barlow-Medium.woff2) format('woff2'),url(assets/fonts/Barlow-Medium/Barlow-Medium.woff) format('woff');font-weight:;font-style:normal}@font-face{font-family:'Barlow-Extrabold';src:url(assets/fonts/Barlow-ExtraBold/barlow-extrabold-webfont.woff2) format('woff2'),url(assets/fonts/Barlow-ExtraBold/barlow-extrabold-webfont.woff) format('woff');font-weight:;font-style:normal}@font-face{font-family:'BarlowCondensed-Bold';src:url(assets/fonts/BarlowCondensed-Bold/barlowcondensed-bold-webfont.woff2) format('woff2'),url(assets/fonts/BarlowCondensed-Bold/barlowcondensed-bold-webfont.woff) format('woff');font-weight:;font-style:normal}*,*:focus,.btn,.btn:focus{outline:0!important;text-decoration:none}a,button,input{outline:0;border:0;-ms-transition:all .3s ease;-webkit-transition:all .3s ease;transition:all .3s ease}a,a:hover,a:focus,button:hover,button:focus{text-decoration:none;outline:0}body{background:#fff;color:#000;font-size:22px;line-height:1.2;font-family:'OpenSans-Regular';background:url(assets/images/body-bg.jpg)}img{max-width:100%;height:auto}.ulc{margin:0;padding:0;list-style:none}.overlay-link{position:absolute;left:0;top:0;right:0;bottom:0;z-index:10}.container{max-width:1200px;width:100%}.hide-md{display:block!important}.show-md{display:none!important}.hide-sm{display:block!important}.show-sm{display:none!important}.hide-xs{display:block!important}.show-xs{display:none!important}p{margin-bottom:26px}a{word-wrap:break-word}.plr-30{padding-left:30px!important;padding-right:30px!important}.plr-20{padding-left:20px!important;padding-right:20px!important}.plr-10{padding-left:10px!important;padding-right:10px!important}.plr-5{padding-left:5px!important;padding-right:5px!important}.fl-page-bdy-controller{max-width:1170px;margin:0 auto;background:#fff;-webkit-box-shadow:0 5px 12px 0 rgba(180,179,179,1);-moz-box-shadow:0 5px 12px 0 rgba(180,179,179,1);box-shadow:0 5px 12px 0 rgba(180,179,179,1)}h1{font-size:48px}h2{font-size:45px}h3{font-size:40px}h4{font-size:30px}h5{font-size:25px}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-top:0;line-height:1.2}header.fl-hdr{background:#fff;-ms-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;transition:all 0.5s ease;-ms-box-shadow:0 3px 6px 0 rgba(0,0,0,.16);-webkit-box-shadow:0 3px 6px 0 rgba(0,0,0,.16);box-shadow:0 3px 6px 0 rgba(0,0,0,.16);position:relative;z-index:5}.header-innr{background:#fff;padding:12px 0}.hdr-left,.hdr-rgt{width:50%;float:left}.hdr-left{padding-right:30px}.hdr-rgt{text-align:right}.hdr-logo,.secure-img{display:inline-block;vertical-align:baseline;max-width:160px}.header .secure-img{max-width:225px}.fl-hdr img{width:100%}.fl-shipping{padding-bottom:28px;background:#fff;box-sizing:border-box;position:relative}.fl-shipping img{display:inline-block;position:relative;top:36px;width:57px;height:57px}.fl-shipping .two_sec img{top:28px;width:71px;height:71px}.fl-shipping-col{width:33.333%;float:left;padding-left:7px;padding-right:7px}.fl-shipping h4{color:#000;font-family:'OpenSans-Semibold';text-transform:uppercase;font-size:24px;margin-top:45px;width:100%}.fl-shipping .two_sec>h4{font-family:'OpenSans-Bold';margin-top:32px}.fl-shipping:before{content:"";height:14px;width:100%;position:absolute;background:#18ecc8;left:0;right:0;border-radius:50px;top:57px}.fl-special-offer-sec{position:relative;font-family:'Vollkorn-Semibold';text-align:left;color:#fff;z-index:1}.fl-special-offer-bg{position:absolute;top:0;bottom:0;left:0;right:0;background-repeat:no-repeat!important;background-size:cover!important;background-position:center center!important;z-index:2}.special-offer-dsc{position:relative;padding:83px 305px 90px 0;z-index:3}.special-offer-dsc h4{color:#fff;margin-bottom:18px}.special-offer-dsc h1{font-family:'Vollkorn-Bold';color:#ffec49;margin-bottom:20px;text-shadow:1px 3px 8px #000;line-height:1.2}.special-offer-dsc span{font-size:24px;display:inline-block;vertical-align:baseline;margin-bottom:10px;font-family:'OpenSansItalic'}.fl-content-sec-3-wrp{padding:50px 0 17px;background:#fff}.fl-content-sec-3-img{width:40.43%;float:left}.fl-content-sec-3-des{width:59.57%;float:left;padding:10px 30px 0}.fl-content-sec-3-wrp img{width:100%;height:auto}.fl-content-sec-3-wrp p span{font-family:'OpenSans-Bold'}span.fl-txt-line-bg{font-family:'OpenSans-Bold';display:inline-block;vertical-align:baseline;background-repeat:no-repeat!important;background-position:center center!important;background-size:100% 100%!important;margin-right:-15px;margin-left:-15px;padding-left:15px;padding-right:15px;padding-bottom:5px;color:#000}.fl-content-sec-4-head{background-repeat:no-repeat!important;background-position:center bottom 1px!important;background-size:cover!important;padding:25px 10px 25px;border-radius:8px 8px 0 0;text-align:center;color:#fff;font-family:'Merriweather-Black';margin-bottom:55px}.fl-content-sec-4-head h3{margin-bottom:0}.fl-advanced-des p .fl-txt-line-bg{margin-right:-8px;margin-left:-8px;padding-left:8px;padding-right:8px}.fl-advanced-des li{position:relative;padding:7px 0 25px 46px;font-family:'OpenSans-Bold'}.fl-advanced-des{padding-bottom:25px}.fl-advanced-des li img{position:absolute;max-width:30px;width:100%;top:0;left:0}.fl-content-sec-5-wrp{position:relative;padding:67px 0 52px;z-index:1;color:#fff}.fl-acai-powerful-bg{position:absolute;top:0;bottom:0;left:0;right:0;background-repeat:no-repeat!important;background-size:cover!important;background-position:center center!important;z-index:2}.acai-powerful{position:relative;z-index:3}.acai-powerful h3{font-family:'Merriweather-Black';margin-bottom:37px}.acai-powerful-img{width:50%;float:left;padding-right:14px}.acai-powerful-img img{max-width:500px;width:100%}.acai-powerful-des{width:50%;float:left;padding-left:14px;padding-right:0}.acai-powerful-des p{margin-bottom:27px;line-height:25px}.acai-powerful-des p:last-child{margin-bottom:0}.acai-powerful-des p span.fl-txt-line-bg:first-child{margin-left:-7px;padding-left:9px}.acai-powerful-des p br{display:block!important}.ta-acai-sec-wrp{padding-top:45px}.ta-title-headding h2{margin:0;text-align:center;font-family:'Merriweather-Black';padding-bottom:40px;line-height:56px}.ta-title-headding h2 span{display:block;color:#1fba9f}.ta-flt-rgt-img{}.ye-two-grid-rgt-img{padding-top:8px}.health-risks-grd-wrp{padding-top:50px}.health-risks-grd-wrp ul{text-align:center}.health-risks-grd-wrp li{width:100%;max-width:368px;display:inline-block;vertical-align:top;margin-bottom:30px}.health-risks-grd-wrp li:nth-child(3n+1){clear:left!important}.health-risks-grd-wrp li:nth-child(7){clear:none!important}.health-risks-img-wrp{position:relative}.health-risks-img{width:187px;height:183px;margin:0 auto;background-repeat:no-repeat!important;background-size:cover!important;background-position:center center!important}.health-risks-dsc{color:#000}.health-risks-dsc h5{margin:0;font-family:'Merriweather-Black';margin-top:20px;margin-bottom:10px}.health-risks-dsc p{padding-left:20px;padding-right:20px}.health-risks-grd-wrp li:nth-child(4) .health-risks-dsc p{padding-left:10px;padding-right:30px}.profile-show-wrp ul{padding-top:35px}.profile-show-wrp ul li{margin-bottom:45px}.profile-show-sec-wrp .fl-content-sec-4-head{margin-bottom:5px}.profile-dsc{padding-left:65px;background-repeat:no-repeat;background-position:left 5px top -3px;background-size:54px 54px;padding-top:8px;margin-bottom:-20px;margin-left:15px}.profile-dsc h5{margin:0;font-size:22px;line-height:24px;color:#000;font-family:'OpenSans-Bold';margin-bottom:5px}.profile-show-inr blockquote{padding:35px 50px 20px 30px;margin:0;border-left:0;font-size:22px;line-height:26px;-webkit-box-shadow:6px 7px 4px -4px rgba(209,209,209,1);-moz-box-shadow:6px 7px 4px -4px rgba(209,209,209,1);box-shadow:6px 7px 4px -4px rgba(209,209,209,1)}.profile-dsc h5 span{color:#8b8b8b}.rare-root-feature-sec-wrp{padding-top:30px}.rare-root-feature-wrp ul li{position:relative;padding-bottom:130px}.rare-root-feature-wrp ul li:last-child{padding-bottom:95px}.rare-root-feature-wrp ul li .rare-root-feature-des{width:75%;float:left;padding:25px 25px 0 30px;border:10px solid #000;position:relative;z-index:2}.rare-root-feature-wrp ul li.ta-root-feature-img{padding-bottom:40px}.rare-root-feature-wrp ul li.ta-root-feature-img .rare-root-feature-des{float:right;border:10px solid #1fba9f;padding-left:140px}.rare-root-feature-wrp ul li.ta-root-feature-img img{position:absolute;left:0!important;top:-95px;z-index:3}.rare-root-feature-wrp ul li img{position:absolute;right:30px;bottom:68px;z-index:3}.rare-root-feature-wrp ul li:last-child img{bottom:35px;right:15px!important}.rare-root-feature-lft-des h2,.rare-root-feature-des h2{margin:0;color:#000;line-height:55px;margin-bottom:15px;font-family:'Merriweather-Black'}.rare-root-feature-lft-des h2 span,.rare-root-feature-des h2 span{color:#1fba9f}.dst-ml-15{margin-left:-15px}.gap-15{height:15px;width:100%}.out-stock-sec{padding-top:60px;padding-bottom:20px;color:#fff;position:relative;background-color:#0a79a2}.out-stock-sec .container{position:relative;z-index:2}.top-wave-img{position:absolute;left:0;right:0;top:-1px;z-index:1;height:485px;background:center top;background-repeat:repeat-x!important}.btm-wave-img{position:absolute;left:0;right:0;bottom:-1px;z-index:1;height:366px;background:center bottom;background-repeat:repeat-x!important}.out-stock-sec-hdr h2{font-size:40px;font-family:'Merriweather-Black';text-align:center;margin-bottom:30px}.out-stock-sec-grd-img-1{padding-top:15px;padding-bottom:25px}.out-stock-sec-grd-img-2{padding-top:10px}.dft-text-module p span,span.text-inline-mark-left{background-size:100% 100%!important;background-repeat:no-repeat!important;background-position:center center;background-size:contain;display:inline-block;vertical-align:baseline;font-family:'OpenSans-Bold';color:#000;padding:2px 20px 4px 15px;margin-right:-10px}span.text-inline-mark-left{vertical-align:bottom;position:relative;top:2px}.dft-text-module p span.text-inline-mark{margin-left:-10px;padding-left:10px;padding-right:12px}.dft-text-module p:last-child{padding-bottom:0}.dft-multiline-bg p{margin-bottom:0}.thank-you-line{text-align:center}.fl-ftr-top-sec-rgt-img{text-align:right;padding-top:10px}.fl-ftr-top-sec-rgt-img img{margin-top:-10px}.fl-ftr-top-sec strong{display:block;text-decoration:underline;color:#0055e3;font-family:'OpenSans-Semibold';padding-bottom:70px;padding-top:30px;font-size:18px;line-height:22px}.fl-ftr-top-sec ul li a{color:#000}.fl-ftr-top-sec ul li{padding-bottom:45px}.fl-ftr-top-sec ul li sup{display:inline-block;vertical-align:baseline;padding-right:4px}.fl-pkg-sec-ftr-des{padding-top:65px;text-align:left;padding-bottom:24px}.pkg-area-con-bg{padding:45px 0 50px;background-size:cover!important;background-position:center center}.pkg-area-con-bg.pkg-area-con-bg-1{padding-top:0}.fl-pkg-sec-hdr{text-align:center;color:#fff}.fl-pkg-sec-hdr h2{font-family:'Merriweather-Black';margin-bottom:80px;margin-top:0;color:#000}.fl-pkg-sec-hdr h2 span{display:inline-block;vertical-align:baseline}.fl-pkg-sec-hdr h2 strong{display:inline-block;vertical-align:baseline;color:#1fba9f}.fl-pkg-sec-bg-hdr{background-repeat:no-repeat!important;background-size:cover!important;background-position:center bottom 1px!important;border-radius:8px 8px 0 0;margin-bottom:85px;padding:20px 20px 25px}.fl-pkg-sec-bg-hdr h2{font-family:'Merriweather-Black';margin-top:0;color:#fff;text-align:center;margin-bottom:0}.fl-pkg-grd-controller>ul>li{float:left;width:33.333%;padding:0 10px}.dst-pr-15-sm-15{padding-right:15px;display:inline-block;font-style:normal}.fl-pkg-grd-col-btm-bdr{background:#097298;border-radius:8px;padding-bottom:4px;-webkit-box-shadow:0 0 7px 1px rgba(207,205,205,1);-moz-box-shadow:0 0 7px 1px rgba(207,205,205,1);box-shadow:0 0 7px 1px rgba(207,205,205,1)}.fl-pkg-grd-col-bdr-solid{position:relative}.fl-pkg-grd-col-bdr-solid:before,.fl-pkg-grd-col-bdr-solid:after{content:"";background:#bdd4dc;position:absolute;top:4px;bottom:2px;width:1px;z-index:1}.order1 .fl-pkg-grd-col-bdr-solid:before,.order1 .fl-pkg-grd-col-bdr-solid:after{background:#ded4d4}.order2 .fl-pkg-grd-col-bdr-solid:before,.order2 .fl-pkg-grd-col-bdr-solid:after{background:#c6dbd7;top:10px}.fl-pkg-grd-col-bdr-solid:before{left:-1px}.fl-pkg-grd-col-bdr-solid:after{right:0}.fl-pkg-grd-col{padding-bottom:5px;position:relative}.fl-pkg-grd-controller>ul>li:nth-child(2) .fl-pkg-grd-col-btm-bdr{margin-top:-45px}.fl-pkg-grd-controller>ul>li:nth-child(2) .fl-pkg-grd-col-btm-bdr{background:#d50001}.fl-pkg-grd-controller>ul>li:nth-child(3) .fl-pkg-grd-col-btm-bdr{background:#1dad94}.fl-pkg-grd-controller>ul>li:nth-child(2) .fl-pkg-grd-col{padding-bottom:10px}.fl-pkg-grd-controller>ul>li:nth-child(2) .fl-pkg-grd-ftr ul{padding-top:10px}.fl-pkg-grd-controller>ul>li:nth-child(2) .fl-pkg-price{margin-bottom:20px}.fl-pkg-grd-controller>ul>li:nth-child(2) .fl-pkg-grd-col-fea-img{padding-bottom:20px;padding-top:45px}.fl-pkg-grd-controller>ul>li:nth-child(2) .fl-pkg-grd-ftr{padding-top:25px}.fl-pkg-save-price{color:red;padding-top:15px;}.fl-pkg-save-price strong{font-family: 'Barlow-Extrabold';display:block;font-weight:normal;font-size:25px;}.fl-pkg-grd-col-hdr{border-radius:5px 5px 0 0}.fl-pkg-grd-col-hdr span,.fl-pkg-grd-col-hdr strong{display:block}.fl-pkg-grd-col-hdr{text-transform:uppercase;text-align:center;color:#fff;background-repeat:repeat-x!important;background-size:cover!important}.fl-pkg-grd-col-hdr span{font-size:32px;line-height:36px;font-family:'BarlowCondensed-Bold';padding:20px 10px 30px;background-repeat:repeat-x!important;border-radius:5px 5px 0 0;text-shadow:0 2px #019bd4}.order1 .fl-pkg-grd-col-hdr span{text-shadow:0 2px #b82121}.order2 .fl-pkg-grd-col-hdr span{text-shadow:0 2px #27caae}.fl-pkg-grd-col-hdr strong{padding:0 10px 12px 10px;font-size:40px;line-height:45px;font-family:'BarlowCondensed-Bold';text-shadow:0 2px #595653}.fl-pkg-grd-col-fea-img{margin:0 auto;position:relative;display:table;padding:28px 15px 15px}.fl-pkg-grd-col-fea-img div{display:inline-block;vertical-align:baseline}.fl-pkg-grd-col-fea-img span{position:absolute;right:15px;top:33px}.order3 .fl-pkg-grd-col-fea-img span{right:-37px}.order1 .fl-pkg-grd-col-fea-img span{top:70px;right:32px}.fl-pkg-grd-col{background:#f7f7f7;border:3px solid #fff;border-radius:8px}.fl-pkg-price{position:relative;text-align:center;display:inline-block;vertical-align:baseline;padding:0 76px 0 28px;margin-bottom:10px}.fl-pkg-price:before{content:"$";position:absolute;left:3px;top:-7px;font-size:42px;line-height:100%;font-family:'Barlow-Bold';margin-right:2px}.fl-pkg-price:after{content:"";position:absolute;width:7px;height:7px;background:#000;border-radius:100%;font-family:'Barlow-Bold';margin-right:2px;right:63px;top:50%;transform:translateY(-50%);-ms-transform:translateY(-50%);-webkit-transform:translateY(-50%)}.fl-pkg-price strong{font-size:68px;line-height:58px;font-weight:400;font-family:'Barlow-Bold';display:inline-block}.fl-pkg-price sup{position:absolute;right:16px;font-size:43px;font-family:'Barlow-Bold';top:-3px;line-height:100%}.fl-pkg-price sub{position:absolute;right:-5px;font-size:38px;bottom:9px;font-family:'BarlowCondensed-Regular'}.fl-creditcards{padding-left:8px;padding-top:5px}.fl-footer-wrap{background-color:#0f1314;color:#fff;text-align:center;padding:55px 0 65px;font-size:14px;line-height:19px}.fl-footer-wrap p{font-size:14px;line-height:19px;margin-bottom:0}.fl-ftr-nav ul{padding-bottom:20px}.fl-ftr-nav ul li,.fl-ftr-nav ul li a{display:inline-block;vertical-align:baseline}.fl-ftr-nav ul li{font-size:18px;line-height:20px}.fl-ftr-nav ul li:first-child{padding-left:0}.fl-ftr-nav ul li:last-child{padding-right:0}.fl-ftr-nav ul li a{color:inherit}.fl-ftr-nav ul li a:hover,.fl-ftr-top-sec ul li a:hover{opacity:.7}.fl-pkg-grd-ftr{padding-left:10px;padding-right:10px;display:table;margin:0 auto;padding-top:20px}.fl-add-to-cart-btn-img{margin-bottom:15px}.fl-add-to-cart-btn-img a{display:inline-block;vertical-align:baseline}.fl-pkg-grd-ftr ul li{position:relative;padding:3px 0 15px 40px;font-size:16px;line-height:18px;text-transform:uppercase;font-family:'Barlow-Medium'}.fl-pkg-grd-ftr ul li em{position:absolute;left:0;top:0}.fl-copyright{padding-bottom:35px}.fl-ftr-nav ul li{padding:0 25px;position:relative}.fl-ftr-nav ul li:not(:last-child):after{content:"";width:1px;height:14px;position:absolute;left:100%;margin-left:-1px;background:#fff;top:50%;transform:translateY(-50%);-ms-transform:translateY(-50%);-webkit-transform:translateY(-50%)}.fl-ftr-des{color:#6a6a6a;padding:0 10px}@media(max-width:1199px){h1{font-size:38px}h2{font-size:34px}h3{font-size:30px}h4{font-size:26px}h5{font-size:22px}.hide-md{display:none!important}.show-md{display:block!important}.acai-powerful-des p span.fl-txt-line-bg:last-child{margin-right:-15px;margin-left:-7px;padding-left:7px;padding-right:15px}.ta-flt-rgt-img{text-align:center}.ye-two-grid-rgt-img{padding-bottom:30px;padding-top:0}.health-risks-grd-wrp li{width:100%;max-width:370px}.rare-root-feature-wrp ul li .rare-root-feature-des{padding-right:45px!important}.rare-root-feature-des p{padding-right:215px}.rare-root-feature-des p br{display:none}.rare-root-feature-lft-des h2,.rare-root-feature-des h2,.ta-title-headding h2{line-height:44px}.rare-root-feature-wrp ul li.ta-root-feature-img .rare-root-feature-des{padding-left:170px;padding-right:20px!important}.ta-root-feature-img .rare-root-feature-des p{padding-right:50px}.profile-show-sec-wrp .fl-content-sec-4-head{padding-left:15px;padding-right:15px}.full-width-1023{width:100%!important}.out-stock-sec-grd-img-2{padding-bottom:25px}}@media(max-width:1023px){.fl-content-sec-3-img{width:100%;text-align:center;margin-bottom:25px}.fl-content-sec-3-wrp img{max-width:450px}.fl-content-sec-3-des{width:100%;float:left;padding:0}.acai-powerful-img{width:100%;padding-right:0;text-align:center;margin-bottom:25px}.acai-powerful-des{width:100%;padding-left:0;padding-right:0}}@media(max-width:991px){h1{font-size:36px}h2{font-size:32px}h3{font-size:28px}h4{font-size:24px}h5{font-size:20px}.hide-sm{display:none!important}.show-sm{display:block!important}p br{display:none}.fl-shipping h4{font-size:18px}.special-offer-dsc h1 br{display:none}.special-offer-dsc{padding:80px 283px 80px 0}.health-risks-grd-wrp li{width:100%;max-width:355px}.rare-root-feature-lft-des h2,.rare-root-feature-des h2,.ta-title-headding h2{line-height:38px}.rare-root-feature-wrp ul li .rare-root-feature-des{width:100%;padding:25px 25px 0}.rare-root-feature-wrp ul li{padding-bottom:40px!important;text-align:center}.rare-root-feature-wrp ul li img{position:static;padding-bottom:40px}.rare-root-feature-des p{padding-right:0;text-align:left}.rare-root-feature-wrp ul li .rare-root-feature-des{padding-right:25px!important}.rare-root-feature-wrp ul li.ta-root-feature-img img{position:static}.rare-root-feature-wrp ul li.ta-root-feature-img .rare-root-feature-des{padding-left:20px;padding-right:20px!important}.ta-root-feature-img .rare-root-feature-des p{padding-right:0}.profile-show-sec-wrp .fl-content-sec-4-head h3 br{display:none}.fl-ftr-top-sec-rgt-img{text-align:center;padding-bottom:25px}.fl-ftr-top-sec-rgt-img img{margin-top:0}.fl-pkg-grd-controller>ul>li{width:100%;margin-bottom:20px}.fl-pkg-grd-col-btm-bdr{max-width:370px;margin:0 auto}.fl-pkg-grd-controller>ul>li:nth-child(2) .fl-pkg-grd-col-btm-bdr{margin-top:0}.fl-pkg-sec-hdr h2{margin-bottom:35px}.out-stock-sec-grd-img-1,.out-stock-sec-grd-img-2{padding-bottom:25px}.fl-pkg-sec-bg-hdr{margin-bottom:45px}.out-stock-sec-hdr h2{font-size:35px}.pkg-area-con-bg-2{padding-bottom:25px} }@media (max-width:830px){.fl-shipping h4{font-size:16px}.special-offer-dsc{padding:80px 185px 80px 0}}@media(max-width:767px){body{font-size:18px}p{margin-bottom:20px}h1{font-size:30px}h2{font-size:28px}h3{font-size:24px}h4{font-size:20px}h5{font-size:18px}.hide-xs{display:none!important}.show-xs{display:block!important}.fl-advanced-des li img{max-width:23px}.fl-advanced-des li{position:relative;padding:5px 0 20px 38px}.health-risks-grd-wrp{padding-top:30px}.health-risks-grd-wrp li:nth-child(3n+1){clear:none!important}.profile-show-inr blockquote{padding:30px 10px 15px;font-size:18px;line-height:22px}.rare-root-feature-lft-des h2,.rare-root-feature-des h2,.ta-title-headding h2{line-height:36px}.profile-dsc h5{font-size:20px;line-height:22px}.profile-show-wrp ul{padding-top:20px}.profile-show-wrp ul li{margin-bottom:25px}.fl-ftr-des{padding:0}.out-stock-sec-hdr h2{font-size:25px}.out-stock-sec-hdr h2 br,.fl-pkg-sec-bg-hdr h2 br{display:none}}@media(max-width:639px){.fl-shipping .two_sec img{width:65px;height:65px}.fl-shipping img{width:50px;height:50px}.special-offer-dsc{padding:55px 0 65px}.acai-powerful h3 br{display:none}}@media(max-width:575px){.hdr-logo,.secure-img{display:inline-block;vertical-align:baseline;max-width:120px}.rare-root-feature-lft-des h2,.rare-root-feature-des h2,.ta-title-headding h2{line-height:34px}.profile-dsc h5{font-size:18px;line-height:20px}.profile-dsc{margin-left:0}.fl-creditcards{padding-left:0}.fl-pkg-sec-bg-hdr h2 br{display:none}.out-stock-sec-hdr h2{font-size:25px}.fl-ftr-top-sec strong{padding-top:10px;padding-bottom:50px}}@media(max-width:479px){h1{font-size:28px}h2{font-size:24px}h3{font-size:22px}.fl-shipping-progress-bar{margin-top:-10px}.fl-shipping{margin-left:-15px;margin-right:-15px;padding-bottom:12px}.fl-shipping h4{font-size:14px}.fl-shipping:before{height:12px}.fl-shipping-col{width:30%;float:left}.fl-shipping-col.two_sec{width:40%;float:left}.fl-shipping-col.two_sec span{display:block}.fl-content-sec-4-head{margin-bottom:35px}.rare-root-feature-lft-des h2,.rare-root-feature-des h2,.ta-title-headding h2{line-height:30px}.fl-ftr-nav ul li{padding:0 16px;font-size:17px}}@media(max-width:359px){.hdr-logo,.secure-img{display:inline-block;vertical-align:baseline;max-width:100px}}
  </style>
</head>
<body> 

<header class="fl-hdr">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="header-innr clearfix"> 
          <div class="hdr-left"> 
            <a class="hdr-logo" href="#">
              <img class="lazy" data-src="assets/images/logo.jpg" alt="Logo" />
            </a>
          </div>
          <div class="hdr-rgt"> 
            <a class="secure-img">
              <img class="lazy" data-src="assets/images/hdr-secure-img.jpg" alt="secure"/>
            </a>   
          </div> 
        </div>
      </div>
    </div>
  </div>
</header>
<div class="fl-page-bdy-controller">
<section class="fl-shipping-progress-bar plr-10"> 
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="fl-shipping clearfix text-center">
          <div class="fl-shipping-col">
            <img data-src="assets/images/progress-bar-img001.png" class="lazy">
            <h4>Shipping Info</h4>
          </div>
          <div class="fl-shipping-col two_sec">
            <img data-src="assets/images/progress-bar-img002.png" class="lazy">
            <h4>Upgrade Opportunities</h4>
          </div>
          <div class="fl-shipping-col">
            <img data-src="assets/images/progress-bar-img003.png" class="lazy">
            <h4>Summary</h4>
          </div>
        </div>          
      </div>        
    </div>
  </div>
</section>

<section class="fl-special-offer-sec plr-10">
  <div class="lazy fl-special-offer-bg" data-src="assets/images/special-offer-sec-bg.jpg"></div>  
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="special-offer-dsc">
          <h4>Special Offer For First-Time Customers ONLY!</h4> 
          <h1>Can This Tiny “Superberry” <br /> Stop Your Body From Storing Fat?</h1>
          <span>[Keep reading to get the secrets to burning fat naturally]</span>              
        </div>          
      </div>
    </div>
  </div>
</section>
<section class="fl-content-sec-3-wrp plr-10">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="fl-content-sec-3-innr clearfix">
          <div class="fl-content-sec-3-img">
            <img class="lazy" data-src="assets/images/doctor-img.jpg" />
          </div>
          <div class="fl-content-sec-3-des">
            <p><span>Hello it’s Dr. Andy Calluci again…</span></p>
            <p>And you’re well on your way to getting the best gut health possible with Structured Silver by Therapy Sciences…</p>
            <p>You’re just moments away from wrapping up your order…</p>
            <p>But before we finish up…</p>
            <p>I do have one last thing to show you.</p>
            <p>I see this as the third and final phase to the Therapy Sciences program…</p>
            <p>It’s a little “superberry” that can help your body stop storing ugly fat cells…</p>
            <p>And start burning them away instead.</p>
            <p>And the best part is you don’t have to diet or exercise to see results…</p>
          </div>
          <div class="fl-content-sec-3-full-w-des">
            <p>This breakthrough boosts your energy, supports your metabolism, and makes you feel better than ever before…</p>

            <p>
              <span class="lazy fl-txt-line-bg" data-src="assets/images/txt-line-bg-001.png"/> And it’s enhanced by the ingredients inside of Structured Silver.</span>
            </p>
            <p>It’s called…</p>
          </div>         
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fl-content-sec-4-wrp plr-10">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="fl-content-sec-4-innr clearfix">
          <div class="fl-content-sec-4-head lazy" data-src="assets/images/headding-bg-1.jpg" />
            <h3>Açaí Advanced</h3>
          </div>
          <div class="fl-advanced-img text-center">
            <img class="lazy" data-src="assets/images/advanced-med.jpg" alt="" />
          </div>
          <div class="fl-advanced-des">
            <p>Acai Advanced is a nutritional support aide that promotes fat burn and weight loss…</p>
            <p>By using a highly specialized for of <span class="lazy fl-txt-line-bg" data-src="assets/images/txt-line-bg-002.png">Acai berry extract.</span></p>
            <p>Acai berry is a super food that is very popular in the health space…</p>
            <p>That’s been shown to have tons of promising health benefits…</p>
            <p>In dozens of clinical trials, Acai berry has been shown to:</p>

            <ul class="ulc">
              <li><img class="lazy" data-src="assets/images/advanced-des-inc.jpg" alt="" />Curb Your Appetite And reduce nagging cravings</li>
              <li><img class="lazy" data-src="assets/images/advanced-des-inc.jpg" alt="" /><span class="lazy fl-txt-line-bg" data-src="assets/images/txt-line-bg-003.png">Boost Fat burn and promote weight loss you can see and feel</span></li>
              <li><img class="lazy" data-src="assets/images/advanced-des-inc.jpg" alt="" />Stimulate Digestion for a more comfortable go</li>
              <li><img class="lazy" data-src="assets/images/advanced-des-inc.jpg" alt="" />Support your immune health with their powerful free-radical fighting antioxidants</li>
              <li><img class="lazy" data-src="assets/images/advanced-des-inc.jpg" alt="" />Lower cholesterol and improve heart health naturally</li>
            </ul>
          </div>            
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fl-content-sec-5-wrp plr-10 text-center">
  <div class="lazy fl-acai-powerful-bg" data-src="assets/images/acai-powerful-img.jpg"></div>  
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="acai-powerful clearfix">
          <h3>Acai is so powerful for fat loss because of two <br /> major reasons…</h3>
          <div class="acai-powerful-img">
            <img class="lazy" data-src="assets/images/old-couple-image.png" alt="" />
          </div>
          <div class="acai-powerful-des text-left">
            <p>The first reason acai is great for weight loss is that acai is <span class="lazy fl-txt-line-bg" data-src="assets/images/txt-line-bg-004.png">full of natural fiber.</span></p>
            <p>And you know how good fiber is for your digestion…</p>
            <p>Getting adequate fiber helps your body process its food quickly and regularly…</p>
            <p>So that food doesn’t get “backed up” in your gut for weeks on end…</p>
            <p>Turning into squishy fat cells.</p>
            <p>The second reason why Acai is so powerful for weight loss…</p>
            <p>Is that acai is full of <span class="lazy fl-txt-line-bg" data-src="assets/images/txt-line-bg-005.png">heart-healthy omega fatty</span> <br/> <span class="lazy fl-txt-line-bg" data-src="assets/images/txt-line-bg-006.png"
              >acids…</span></p>
            <p>Like omega-6, omega-3, and oleic acid…</p>
            <p>Which have all been linked to fast fat burn…</p>
            <p>Appetite suppression…</p>
            <p>And more balanced hormones.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ta-acai-sec-wrp plr-10">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="ta-title-headding">
            <h2>Acai is easily one of the most powerful <br> <span> superfoods on the planet…</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ta-flt-rgt-img pull-right">
          <div class="ye-two-grid-rgt-img">
            <img class="lazy" alt="A lazy image 1" data-src="assets/images/ta-two-grid-lft-img-1.jpg"/>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">
          <div class="hh-two-grid-rgt-dsc">
            <p>Which is why it’s the star ingredient in our weight loss boosting formula.</p>
            <p>While there are tons of acai products out there…</p>
            <p>Acai Advanced stands out above all the rest…</p>
            <p>That’s because Acai Advanced is made with organic, highly bioavailable form of Acai berry extract.</p>
            <p>Plus our formula also features 5 other dynamic nutrients that work in perfect synergy…</p>
            <p>To balance weight, fight fat gain, reduce cholesterol levels, and boost energy. </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="health-risks-grd-wrp"> 
            <ul class="ulc clearfix"> 
              <li>
                <div class="health-risks-wrp">
                  <div class="health-risks-img-wrp">                   
                    <div class="health-risks-img lazy" data-src="assets/images/health-risks-img-01.jpg"></div>
                  </div>
                  <div class="health-risks-dsc">
                    <h5>Green Coffee Bean Extract</h5>
                    <p>This natural gut booster stimulates digestion and blocks fat gain.  Green Coffee bean extract is great for smoothing out digestion.</p>
                  </div>
                </div>
              </li>  
              <li>
                <div class="health-risks-wrp">
                  <div class="health-risks-img-wrp">                   
                    <div class="health-risks-img lazy" data-src="assets/images/health-risks-img-02.jpg"></div>
                  </div>
                  <div class="health-risks-dsc">
                    <h5>Raspberry Ketones</h5>
                    <p>The raspberry ketones are what give raspberries their awesome aroma.  Raspberry ketones help flush out your digestive track to get rid of bloat and the “backed up” feeling.</p>
                  </div>
                </div>
              </li>  
              <li>
                <div class="health-risks-wrp">
                  <div class="health-risks-img-wrp">                   
                    <div class="health-risks-img lazy" data-src="assets/images/health-risks-img-03.jpg"></div>
                  </div>
                  <div class="health-risks-dsc">
                    <h5>African Mango Seed Extract</h5>
                    <p>African Mango Seeds are rich with fiber, which as you know, is KEY to healthy digestion.  Fiber promotes great colon health as well. African mango seed also promotes weight loss.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="health-risks-wrp">
                  <div class="health-risks-img-wrp">                   
                    <div class="health-risks-img lazy" data-src="assets/images/health-risks-img-04.jpg"></div>
                  </div>
                  <div class="health-risks-dsc">
                    <h5>Green Tea Extract</h5>
                    <p>Green Tea extract has been used in Chinese and other Asian cultures for years as a fat loss aid.  The chemical makeup of green tea extract helps also to fight against age-causing free-radicals.</p>
                  </div>
                </div>
              </li>  
              <li>
                <div class="health-risks-wrp">
                  <div class="health-risks-img-wrp">                   
                    <div class="health-risks-img lazy" data-src="assets/images/health-risks-img-05.jpg"></div>
                  </div>
                  <div class="health-risks-dsc">
                    <h5>Calcium</h5>
                    <p>a rich source of calcium helps all the ingredients in this formula to work synergistically together in promoting fat burn.</p>
                  </div>
                </div>
              </li>  
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="profile-show-sec-wrp plr-10">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="fl-content-sec-4-head lazy" data-src="assets/images/headding-bg-1.jpg">
            <h3>Açaí Advanced Is A Favorite Amongst Therapy <br> Sciences Fans</h3>
        </div>
        <div class="profile-show-wrp">
          <ul class="clearfix ulc">
            <li>
              <div class="profile-show-inr">
                <div class="profile-dsc lazy" data-bg="url(assets/images/profile-icon.jpg)">
                  <h5>Grace M., <span>Lake Tahoe</span></h5>
                  <span><img class="lazy" data-src="assets/images/star-5.jpg"></span>
                </div>
                <blockquote>“I wanted to slim down before my daughter’s wedding. My dress was a two sizes two small, and I was determined to fit into it.  I used Acai Advanced as my extra boost of fat burning power to get those final pounds off in time for the big day.  The dress fit me perfectly, in fact I may have lost a little bit too much weight.  I think that Acai Advanced goes well with any other diet and exercise plan you’re on.  It helped me feel fuller longer and it gave me tons of energy.  I think this is a great supplement for anyone looking to shed a few pounds naturally.”</blockquote>
              </div>
            </li>
            <li>
              <div class="profile-show-inr">
                <div class="profile-dsc lazy" data-bg="url(assets/images/profile-icon.jpg)">
                  <h5>Tina D., <span>Shreveport</span></h5>
                  <span><img class="lazy" data-src="assets/images/star-5.jpg"></span>
                </div>
                <blockquote>“This product does exactly what you want it to do.  I started taking it about 4 weeks ago.  I was doing a good job on my low carb diet, but I could feel myself starting to get carb cravings FROM HELL. A friend of mine told me about Acai Advanced – saying that she had used it and she loved it.  I didn’t really have high hopes, to be honest, but after the first day, I was hooked.  The energy boost is amazing and I love that I don’t feel hungry all the time.  It feels like I actually have control over my cravings – for the first time ever.  So I’m really happy to say I lost 7 pounds in the first 9 days, and to date I’m down a full 16 pounds.  I didn’t go any harder in the gym or any more strict with my diet, so I’m really amazed by these results.”</blockquote>
              </div>
            </li>
            <li>
              <div class="profile-show-inr">
                <div class="profile-dsc lazy" data-bg="url(assets/images/profile-icon.jpg)">
                  <h5>Iyana P., <span>Fort Wayne</span></h5>
                  <span><img class="lazy" data-src="assets/images/star-5.jpg"></span>
                </div>
                <blockquote>“I’ve tried just about every ‘weight loss’ pill out there.  They all are garbage compared to Acai Advanced.  Acai Advanced is the first supplement that I’ve used that feels really natural.  I don’t have the shakes and jitters. I also don’t spend the whole day stuck on the toilet (though on day one, I did have a pretty big bowel movement – and I felt so light afterwards, I knew it had to be working.). My week one weight loss was at 4lbs, and week two, I had lost another 3lbs and an inch or two around me waist. I feel really great.  I know when I get on the scale in the morning I have something to look forward to – more weight loss.  I honestly think Acai Advanced is the best weight loss supplement I’ve ever tried.”</blockquote>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="rare-root-feature-sec-wrp plr-10">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="rare-root-feature-wrp">
          <ul class="ulc">
            <li class="clearfix">
              <img class="lazy" data-src="assets/images/rare-root-feature-001.png" alt="">
              <div class="rare-root-feature-des">
                <h2>Acai Advanced Is a Top of the <br> <span>Line Supplement</span></h2>
                <p>Acai Advanced is made in a GMP certified facility right here in <br> the USA…</p>
                <p>It’s also tested by a third party to ensure that everything you see <br> on the label is inside of the bottle…</p>
                <p>Satisfaction guaranteed!</p>
              </div>
            </li>
            <li class="clearfix ta-root-feature-img">
               <img class="lazy" data-src="assets/images/rare-root-feature-002.png" alt="">
              <div class="rare-root-feature-des">
                <h2>Just Two Tablets A Day Is <br> <span>All it Takes To Get Started</span> <br> With Acai Advanced</h2>
                <p>It’s really that simple…</p>
                <p>Finally, you can lose inches and support your gut health…</p>
                <p>And look and feel better than you ever imagined.</p>
              </div>
            </li>
            <li class="clearfix">
               <img class="lazy" data-src="assets/images/rare-root-feature-003.png" alt="">
              <div class="rare-root-feature-des">
                <h2>Açaí Advanced With Structured <br> <span>Silver Gives You Everything</span> <br> You Need to Melt Off Fat…</h2>
                <p>Can you tell how much I love <strong style="display: inline-block;">Açaí Advanced?</strong></p>
                <p>I know that our quality formula can help transform the <br> lives of thousands…</p>
                <p>And make fast, natural fat burn a reality!</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="fl-pkg-section">
  <div class="pkg-area-con-bg pkg-area-con-bg-1">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="pkg-area-con">
            <div class="plr-10">
              <div class="fl-pkg-sec-bg-hdr lazy" data-src="assets/images/fl-pkg-sec-bg-hdr.jpg">
                <h2>Add Açaí Advanced To Your <br>Order Now For Up to 50% Off</h2>
              </div>
            </div>
            <div class="fl-pkg-grd-controller">
              <ul class=" clearfix ulc">
                <li class="order3 hide-sm">
                  <div class="fl-pkg-grd-col-btm-bdr">
                    <div class="fl-pkg-grd-col-bdr-solid">
                      <div class="fl-pkg-grd-col">
                        <div class="fl-pkg-grd-col-hdr lazy" data-src="assets/images/black-gradient-bg.png">
                          <span class="lazy" data-src="assets/images/sky-gradient-bg.png">SAMPLE PACKAGE</span>
                          <strong>1 month SUPPLY</strong>
                        </div>
                        <div class="fl-pkg-grd-col-fea-img">
                          <span><img alt="Phyto-3 package 1" class="lazy" data-src="assets/images/pkg-price-1.png"></span>
                          <div><img alt="Phyto-3 package 2" class="lazy" data-src="assets/images/pkg-img-01.png"></div>
                        </div>
                        <div class="text-center">
                          <div class="fl-pkg-price">
                            <strong>39</strong>
                            <sup>00</sup>
                            <sub>/each</sub>
                          </div>
                          <div class="fl-pkg-save-price">
                            <strong>You Save: $110</strong>
                          </div>
                        </div>
                        <div class="fl-pkg-grd-ftr">
                          <div class="fl-add-to-cart-btn-img">
                            <a href="#"><img alt="Phyto-3 package 3" class="lazy" data-src="assets/images/fl-add-to-cart-btn-img.png"></a>
                          </div>
                          <ul class="clearfix ulc">
                            <li>
                              <em><img alt="Phyto-3 package 4" class="lazy" data-src="assets/images/fl-shipping-icon.png"></em>
                              Free US Shipping
                            </li>
                            <li>
                              <em><img alt="Phyto-3 package 5" class="lazy" data-src="assets/images/fl-money-back-icon.png"></em>
                              180 day money back guarantee
                            </li>
                          </ul>
                          <div class="fl-creditcards">
                            <a href="#"><img alt="Phyto-3 package 6" class="lazy" data-src="assets/images/fl-creditcards.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="order1">
                  <div class="fl-pkg-grd-col-btm-bdr">
                    <div class="fl-pkg-grd-col-bdr-solid">
                      <div class="fl-pkg-grd-col">
                        <div class="fl-pkg-grd-col-hdr lazy" data-src="assets/images/black-gradient-bg.png">
                          <span class="lazy" data-src="assets/images/red-gradient-bg.png">Best Value</span>
                          <strong>6 month SUPPLY</strong>
                        </div>
                        <div class="fl-pkg-grd-col-fea-img">
                          <span><img alt="Phyto-3 package 7" class="lazy" data-src="assets/images/pkg-price-2.png"></span>
                          <div><img alt="Phyto-3 package 8" class="lazy" data-src="assets/images/pkg-img-02.png"></div>
                        </div>
                        <div class="text-center">
                          <div class="fl-pkg-price">
                            <strong>29</strong>
                            <sup>00</sup>
                            <sub>/each</sub>
                          </div>
                          <div class="fl-pkg-save-price">
                            <strong>You Save: $720</strong>
                          </div>
                        </div>
                        <div class="fl-pkg-grd-ftr">
                          <div class="fl-add-to-cart-btn-img">
                            <a href="#"><img alt="Phyto-3 package 9" class="lazy" data-src="assets/images/fl-add-to-cart-btn-img.png"></a>
                          </div>
                          <ul class="clearfix ulc">
                            <li>
                              <em><img alt="Phyto-3 package 10" class="lazy" data-src="assets/images/fl-shipping-icon.png"></em>
                              Free US Shipping
                            </li>
                            <li>
                              <em><img alt="Phyto-3 package 11" class="lazy" data-src="assets/images/fl-money-back-icon.png"></em>
                              180 day money back guarantee
                            </li>
                          </ul>
                          <div class="fl-creditcards">
                            <a href="#"><img alt="Phyto-3 package 12" class="lazy" data-src="assets/images/fl-creditcards.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="order2">
                  <div class="fl-pkg-grd-col-btm-bdr">
                    <div class="fl-pkg-grd-col-bdr-solid">
                      <div class="fl-pkg-grd-col">
                        <div class="fl-pkg-grd-col-hdr lazy" data-src="assets/images/black-gradient-bg.png">
                          <span class="lazy" data-src="assets/images/pest-gradient-bg.png">most popular</span>
                          <strong>3 month SUPPLY</strong>
                        </div>
                        <div class="fl-pkg-grd-col-fea-img">
                          <span><img alt="Phyto-3 package 13" class="lazy" data-src="assets/images/pkg-price-3.png"></span>
                          <div><img alt="Phyto-3 package 14" class="lazy" data-src="assets/images/pkg-img-03.png"></div>
                        </div>
                        <div class="text-center">
                          <div class="fl-pkg-price">
                            <strong>35</strong>
                            <sup>00</sup>
                            <sub>/each</sub>
                          </div>
                          <div class="fl-pkg-save-price">
                            <strong>You Save: $342</strong>
                          </div>
                        </div>
                        <div class="fl-pkg-grd-ftr">
                          <div class="fl-add-to-cart-btn-img">
                            <a href="#"><img alt="Phyto-3 package 15" class="lazy" data-src="assets/images/fl-add-to-cart-btn-img.png"></a>
                          </div>
                          <ul class="clearfix ulc">
                            <li>
                              <em><img alt="Phyto-3 package 16" class="lazy" data-src="assets/images/fl-shipping-icon.png"></em>
                              Free US Shipping
                            </li>
                            <li>
                              <em><img alt="Phyto-3 package 17" class="lazy" data-src="assets/images/fl-money-back-icon.png"></em>
                              180 day money back guarantee
                            </li>
                          </ul>
                          <div class="fl-creditcards">
                            <a href="#"><img alt="Phyto-3 package 18" class="lazy" data-src="assets/images/fl-creditcards.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="order3 show-sm">
                  <div class="fl-pkg-grd-col-btm-bdr">
                    <div class="fl-pkg-grd-col-bdr-solid">
                      <div class="fl-pkg-grd-col">
                        <div class="fl-pkg-grd-col-hdr lazy" data-src="assets/images/black-gradient-bg.png">
                          <span class="lazy" data-src="assets/images/sky-gradient-bg.png">SAMPLE PACKAGE</span>
                          <strong>1 month SUPPLY</strong>
                        </div>
                        <div class="fl-pkg-grd-col-fea-img">
                          <span><img alt="Phyto-3 package 1" class="lazy" data-src="assets/images/pkg-price-1.png"></span>
                          <div><img alt="Phyto-3 package 2" class="lazy" data-src="assets/images/pkg-img-01.png"></div>
                        </div>
                        <div class="text-center">
                          <div class="fl-pkg-price">
                            <strong>39</strong>
                            <sup>00</sup>
                            <sub>/each</sub>
                          </div>
                          <div class="fl-pkg-save-price">
                            <strong>You Save: $110</strong>
                          </div>
                        </div>
                        <div class="fl-pkg-grd-ftr">
                          <div class="fl-add-to-cart-btn-img">
                            <a href="#"><img alt="Phyto-3 package 3" class="lazy" data-src="assets/images/fl-add-to-cart-btn-img.png"></a>
                          </div>
                          <ul class="clearfix ulc">
                            <li>
                              <em><img alt="Phyto-3 package 4" class="lazy" data-src="assets/images/fl-shipping-icon.png"></em>
                              Free US Shipping
                            </li>
                            <li>
                              <em><img alt="Phyto-3 package 5" class="lazy" data-src="assets/images/fl-money-back-icon.png"></em>
                              180 day money back guarantee
                            </li>
                          </ul>
                          <div class="fl-creditcards">
                            <a href="#"><img alt="Phyto-3 package 6" class="lazy" data-src="assets/images/fl-creditcards.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>  

<section class="out-stock-sec plr-10">
  <span class="top-wave-img lazy" data-src="assets/images/top-wave-img.jpg"></span>
  <div class="container">
    <div class="row">
        <div class="col-sm-12">
          <div class="out-stock-sec-hdr">
            <h2>Why Am I Offering <span>Açaí Advanced</span><br> For Such A Huge Discount?</h2>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 full-width-1023">
        <div class="text-center out-stock-sec-grd-img-1">
          <img class="lazy"  data-src="assets/images/out-stock-sec-grd-img-1.png">
        </div>
      </div>
      <div class="col-sm-12 col-md-6 full-width-1023">
        <div class="dft-text-module">
          <p> <span class="lazy text-inline-mark-left dst-ml-15" data-src="assets/images/text-2-line-bg-xs.png"> Açaí Advanced </span>  is your one way ticket to burning fat quickly, naturally and without toxic chemicals.</p>
          <p>It features a powerful acai blend that helps your to stop storing fat and to start burning it…</p>
          <p>While keeping your gut healthy in the process.</p>

          <div class="dft-multiline-bg dst-ml-15">
            <p><span class="lazy" data-src="assets/images/text-line-bg-lg.png">Plus, when you combine these amazing</span></p>
            <p><span class="lazy" data-src="assets/images/text-line-bg-md.png">ingredients with Structured Silver…</span></p>
          </div>
          <p>You have everything you need to get the body and health you want.</p>
          <div class="dft-multiline-bg dst-ml-15">
            <p><span class="lazy" data-src="assets/images/text-line-bg-lg.png">This makes Açaí Advanced a critical for your</span></p>
            <p><span class="lazy" data-src="assets/images/text-2-line-bg-xs.png">success.</span></p>
          </div>
          <p>And you should also know that due to the high demand of <span class="lazy text-inline-mark-left dst-ml-15" data-src="assets/images/text-2-line-bg-xs.png" style="margin-left: -3px;"> Açaí Advanced …</span></p>
          <p>There is currently a massive strain on my production capacity for this product…</p>
        </div>
      </div>
    </div>
    <div class="gap-15"></div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 pull-right full-width-1023">
        <div class="text-center out-stock-sec-grd-img-2">
          <img class="lazy"  data-src="assets/images/out-stock-sec-grd-img-2.png">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 pull-left full-width-1023">
        <div class="dft-text-module ">
          <p>And folks are stocking up multiple orders <dfn class="dst-pr-15-sm-15">of</dfn> <br> <span class="lazy text-inline-mark-left dst-ml-15 dst-ml-15-sm-0" data-src="assets/images/text-2-line-bg-xs.png"> Açaí Advanced</span> every day…</p>
          <div class="dft-multiline-bg dst-ml-15">
            <p><span class="lazy" data-src="assets/images/text-line-bg-lg.png">Which is why I’m giving you the exclusive</span></p>
            <p><span class="lazy" data-src="assets/images/text-line-bg-lg.png">  opportunity you to secure multiple bottles of</span></p>
            <p><span class="lazy" data-src="assets/images/text-2-line-bg-xs.png"> Açaí Advanced right now…</span></p>
          </div>
          <p>So you continue to enjoy the numerous benefits month-after-month…</p>
          <p>Without having to worry about coming back and finding out that we’re “out of stock.”</p>
        </div>
      </div>
    </div>
  </div>
  <span class="btm-wave-img lazy" data-src="assets/images/btm-wave-img.jpg"></span>
</section>


<section class="fl-pkg-section">
  <div class="pkg-area-con-bg pkg-area-con-bg-2">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="pkg-area-con">
            <div class="fl-pkg-sec-hdr">
              <h2>Stock Up On <span>Açaí Advanced</span><br> <strong>Now And Save!</strong></h2>
            </div>
            <div class="fl-pkg-grd-controller">
              <ul class=" clearfix ulc">
                <li class="order3 hide-sm">
                  <div class="fl-pkg-grd-col-btm-bdr">
                    <div class="fl-pkg-grd-col-bdr-solid">
                      <div class="fl-pkg-grd-col">
                        <div class="fl-pkg-grd-col-hdr lazy" data-src="assets/images/black-gradient-bg.png">
                          <span class="lazy" data-src="assets/images/sky-gradient-bg.png">SAMPLE PACKAGE</span>
                          <strong>1 month SUPPLY</strong>
                        </div>
                        <div class="fl-pkg-grd-col-fea-img">
                          <span><img alt="Phyto-3 package 1" class="lazy" data-src="assets/images/pkg-price-1.png"></span>
                          <div><img alt="Phyto-3 package 2" class="lazy" data-src="assets/images/pkg-img-01.png"></div>
                        </div>
                        <div class="text-center">
                          <div class="fl-pkg-price">
                            <strong>39</strong>
                            <sup>00</sup>
                            <sub>/each</sub>
                          </div>
                          <div class="fl-pkg-save-price">
                            <strong>You Save: $110</strong>
                          </div>
                        </div>
                        <div class="fl-pkg-grd-ftr">
                          <div class="fl-add-to-cart-btn-img">
                            <a href="#"><img alt="Phyto-3 package 3" class="lazy" data-src="assets/images/fl-add-to-cart-btn-img.png"></a>
                          </div>
                          <ul class="clearfix ulc">
                            <li>
                              <em><img alt="Phyto-3 package 4" class="lazy" data-src="assets/images/fl-shipping-icon.png"></em>
                              Free US Shipping
                            </li>
                            <li>
                              <em><img alt="Phyto-3 package 5" class="lazy" data-src="assets/images/fl-money-back-icon.png"></em>
                              180 day money back guarantee
                            </li>
                          </ul>
                          <div class="fl-creditcards">
                            <a href="#"><img alt="Phyto-3 package 6" class="lazy" data-src="assets/images/fl-creditcards.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="order1">
                  <div class="fl-pkg-grd-col-btm-bdr">
                    <div class="fl-pkg-grd-col-bdr-solid">
                      <div class="fl-pkg-grd-col">
                        <div class="fl-pkg-grd-col-hdr lazy" data-src="assets/images/black-gradient-bg.png">
                          <span class="lazy" data-src="assets/images/red-gradient-bg.png">Best Value</span>
                          <strong>6 month SUPPLY</strong>
                        </div>
                        <div class="fl-pkg-grd-col-fea-img">
                          <span><img alt="Phyto-3 package 7" class="lazy" data-src="assets/images/pkg-price-2.png"></span>
                          <div><img alt="Phyto-3 package 8" class="lazy" data-src="assets/images/pkg-img-02.png"></div>
                        </div>
                        <div class="text-center">
                          <div class="fl-pkg-price">
                            <strong>29</strong>
                            <sup>00</sup>
                            <sub>/each</sub>
                          </div>
                          <div class="fl-pkg-save-price">
                            <strong>You Save: $720</strong>
                          </div>
                        </div>
                        <div class="fl-pkg-grd-ftr">
                          <div class="fl-add-to-cart-btn-img">
                            <a href="#"><img alt="Phyto-3 package 9" class="lazy" data-src="assets/images/fl-add-to-cart-btn-img.png"></a>
                          </div>
                          <ul class="clearfix ulc">
                            <li>
                              <em><img alt="Phyto-3 package 10" class="lazy" data-src="assets/images/fl-shipping-icon.png"></em>
                              Free US Shipping
                            </li>
                            <li>
                              <em><img alt="Phyto-3 package 11" class="lazy" data-src="assets/images/fl-money-back-icon.png"></em>
                              180 day money back guarantee
                            </li>
                          </ul>
                          <div class="fl-creditcards">
                            <a href="#"><img alt="Phyto-3 package 12" class="lazy" data-src="assets/images/fl-creditcards.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="order2">
                  <div class="fl-pkg-grd-col-btm-bdr">
                    <div class="fl-pkg-grd-col-bdr-solid">
                       <div class="fl-pkg-grd-col">
                        <div class="fl-pkg-grd-col-hdr lazy" data-src="assets/images/black-gradient-bg.png">
                          <span class="lazy" data-src="assets/images/pest-gradient-bg.png">most popular</span>
                          <strong>3 month SUPPLY</strong>
                        </div>
                        <div class="fl-pkg-grd-col-fea-img">
                          <span><img alt="Phyto-3 package 13" class="lazy" data-src="assets/images/pkg-price-3.png"></span>
                          <div><img alt="Phyto-3 package 14" class="lazy" data-src="assets/images/pkg-img-03.png"></div>
                        </div>
                        <div class="text-center">
                          <div class="fl-pkg-price">
                            <strong>35</strong>
                            <sup>00</sup>
                            <sub>/each</sub>
                          </div>
                          <div class="fl-pkg-save-price">
                            <strong>You Save: $342</strong>
                          </div>
                        </div>
                        <div class="fl-pkg-grd-ftr">
                          <div class="fl-add-to-cart-btn-img">
                            <a href="#"><img alt="Phyto-3 package 15" class="lazy" data-src="assets/images/fl-add-to-cart-btn-img.png"></a>
                          </div>
                          <ul class="clearfix ulc">
                            <li>
                              <em><img alt="Phyto-3 package 16" class="lazy" data-src="assets/images/fl-shipping-icon.png"></em>
                              Free US Shipping
                            </li>
                            <li>
                              <em><img alt="Phyto-3 package 17" class="lazy" data-src="assets/images/fl-money-back-icon.png"></em>
                              180 day money back guarantee
                            </li>
                          </ul>
                          <div class="fl-creditcards">
                            <a href="#"><img alt="Phyto-3 package 18" class="lazy" data-src="assets/images/fl-creditcards.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="order3 show-sm">
                  <div class="fl-pkg-grd-col-btm-bdr">
                    <div class="fl-pkg-grd-col-bdr-solid">
                      <div class="fl-pkg-grd-col">
                        <div class="fl-pkg-grd-col-hdr lazy" data-src="assets/images/black-gradient-bg.png">
                          <span class="lazy" data-src="assets/images/sky-gradient-bg.png">SAMPLE PACKAGE</span>
                          <strong>1 month SUPPLY</strong>
                        </div>
                        <div class="fl-pkg-grd-col-fea-img">
                          <span><img alt="Phyto-3 package 1" class="lazy" data-src="assets/images/pkg-price-1.png"></span>
                          <div><img alt="Phyto-3 package 2" class="lazy" data-src="assets/images/pkg-img-01.png"></div>
                        </div>
                        <div class="text-center">
                          <div class="fl-pkg-price">
                            <strong>39</strong>
                            <sup>00</sup>
                            <sub>/each</sub>
                          </div>
                          <div class="fl-pkg-save-price">
                            <strong>You Save: $110</strong>
                          </div>
                        </div>
                        <div class="fl-pkg-grd-ftr">
                          <div class="fl-add-to-cart-btn-img">
                            <a href="#"><img alt="Phyto-3 package 3" class="lazy" data-src="assets/images/fl-add-to-cart-btn-img.png"></a>
                          </div>
                          <ul class="clearfix ulc">
                            <li>
                              <em><img alt="Phyto-3 package 4" class="lazy" data-src="assets/images/fl-shipping-icon.png"></em>
                              Free US Shipping
                            </li>
                            <li>
                              <em><img alt="Phyto-3 package 5" class="lazy" data-src="assets/images/fl-money-back-icon.png"></em>
                              180 day money back guarantee
                            </li>
                          </ul>
                          <div class="fl-creditcards">
                            <a href="#"><img alt="Phyto-3 package 6" class="lazy" data-src="assets/images/fl-creditcards.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>  

<section class="fl-ftr-top-sec plr-10">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 pull-right">
        <div class="fl-ftr-top-sec-rgt-img">
          <img class="lazy" data-src="assets/images/ye-pkg-sec-ftr-img.jpg">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12  col-md-9 pull-left">
        <div class="dft-text-module">
          <p>If I don’t love my experience with <span class="lazy text-inline-mark" data-src="assets/images/text-2-line-bg-xs.png">Açaí Advanced</span> then I don’t pay a dime. </p>
          <p>My decision is completely risk free. If I change my mind I just call or email customer service and get a full refund. I don’t even have to return the bottles, they are mine to keep.</p>
          <p>No hassles. No risks. All guaranteed for a full 6 months.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="thank-you-line">
          <strong>No thank you. I’ll pass on this huge savings now and realize I will never have this opportunity again.</strong>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="fl-footer-wrap plr-10">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="fl-footer-inner">
          <nav class="fl-ftr-nav">
            <ul class="clearfix ulc">
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </nav>
          <div class="fl-copyright">
            <p>Copyright 2019 - Therapy Science - All Rights Reserved</p>
          </div>
          <div class="fl-ftr-des">
            <p>The products and the claims made about specific products on or through this site have not been evaluated by the United States Food and Drug Administration and are not intended to diagnose, treat, cure or prevent disease. The information provided on this site is for informational purposes only and is not intended as a substitute for advice from your physician or other health care professional or any information contained on or in any product label or packaging. You should not use the information on this site for diagnosis or treatment of any health problem or for prescription of any medication or other treatment. You should consult with a healthcare professional before starting any diet, exercise or supplementation program, before taking any medication, or if you have or suspect you might have a health problem.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<script src="assets/js/jquery.min.js"></script>
<script defer src="assets/js/lazyload.min.js"></script>
<script type="text/javascript">window.onload = function() {var newd1 = new LazyLoad({elements_selector: ".lazy"});}</script>
</body>
</html>