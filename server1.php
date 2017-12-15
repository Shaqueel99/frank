<?php
	sessions_start();
	$db = mysqli_connect('localhost', 'root', '', 'slides' );

	$host = 'localhost';
	$user = 'root';
	$pass = ' ';

	mysql_connect($host, $user, $pass);

	mysql_select_db('slides');


	$slide1 = '';
	$slide2 = '';
	$slide3 = '';

	if (isset($_POST['submit'])){
		$slide1 = $_POST['slide1'];
		$slide2 = $_POST['slide2'];
		$slide3 = $_POST['slide3'];

	mysqli_query($db, "INSERT INTO slides(slide1, slide2, slide3) VALUES ('$slide1', '$slide2', 'slide3')");
		$_SESSION['message'] = "Article Updated!";
		header('location:upload.php');

		}

		$results = mysqli_query($db, "SELECT * FROM slides");