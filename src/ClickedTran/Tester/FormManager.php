<?php

use pocketmine\player\Player;
use jojoe77777\FormAPI\SimpleForm;

/** @var Player $player */

$form = new SimpleForm(function(Player $player, ?int $data) {
    if ($data === null) return;
    sayHello($player, $data);
});

$form.setTitle("Form test");
$form.addButton("Nút 1");
$form.addButton("Nút 2");

$player.sendForm($form);

function sayHello(Player $player, int $data){
    return $player.sendMessage("Bạn đã ấn vào nút số ".$data);
}
