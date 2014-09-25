<?php
require_once("clases/class.listar.php");
$muestra = new Listados();
$aConf = $muestra->obtenerConfiguracion();
header("content-type:text/css");
?>
/*	################################################################

	File Name: style.css
	Template Name: Estate Plus
	http://themeforest.net/user/designingmedia
	
	1) GENERAL STRUCTURES
	2) HEADER STYLES
	3) SITE STYLES
	4) WIDGETS SIDEBARS
	5) FOOTER STYLES
	6) REAL ESTATE STYLES
	7) BLOG STYLES
	8) EFFECTS & MODULES
	9) COLOR SCHEMES
	10) RESPONSIVE
	
################################################################# */ 


@import url(css/flexslider.css) screen;
@import url(css/sinister.css) screen;
@import url(css/fhmm.css) screen;
@import url(fancyBox/jquery.fancybox.css) screen;

/*	################################################################
	1. GENERAL STRUCTURES
################################################################# */

	* { 
		margin: 0;
		padding: 0;
	} 
	body {
		font-family: 'Open Sans', Arial, Helvetica, sans-serif;
		font-size:13px;
		line-height:20px; 
		position:relative;
		color:#656565;
		padding:0;
		margin:0;
	  background:#f3f3f3;
	}

	html {
		overflow-x: hidden;
		overflow-y: auto;
	}
	
	html,
	body {
		height: 100%;
	}
	
	div.body {
		height: 100%;
		width: 100%;
	}
	
	img {
		height: auto;
		max-width: 100%;
	}
	
	.hidden { display: none; }
	.alignleft { float: left; }
	.alignright { float: right; }
	.aligncenter {
		margin-left: auto;
		margin-right: auto;
		display: block;
		clear: both;
	}
	.clear {
		clear: both;
		display: block;
		font-size: 0;
		height: 0;
		line-height: 0;
		width:100%;
	}
	::-moz-selection  {
		color: #fff;
		text-shadow:none;
		background:#2B2E31;
	}
	::selection {
		color: #fff;
		text-shadow:none;
		background:#2B2E31;
	}
	*,
	*:after,
	*:before {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		padding: 0;
		margin: 0;
	}
	a { 
		padding: 0;
		margin: 0;
		text-decoration: none; 
	}
	
	a:hover,
	a:focus {
	  text-decoration: none;
	  color:#01090C;
	}
	a img { 
		border: none; 
		vertical-align: bottom;
	}
	a.remove{
		display:block;
		height:18px;
		width:18px;
		margin:10px;
		padding-left:0 !important;
		text-indent:-9999px;
		background:url(images/remove.html) #01090C;
		border-radius:100px;
		border-style:solid;
		border-width:1px
	}

	h1, h2, h3, h4, h5, h6 {
		font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-weight: 300;
		color:#010101;
		margin-bottom: 15px;
		text-rendering: optimizeLegibility;
	}
	
	h1 {font-size: 30px; margin-top:0;}
	h2 {font-size: 22px; margin-top:0;}
	h3 {font-size: 20px; margin-top:0;}
	h4 {font-size: 18px;}
	h5 {font-size: 16px;}
	h6 {font-size: 14px;}
	
	p,
	pre,
	ul,
	ol,
	dl,
	dd,
	blockquote,
	address,
	table,
	fieldset,
	form
	{ margin-bottom: 20px; }
	
	a img {
		border: none; 
	}
	
	ul,
	ol,
	dl { margin-left: 30px; }
	ul,
	ol,
	dl {
	  margin-bottom: 1.25em;
	  font-family: inherit;
	}
	ul, ol {
	  margin-left: 0;
	}
	ul.no-bullet, ol.no-bullet {
    	margin-left: 0;
	}
	ul li ul,
	ul li ol {
	  margin-left: 1.25em;
	  margin-bottom: 0;
	}
	ol li ul,
	ol li ol {
	  margin-left: 1.25em;
	  margin-bottom: 0;
	}
	dl dt {
	  margin-bottom: 0.3em;
	  font-weight: bold;
	}
	dl dd {
	  margin-bottom: 0.75em;
	}
	.lead {
		font-family: 'Open Sans', Arial, Helvetica, sans-serif !important;
		font-size:18px;
		margin:15px 0;
		padding:0;
	}
	
	section::before,
	section::after {
		position: absolute;
		content: '';
		pointer-post-wraps: none;
	}	
	.first {clear:both}
	.last{margin-right:0}
	
	audio,
	video {
		max-width: 100%;
		height: auto;
	}

	#soundcloud {
		margin-bottom:-5px !important;
	}
	
	iframe,
	embed,
	object {
		max-width: 100%;
	}
	
	mark {
		margin:0 6px;
	}

/*	################################################################
	2. HEADER STYLES
################################################################# */

	.navbar.affix {
		position: fixed;
		top: -1px;
		left: 0;
		width: 100%;
		margin-top:0;
		z-index: 99;
		background:#ffffff;
		background: rgba(255,255,255,1);
	}	
	
	.header1 {
		background:#ffffff;
		position:relative;
		display:block;
	}

	.logo {
		float: left;
		height: 90px;
		line-height: 68px;
		margin: 0;
		padding: 0;
		text-shadow: none;
	}
	
	div.toolbar-wrapp{
		position: fixed;
		display: block;
		top: 30%;
		right:0;
		z-index:99;
	}
	
	div.loginpopup h3 {
	   clear: both;
		color: #656565;
		display: block;
		font-size: 13px;
		font-weight: 700;
		line-height: 1.6;
		text-transform:uppercase;
	
	}
	
	div.toolbar-wrapp ul li {
		list-style:none;
	}
	
	div.sticky-toolbar{
		position: relative;
		top: 30%;
		padding: .1em;
		float: right;
		max-height:106px;
			border:1px solid #F0F0F0;  
			background:#ffffff;
			-moz-box-box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);
			-webkit-box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);
			box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);		
	} 
		  
	div.sticky-toolbar ul li a {
		display: block;
		font-size: 14px;
		height: 30px;
		line-height: 29px;
		margin: 0.2em;
		text-align: center;
		transition: all 0.1s ease-in-out 0s;
		width: 30px;
			-webkit-transition: all 0.1s ease-in-out;
			-moz-transition: all 0.1s ease-in-out;
			transition: all 0.1s ease-in-out;
			-webkit-font-smoothing: antialiased;
	}
	
	div.popup ul {
		padding-bottom:0 !important; 
		margin-bottom:0 !important
	}
	
	div.popup {
		background-color: #ffffff;
		border-radius: 0;
		display: none;
		float: left;
		left: -6%;
		position: relative;
		border:1px solid #F0F0F0;  
			-moz-box-box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);
			-webkit-box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);
			box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);	
	}
	
	div.loginpopup {
		background-color: #ffffff;
		border-radius: 0;
		display: none;
		float: left;
		padding:20px;
		left: 0;
		position: relative;
		border:1px solid #F0F0F0;  
			-moz-box-box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);
			-webkit-box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);
			box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);	
	}
	
	div.popup ul {
		list-style: none outside none;
		width: 110px;
	}
	
	div.popup ul li {
		display: block;
		margin: 0.4em;
		padding: 3px 10px;
		position: relative;
		text-align: left;
	}
	
	div.popup ul li a {
		color: #010101;
		font-size: 12px;
		font-weight: 600;
		text-decoration: none;
	}
	
	.social a {
		color:#656565 !important;
	}	
	.topbar a {
		color:#ffffff !important;
	}	
	
	.topbar p {
		color:#ffffff;
		font-size:12px !important;
		margin-bottom:10px !important
	}
	
	.topbar { 
		background:#010101;
		border-top:3px solid #efefef;
		border-bottom: 1px solid #525B7C;
	}
	
	.callus,
	.topbar .topmenu {
	    display: inline-block;
		margin: 6px 0 0 0;
		padding: 2.2px 5px;
		position: relative;
	}
	
	.topbar .topflags {
	    display: inline-block;
		margin: 6px 0 0 0;
		padding: 2.4px 0 2.4px 0;
		position: relative;
	}
		
	.topbar .topmenu li {
		border-right:1px solid rgba(0, 0, 0, 0.3);
	}
	
	.topbar .topmenu li {
		float: left;
		line-height: 10px;
		list-style: none;
		padding: 5px 10px;
	}
	
	.topbar .topflags li {
		float: left;
		line-height: 11px;
		list-style: none;
		padding: 5px 4px 6px;
	}
	
	.topbar .topflags li a {
		border: 0 none;
		display: block;
		outline: medium none;
	}
	
	.topbar .topflags li img {
		display: block;
		padding: 0;
	}

	.callus span {
		margin-right:10px;
	}	
	
	.social {
		margin:30px 0; 
		padding-right:0;
	}
	
	.social span {
		background-color:#f2f2f2;
		color: #FFFFFF;
		float: left;
		font-size: 15px;
		height: 30px;
		line-height: 30px;
		margin-left: 5px;
		position: relative;
		text-align: center;
		width: 30px;
		z-index: 5;
	}
	
	.header-row {
		padding:20px 0;
	}

	#advanced_search select{
		font-size:12px;    
		position:relative;
		outline: none;
		padding:8px; 
		border-radius:0; 
		color:#8C8C8C;
		background:#fff;
		border:1px solid #eee; 
		-moz-box-box-shadow:inset 0px 1px 1px #fff, inset 0px 5px 5px #F4F4F4;
		-webkit-box-shadow:inset 0px 1px 1px #fff, inset 0px 5px 5px #F4F4F4;
		box-shadow:inset 0px 1px 1px #fff, inset 0px 5px 5px #F4F4F4;			
	} 
	
	 #advanced_search label{
		display:block;
		font-size:12px;
		float:none;
		line-height:100%;
		font-weight:inherit;
		padding:7px 0 0 0 !important;
		position:relative;
		color:#8B8B8B;
	}
	
	#advanced_search i {
		color:#ffffff;
	}
	
	 #advanced_search label{
		display:block;
		font-size:12px;
		float:none;
		line-height:100%;
		font-weight:inherit;
		padding:7px 0 0 0 !important;
		position:relative;
		color:#010101;
	}
	
	.searchmodule label {
	  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
		color:#ffffff !important;
	}
	
	.searchmodule .btn-block {
		margin-top: 28px;
	}
	
	.searchmodule {
		padding:20px 10px;
		position:relative; 
		display:block;
	}

	.search_title {
		font-size: 13px;
		line-height:1.42857;
		margin-top: 0;
		padding: 8px 0 0;
		color: #010101;
		display: block;
		font-weight: 700;
		position: relative;
		text-transform: uppercase;
	}

	#ContactFormModal .modal-content {
		border-radius:0 !important
	}
	
	#ContactFormModal {
		margin-top:10%;
	}
	
	#ContactFormModal .modal-body p {
		margin-top:20px;
	}
	
	#ContactFormModal .big_title {
		margin:10px 0 !important
	}
	
	.modal-body ul li {
		list-style:none;
		margin-bottom:4px;
	}

	#accountlogin a{
		background: none repeat scroll 0 0 #010101;
		color: #FFFFFF;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	}
	
/*	################################################################
	3. SITE STYLES
################################################################# */
	
	.overlay1 {
		background-color: rgba(255, 255, 255, 0.9);
		background-color: #fff\9;
		height: 100%;
		margin: 0;
		padding: 30px 0 ;
		position: relative;
		width: 100%;
		z-index: 1;
	}
	
	#wrapper {
		padding:20px;
		background:#ffffff;
	}

	.secondwrapper,
	.generalwrapper {
		background:#ffffff;
		padding: 45px 0 ;
		position:relative;
	}
	
	.darksection {
		padding:30px 0;
		background:#fff;
	}
	
	.parallax {
		background-attachment: fixed !important;
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	.big_title {
		font-size: 21px;
		font-weight: 600;
		line-height: 40px;
		margin: 30px 0;
		text-transform:uppercase;
	}
	
	.big_title small {
	   clear: both;
		color: #656565;
		display: block;
		font-size: 13px;
		font-weight: 300;
		line-height: 1.6;
		text-transform:uppercase;
	}

	.services_section {
		padding:0 0 40px 0
	}

	.servicebox {
		margin:15px 0;
		padding:0 15px;
		text-align:center;
	}

	.servicetitle h3{
		font-size:13px;
		font-weight:bold;
		font-family: 'Lato', Arial, Helvetica, sans-serif;
		margin-top:25px;
		margin-bottom:0;
		text-transform:uppercase;
		padding-bottom:10px;
	}
	.service-icon i {
		margin-top:10px;
		margin-bottom:0;
	}	
	
	.message_banner {
		background:#313131;
		display: block;
		font-size: 26px;
		margin: 0 auto;
		color:#ffffff;
		padding: 50px 0;
		position: relative;
		text-align: left;
		width: 100%;
	}
	
	.message h2 {
		color:#ffffff; 
		font-weight:300; 
		font-size:31px;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); 
		text-transform:uppercase;
	}
	
/*	################################################################
	4. WIDGETS & SIDEBARS
################################################################# */

	.widget {
		display:block; 
		position:relative; 
		margin:0 0 20px;
	}
	
	.cats_widget h3 {
		margin-top:0 !important;
	}
	
	.widget .title h3 {
		display: block;
		font-weight: 700;
		padding: 0 0 10px;
		font-size:15px;
		margin:10px 0 20px;
		position: relative;
		border-bottom:1px solid #efefef;
		text-transform: uppercase;
	}
	
	.agencies_widget .image {
		margin-top:20px;
	}
	
	.agencies_widget .agencies_desc {
		color:#999999;
	}
	
	.testimonial_widget .testimonial_desc {
		width:75%; color:#999999;
	}
	
	.agencies_desc .title {
		font-size:21px !important;
		text-transform:uppercase !important;
		border-bottom:0 solid #fff !important;
		margin-bottom:0 !important
	}
	
	.agent_boxes .agencies_meta span {
		display:block;
		margin:6px 0 !important;
	}
		
	.agent_boxes .agencies_meta {
		padding:0 !important;
		margin-top:0 !important;
		border-top:0 solid #fff !important;
	}
	
	.agent_boxes .img-thumbnail {
		margin-top:10px;
	}
	
	.agencies_meta {
		overflow:hidden;
		display:inline-block;
		position:relative;
		width:100%;
		padding:10px 15px; 
		border-top:1px solid #EFEFEF;
		margin-top:25px;
	}
	
	.agencies_meta span {
		margin: 0 5px 10px 0;
		padding: 0 8px 0 0;
	}
	
	.testimonial_widget .image {
		float: right;
		position: relative;
		width: 20%;
	}
	
	.testimonial_widget.last .image {
		float: left !important;
		position: relative;
		width: 20%;
	}
	
	.agents_widget .agent .image img {
		float:left;
		width:30%;
		margin-right:10px;
	}

	.tabbed_widget {
		background:#ffffff; 
		border-left:1px solid #EFEFEF; 
		border-right:1px solid #EFEFEF; 
		border-bottom:1px solid #EFEFEF; 
		padding:20px 0 0
	}
		
	.check li,
	.widget ul.list li {
		list-style:none;
		margin-bottom:5px;
	}
	
	.check li:before,
	.widget ul.list li:before {
		font-family:"FontAwesome";
		content: "\f105";
		font-style: normal;
		font-weight: normal;
		padding-right: 6px;
		padding-left:0;
		text-decoration: inherit;
	}

	.widget ul.tweet li {
		list-style:none;
		margin-bottom:15px;
	}
	.widget ul.tweet li:before {
		font-family:"FontAwesome";
		content: "\f099";
		font-style: normal;
		font-weight: normal;
		padding-right: 6px;
		padding-left:0;
		text-decoration: inherit;
	}

	.copyright small,
	.widget ul.tweet li small {
		padding:5px 0;
		display:block;
		text-transform:uppercase;
		font-weight:bold;
	}

	.widget ul.tweet li small a {
		color:#545454;
		text-decoration:underline;
	}

	#tabbed_widget .nav-tabs > li > a,
	#tabbed_widget .nav-tabs > li > a:hover {
		border:0 solid #ffffff !important;
	}

	#tabbed_widget .nav > li > a {
		color: #010101;
		display: block;
		font-weight: 700;
		padding: 10px 15px;
		position: relative;
		text-transform: uppercase;
	}
	
	.widget h3 i {
		padding-right: 5px;
		padding-top: 2px;
	}
	
	ul.real-estate-cats-widget{
		list-style:none;margin:0px
	}
	
	ul.real-estate-cats-widget li{
		list-style-type:none;
		margin-bottom:0px;
		padding:5px 0px
	}
	
	.pagination > li > a,
	#left_sidebar a,
	#right_sidebar a,
	.check li a,
	ul.real-estate-cats-widget li a{
		font-size:13px;
		color:#656565
	}
	
	ul.real-estate-cats-widget li ul{
		border-left:1px solid #fff;
		list-style:none;margin:7px 0 0 0;
	}
	
	ul.real-estate-cats-widget li ul li{
		margin-left:0;
		line-height:15px;
		padding-left:17px;
		position:relative
	}
	
	ul.real-estate-cats-widget li ul li:before{
		content:"";
		height:1px;
		left:0;
		position:absolute;
		top:12px;
		width:11px
	}
	
	ul.real-estate-cats-widget li ul li a{
		color:#656565;
		font-size:13px
	}
	
	ul.real-estate-cats-widget li ul li ul li a{
		color:#656565
	}
	
	.real-estate-categories{
		display:inline-block;
		margin:5px 0 0;
	}
	
	.real-estate-categories>li{
		list-style:none;
		font-size:11px;
		float:left;
		color:#656565;
		font-style:italic;
		font-weight:normal;
	}
	
	.real-estate-categories>li>a{
		text-decoration:none;
	}
	
	.real-estate-categories>li>.divider{
		color:#656565;
		padding:0 5px;
	}
	
	.agents_widget .boxes .title {
		margin-top:0 !important
	}
	
	.testimonial_desc i {
		color:#999;
		padding:0 5px;
	}
	
	.testimonial_widget .testimonial_desc {
		margin: 0 30px 0 0;
		padding: 0 23%;
		width: 100%;
	}
	
	.testomonial_widget .testomonial_desc p,
	.agents_widget .agent .agent_desc p {
		margin:5px 0;
	}
	
	.widget .title .icon-sale {
		background: url(images/icons/sale.png) no-repeat scroll left center;
	}
	
	.widget .title .icon-rent {
		background: url(images/icons/rent.png) no-repeat scroll left center;
	}
	
	.widget .title [class^="icon-"] {
		display: inline-block;
		height: 30px;
		margin-right: 5px;
		vertical-align: -5px;
		width: 30px;
	}
		
/*	################################################################
	5. FOOTER STYLES
################################################################# */

	.footer1 {
		padding:30px;
		background:#212121;
		position: relative;
	}
		
	.copyright small,
	.footer1,
	.footer1 p,
	.footer1 a {
		color:#656565;
	}

	.footer1 .btn {
		margin-top:-10px;
		color:#ffffff !important;
	}
	
	.copyright .social {
		margin: 0;
		padding: 10px 0;
	}

	.copyright .social span a,
	.footer1 .title h3 {
		color:#ffffff !important;
	}
	.copyright .social span {
		background-color: #333333;
	}
	
	.footer1 .widget .title h3 {
		border-bottom: 0 solid #4B5475;
		margin-bottom:10px;
		padding-top: 8px;
		text-transform: uppercase;
	}
	
	.footer1 .widget .title hr {
		margin:0 0 10px;
		border-bottom: 2px solid #303030 !important;
		border-top: 1px solid #000000 !important;
	}
	
	.copyright small {
		padding:15px 0 0 !important;	
	}
	
	.copyright {
		border-top:1px solid #313131;
		background:#010101;
	}	

	.footer1 .form-control {
		background-color: #333333;
		border: 1px solid #3a3a3a;
	}

	.footer1 .widget h3 i {
		font-size: 16px;
		padding-top:0;
		padding-right: 5px;
	}

/*	################################################################
	6. REAL ESTATE STYLES
################################################################# */

	.hide-text {
		font: 0/0 a;
		color: transparent;
		text-shadow: none;
		background-color: transparent;
		border: 0;
	}
	
	.input-block-level {
		display: block;
		width: 100%;
		min-height: 30px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	
	.btn-file {
		overflow: hidden;
		position: relative;
		vertical-align: middle;
	}
	
	.btn-file > input {
		position: absolute;
		top: 0;
		right: 0;
		margin: 0;
		opacity: 0;
		filter: alpha(opacity=0);
		transform: translate(-300px, 0) scale(4);
		font-size: 23px;
		direction: ltr;
		cursor: pointer;
	}
	
	.fileupload {
		margin-bottom: 9px;
	}
	
	.fileupload .uneditable-input {
		display: inline-block;
		margin-bottom: 0px;
		vertical-align: middle;
		cursor: text;
	}
	
	.fileupload .thumbnail {
		overflow: hidden;
		display: inline-block;
		margin-bottom: 5px;
		vertical-align: middle;
		text-align: center;
	}
	
	.fileupload .thumbnail > img {
		max-height: 100%;
	}
	
	.fileupload .btn {
		vertical-align: middle;
	}
	
	.fileupload-exists .fileupload-new,
	.fileupload-new .fileupload-exists {
		display: none;
	}
	
	.fileupload-inline .fileupload-controls {
		display: inline;
	}
	
	.fileupload-new .input-group .btn-file {
		-webkit-border-radius: 0 3px 3px 0;
		-moz-border-radius: 0 3px 3px 0;
		border-radius: 0 3px 3px 0;
	}
	
	.fileupload-preview {
		background:#FFFFFF;
		border: 10px solid #F9F9F9;
		height: auto;
		width: 200px;
	}
	
	.fileupload-new.thumbnail-borderless .thumbnail {
		border: 1px solid #ddd;
	}
	
	.control-group.warning .fileupload .uneditable-input {
		color: #a47e3c;
		border-color: #a47e3c;
	}
	
	.control-group.warning .fileupload .fileupload-preview {
		color: #a47e3c;
	}
	
	.control-group.warning .fileupload .thumbnail {
		border-color: #a47e3c;
	}
	
	.control-group.error .fileupload .uneditable-input {
		color: #b94a48;
		border-color: #b94a48;
	}
	
	.control-group.error .fileupload .fileupload-preview {
		color: #b94a48;
	}
	
	.control-group.error .fileupload .thumbnail {
		border-color: #b94a48;
	}
	
	.control-group.success .fileupload .uneditable-input {
		color: #468847;
		border-color: #468847;
	}
	
	.control-group.success .fileupload .fileupload-preview {
		color: #468847;
	}
	
	.control-group.success .fileupload .thumbnail {
		border-color: #468847;
	}

	.map_canvas { 
	  width: 100%; 
	  height: 400px; 
	  margin: 10px 20px 10px 0;
	}
	
	.property_wrapper {
		padding:20px !important;
	}
	
	.agent_boxes .big_title,
	.property_wrapper .big_title {
		margin: 10px 0 30px;
	}
	
	.property_wrapper .boxed_mini_details1 {
		border-bottom:1px solid #efefef;
		border-top:1px solid #efefef;
		margin-bottom:15px;
	}
	
	.property_wrapper div.boxed_mini_details1 span {
		border-right: 1px solid #EFEFEF;
		float: left;
		padding: 10px 5px;
		width: 11.8%;
	}
	
	.property_wrapper div.boxed_mini_details1 span:last-child {
		border-right:0;
	}

	#map .title {
		margin-top:17px !important
	}
	.property_wrapper.boxes .title h3 {
		font-size: 21px;
		font-weight: bold !important;
		margin: 15px 0;
		text-transform: uppercase;
	}
		
	.property_wrapper.boxes .title {
		margin-top:25px;
		margin-bottom:10px;
		border-bottom:0 solid #efefef !important;
		padding-bottom:0;
	}
	
	.property-slider {
		height: auto;
	}
	
	.property-slider .flexslider {
		width: 100%;
		height: auto;
		margin: auto;
		overflow: hidden;
		position: relative;
	}
	
	.property-slider .flexslider .slides {
		list-style: none;
		margin: 0;
	}
	
	.property-slider .flexslider .slides .container {
		position: relative;
	}
	
	.property-slider .flexslider img {
		width: 100%;
		display: block;
	}

	.desc {
		position:relative;
	}

	.ps-desc {
		position: absolute;
		right: 0;
		color:#010101;
		top:230px;
		background-color: rgba(255, 255, 255, 0.8);
		background-color: #fff\8;
		padding: 15px 25px 20px;
		width: 400px;
			-webkit-border-radius: 20px 0 0 0;
			-moz-border-radius: 20px 0 0 0;
			border-radius: 20px 0 0 0;
	}
	
	.ps-desc h3 {
		border-bottom: 0 solid #4B5475;
		margin-bottom:10px;
		padding-top: 8px;
		font-weight:700;
		text-transform: uppercase;
	}
	
	.ps-desc h3 a {
		text-decoration: none;
	}

	.ps-desc p {
		margin-bottom: 14px;
	}

	.ps-mini-desc .type,
	.ps-mini-desc .price,
	.ps-mini-desc .status {
		display: inline-block;
		font-size: 13px;
		min-width:115px;
		text-align:center;
		max-width:115px;
		padding: 6px 13px 8px;
		position: absolute;
		text-decoration: none;
		
	}
	
	.ps-desc .type,
	.ps-desc .price,
	.ps-desc .status {
		display: inline-block;
		font-size: 13px;
		min-width:115px;
		max-width:115px;
		padding: 6px 13px 8px;
		text-align:center;
		position: absolute;
		text-decoration: none;
	}

	.ps-mini-desc .type {
		background:#010101;
		bottom: 11px;
		left: 240px;
		color: #ffffff;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	}
	
	.ps-mini-desc .price {
		bottom: 11px;
		left: 125px;
	}
	
	.ps-mini-desc .status {
		bottom: 11px;
		left: 10px;
	}      

	.ps-desc .type {
		background:#010101;
		bottom: -34px;
		left: 0;
		color: #ffffff;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
			-webkit-border-radius:0 0 0 10px;
			-moz-border-radius: 0 0 0 10px;
			border-radius: 0 0 0 10px;
	}

	.ps-desc .price {
		bottom: -34px;
		left: 115px;
	}

	.ps-desc .status {
		bottom: -34px;
		left: 230px;
			-webkit-border-radius:0 0 10px 0;
			-moz-border-radius: 0 0 10px 0;
			border-radius: 0 0 10px 0;
	}  
	 
	#support a,
	.boxes_img .status_type,
	.ps-mini-desc .status,
	.ps-desc .status {
		color: #ffffff;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	}

	.fhmm .boxes {
		margin-bottom:0
	}
	
	.boxes .icon-bed {
		background: url(images/icons/bed.png) no-repeat scroll left center;
	}
	
	.boxes .icon-bath {
		background: url(images/icons/bath.png) no-repeat scroll left center;
	}
	
	.boxes .icon-garage {
		background: url(images/icons/garage.png) no-repeat scroll left center;
	}
	
	.boxes .icon-furnished {
		background: url(images/icons/furnished.png) no-repeat scroll left center;
	}

	.boxes .icon-pool {
		background: url(images/icons/pool.png) no-repeat scroll left center;
	}
		
	.boxes .icon-sqft {
		background: url(images/icons/sqft.png) no-repeat scroll left center;
	}
	
	.boxes [class^="icon-"] {
		display: inline-block;
		height: 20px;
		margin-right: 2px;
		vertical-align: -5px;
		width: 20px;
	}

	.boxes {
		padding:10px;
		position:relative;
		overflow:hidden;
		margin-bottom:30px;
 		border:1px solid #F0F0F0;  
		background:#ffffff;
		-moz-box-box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);
		-webkit-box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);
		box-shadow:2px 2px 1px  RGBa(0,0,0, 0.035);		
	}   
	
	.boxes .title {
		text-transform:none !important
	}
	
	.boxes_img {
		position:relative;
	}
	
	.boxes_img .box_type {
		min-width:60px; 
		text-align:center;
		bottom:0;
		padding:1px 13px; 
		z-index:2;
		position:absolute;
	}

	.boxes_img .status_type {
		min-width:60px; 
		text-align:center;
		z-index:2;
		bottom:0;
		right:0;
		padding:1px 13px; 
		position:absolute;
	}
	
	.boxes .title {
		font-size:13px;
		font-weight:bold;
		font-family: 'Lato', Arial, Helvetica, sans-serif;
		margin-top:15px;
		margin-bottom:10px;
		text-transform:uppercase;
		border-bottom:1px solid #efefef;
		padding-bottom:10px;
	}
	
	.boxes .small_title  {
		font-size:11px;
		font-weight:300;
		color:#999;
		font-family: 'Lato', Arial, Helvetica, sans-serif;
		margin-top:5px;
		margin-bottom:0;
		display:block;
		text-transform:uppercase;
		padding-bottom:0;
	}
	
	.boxed_details li {
		list-style:none;
		padding:3px;
		border-bottom:1px dotted #EFEFEF;
	}
	
	.boxed_details li:last-child {
		border-bottom:0 dotted #fff
	}
		
	div.boxed_mini_details{
		padding-top:5px;
		zoom:1
	}
	
	div.boxed_mini_details span{
		float:left;
		width:30.75%;
		margin-right:3.8%
	}
	
	div.boxed_mini_details span.last{
		margin-right:0
	}
	
	div.boxed_mini_details span.first{
		clear:both
	}
	
	div.boxed_mini_details span strong {
		display:block;
		margin-bottom:5px;
		color:#010101;
	}
	
	div.boxed_mini_details1 span{
		float:left;
		width:23%;
		margin-right:2.5%
	}
	
	div.boxed_mini_details1 span.last{
		margin-right:0
	}
	
	div.boxed_mini_details1 span.first{
		clear:both
	}
	
	div.boxed_mini_details1 span strong {
		display:block;
		margin-bottom:5px;
		color:#010101;
	}
	
	.boxes .pricing {
		font-style:italic;
		font-weight:300;
		color:#999
	}

/*	################################################################
	7. BLOG / PAGE STYLES
################################################################# */

	.authorbox_wrapper {
		padding:20px;
		border-bottom: 1px solid #EFEFEF;
		margin-bottom: 50px;
	}
	.authorbox_wrapper img {
		margin:0 20px 20px 0;
	}
	.authorbox_wrapper h4 {
		margin-bottom:0;
		padding-bottom:0;
	}
	.authorbox_wrapper p {
		padding-top:5px;
		margin-top:5px;
	}
			
	#comments_wrapper {margin:60px 0}
	.reviews .comment-list {margin:20px 0 40px}
	.comment-list {
		margin: 60px 0;
		list-style:none;
	}
	.comment-list ul li,
	.comment-list ol li {list-style:none;}
	.comment-avatar {
		margin: 0 20px 0 0;
		float: left;
		height: 70px; width: 70px;
	}
	.comment-content {
	   background: #f5f5f5;
		border: 1px solid #eeeeee;
		margin-bottom: 20px;
		overflow: hidden;
		padding: 20px;
	}
	.comment-author {
		margin-bottom: 10px;
	}
	.comment-meta {
		font-size: 12px;
		color: #aaa;
		padding-left:10px;
	}
	.comment-reply {
		float: right;
		font-size: 12px;
		margin:0 0 10px 0;
		color: #fff;
	}
	.leave-comment textarea {
		height: 150px;
	}
	
	.error404 h2 {
		font-size: 180px;
		font-weight: bold;
		line-height: 1;
		text-align: center;
		text-transform: uppercase;
		margin-bottom:0;
		padding-bottom:0;
	}
	
	.error404 h3 {
		margin-top:0;
		font-size: 30px;
		opacity: 0.2;
		padding-top:0;
		text-align: center;
	}
	
	.blog-wrap {
		border-bottom:1px solid #efefef;
		margin:0 0 20px 0 !important;
		padding-bottom:20px;
	}

	.blog-wrap h2 a {
		color:#010101;
		text-decoration: none;
	}
	
	.blog_container div.post-meta{
		margin-top:10px !important;
	}
	
	.blog-wrap div.post-meta {
		display: block;
		margin:  0 0 10px;
		position: relative;
	}
	
	.blog-wrap div.post-meta > span {
		padding-right: 10px;
		width:100%;
		font-size:11px;
		font-style:italic;
		font-family: 'Droid Serif', Georgia, "Times New Roman", serif !important;
		font-weight:300;
	}
	
	.blog-wrap div.post-meta i {
		margin-right: 3px;
		color:#aaaaaa;
	}
	
	.blog-wrap div.post-date {
		-moz-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
		-webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
		box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
		float: left;
		margin-top:25px;
		margin-right: 10px;
		text-align: center;
	}
	
	.portfolio-wrap .post-content{
		padding:0 !important;
	} 
	.blog-wrap .post-content {	
		padding-left:60px;
	}
	
	.blog-wrap div.post-date span.month {
		border-radius: 0 0 2px 2px;
		color: #FFFFFF;
		font-size: 0.9em;
		padding: 0 10px 2px;
	}
	
	.blog-wrap h2 {
		font-size: 13px;
		font-weight: bold;
		margin-bottom: 0;
		margin-top: 25px;
		padding-bottom: 0;
		text-transform: uppercase;
	}

	.blog-tt-columns .blog-wrap h2 {
		font-size:18px;
	}
	
	.blog-wrap p {
		margin: 10px 0 15px;
	}
	
	.blog-wrap {
		padding-bottom: 30px;
	}
	
	.blog-wrap div.post-date span.day {
		-moz-border-radius: 2px 2px 0 0;
		-webkit-border-radius: 2px 2px 0 0;
		background: #f5f5f5;
		border-radius: 2px 2px 0 0;
		color: #656565;
		display: block;
		font-size: 16px;
		font-weight: 500;
		font-weight: bold;
		padding: 10px;
	}

	.post-wrapper-top-shadow {
	  width:100%;
	  position:relative;
	  z-index:1000;
	}
	
	.post-wrapper-top-shadow .s1 {
	  background:url(images/shadow.png) center no-repeat;
	  height:31px;
	  margin:0 auto;
	  bottom:-18px;
	  width:100%;
	  position:absolute;
	  left:0;
	}
	
	.post-wrapper-top {
		background-color: #F2F2F2;
		bottom: 0;
		left: 0;
		right: 0;
		top: 0;
		z-index: 0;
		border-bottom: 3px solid #f9f9f9;
		margin-bottom: 0;
		padding:0;
		position: relative;
		text-align: left;
	}
	
	.breadcrumb > li + li:before {
		font-size:11px;
	}
	
	.post-wrapper-top h2 {
		border-bottom: 3px solid #fff;
		display: inline-block;
		font-weight:500;
		font-size:1.8em;
		padding: 10px 0 20px;
		color:#010101;
		position: relative;
		margin-bottom:-3px;
	}
	
	.breadcrumb {
		background-color: rgba(0, 0, 0, 0);
		border-left: 0 solid #63B76C;
		border-radius: 0;
		font-size:11px;
		font-style:italic;
		color:#999999;
		font-family: 'Droid Serif', Georgia, "Times New Roman", serif !important;
		font-weight:300;
		list-style: none outside none;
		margin: 20px 0 0;
		padding: 0;
	}
	
/*	################################################################
	8. EFFECTS & MODULES
################################################################# */

	.topflags img,
	#carousel .slides img,
	.testimonial_widget .image,
	.agent_img,
	.agencies_widget img,
	.agents_widget .agent .image img {		
		-webkit-transition: opacity 0.2s ease-in-out;
		-moz-transition: opacity 0.2s ease-in-out;
		-ms-transition: opacity 0.2s ease-in-out;
		-o-transition: opacity 0.2s ease-in-out;
		transition: opacity 0.2s ease-in-out;
	}
	
	.topflags img:hover,
	.agent_img:hover,
	.agencies_widget img:hover,
	#carousel .slides img:hover,
	.testimonial_widget .image:hover,
	.agents_widget .agent .image img:hover {
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";
		filter: alpha(opacity=60);
		-moz-opacity: 0.6;
		-khtml-opacity: 0.6;
		opacity: 0.6;
	}

	.hovicon {
		display: inline-block;
		line-height: 80px;
		cursor: pointer;
		margin: 20px;
		width: 80px;
		height: 80px;
		border-radius: 50%;
		text-align: center;
		position: relative;
		text-decoration: none;
		z-index: 1;
		color: #fff;
	}
	
	.hovicon:after {
		pointer-events: none;
		position: absolute;
		width: 100%;
		height: 100%;
		border-radius: 50%;
		content:'';
		-webkit-box-sizing: content-box;
		-moz-box-sizing: content-box;
		box-sizing: content-box;
	}
	
	.hovicon:before {
		speak: none;
		font-size: 38px;
		line-height: 80px;
		font-style: normal;
		font-weight: normal;
		font-variant: normal;
		text-transform: none;
		display: block;
		-webkit-font-smoothing: antialiased;
	}
	
	.hovicon.effect-1 {
		-webkit-transition: background 0.2s, color 0.2s;
		-moz-transition: background 0.2s, color 0.2s;
		transition: background 0.2s, color 0.2s;
	}
	
	.hovicon.effect-1:after {
		top: -7px;
		left: -7px;
		padding: 7px;
		box-shadow: 0 0 0 4px #ffffff;
		-webkit-transition: -webkit-transform 0.2s, opacity 0.2s;
		-webkit-transform: scale(.8);
		-moz-transition: -moz-transform 0.2s, opacity 0.2s;
		-moz-transform: scale(.8);
		-ms-transform: scale(.8);
		transition: transform 0.2s, opacity 0.2s;
		transform: scale(.8);
		opacity: 0;
	}
	
	.hovicon.effect-1.sub-a:hover:after {
		-webkit-transform: scale(1);
		-moz-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
		opacity: 1;
	}

	[class*=".effect-"] {
	  -webkit-backface-visibility: hidden;
	  -moz-backface-visibility: hidden;
	  backface-visibility: hidden;
	  -webkit-perspective: 1000;
	  -moz-perspective: 1000;
	  perspective: 1000;
	}
	.effect-fade {
	  opacity: 0;
	}
	.effect-fade.in {
	  opacity: 1;
	}
	.effect-slide-left {
	  -webkit-transform: translate3d(-30%, 0, 0);
	  transform: translate3d(-30%, 0, 0);
	  opacity: 0;
	}
	.effect-slide-left.in {
	  -webkit-transform: translate3d(0, 0, 0);
	  transform: translate3d(0, 0, 0);
	  opacity: 1;
	}
	.effect-slide-right {
	  -webkit-transform: translate3d(30%, 0, 0);
	  transform: translate3d(30%, 0, 0);
	  opacity: 0;
	}
	.effect-slide-right.in {
	  -webkit-transform: translate3d(0, 0, 0);
	  transform: translate3d(0, 0, 0);
	  opacity: 1;
	}
	.effect-slide-top {
	  -webkit-transform: translate3d(0, -30%, 0);
	  transform: translate3d(0, -30%, 0);
	  opacity: 0;
	}
	.effect-slide-top.in {
	  -webkit-transform: translate3d(0, 0, 0);
	  transform: translate3d(0, 0, 0);
	  opacity: 1;
	}
	.effect-slide-bottom {
	  -webkit-transform: translate3d(0, 30%, 0);
	  transform: translate3d(0, 30%, 0);
	  opacity: 0;
	}
	.effect-slide-bottom.in {
	  -webkit-transform: translate3d(0, 0, 0);
	  transform: translate3d(0, 0, 0);
	  opacity: 1;
	}
	.effect-pop {
	  opacity: 0;
	}
	.effect-pop.in {
	  -webkit-animation: pop 0.6s ease-out 0.5s both;
	  -moz-animation: pop 0.6s ease-out 0.5s both;
	  -o-animation: pop 0.6s ease-out 0.5s both;
	  animation: pop 0.6s ease-out 0.5s both;
	  opacity: 1 \9;
	}
	@-webkit-keyframes pop {
	  0% {
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
	  }
	  50% {
		-webkit-transform: scale(1.2);
		-ms-transform: scale(1.2);
		transform: scale(1.2);
		opacity: 1;
	  }
	  100% {
		opacity: 1;
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
	  }
	}
	@-moz-keyframes pop {
	  0% {
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
	  }
	  50% {
		-webkit-transform: scale(1.2);
		-ms-transform: scale(1.2);
		transform: scale(1.2);
		opacity: 1;
	  }
	  100% {
		opacity: 1;
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
	  }
	}
	@-o-keyframes pop {
	  0% {
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
	  }
	  50% {
		-webkit-transform: scale(1.2);
		-ms-transform: scale(1.2);
		transform: scale(1.2);
		opacity: 1;
	  }
	  100% {
		opacity: 1;
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
	  }
	}
	@keyframes pop {
	  0% {
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
	  }
	  50% {
		-webkit-transform: scale(1.2);
		-ms-transform: scale(1.2);
		transform: scale(1.2);
		opacity: 1;
	  }
	  100% {
		opacity: 1;
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
	  }
	}
	.effect-fall {
	  opacity: 0;
	  -webkit-transform: scale(1.5);
	  -ms-transform: scale(1.5);
	  transform: scale(1.5);
	}
	.effect-fall.in {
	  -webkit-transform: scale(1);
	  -ms-transform: scale(1);
	  transform: scale(1);
	  opacity: 1;
	}
	.effect-perspective {
	  -webkit-perspective: 1300px;
	  -moz-perspective: 1300px;
	  perspective: 1300px;
	}
	.effect-helix {
	  -webkit-transform-style: preserve-3d;
	  -moz-transform-style: preserve-3d;
	  transform-style: preserve-3d;
	  opacity: 0;
	  -webkit-transform: rotateY(-180deg);
	  -ms-transform: rotateY(-180deg);
	  transform: rotateY(-180deg);
	}
	.effect-helix.in {
	  opacity: 1;
	  -webkit-transform: rotateY(0);
	  -ms-transform: rotateY(0);
	  transform: rotateY(0);
	}
	
	.dm-shadow{
		box-shadow:inset 0 1px 3px rgba(0,0,0,0.1)
	}

/*	################################################################
	9. COLOR SCHEMES
################################################################# */

/* BLUE SCHEMES */

	.ps-desc h3 a,
	.modal-body ul li i,
	.agencies_meta i,
	.testimonial_desc p i,
	.agents_widget i,
	.callus i {
		color: "red";
	}
		
	.fhmm .dropdown-menu > li > a:hover,
	.fhmm .dropdown-menu > li > a:focus,
	.searchmodule {
		background-color:<?php echo "#".$aConf[ColorPrincipal] ?>;
	}
	
	.pagination > .active > a, .pagination > .active > span, 
	.pagination > .active > a:hover, .pagination > .active > span:hover, 
	.pagination > .active > a:focus, .pagination > .active > span:focus,
	#help a,
	.hovicon.effect-1.sub-a:hover,
	.hovicon.effect-1.sub-a:hover i,
	.hovicon.effect-1,
	.hovicon.effect-1.sub-a:hover,
	.flex-direction-nav a,
	#tabbed_widget .nav-tabs > li > a:hover, 
	#tabbed_widget .nav-tabs > li > a:active, 
	#tabbed_widget .nav-tabs > li > a:focus, 
	#tabbed_widget .nav-tabs > li.active > a, 
	#tabbed_widget .nav-tabs > li.active > a:hover, 
	#tabbed_widget .nav-tabs > li.active > a:focus,
	.navbar-blue .navbar-toggle:hover,
	.navbar-blue .navbar-toggle:focus,
	.navbar-default .navbar-nav > .active > a, 
	.navbar-default .navbar-nav > .active > a:hover, 
	.navbar-default .navbar-nav > .active > a:focus, 
	.navbar-default .navbar-nav > .open > a, 
	.navbar-default .navbar-nav > .open > a:hover, 
	.navbar-default .navbar-nav > .open > a:focus, 
	.navbar-default .navbar-nav > li > a:hover, 
	.navbar-default .navbar-nav > li > a:focus, 
	.navbar-blue,
	.boxes_img .box_type,
	.dropdown-menu > li > a:hover,
	.dropdown-menu > li > a:focus,
	.ps-mini-desc .price,
	.blog-wrap div.post-date span.month,
	.ps-desc .price {
		background-color:<?php echo "#".$aConf[ColorPrincipal] ?>;
		color: #ffffff;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	}

	.topbar,
	.fhmm .dropdown-menu {
		border-top-color:<?php echo "#".$aConf[ColorPrincipal] ?>
	}
	
	.post-wrapper-top h2 {
		border-bottom-color:<?php echo "#".$aConf[ColorPrincipal] ?>
	}
	
	.navbar.affix {
		border-bottom:3px solid <?php echo "#".$aConf[ColorPrincipal] ?> !important
	}

	.hovicon.effect-1:after {
		box-shadow: 0 0 0 4px <?php echo "#".$aConf[ColorPrincipal] ?>;
	}

	
	.bs-glyphicons {
	  padding-left: 0;
	  padding-bottom: 1px;
	  margin-bottom: 20px;
	  list-style: none;
	  overflow: hidden;
	}
	.bs-glyphicons li {
	  float: left;
	  width: 25%;
	  height: 115px;
	  padding: 10px;
	  margin: 0 -1px -1px 0;
	  font-size: 12px;
	  line-height: 1.4;
	  text-align: center;
	  border: 1px solid #ddd;
	}
	.bs-glyphicons .glyphicon {
	  display: block;
	  margin: 5px auto 10px;
	  font-size: 24px;
	}

	ul.the-icons li {
		list-style:none;
	}
	
/* ORANGE SCHEMES */

	a,
	.panel-title i,
	.check li:before,
	.ps-desc h3 a:hover,
	.widget h3 i,
	.widget ul.tweet li a,
	div.popup ul li a:hover,
	div.popup ul li a:focus,
	div.popup ul li a:active {
		color:<?php echo "#".$aConf[ColorFondo] ?>
	}

	.btn-primary:hover,
	.btn-primary:focus,
	.btn-primary:active,
	.btn-primary.active,
	.btn-primary.disabled,
	.btn-primary[disabled],
	mark,
	#support a,
	.bs-glyphicons li:hover,
	.boxes_img .status_type,
	.ps-mini-desc .status,
	.ps-desc .status,
	.pricing-table > .price .name,
	ul.real-estate-cats-widget li ul li:before {
		background-color:<?php echo "#".$aConf[ColorFondo] ?>;
		color: #ffffff;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	}
	
	.form-control:focus,
	ul.real-estate-cats-widget li ul {
		border-color:<?php echo "#".$aConf[ColorFondo] ?>;
	}
	
	.btn-primary {
		background: <?php echo "#".$aConf[ColorFondo] ?> !important;
		border-color: #EF6907 !important;
	}
	
	.btn-primary:active,
	.btn-primary.active {
		background-color: <?php echo "#".$aConf[ColorFondo] ?> \9 !important;
	}
	
/*	################################################################
	10. RESPONSIVE
################################################################# */

@media screen and (max-width: 768px) { 
	.map .row .col-lg-4{
		float:none;
		margin-top:0
	}
	
	#left_sidebar,
	.ps-mini-desc .type, 
	.ps-mini-desc .price, 
	.ps-mini-desc .status,
	.slides .desc,
	.sticky-toolbar {
		display:none;
	}
	
	.social span {padding:4px 10px;}
	.topbar,
	.social span,
	.social,
	.copyright,
	.topflags,
	.topmenu,
	.logo {
		float:none !important;
		clear:both !important;
		text-align:center !important;
	}
}

	#map{
		height:450px;
		width:100%
	}
	
	#map img{
		max-width:inherit
	}
	
	.map{
		position:relative
	}
	
	.map .row .col-lg-4{
		float:right;
		margin-top:-450px;
		z-index:9
	}
	
	.map .row{
		position:relative
	}
	
	.infobox img {
		width:100% !important;
	}
	
	.map .searchmodule {
		padding:18px 10px
	}
	
	.infobox {
		display: inline-block;
		padding: 5px;
		position: relative;
		width: 270px;
	}

	.infobox img {
		width:115px !important;
	}
	
	.infobox .title {
		font-size:13px;
		font-weight:bold;
		font-family: 'Lato', Arial, Helvetica, sans-serif;
		margin-top:0;
		margin-bottom:0;
		text-transform:uppercase;
		padding-bottom:5px;
	}
	
	.infobox .title a {
		font-weight:bold;
	}