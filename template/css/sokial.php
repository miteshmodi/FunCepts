<?php
   header('content-type: text/css');
   ob_start('ob_gzhandler');
   header('Cache-Control: max-age=31536000, must-revalidate');

   include_once '../../../core/Settings.php';
   $css = template_settings(1);

?>
body{background:<?php echo $css->background_color; ?>;overflow-y:hidden;color:<?php echo $css->color_text; ?>;font-family:"<?php echo $css->font_text; ?>","Helvetica",sans-serif;font-weight:400;font-size:<?php echo $css->size_text; ?><?php echo $css->unity_text; ?>;margin:0 auto;padding:0;line-height:<?php echo $css->line_height; ?>em;letter-spacing:<?php echo $css->letter_spacing; ?>px;text-align:<?php echo $css->text_align; ?>;overflow-y:scroll}
article,aside,details,figcaption,figure,footer,header,hgroup,nav,section,summary{display:block}
img{border:0}
h1,h2,h3,h4,h5,h6,strong,b{margin:0;padding:0;font-weight:400}
a{color:<?php echo $css->color_link; ?>;text-decoration:none}
a:hover{color:<?php echo $css->color_link_hover; ?>}
a:visited{color:<?php echo $css->color_link_visited; ?>}
a:active{color:<?php echo $css->color_link_active; ?>}
li{list-style:none}
.clear{clear:both}
.semi_bold{font-weight:600}
.bold{font-weight:700}
.capital{text-transform:capitalize}
.left{float:left}
.right{float:right}
.gray{color:#999}
.fa{position:relative;display:table-cell;width:55px;height:30px;text-align:center;font-size:16px;top:8px}
.no_results{width:200px;text-align:center;padding:10px;margin:10px auto 0;margin-bottom:10px;background:#f7f7f7;color:#999;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}
input{border:1px solid #ccc;color:#999;padding:5px;font-family:"Open Sans","Helvetica",sans-serif;margin-bottom:10px;line-height:16px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075);-moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075);box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075)}
input:focus{border:1px solid #aaa;box-shadow:0;-webkit-box-shadow:0;-moz-box-shadow:0;box-shadow:0;outline:0}
select{background:url(../img/arrow_select.png) no-repeat right #f7f7f7;appearance:none;-moz-appearance:none;-webkit-appearance:none;display:block;width:150px;height:30px;padding:0 8px;cursor:pointer;margin-bottom:5px;color:#555;border:1px solid #ccc;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}
select:focus{outline:0}
input[type="checkbox"]{display:none}
input[type="checkbox"]+label{display:inline;background:url(../img/off.png) no-repeat;padding-left:20px;cursor:pointer;margin-bottom:0}
input[type="checkbox"]:checked + label{background:url(../img/on.png)  no-repeat}
header{background:<?php echo $css->background_header; ?>;height:40px;width:100%;position:fixed;z-index:99}
header #logo{float:left;margin-left:15px;margin-top:8px}
header input{background:#2574A9;font-family:"Open Sans","Helvetica",sans-serif;width:350px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-style:italic;margin-left:15px;margin-top:10px;float:left;border:0;border-left:1px solid #57a1d3;color:#57a1d3;font-size:14px;padding:0 10px;-webkit-box-shadow:inset 0 0px 0px rgba(0, 0, 0, 0.075);-moz-box-shadow:inset 0 0px 0px rgba(0, 0, 0, 0.075);box-shadow:inset 0 0px 0px rgba(0, 0, 0, 0.075);-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}
header input:focus{border:0;box-shadow:0;outline:0;color:#fff;border-left:1px solid #fff}
nav ul,nav li{outline:0;margin:0;padding:0}
table{width:100%;margin-bottom:10px;border-collapse:collapse;border-spacing:0;background-color:transparent;border:1px solid #ccc}
table thead tr{background:#f7f7f7}
table tbody td{background:#fff}
table thead td{padding:8px;line-height:18px;text-align:left;vertical-align:top}
table tbody td{padding:8px;line-height:18px;text-align:left;vertical-align:top;border-top:1px solid #f0f0f0}
table tbody tr:hover td,.table tbody tr:hover th{background:#f7f7f7}
#notifs{float:right;margin-right:10px}
#notifs a{position:relative}
#notifs i{display:inline;top:10px;color:#165179;font-size:20px;margin-left:5px}
#notifs i:hover,#notifs p,#notifs p a{color:#fff}
.notif{color:#fff;padding:0 5px;font-size:10px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;position:absolute;left:0;top:20px}
.notif_message{background:#3498db}
.notif_friend{background:#27ae60}
.notif_activity{background:#c0392b}
#main_menu{background:#fff;border-right:1px solid #ccc;position:fixed;z-index:98;top:0;bottom:0;height:100%;left:0;width:55px;overflow:hidden;-webkit-transition:width .2s linear;transition:width .2s linear;-webkit-transform:translateZ(0) scale(1,1);opacity:1}
#main_menu:hover{width:200px;overflow:hidden;opacity:1}
#main_menu > ul{margin-top:40px}
#main_menu li{position:relative;display:block;width:200px}
#main_menu li:hover > a,nav#main_menu li.active > a{color:#fff;background:#2574A9}
#main_menu li > a{position:relative;width:200px;display:table;border-collapse:collapse;border-spacing:0;color:#999;border-top:1px solid #f0f0f0;text-decoration:none;-webkit-transform:translateZ(0) scale(1,1);-webkit-transition:all .14s linear;transition:all .14s linear}
#main_menu li > a img{width:35px;height:35px;margin:10px;position:relative;display:table-cell;overflow:hidden;-webkit-border-radius:50px;-moz-border-radius:50px;border-radius:50px}
#main_menu li i{display:block;font-size:14px}
#main_menu > ul#logout{position:absolute;left:0;bottom:0;background:#f7f7f7}
#main_menu > ul#logout li a:hover{background:#c0392b}
#main_menu > ul > li span{position:relative;display:table-cell;vertical-align:middle;width:150px;padding-left:5px}
#index{width:750px;margin:0 auto;padding-top:70px}
#infos_index{width:400px;margin-left:10px;float:left;color:#fff;text-shadow:0px 0px 2px #000}
#infos_index h1{font-size:28px;margin-bottom:20px}
#login_index{width:300px;margin-right:10px;float:right}
#login_index .btn_green{display:block;width:280px}
#login{background:#fff;padding:10px;margin-bottom:15px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}
#login form input:nth-child(1){width:260px}
#login form input:nth-child(2){width:160px}
#login small{display:block;font-size:11px;color:#999;margin-bottom:-5px}
#register{width:750px;margin:50px auto 0;position:relative;background:#fff;border:1px solid #ccc;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}
#register header{background:none;height:10px;width:730px;position:relative;z-index:98;-webkit-border-top-left-radius:4px;-webkit-border-top-right-radius:4px;-moz-border-radius-topleft:4px;-moz-border-radius-topright:4px;border-top-left-radius:4px;border-top-right-radius:4px}
#register header input{background:none;border:0}
#register header #avatar{display:none}
#register #content{padding:10px;width:50%;margin:60px auto 0}
#border_pic{background:#e9eaed;border-bottom:1px solid #ccc;-webkit-border-radius:70px;-moz-border-radius:70px;border-radius:70px;width:115px;height:115px;position:absolute;top:-60px;left:298px;z-index:90}
.round_reg{position:absolute;top:-50px;left:305px;overflow:hidden;z-index:98;-webkit-border-radius:50px;-moz-border-radius:50px;border-radius:50px;width:100px;height:100px}
.user_reg img{width:100px;height:100px}
#registrer_photo #btn_pic{width:250px;float:right;font-style:normal;font-weight:600;color:#fff;padding:5px 10px 5px 10px;font-size:12px;text-align:center;cursor:pointer;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;background:#e67e22;border:1px solid #ab6f06;background-image:-webkit-gradient(linear,left top,left bottom,from(#e67e22),to(#c76915));background-image:-webkit-linear-gradient(top,#e67e22,#c76915);background-image:-moz-linear-gradient(top,#e67e22,#c76915);background-image:-ms-linear-gradient(top,#e67e22,#c76915);background-image:-o-linear-gradient(top,#e67e22,#c76915);background-image:linear-gradient(to bottom,#e67e22,#c76915)}
#registrer_photo #btn_pic:hover{color:#fff;box-shadow:inset 0 1px 0 rgba(255,255,255,0.4);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.4);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.4);-o-box-shadow:inset 0 1px 0 rgba(255,255,255,0.4);filter:progid:DXImageTransform.Microsoft.Shadow(color=#fff,Direction=180,Strength=0)}
.form label{display:inline-block;width:220px}
.form input,select{display:inline-block}
.form textarea{width:100%;height:100px;border:1px solid #ccc;color:#999;padding:5px;font-family:"Open Sans","Helvetica",sans-serif;margin-bottom:10px;line-height:16px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075);-moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075);box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075)}
.form textarea:focus{border:1px solid #aaa;box-shadow:0;-webkit-box-shadow:0;-moz-box-shadow:0;box-shadow:0;outline:0}
.form input[type="submit"]{margin-top:10px;margin-bottom:0;float:right}
#upload{width:750px;margin:0 auto;position:relative;background:#fff;border:1px solid #ccc;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}
#upload #content{padding:10px;width:50%;margin:10px auto 0}
#page{padding-top:50px;margin-left:65px}
#page_full{padding-top:50px;margin-left:10px}
#content{width:750px;margin:0 auto}
.bloc{background:#fff;padding:10px;border:1px solid #ccc;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}
#right_chat{background:#fff;z-index:98;display:none;position:fixed;right:0;top:0;width:200px;border-left:1px solid #ccc;height:100%;overflow:auto}
#chat{padding-top:40px}
#chat nav,#chat ul{margin:0;padding:0}
#chat ul li{display:inline;text-align:center}
#chat ul li a{display:inline-block;padding:10px;margin-right:-4px;color:#aaa;width:80px;border-bottom:1px solid #ccc}
#chat ul li a:hover,#chat ul li.active a{background:#f7f7f7;color:#505050;border-bottom:1px solid #2574A9}
.chat_user{display:block;padding:10px;border-bottom:1px solid #f0f0f0}
.chat_user:hover{background:#f7f7f7;border-left:1px solid #2574A9}
.chat_user .pic_round{overflow:hidden;-webkit-border-radius:50px;-moz-border-radius:50px;border-radius:50px;width:25px;height:25px;float:left;margin-right:10px}
.chat_user img{width:25px;height:25px}
.chat_user .username{float:left;color:#999}
.chat_user .support{color:green;font-size:11px;float:right}
.chat_user .online{font-size:20px;float:left;margin-top:1px;margin-right:3px}
#open_chat{background:#f7f7f7;border-top:1px solid #ccc;border-left:1px solid #ccc;color:#999;z-index:97;position:fixed;right:0;bottom:0;width:180px;padding:5px 10px;cursor:pointer}
#close_chat{background:#f7f7f7;border-top:1px solid #f0f0f0;color:#999;z-index:97;position:fixed;right:0;bottom:0;width:180px;padding:5px 10px;cursor:pointer}
#close_chat i{font-family:FontAwesome;font-size:16px;float:left;font-style:normal;font-weight:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
#close_chat span{float:right}
.btn{color:#fff;padding:5px 10px 5px 10px;text-align:center;cursor:pointer;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}
.btn:hover{color:#fff;box-shadow:inset 0 1px 0 rgba(255,255,255,0.4);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.4);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.4);-o-box-shadow:inset 0 1px 0 rgba(255,255,255,0.4);filter:progid:DXImageTransform.Microsoft.Shadow(color=#fff,Direction=180,Strength=0)}
.btn_blue{background:<?php echo $css->button_blue; ?>;border:1px solid #1d6595;background-image:-webkit-gradient(linear,left top,left bottom,from(#3188c3),to(#2574A9));background-image:-webkit-linear-gradient(top,#3188c3,#2574A9);background-image:-moz-linear-gradient(top,#3188c3,#2574A9);background-image:-ms-linear-gradient(top,#3188c3,#2574A9);background-image:-o-linear-gradient(top,#3188c3,#2574A9);background-image:linear-gradient(to bottom,#3188c3,#2574A9)}
.btn_green{background:<?php echo $css->button_green; ?>;border:1px solid #527931;background-image:-webkit-gradient(linear,left top,left bottom,from(#78AB4E),to(#65933f));background-image:-webkit-linear-gradient(top,#78AB4E,#65933f);background-image:-moz-linear-gradient(top,#78AB4E,#65933f);background-image:-ms-linear-gradient(top,#78AB4E,#65933f);background-image:-o-linear-gradient(top,#78AB4E,#65933f);background-image:linear-gradient(to bottom,#78AB4E,#65933f)}
.btn_red{background:<?php echo $css->button_red; ?>;border:1px solid #982c21;background-image:-webkit-gradient(linear,left top,left bottom,from(#e74c3c),to(#c0392b));background-image:-webkit-linear-gradient(top,#e74c3c,#c0392b);background-image:-moz-linear-gradient(top,#e74c3c,#c0392b);background-image:-ms-linear-gradient(top,#e74c3c,#c0392b);background-image:-o-linear-gradient(top,#e74c3c,#c0392b);background-image:linear-gradient(to bottom,#e74c3c,#c0392b)}
*html #popup{position:absolute}
*html .popup_block{position:absolute}
#popup{display:none;background:#000;position:fixed;left:0;top:0;width:100%;height:100%;z-index:100;-khtml-opacity:0.5;-moz-opacity:0.5;-ms-filter:"alpha(opacity=5)";filter:progid:DXImageTransform.Microsoft.Alpha(opacity=5);filter:alpha(opacity=5);opacity:0.5}
.popup_block{display:none;background:#fff;float:left;position:fixed;top:50%;left:50%;z-index:101;-webkit-box-shadow:0px 0px 20px #000;-moz-box-shadow:0px 0px 20px #000;box-shadow:0px 0px 20px #000;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}
.popup_top{background:#2574A9;padding:10px;-webkit-border-top-left-radius:3px;-webkit-border-top-right-radius:3px;-moz-border-radius-topleft:3px;-moz-border-radius-topright:3px;border-top-left-radius:3px;border-top-right-radius:3px}
.popup_top h4{font-weight:400;font-size:13px;color:#fff}
.popup_bottom{background:#f7f7f7;padding:5px;border-top:1px solid #ccc;-webkit-border-bottom-right-radius:3px;-webkit-border-bottom-left-radius:3px;-moz-border-radius-bottomright:3px;-moz-border-radius-bottomleft:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px}
.popup_close{position:absolute;top:0;right:5px;color:#303030;font-size:14px}
.popup_close:hover{color:#accbff}
.languages{width:500px}
.languages li{width:150px;float:left;margin-bottom:10px}
.mess{background:#fcf8e3;height:30px;margin:10px 0;border:1px solid #fbeed5;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;color:#c09853}
.mess_success{background:#468847;border:1px solid #284f29;color:#fff}
.mess_success span{float:left;font-size:16px;margin-right:10px;background:#366937;padding-top:5px;padding-bottom:5px;padding-left:15px;padding-right:15px;border-right:1px solid #284f29}
.mess_success p{margin-top:7px}
.mess_error{background:#b85454;border:1px solid #8f2a2a;color:#fff}
.mess_error span{float:left;font-size:30px;margin-right:10px;background:#964545;padding:5px 15px;border-right:1px solid #8f2a2a}
.mess_error p{margin-top:5px}
.pagination{margin-top:10px;padding:0}
.pagination ul{display:inline-block;*display:inline;*zoom:1;margin:0;padding:0;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}
.pagination li{display:inline}
.pagination a{background-color:#f7f7f7;float:left;padding:0 14px;line-height:34px;text-decoration:none;border:1px solid #ccc;border-left-width:0}
.pagination a:hover,.pagination .active a{background-color:#fff}
.pagination .active a{color:#999;cursor:default}
.pagination .disabled span,.pagination .disabled a,.pagination .disabled a:hover{color:#999;background-color:transparent;cursor:default}
.pagination li:first-child a{border-left-width:1px;-webkit-border-radius:3px 0 0 3px;-moz-border-radius:3px 0 0 3px;border-radius:3px 0 0 3px}
.pagination li:last-child a{-webkit-border-radius:0 3px 3px 0;-moz-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0}
#submenu{width:100%;border:1px solid #ccc;height:40px;background:#fff;margin-bottom:20px}
#submenu .up{font-size:13px;float:right;border:0;color:#00B16A;font-weight:600}
#submenu .up:hover{border:0;background:#fff;color:#00B16A}
#submenu a:first-child{margin:0}
#submenu a{display:inline-block;padding:10px;margin:0;margin-left:-4px;border-right:1px solid #f0f0f0;color:#999}
#submenu a:hover,#submenu .active{background:#f7f7f7;color:#505050;border-bottom:2px solid #2574A9}
#submenu a i{font-size:18px;display:inline;top:2px}
#langages{background:#f7f7f7;border:1px solid #ccc;border-bottom:0;color:#999;z-index:97;position:fixed;right:210px;bottom:0;width:45px;cursor:pointer}
#langages i{display:block;top:5px;right:5px;color:#165179;font-size:20px}
#menu_user{text-align:center;margin-top:10px}
#menu_user a{color:#2574A9;display:inline-block;margin-right:-4px;padding:10px 20px;border-top:1px solid #ccc;border-left:1px solid #ccc;border-bottom:1px solid #ccc}
#menu_user a:hover,#menu_user .select{background:#f7f7f7;color:#303030}
#menu_user a:first-child{border-left:1px solid #ccc;-webkit-border-top-left-radius:4px;-webkit-border-bottom-left-radius:4px;-moz-border-radius-topleft:4px;-moz-border-radius-bottomleft:4px;border-top-left-radius:4px;border-bottom-left-radius:4px}
#menu_user a:last-child{border-right:1px solid #ccc;-webkit-border-top-right-radius:4px;-webkit-border-bottom-right-radius:4px;-moz-border-radius-topright:4px;-moz-border-radius-bottomright:4px;border-top-right-radius:4px;border-bottom-right-radius:4px}
#session{margin:20px 0;border-top:1px solid #ccc}
#session h3{padding:10px;margin-top:10px;text-align:center}
.session{background:#f7f7f7;padding:5px 10px;margin-top:10px;border:1px solid #ccc}
.session p{margin:0;padding:0;font-weight:600}
.session span{float:right;font-weight:normal}
.ads{float:right;width:175px;margin-top:10px}
.ads h5{color:#999;font-size:11px}
.advertising{margin-top:10px;padding-bottom:10px;border-bottom:1px solid #f0f0f0}
.advertising img{width:175px;height:100px}
.sk,[sokial]{position:relative;display:inline-block}
.sk:before,.sk:after,[sokial]:before,[sokial]:after{position:absolute;-webkit-transform:translate3d(0, 0, 0);-moz-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);visibility:hidden;opacity:0;z-index:99;pointer-events:none;-webkit-transition:0.3s ease;-moz-transition:0.3s ease;transition:0.3s ease}
.sk:hover:before,.sk:hover:after,[sokial]:hover:before,[sokial]:hover:after{visibility:visible;opacity:1}
.sk:before,[sokial]:before{content:'';position:absolute;background:transparent;border:6px solid transparent;z-index:99}
.sk:after,[sokial]:after{content:attr(sokial);background:#303030;color:#fff;text-shadow:0 -1px 0px #000;padding:8px 10px;font-size:12px;line-height:12px;white-space:nowrap}
.sk-bubble:before{border-top-color:#303030}
.sk-bubble:before{margin-bottom:-12px}
.sk-bubble:after{margin-left:-50%}
.sk-bubble:before,.sk-bubble:after{bottom:100%;left:20%}
.sk-bubble:hover:before,.sk-bubble:hover:after{-webkit-transform:translateY(-8px);-moz-transform:translateY(-8px);transform:translateY(-8px)}
.mess_valid{width:100%;height:40px;background:#13750e;position:fixed;z-index:97;margin-top:40px}
.mess_valid p{text-align:center;color:#fff;}
#send_message textarea{width:470px;height:50px;margin:10px;padding:5px;border:0;border-left:2px solid #ccc}
#send_message textarea:focus{border-left:2px solid #2574A9;box-shadow:0;-webkit-box-shadow:0;-moz-box-shadow:0;box-shadow:0;outline:0}
.conversation{cursor:pointer;float:left;width:200px;padding:10px;border-bottom:1px solid #f0f0f0}
.conversation:hover{background:#f7f7f7}
.conversation:first-child{-webkit-border-top-left-radius:4px;-webkit-border-top-right-radius:4px;-moz-border-radius-topleft:4px;-moz-border-radius-topright:4px;border-top-left-radius:4px;border-top-right-radius:4px}
.conversation:last-child{border-bottom:0;-webkit-border-bottom-right-radius:4px;-webkit-border-bottom-left-radius:4px;-moz-border-radius-bottomright:4px;-moz-border-radius-bottomleft:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px}
.conversation img{-webkit-border-radius:50px;-moz-border-radius:50px;border-radius:50px;width:50px;height:50px;margin-right:10px;float:left}
.conversation span{color:#2574A9;text-transform:capitalize}
.conversation:hover .times,.conversation:hover p{color:#505050}
.conversation p{width:100px;color:#999;margin:0}
.conversation .unread{font-size:10px;background:#EB9532;padding:2px 5px;color:#fff;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}
.convs{margin:0;padding:0;width:220px;height:800px;overflow:auto;border-right:1px solid #ccc;}
html ul.convs li.active,html ul.convs li.active a{background:#f7f7f7}
html ul.convs li.active a{color:#505050}
#select_convers{z-index:1;position:absolute;right:25%;top:50%;background:#f7f7f7;color:#999;padding:5px 10px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}
.disc{width:509px}
#reply{background:#fff;z-index:97;position:absolute;right:0;bottom:0;height:800px;overflow:auto;-webkit-border-bottom-right-radius:4px;-moz-border-radius-bottomright:4px;border-bottom-right-radius:4px}
.reply_receiver,.reply_sender{position:relative;margin:10px}
.reply_receiver .img_reply{-webkit-border-radius:50px;-moz-border-radius:50px;border-radius:50px;width:50px;height:50px;margin-right:17px;margin-left:10px;float:left}
.reply_receiver p{max-width:300px;float:left;padding:5px 10px;background:#b9e4ed;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}
.reply_receiver span{float:left;font-size:10px;display:block;margin-top:10px;margin-left:10px;color:#aaa}
.reply_sender .img_reply{-webkit-border-radius:50px;-moz-border-radius:50px;border-radius:50px;width:50px;height:50px;margin-left:17px;margin-right:10px;float:right}
.reply_sender p{max-width:300px;float:right;padding:5px 10px;background:#c8fad3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}
.reply_sender .pos_time{float:right;margin-right:10px;margin-top:15px;}
.reply_sender .read{font-size:10px;color:#ccc}
.reply_sender .tim{font-size:10px;color:#aaa}
#preview_photo img{width:100%;height:200px;margin:0;padding:0}
#photo_user input{width:200px;font-style:normal;margin:0;margin-top:2px;padding:10px;background:none;color:#505050;font-size:12px;text-align:center;cursor:pointer;border:0;-webkit-box-shadow:inset 0 0px 0px rgba(0, 0, 0, 0.075);-moz-box-shadow:inset 0 0px 0px rgba(0, 0, 0, 0.075);box-shadow:inset 0 0px 0px rgba(0, 0, 0, 0.075);-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}
#add_photo{width:200px;height:40px;float:left;margin-top:-6px;border-right:1px solid #f0f0f0;position:relative;-webkit-border-bottom-left-radius:4px;-moz-border-radius-bottomleft:4px;border-bottom-left-radius:4px}
#add_photo:hover{background:#f7f7f7}
#add_photo i{position:absolute;top:10px;cursor:pointer}
#cover{display:none}
.comment_reply{position:absolute;border-top:1px solid #f0f0f0}
.comment_reply textarea{font-family:"Open Sans","Helvetica",sans-serif;font-size:11px;float:left;height:30px;padding:10px;border:0;resize:none;color:#999;outline:0;width:470px}
.comment_reply button{background:#f7f7f7;float:right;height:50px;margin:0;border:0;color:#999;cursor:pointer;-webkit-border-bottom-right-radius:4px;-moz-border-radius-bottomright:4px;border-bottom-right-radius:4px}
.comment_reply button:hover{background:#2574A9;color:#fff}
.comment_reply button i{font-size:24px;top:0;display:block;width:20px;height:20px}
@media only screen and (max-width:600px){
   header input{width:200px}
}