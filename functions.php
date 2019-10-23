<?php

declare(strict_types=1);

// Generates a random number of "likes"

function randomLike(): int
{
    return rand(532, 13273);
}


// function compareDate($a, $b)
// {
//     return strtotime($b["articles"][0]["published"]) - strtotime($a["articles"][0]["published"]);
// }
