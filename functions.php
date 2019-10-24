<?php

declare(strict_types=1);

// Generates a random number of "likes".

function randomLike(): int
{
    return rand(532, 13273);
}

// Sorts the $articles array by the published date.

usort($articles, function (array $a, array $b) {
    return $b["published"] <=> $a["published"];
});
