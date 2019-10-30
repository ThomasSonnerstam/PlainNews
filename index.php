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
	<main class="contentWrapper">

		<nav>
			<p class="currentDate"></p>
			<h1>Plane News</h1>
			<p class="navParagraph">- The latest reports on planes for all you aviator fans!</p>
		</nav>


		<section class="articleWrapper">

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
					<p class="publishedParagraph">Published: <?php echo $published; ?></p>
					<img class="articleImage" loading="lazy" src="<?php echo $image; ?>" alt="Image of a plane">
					<p class="contentParagraph"><?php echo nl2br($content); ?></p>
					<div class="authorArrowWrapper">
						<div class="authorWrapper">
							<p class="authorName"><?php echo $authorName; ?></p>
							<img class="authorImage" loading="lazy" src="<?php echo $authorImage; ?>" alt="Image of <?php echo $authorName; ?>">
							<p class="likeParagraph"><img class="like-icon" src="/Images/likeicon.png" alt=""> <?php echo randomLike(); ?></p>
						</div>
						<a class="arrows" href="#<?php echo countArticles($articles, $i); ?>">
							<img id="<?php echo $i; ?>" loading="lazy" class="downArrow <?php echoOnLastArticle($articles, $i, 'lastArticle'); ?>" src="/Images/downarrowicon.png" alt="Navigation arrow" />
						</a>
					</div>
				</article>

			<?php endforeach; ?>

		</section>
	</main>

	<script src="script.js"></script>
</body>

</html>
