<?php

$from = $_POST['email'];
$to = 'jimmy2615@msn.com';
$subject = $_POST['subject'];
$body = $_POST['name']." (".$_POST['email'].") wrote:\n\n".$_POST['message'];

mail($to,$subject,$body);

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="5;url=http://www.redpokes.com/redpoke/mail.html" />
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">
	<style>
		*{
			font-family: 'Fira Sans Condensed', sans-serif;
		}
		.center {
			margin: auto;
			width: 50%;
			padding: 10px;
			font-size:2rem;
			text-align:center;
			margin-top:5rem;
		}
		h1{
			font-size:3rem;
		}
		body{
			background-color:#ccc;
		}
	</style>
	<title>Red Poke</title>
</head>
<body>
	<div class="center">
		<h1>Thank you for your feedback</h1>
		<p>We'll try and get back to you as soon as possible, in the mean time:</p>
		Please click <a href="http://www.redpokes.com/redpoke/mail.html">redpokes.com</a> If you are not automatically returned to the previous page in 5 seconds.
	</div>
</body>
</html>