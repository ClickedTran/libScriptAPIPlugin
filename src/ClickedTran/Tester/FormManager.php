<?php

use pocketmine\player\Player;
use pocketmine\Server;
use jojoe77777\FormAPI\SimpleForm;

/** @var Player $player */

function sendMenu(Player $player) : void{
  $form = new SimpleForm(function(Player $player, ?int $data) : void{
      if ($data === null) return;
      sayHello($player, $data);
  });

  $form.setTitle("Form test");
  $form.addButton("Nút 1");
  $form.addButton("Nút 2");

  $player.sendForm($form);
}

function sayHello(Player $player, int $data){
    $form = new SimpleForm(function(Player $player, ?int $data) : void{
      if ($data === null) sendMenu($player);
  });
  $d = $data + 1;

  $form.setTitle("Form test");
  $form.setContent("Bạn đã ấn vào nút ". $d);

  $player.sendForm($form);
}

sendMenu($player);
