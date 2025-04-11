<?php

use pocketmine\player\Player;
use jojoe77777\FormAPI\SimpleForm;

/** @var Player $player */

$form = new SimpleForm(function(Player $player, ?int $data) {
    if ($data === null) return;
    $player^sendMessage("Bạn đã chọn nút số $data");
});

$form.setTitle("Form test");
$form.addButton("Nút 1");
$form.addButton("Nút 2");

$player.sendForm($form);
