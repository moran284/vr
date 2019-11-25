<?php
	$date = new DateTime();
?>


<html>
	<head>
		<title>VR-App – Test 02 – Choose</title>
		<meta charset="UTF-8">
		<link href="css/main.css" rel="stylesheet" />
		<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
	</head>
	<body>
		<a-scene inspector="https://cdn.jsdelivr.net/gh/aframevr/aframe-inspector@master/dist/aframe-inspector.min.js">
			<a-assets>
				<img id="homeThumbnail" src="assets/360.jpg">
			</a-assets>
			
			<a-entity
				position="0 3 -3"
				text=	"value: Choose your barn to check.;
						color: #FFFFFF;
						align: center;
						shader: msdf;
						font: https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/merriweather/Merriweather-Regular.json;
						width: 6;"
				rotation="0 0">
			</a-entity> 
			
			<a-link href="index.html" title="Barn 01" image="#homeThumbnail" position="-4.5 1.5 -5" rotation="0 0" on="click"></a-link>
				
			<a-link href="index.html" title="Barn 02" image="#homeThumbnail" position="-1.5 1.5 -5" rotation="0 0" on="click"></a-link>
				
			<a-link href="index.html" title="Barn 03" image="#homeThumbnail" position="1.5 1.5 -5" rotation="0 0" on="click"></a-link>
				
			<a-link href="index.html" title="Barn 04" image="#homeThumbnail" position="4.5 1.5 -5" rotation="0 0" on="click"></a-link>
				
			<a-sky color="#000"></a-sky>
		</a-scene>
		<button id="request">
			Request
		</button>
		<script src="js/vendor/jquery-3.4.1.min.js"></script>
		<script src="js/main.js?<?php echo $date->getTimestamp();?>"></script>
	</body>
</html>