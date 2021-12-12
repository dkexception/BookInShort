<?php
	include 'connect.php';
	if(isset($_GET['name'])){
		$getImage = "SELECT icon from book WHERE name = '".$_GET['name']."'";
		$im = mysqli_query($connect,$getImage);
		if(mysqli_num_rows($im) == 0){
			$getImage = "SELECT icon from requests WHERE name = '".$_GET['name']."'";
			$im = mysqli_query($connect,$getImage);
		}
		$ro = mysqli_fetch_array($im);
		$image = $ro['icon'];
		$src = "icons/".$image;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script type="text/javascript" src = "main.js"></script>
<body>
	<header>
		<div class = "logo">
			<h1 style="font-family: lucida console;"><?php if(isset($_GET['name'])) echo $_GET['name']; else echo "Book In Short"; ?></h1>
		</div>
	</header></br>
	<section>
		<center>
			<div class="mainInfo" style="width:210px; height: 210px; margin-bottom: 20px;">
				<img src='<?php echo $src;?>' style="height: 200px; width: 200px;" />
			</div>
			<div class="mainInfo" style="border-radius: 10px 0 10px 0;">
				<?php
					
					if(isset($_GET['name'])){
						$select = "SELECT content FROM book WHERE name = '".$_GET['name']."'";
						$content = mysqli_query($connect,$select);
						if(mysqli_num_rows($content) == 1){
							while($ro = mysqli_fetch_array($content)){
								echo $ro['content'];
							}
						}
						else {
							$mselect = "SELECT content FROM requests WHERE name = '".$_GET['name']."'";
							$mcontent = mysqli_query($connect,$mselect);
							if(mysqli_num_rows($mcontent) == 1){
								while($mro = mysqli_fetch_array($mcontent)){
									echo $mro['content'];
								}
							}
						}
					}
				?>
			</div>
		</center>
	</section></br></br>
	<footer>
		<div class = "foot">
			<p class = "content">Copyright &copy; 2017</p>
		</div>
	</footer>
	
</body>
</html>