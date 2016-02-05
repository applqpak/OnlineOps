<?php

  namespace OnlineOps;

  use pocketmine\plugin\PluginBase;
  use pocketmine\utils\TextFormat as TF;
  use pocketmine\command\Command;
  use pocketmine\command\CommandSender;

  class Main extends PluginBase {

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {

      if(strtolower($cmd->getName()) === "onlineops") {

        $sender->sendMessage(TF::YELLOW . "Getting all OPs...");

        $sender->sendMessage(TF::GREEN . "All OPs:");

        foreach($this->getServer()->getOnlinePlayers() as $player) {

          if($player->isOp()) {

            $sender->sendMessage(TF::LIGHT_PURPLE . $player->getName());

          }

        }

        return true;

      }

    }

  }

?>
