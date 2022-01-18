<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php $f_chr = file_get_contents("data/title.jin"); echo $f_chr; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Launching Soon Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<!-- font files -->
<link href="http://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!-- /font files -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- /css files -->
<link rel="Shortcut Icon" href="<?php $f_chr = file_get_contents("data/icon.jin"); echo $f_chr; ?>" type="image/x-icon" />

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><!-- Supportive-JavaScript -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
    <style>
        .demo-1 .large-header {
	background-image: url('<?php $f_chr = file_get_contents("data/bg-url.jin"); echo $f_chr; ?>');
	background-position: center bottom;
}
    </style>
<div class="container demo-1">
	<div class="content">
        <div id="large-header" class="large-header">
			<div class="w3ls-main-title">
				<h1> <?php $f_chr = file_get_contents("data/festival.jin"); echo $f_chr; ?>倒计时</h1>
					<div class="demo2"></div>
					<!--newsletter-->
					<div class="w3layouts-newsletter">
						<h2  style="color: whitesmoke;"><?php $f_chr = file_get_contents("data/said-1.jin"); echo $f_chr; ?><h2>
						<br>
						<br />
						<br />
						<br />
						<p style="color: white;font-size: medium;">
						
                         <?php $f_chr = file_get_contents("data/said-2.jin"); echo $f_chr; ?>
						</p>
						
			
					</div>
			</div>
            <canvas id="demo-canvas"></canvas>
        </div>
	</div>
</div>	
<!-- /main-section -->
<!-- Counter required files -->
	<link rel="stylesheet" href="css/dscountdown.css" type="text/css" media="all">
	<script type="text/javascript" src="js/dscountdown.min.js"></script>
	<script>
		jQuery(document).ready(function($){						
			$('.demo2').dsCountDown({
				endDate: new Date("<?php $f_chr = file_get_contents("data/date.jin"); echo $f_chr; ?>"),
				theme: 'black'
				});								
		});
	</script>
<!-- //Counter required files -->
<!-- js files -->
<script src="js/rAF.js"></script>
<script src="js/demo-2.js"></script>
<!-- /js files -->
</body>
</html>