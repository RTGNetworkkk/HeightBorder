<?php

namespace AdminStorer;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\item\Item;
use joincommands\LoginTask;
use pocketmine\utils\TextFormat as TF;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

  public function onEnable () {
    $this->getServer ()->getPluginManager ()->registerEvents ($this, $this);
    mkdir($this->getDataFolder());
    $this->cfg = new Config($this->getDataFolder() . "admins.yml");
    $admins = scandir("plugins/PurePerms/players/");
    foreach($admins as $admin) {
      if($admin != "." && $admin != "..") {
        $this->admin = new Config("plugins/PurePerms/players/");
        if($this->admin->get("group") == "Admin") {
         
        }
      }
    }
  }
}
