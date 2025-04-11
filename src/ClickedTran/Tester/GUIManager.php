<?php

use pocketmine\player\Player;
use muqsit\invmenu\InvMenu;

/** @var Player $player */

$menu = InvMenu::create(InvMenu::TYPE_CHEST);
$menu.send($player, "Tester");
