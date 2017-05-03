<?php
include "error.php";
//include "database.php";

$statement = $pdo->prepare("SELECT * FROM post
	INNER JOIN user 
	ON post.id = user.id
	");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

/*echo highlight_string("<?php\n\$data =\n" . var_export($posts, true) . ";\n?>");*/

/*echo "<table>";
echo "<tr> <th>Title</th> <th>img</th> <th>Text</th> <th>nrOfLikes</th> <th>Date</th></tr>";
foreach ($posts as $row) {
	$title = $row['title'];
	$img = $row['img'];
	$blogText = $row['blogText'];
	$nrOfLikes = $row['nrOfLikes'];
	$postDate = $row['postDate'];
	echo "<tr> <td>$title</td> <td>$img</td> <td>$blogText</td> <td>$nrOfLikes</td> <td>$postDate</td></tr>";
}
echo "</table>";*/
foreach ($posts as $row) {
	$title = $row['title'];
	$img = $row['img'];
	$blogText = $row['blogText'];
	$nrOfLikes = $row['nrOfLikes'];
	$postDate = $row['postDate'];
	$username = $row['username'];
	/*echo "<tr> <td>$title</td> <td>$img</td> <td>$blogText</td> <td>$nrOfLikes</td> <td>$postDate</td></tr>";*/
	echo
	"
	<div class='col-lg-3 col-md-10 col-sm-12'>
		<div class='show card' '>

			<div class='card-block'>
				<h4 class='card-title'>$title</h4>
				<h5 class='card-subtitle text-muted'>$img</h5>

				<p class='card-text' style='font-style: italic;'> $blogText </p>
				<h3 class='card-subtitle text-muted'>Date Made and Likes</h3>
				<hr class='muted'>
				$username
				$postDate
				

			</div>
		</div>
	</div>
	";
}




?>