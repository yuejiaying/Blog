<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>我的博客</title>
		<link rel="stylesheet" href="css/reset.css" />
		<style type="text/css">
		    /*header*/
			header { width: 100%; border-bottom: #cccccc 2px solid;height: 43px; margin-top:3px;}
			header nav { margin: 0 auto; /*width: 1000px;*/ text-align: center; }
			header nav img{width: 40px;float: left;}
			#Blogger{margin:10px 0 0 5px;width: 110px;float: left;font-size: 25px;/*font-family: "仿宋" */;}
			header nav ul{float: right;width:50%;}
			header nav ul li{float: left;width:16.6%;display: block;}
			header nav ul li a{display: block;}
			header nav ul li a span{display: block;}
			header nav ul li a:hover .en{display: block;}
			.en{display: none;color:#417e8a;font-size:12px;}
			
			/* footer */
			 footer { clear:both;border-top: 9px solid #cccccc; background: #242221; width: 100%; padding-bottom: 10px;}
			.footavatar { margin: auto; position: relative; color: #ffffff; /*font-family: "仿宋" */;}
			.footavatar img{ height:110px}
			.footphoto { position: absolute; top: -58px; left: 20px; display: block; border: #cccccc 5px solid; }
			.footinfo { display: block; padding: 0 0 0 160px }
			.fname { color: #fff; margin-top: 16px; font-size: 18px; line-height: 28px; }
			.fname a { color: #fff; }
			.finfo { line-height: 22px; }
			.Copyright { text-align: center; color: #ffffff; /*font-family: "仿宋"*/ ;margin: 40px 0 0 }
			.Copyright ul a { color: #286c5b; display: inline; /*padding: 0 10px; */}
			.Copyright ul a:nth-child(-n+3) { border-right: #ffffff 1px solid; }
			.Copyright ul a:hover { color: #fff; }
			
			/*mainContent*/
			#mainContent{
				/*height: 1200px;*/
				margin: 0 auto; 
				/*width: 1000px;*/
				margin-top: 3px;
			}
			#leftSide{				
				float: left;
				width: 70%;
				/*height: 850px;*/
				/*border: 1px solid #cccccc; */
			}
			#rightSide{
			   float: left;
			  /* margin-left: 3px;*/
			   width: calc(30% - 4px);
			  /* height: 850px;*/
			   border: 1px solid #cccccc; 
			}
			
			.contactStyle
			{
			  width:20%;	
			  display: block;
			  padding: 10px 6.6%;		
			  float:left;	
			}
			.rightTitle{
			  border-bottom: 1px solid #E6E6E6;
			  font-size:18px ;
			  line-height: 40px;
			  padding-left:5px;
			}		
			.yuan{
				width: 60%;
				border-radius: 100%; 
				background: #FC9D9A;
				margin: 0 auto; 
				background: url(img/s8.jpg) no-repeat; 
				background-size:100% 100%;
				display: block;
				position: relative;
				overflow: hidden;
				cursor: pointer;
			}
			
			 .yuan::before{content: "";padding-top: 100%;display: block;}
			 
			 .Username
			 {
			 	position: absolute;
			 	bottom: 0px;;
			 	left:0px;
			 	width:100%;
			 	height:40%;
			 	line-height:40px;
			 	text-align: center;
			 	background-color:rgba(0,0,0,0.5);
			 	color:#000;	
			 	opacity: 0;
			 	-webkit-transition: opacity 1s; 
			 	-moz-transition: opacity 1s ; 
			 	-o-transition: opacity 1s ;
			 	 transition: opacity 1s ; 		 	
			 
			 }
			 .yuan:hover span
			 {	
			 	 opacity: 1;		 	
			 }
			#cloud li{
				display: block;
				float: left;
				/*width:90px;
				 * height: 22px;*/
				padding:5px 8px;				
				background: #FC9D9A;
				margin: 5px;
				border-radius: 3px;
				text-align: center;
			}
			.suggestTitle{
				width: 100%;
				line-height: 36px;
				font-size: 16px;
				border-bottom: 4px solid #DB6D4C;
				font-weight: bold;
			}
		    .blogs {
			    border-bottom: 1px solid #ccc;
			    overflow: hidden;
			    padding: 30px 0;
			    /*position: relative;*/
			}
			.blogs figure {
			    float: left;
			    overflow: hidden;
			    width: 25%;
			}
			.blogs figure img {
			    margin: auto;
			    transition: all 0.5s ease 0s;		 
			   -moz-transition:all 0.5s ease 0s;	 /* Firefox 4 */
			    -webkit-transition: all 0.5s ease 0s;	 /* Safari 和 Chrome */
				-o-transition: all 0.5s ease 0s;	 /* Opera */
			    width: 100%;
			}
			
			.blogs figure:hover img{
			   transform: scale(1.1);		  
			}
			
			.artical{
			    color: #756f71;
			    float: right;
			    line-height: 22px;
			    width: 72%;
			}
			.artical h3
			{
				margin: 8px 0;
			}
			.artical p{
				line-height: 22px;
				font-size: 12px;
			}
			.autor { overflow: hidden; clear: both; margin: 10px 0; display: inline-block; color: #838383; width: 100%;  }
.autor span { margin: 0 10px 0 0; padding-left: 20px }
.autor span a { color: #759b08; }
.autor span a:hover { text-decoration: underline }
.lm { background: url(img/newsbg01.png) no-repeat left center }
.dtime { background: url(img/newsbg02.png) no-repeat left center }
.viewnum { background: url(img/newsbg04.png) no-repeat left center }
.pingl { background: url(img/newsbg03.png) no-repeat left center }
.tit01 h3 { line-height: 40px; color: #38485A; font-size: 18px; border-bottom: 1px solid #E6E6E6; height: 40px }
			@media only screen and (max-width: 1920px) {
				header nav {width: 1000px;}
			    #mainContent{width: 1000px;}
			    .footavatar{width: 700px;}
			}
            @media only screen and (max-width: 1600px) {
				header nav {width: 800px;}				
				#mainContent{width: 800px;}
				.footavatar{width: 500px;}
			}
		</style>
	</head>
	<body>
		
		<header>		  
		  <nav id="nav">	
		  	<img src="img/树.svg" /><span id="Blogger">秋雨梧桐</span>
		    <ul>
		      <li><a href="/"><span>首页</span><span class="en">Home</span></a></li>
		      <li><a href="/download/" target="_blank"><span>关于我</span><span class="en">About</span></a></li>
		      <li><a href="/web/"  target="_blank"><span>博文</span><span class="en">Article</span></a></li>
		      <li><a href="/jstt/" target="_blank"><span>心情</span><span class="en">Mood</span></a></li>
		      <li><a href="/newshtml5/" target="_blank"><span>相册</span><span class="en">Photo</span></a></li>
		      <li><a href="/news/case/" target="_blank"><span>留言</span><span class="en">Saying</span></a></li>		     
		    </ul>		    
		  </nav>
		</header>
		<div id="mainContent" >
			<div id="leftSide">
				<div class="suggestTitle">文章推荐</div>
				<div class="blogs">
					<figure><img src="img/01.jpg"/> </figure>
					<div class="artical">
						<h3><a href="/">住在手机里面的朋友</a></h3>
						<p>通信时代，无论是初次相见还是老友重逢，交换联系方式，常常是彼此交换名片，然后郑重或是出于礼貌用手机记下对方的电话号码。
							在快节奏的生活里，我们不知不觉中就成为住在别人手机里的朋友。又因某些意外，变成了别人手机里匆忙的过客，这种快餐式的友谊 ...</p>
						<p class="autor">
						<span class="lm f_l">
						<a href="/">个人博客</a>
						</span>
						<span class="dtime f_l">2014-02-19</span>
						<span class="viewnum f_r">
						浏览（
						<a href="/">459</a>
						）
						</span>
						<span class="pingl f_r">
						评论（
						<a href="/">30</a>
						）
						</span>
						</p>
					</div>			
				</div>		
				<div class="blogs">
					<figure><img src="img/01.jpg"/> </figure>
					<div class="artical">
						<h3><a href="/">住在手机里面的朋友</a></h3>
						<p>通信时代，无论是初次相见还是老友重逢，交换联系方式，常常是彼此交换名片，然后郑重或是出于礼貌用手机记下对方的电话号码。
							在快节奏的生活里，我们不知不觉中就成为住在别人手机里的朋友。又因某些意外，变成了别人手机里匆忙的过客，这种快餐式的友谊 ...</p>
						<p class="autor">
						<span class="lm f_l">
						<a href="/">个人博客</a>
						</span>
						<span class="dtime f_l">2014-02-19</span>
						<span class="viewnum f_r">
						浏览（
						<a href="/">459</a>
						）
						</span>
						<span class="pingl f_r">
						评论（
						<a href="/">30</a>
						）
						</span>
						</p>
					</div>			
				</div>		
				<div class="blogs">
					<figure><img src="img/01.jpg"/> </figure>
					<div class="artical">
						<h3><a href="/">住在手机里面的朋友</a></h3>
						<p>通信时代，无论是初次相见还是老友重逢，交换联系方式，常常是彼此交换名片，然后郑重或是出于礼貌用手机记下对方的电话号码。
							在快节奏的生活里，我们不知不觉中就成为住在别人手机里的朋友。又因某些意外，变成了别人手机里匆忙的过客，这种快餐式的友谊 ...</p>
						<p class="autor">
						<span class="lm f_l">
						<a href="/">个人博客</a>
						</span>
						<span class="dtime f_l">2014-02-19</span>
						<span class="viewnum f_r">
						浏览（
						<a href="/">459</a>
						）
						</span>
						<span class="pingl f_r">
						评论（
						<a href="/">30</a>
						）
						</span>
						</p>
					</div>			
				</div>		
				<div class="blogs">
					<figure><img src="img/01.jpg"/> </figure>
					<div class="artical">
						<h3><a href="/">住在手机里面的朋友</a></h3>
						<p>通信时代，无论是初次相见还是老友重逢，交换联系方式，常常是彼此交换名片，然后郑重或是出于礼貌用手机记下对方的电话号码。
							在快节奏的生活里，我们不知不觉中就成为住在别人手机里的朋友。又因某些意外，变成了别人手机里匆忙的过客，这种快餐式的友谊 ...</p>
						<p class="autor">
						<span class="lm f_l">
						<a href="/">个人博客</a>
						</span>
						<span class="dtime f_l">2014-02-19</span>
						<span class="viewnum f_r">
						浏览（
						<a href="/">459</a>
						）
						</span>
						<span class="pingl f_r">
						评论（
						<a href="/">30</a>
						）
						</span>
						</p>
					</div>			
				</div>		
				<div class="blogs">
					<figure><img src="img/01.jpg"/> </figure>
					<div class="artical">
						<h3><a href="/">住在手机里面的朋友</a></h3>
						<p>通信时代，无论是初次相见还是老友重逢，交换联系方式，常常是彼此交换名片，然后郑重或是出于礼貌用手机记下对方的电话号码。
							在快节奏的生活里，我们不知不觉中就成为住在别人手机里的朋友。又因某些意外，变成了别人手机里匆忙的过客，这种快餐式的友谊 ...</p>
						<p class="autor">
						<span class="lm f_l">
						<a href="/">个人博客</a>
						</span>
						<span class="dtime f_l">2014-02-19</span>
						<span class="viewnum f_r">
						浏览（
						<a href="/">459</a>
						）
						</span>
						<span class="pingl f_r">
						评论（
						<a href="/">30</a>
						）
						</span>
						</p>
					</div>			
				</div>				
			</div>
			<div id="rightSide">
				<div>
					<div class="rightTitle">关注我</div>
					<div class="yuan">
					  <span class="Username">秋雨梧桐</span>
					</div>
					
					<!--                   	
                    <div class="avatar">
				        <a href="#"><span>秋雨梧桐</span></a>
				     </div>-->
				      <p style="color:#417e8a;">于千万人之中，我遇见了我所遇见的人....</p>
					<div>
						<a href="/"><img src="img/qq.svg" class="contactStyle"/></a>
						<a href="/"><img src="img/微博.svg" class="contactStyle"/></a>
						<a href="/"><img src="img/邮箱.svg" class="contactStyle"/></a>
					</div>
				</div>
				<div>
					<div class="rightTitle">标签云</div>
					<ul id="cloud">
						<!--<li><a href="#">个人博客</a></li>
						<li><a href="#">个人博客</a></li>
						<li><a href="#">个人博客</a></li>
						<li><a href="#">个人博客</a></li>
						<li><a href="#">个人博客</a></li>-->
					</ul>
				</div>
				<div style="clear: both;">
					<div class="rightTitle">图文推荐</div>
				</div>
				<div>
					<div class="rightTitle">友情链接</div>
				</div>
			</div>
		</div>
		<footer>
		   <div class="footavatar">
		     <img src="img/s8.jpg" class="footphoto">
		     <ul class="footinfo">
		       <p class="fname"><a href="/dancesmile" >秋雨梧桐</a>  </p>
		       <p class="finfo">性别：女 年龄：25岁</p>
		       <p>现居：四川成都</p></ul>
		   </div>
		  
		   <div class="Copyright">
		     
		     <ul>
		       <a href="/">帮助中心</a><a href="/">空间客服</a><a href="/">投诉中心</a><a href="/">空间协议</a>
		     </ul>
		     <p>Design by Qiuyuwutong</p>
		    
		   </div>
		 </footer>	
	</body>
</html>
