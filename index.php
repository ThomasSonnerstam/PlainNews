<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
usort($articles, "sortDate");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Plain News</title>
	<link rel="stylesheet" href="https://unpkg.com/sanitize.css@11.0.0/sanitize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="/Images/newspapericon.png" type="image/x-icon">
</head>

<body>
	<main class="content-wrapper">
		<nav>
			<h1>Plane News</h1>
			<p class="nav-paragraph">- The latest reports on planes for all you aviator fans!</p>
			<p class="current-date"></p>
		</nav>


		<section class="article-wrapper">

			<?php foreach ($articles as $i => $article) : ?>

				<?php
					$title = $article["title"];
					$image = $article["image"];
					$content = $article["content"];
					$authorName = $authors[$article['authorId']]['name'];
					$authorImage = $authors[$article['authorId']]['authorImage'];
					$published = $article["published"];
					$likes = $article["likes"];
					?>

				<article id="<?php echo $i; ?>">
					<h3><?php echo $title; ?></h3>
					<p class="published-paragraph">Published: <?php echo $published; ?></p>
					<img class="article-image" src="<?php echo $image; ?>" alt="Image of a plane">
					<p class="content-paragraph"><?php echo nl2br($content); ?></p>
					<div class="author-arrow-wrapper">
						<div class="author-wrapper">
							<p class="author-name"><?php echo $authorName; ?></p>
							<img class="author-image" src="<?php echo $authorImage; ?>" alt="Image of <?php echo $authorName; ?>">
							<p class="like-paragraph"><img class="like-icon" src="/Images/likeicon.png" alt=""> <?php echo randomLike(); ?></p>
						</div>
						<a class="arrows" href="#<?php echo countArticles($articles, $i); ?>">
							<img id="<?php echo $i; ?>" class="down-arrow <?php echoOnLastArticle($articles, $i, 'last-article'); ?>" src="/Images/downarrowicon.png" alt="Navigation arrow" />
						</a>
					</div>
				</article>

			<?php endforeach; ?>

		</section>
	</main>

	<script src="script.js"></script>
</body>

</html>
