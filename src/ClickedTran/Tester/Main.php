<?php

namespace ClickedTran\Tester;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\command\{Command, CommandSender};
use muqsit\invmenu\InvMenuHandler;
use ClickedTran\libScriptAPI\libScriptAPI;

class Main extends PluginBase {

    public function onEnable(): void {
        if(!InvMenuHandler::isRegistered()) InvMenuHandler::register($this);
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
      if(!$sender instanceof Player) return false;
      
      switch($cmd->getName()){
        case "testform":
          libScriptAPI::runScript(__DIR__ . "/FormManager.php", ["player" => $sender]);
        break;
        
        case "testgui":
          libScriptAPI::runScript(__DIR__ . "/GUIManager.php", ["player" => $sender]);
        break;
      }
      
      return false;
    }
}
