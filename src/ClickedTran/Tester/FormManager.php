<?php

use pocketmine\player\Player;
use pocketmine\Server;
use jojoe77777\FormAPI\SimpleForm;

/** @var Player $player */

function sendForm(Player $player) : void{
  $form = new SimpleForm(function(Player $player, ?int $data){
      if ($data === null) return;
      sayHello($player, $data);
  });

  $form.setTitle("Form test");
  $form.addButton("Nút 1");
  $form.addButton("Nút 2");

  $player.sendForm($form);
}

function sayHello(Player $player, int $data){
    $player.sendMessage("Bạn đã ấn vào nút số " . ($data + 1));
    Server::getInstance().getLogger().info("Người chơi " . $player.getName() . " vừa ấn vào nút số " . ($data + 1));
}

sendForm($player);
