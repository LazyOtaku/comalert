<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="images/images.jpe"/>

 <!-- bs links and script for carousel effect -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="CSS/style1.css">
<link rel="stylesheet" type="text/css" href="CSS/style_comalert.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quantico" rel="stylesheet">

</head>

<body>
	<!-- header starts -->
	<div id="heade">
		<div id="fixedmenu">
			<table>
				<tr>
					<td><a href="home.php">Home</a></td>
					<td><a href="comalert_anime.html">Anime</a></td>
					<td><a href="comalert_dc.html">DC</a></td>
					<td><a href="comalert_manga.html">Manga</a></td>
					<td><a href="comalert_marvel.html">Marvel</a></td>
				</tr>
			</table>
		</div>
		<div id="headingname"style="font-size:100px, font-colour:white">Com!Alert</div>
	</div>


	<!-- header ends -->
<br>
<!-- background images -->
<!-- change background function -->
<script type="text/javascript">
	
/*	function chngbg(x){
		images_array = new Array("marvel-logo-wallpaper.jpg","64WG7MP.jpg","1920x1080-Romantic-Anime-Wallpaper.jpg","53569ac328aff.jpg","20160908_141621.png","anime-wallpaper-7.jpg");
		for (var i=0; i<6; i++){
			if(i==x){
				document.body.style.background = "url('"+images_array[i]+"')";
				document.body.style.backgroundPosition = "center";
				//document.body.style.background = "url('53569ac328aff.jpg')";
				break;
			}
		}
	}*/
    function chngbg(x){
        /*images_array = new Array("marvel-logo-wallpaper.jpg","64WG7MP.jpg","1920x1080-Romantic-Anime-Wallpaper.jpg","53569ac328aff.jpg","20160908_141621.png","anime-wallpaper-7.jpg");*/
        
                document.body.style.background = "url('"+document.getElementById(x).getAttribute("src")+"')";
                document.body.style.backgroundPosition = "center";
                document.body.style.backgroundAttachment = "fixed";
    }
</script>
<!-- for contactus page -->
<?php
session_start();
$_SESSION['count']=0;
$_SESSION['flag']=100;
?>

<div class="news">
<div style="margin-left: 30px;" class="news">
    <img id="0" class="images" src="CSS/images/comics-x-men-psylocke-jubilee-storm-x-men-1280x720-wallpaper.jpg" width="220" height="120" onclick="chngbg(this.id)">
    <img id="1" class="images" src="CSS/images/aOhRvib.jpg" width="220" height="120" onclick="chngbg(this.id)">
    <img id="2" class="images" src="CSS/images/justice-league.jpg" width="220" height="120" onclick="chngbg(this.id)">
    <img id="3" class="images" src="CSS/images/53569ac328aff.jpg" width="220" height="120" onclick="chngbg(this.id)">
    <img id="4" class="images" src="CSS/images/one-piece-straw-hat-luffy-face-free-desktop-wallpaper-1600x1162.png" width="220" height="120" onclick="chngbg(this.id)">
    <img id="5" class="images" src="CSS/images/TIGQSb.jpg" width="220" height="120" onclick="chngbg(this.id)">
</div>
</div>
<marquee class="intro1"><a href="comalert_gallery.html">For more wallpapers, click here</a></marquee>
<!-- carousel -->
<br>
<div id="text-carousel" class="carousel slide intro1" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="row">
 
        <div class="col-xs-offset-3 col-xs-6">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="carousel-content">
                        <div>
                            <p><h2>Welcome to Com!Alert</h2>We're an online magazine and discussion forum. We have all the latest news that your inner nerd absolutely cannot miss! We cover Marvel, DC, Manga and Anime!</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                        <div>
                            <p><h2><a href="comalert_aboutus.html">About Us</a></h2>Get to know the team behind Com!Alert</p>
                                <a href="404.html">clickbait do not click it.click it click.</a>
                
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                        <div>                          
                            <p><h2><a href="contactus2.php">Contact us!</a></h2>We're still a very young website and we'd love to hear your constructive criticism!</p>
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
    <!-- Controls --> <a class="left carousel-control" href="#text-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
 <a class="right carousel-control" href="#text-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>
<br>
<!-- carousel ends -->

</body>
</html>