<?php
use AbstractClass\Board as BaseClass;

include_once('Board.php');

class BoardGame extends BaseClass
{
}

$game = new BoardGame;
$game->playerMovement();