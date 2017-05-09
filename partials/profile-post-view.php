<?php 

$profile = new Profile($pdo);
$allPosts = $profile->profileAllPosts($_SESSION['userId']);
?>
<body>
<div class="container-fluid">
  <div class="row">
  	<div class="col-md-3 col-sm-12">
  		<?php $username = $_SESSION["username"];
        echo "<h4>" .ucfirst($username)."'s Profile <h4>";
        ?>
  	</div>
<div class="col-md-9 col-sm-12">
 <?php 
foreach ($allPosts as $row) {
	$titlep = $row['title'];
	$imgp = $row['img'];
	$blogTextp = $row['blogText'];
	$nrOfLikesp = $row['nrOfLikes'];
	$postDatep = $row['postDate'];
?>
  	

     	<div class='card'>
			<img class='card-img-top pt-15 img-fluid' src='<?= $imgp ?>' alt='Card image cap'>
			<div class='card-block'>
				<h4 class='card-title'> <?= $titlep ?></h4>
				<p class='card-text'>
					<?=$blogTextp ?>
				</p>
				<p>
					Posted on: <?= $postDatep ?>
				</p>	
			</div>
		</div>



  	 <?php
}

?>

  	 </div>
  </div>
</div>
</body>