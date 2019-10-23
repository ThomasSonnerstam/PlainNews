<?php

declare(strict_types=1);

// Generates a random number of "likes"

function randomLike(): int
{
    return rand(532, 13273);
}


usort($articles, function ($a, $b) {
    return $a["published"] <=> $b["published"];
});
