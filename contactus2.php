<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<link rel='shortcut icon' href='images/images.jpe'/>

<link rel='stylesheet' type='text/css' href='CSS/style1.css'>
<link rel='stylesheet' type='text/css' href='CSS/style_feedback.css'>

</head>

<body>

	<!-- header starts --> 
	<div id='heade'>
		<div id='fixedmenu'>
			<table>
				<tr>
					<td><a href='home.php'>Home</a></td>
					<td><a href='comalert_anime.html'>Anime</a></td>
					<td><a href='comalert_dc.html'>DC</a></td>
					<td><a href='comalert_manga.html'>Manga</a></td>
					<td><a href='comalert_marvel.html'>Marvel</a></td>
				</tr>
			</table>
		</div>
		<div id='headingname'>CONTACT US!</div>
	</div>
	<!-- header ends -->

	<!-- three members info starts -->
	<div class='news'>We'd love to hear from you!</div>

	<div class='news'>
		Feel free to mail us your thoughts at <strong style='color: #D66;'>comalert@gmail.com</strong><br>Or call us: 04440069
	</div>

	<div class='news' id='feedback'>
		<br>
        <div class="button">
       <!-- <form action="log.html" method="post">-->
      
      <!--<button type="submit" class="button" value="Add Feedback"/>-->
      <a href="log.html">ADD FEEDBACK</a>
       <!-- </form>-->
        </div>


    <br>
    <div class="comments">
    <?php
              //include('Config.php');
    session_start();
      $_SESSION['count']++;
      if ($_SESSION['flag']==10 && $_SESSION['count']>1){ 
        echo "<div style='color: red; font-size:20px'>".$_SESSION['error']."</div>";}

      define('DB_SERVER', 'localhost:3306');
      define('DB_USERNAME', 'root');
      define('DB_PASSWORD', '');
      define('DB_DATABASE', 'comalert');
      //$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
      //create connectionR
      $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

      if(!$db){
      //check connection
        die('Connection failed:'.mysqli_connect_error());
      }
      else{
        $result = mysqli_query($db,"SELECT user,com FROM comment");
        if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
            echo "<br><div class='user'>".$row['user']."</div> : <span class='com'>".$row['com']."</span><br>" ;
        //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        //foreach ($row as $value){
        //echo '<br>'.$value;}}
       }}
     }
      mysqli_close($db);

    ?>
    </div>
    <br>
    <br>
	</div>

</body>
</html>
