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
	return strtotime($b["published"]) <=> strtotime($a["published"]);
};

// A function that counts how many articles there are starting at 1 instead of 0.
// The -1 is to limit the articles to the existing 10 articles instead of counting up to 11.

function countArticles(array $articles, int $i): int
{
	if (count($articles) - 1 === $i) {
		return 0;
	} else {
		return $i + 1;
	}
};

// Prints a unique class name to the last article so that the last navigation
// arrow can be formatted accordingly.

function echoOnLastArticle(array $articles, int $i, string $stringToEcho): void
{
	if (count($articles) - 1 === $i) {
		echo $stringToEcho;
	}
};
