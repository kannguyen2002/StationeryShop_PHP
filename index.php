<?php session_start();include("include/connect.php");    ?>
<!DOCTYPE HTML>
<head>	
    <meta http-equiv= "content-type" content="text/html; charset=utf-8" /> 
	
	<link rel="stylesheet" href="css/style-footer.css">
    <title>BookNow - Tri thức trong từng trang sách</title>    
    <link rel="stylesheet" style="style/sheet" href="css/index.css" />
    

    <!-------------------------------------slide-------------------------------->
    <link rel="stylesheet" style="style/sheet" href="css/style1.css">
    <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script lang="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
    <script lang="javascript" type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
     $(document).ready( function(){	
    		var buttons = { previous:$('#lofslidecontent45 .lof-previous') ,
    						next:$('#lofslidecontent45 .lof-next') };
    						
    		$obj = $('#lofslidecontent45').lofJSidernews( { interval : 4000,
    												direction		: 'opacitys',	
    											 	easing			: 'easeInOutExpo',
    												duration		: 2000,
    												auto		 	: true,
    												maxItemDisplay  : 4,
    												navPosition     : 'horizontal', // horizontal
    												navigatorHeight : 32,
    												navigatorWidth  : 80,
    												mainWidth:1000,
    												buttons			: buttons} );	
    	});
    </script>
</head>
<body>    
    
    <!-- Begin : wrapper -->   
    <div id="wrapper">  
                  
        <!-- Begin : header -->        
        <div id="header">            
            <div id="lg-header">                
                <h1><img src= "./img/logoheader.png"></h1>            
            </div>            
            <div id="bg-header">
				 </div>           
            <div id="menu-header">                
                <?php include("home_include/menu_ngang.php");?>                
            <!-- End: menu -->            
            </div>
                   
        </div>        
        <!-- End : header -->   
        
        <!-- Begin : content -->
        <div id="content">
        
            <div id="lofslidecontent45" class="lof-slidecontent" style="width:1000px; height:350px;">
				<div class="preload"><div></div></div>
				<div id="lof-main-outer">
					<ul class="lof-main-wapper">
						<li><img src="img/slide/1.jpg" width="1000" height="350"></li>
						<li><img src="img/slide/2.jpg" width="1000" height="350"></li>
						<li><img src="img/slide/3.jpg" width="1000" height="350"></li>
						<li><img src="img/slide/4.jpg" width="1000" height="350"></li>
					</ul>
				</div>
				<div class="lof-navigator-wapper">
						<div onClick="return false" href="" class="lof-next">Next</div>
						<div class="lof-navigator-outer">
							<ul class="lof-navigator">
							   <li><img src="img/slide/1.jpg" width="70" height="25" /></li>       		
							   <li><img src="img/slide/2.jpg" width="70" height="25" /></li>       		
							   <li><img src="img/slide/3.jpg" width="70" height="25" /></li>       		
							   <li><img src="img/slide/4.jpg" width="70" height="25" /></li>       		      		
							</ul>
						</div>
						<div onClick="return false" href="" class="lof-previous">Previous</div>
				</div> 
            </div>
            
            <div id="main-content">
                <div id="left-content">
                    <?php include("home_include/left_content.php");?>
                </div>
                <!-- End : Left-Content -->
                
                <div id="center-content">
                    <?php include("content_page.php"); ?>
                </div>
                <!-- End: Center-content -->
                
                <div id="right-content">
                    <?php include("home_include/right_content.php"); ?>
                </div>
                <!-- End: Right -content -->
                
            </div>
            <!-- End : Main-content --> 
        </div>
        <!-- End: content -->
		
	<!--Begin: footer-->
	<div id="wrapper">
	<div id= "footer">
		<div id="footer1">	
		  <div class="box3">
			<p><strong><u>LIÊN HỆ</u></strong></p>
			<p><b>Địa chỉ:</b>Khu phố 6,phường Linh Trung, quận Thủ Đức </p>
				<p><b>Điện thoại:</b> 0969338216</p>
				<p><b>Email:</b> 20522099@gm.uit.edu.vn</p>
		  </div>
		  
		  <div class="box1">
		  <br><br>
			  <a href="https://www.facebook.com/ntt.20522099.191102/"><img src= "./img/icon/facebook.png" width="20%" >  </a>
			  <a href="https://www.instagram.com/ntt.20522099.191102/"><img src= "./img/icon/instagram.png" width="20%" ></a>
		  </div>
	  </div>

		
		<div id="footer2">
			<span>© 2019 Booknow </span>| All right reserved
		</div>
	</div>
	</div>
		
	<!--End footer-->
		   
    </div>    
    <!-- End : wrapper -->


</body>
</html>