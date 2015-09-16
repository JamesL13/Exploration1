<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>James Landy Portfolio</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" media="screen" href="CSS/main.css">

	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

	<script src="JS/ajax.js"></script>
	<script src="JS/Manipulation.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>


</head>

<body>

<div id="container">

<div id="leftColumn">

</br>
<div id="SolsticeLogoOpener">
<h1>James Landy</h1>
</div><!--SolsticeLogo-->


<div class="choice" id="choice1">
	<p>SOURCES</p>
</div><!--aboutME-->

<a href="https://github.com/JamesL13/Exploration1" target="_blank">
<div class="choice" id="github">
	<p>CODE HERE!</p>
</div><!--github-->
</a>

<div class="choice" id="choice2">
	<p>RECAP</p>
</div><!--solstice-->

</div><!--leftColumn-->



<div id="content">

	<div id="Sources">
	</div><!--aboutMeinfo-->

	<div id="Recap">
	</div><!--solsticeInfo-->

</div><!--content-->

</div><!--container-->


<!--HIDE AND SEEK-->
<script>

		$('#choice1').click(function() { 
			$('#choice1').click(HideandSeek('choice1'));
		});

		$('#choice2').click(function() {
			$('#choice2').click(HideandSeek('choice2'));
		});

</script>

</body>

</html>