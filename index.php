<?php

require __DIR__ . '/data.php';

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

            <?php foreach ($authors as $author) : ?>
                <?php
                    $title = $author["articles"][0]["title"];
                    $image = $author["articles"][0]["image"];
                    $content = $author["articles"][0]["content"];
                    $authorname = $author["name"];
                    $authorimage = $author["authorimage"];
                    $published = $author["articles"][0]["published"];
                    $likes = $author["articles"][0]["likes"];
                    ?>
                <article>
                    <h3><?php echo $title; ?></h3>
                    <img src="<?php echo $image; ?>" alt="">
                    <p><?php echo $content; ?></p>
                    <p><?php echo $authorname; ?></p>
                    <img src="<?php echo $authorimage; ?>" alt="">
                    <p><?php echo $published; ?></p>
                    <p><?php echo $likes; ?></p>
                </article>
            <?php endforeach; ?>

            <?php foreach ($authors as $author) : ?>
                <?php
                    $title = $author["articles"][1]["title"];
                    $image = $author["articles"][1]["image"];
                    $content = $author["articles"][1]["content"];
                    $authorname = $author["name"];
                    $authorimage = $author["authorimage"];
                    $published = $author["articles"][1]["published"];
                    $likes = $author["articles"][1]["likes"];
                    ?>

                <h3><?php echo $title; ?></h3>
                <img src="<?php echo $image; ?>" alt="">
                <p><?php echo $content; ?></p>
                <p><?php echo $authorname; ?></p>
                <img src="<?php echo $authorimage; ?>" alt="">
                <p><?php echo $published; ?></p>
                <p><?php echo $likes; ?></p>
            <?php endforeach; ?>



        </section>
    </main>


</body>

</html>