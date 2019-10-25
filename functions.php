<?php

declare(strict_types=1);

// Generates a random number of "likes".

function randomLike(): int
{
	return rand(532, 13273);
};

// Sorts the $articles array by the published date.

function sortDate(array $a, array $b): int
{
	return strtotime($b["published"]) - strtotime($a["published"]);
};

//

function countArticles($articles, $i)
{
	if (count($articles) - 1 === $i) {
		return 0;
	} else {
		return $i + 1;
	}
};

//

function locateLastArticle($articles, $i, $stringToEcho)
{
	if (count($articles) - 1 === $i) {
		return $stringToEcho;
	}
};
