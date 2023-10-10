#!/usr/bin/env php

<?php
$GithubPath = __DIR__.'/../vendor/autoload.php';
$PackagistPath = __DIR__.'/../../../autoload.php';

require file_exists($GithubPath) ? $GithubPath : $PackagistPath;

use function ortemx\GuessNumber\Controller\startGame;

startGame();
