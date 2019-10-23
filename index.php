<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i,700,700i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/Images/newspapericon.png" type="image/x-icon">
</head>

<body>
    <main class="content-wrapper">
        <nav>
            <h1>Plane News</h1>
            <p class="navparagraph">- The latest reports on planes for all you aviator fans!</p>
        </nav>

        <section class="articlewrapper">

            <?php foreach ($articles as $article) : ?>
                <?php
                    $title = $article["title"];
                    $image = $article["image"];
                    $content = $article["content"];
                    $authorname = $authors[$article['authorId']]['name'];
                    $authorimage = $authors[$article['authorId']]['authorimage'];
                    $published = $article["published"];
                    $likes = $article["likes"];
                    ?>
                <article>
                    <h3><?php echo $title; ?></h3>
                    <p>Published: <?php echo $published; ?></p>
                    <img class="articleimage" src="<?php echo $image; ?>" alt="Image of a plane">
                    <p><?php echo nl2br($content); ?></p>
                    <p class="authorname"><?php echo $authorname; ?></p>
                    <img class="authorimage" src="<?php echo $authorimage; ?>" alt="Image of <?php echo $authorname; ?>">
                    <p><img class="likeicon" src="/Images/likeicon.png" alt=""> <?php echo randomLike(); ?></p>
                </article>
            <?php endforeach; ?>

        </section>
    </main>


</body>

</html>