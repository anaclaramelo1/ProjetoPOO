<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
		<style type="text/css">
			header{
				width: 100%;
				height: 200px;
				background-color:  #d734f4;
				float: left;
			}
			
			.sct{
				width: 100%;
				height: 2000px;
				
			}
			
			#sct01{
				background-color: #e9e8e6;
			}
						
			footer{
				width: 100%;
				height: 200px;
				padding: 15px;
				background-color:  #d734f4;
				text-align: center;			
			}
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
				$(document).ready(function() {
					$("#header").load("header.php"   );
					$("#sct01" ).load("conteudo.html");
					$("#footer").load("footer.php"   );
				});
		</script>
	</head>
<body>
	<header id="header">innerHTML header</header>
	<section class="sct" id="sct01" >innerHTML sct01</section>
	<footer id="footer">innerHTML footer</footer>
</body>
</html>