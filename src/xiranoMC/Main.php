<?php
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\utils\TextFormat as Color;
class Main extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info(Color::GREEN."Moving color Started ! ");
  }
  
  public function onMove(PlayerMoveEvent $event){
    $player = $event->getPlayer();
    $name = $event->getName();
    switch(mt_rand(1,5)){
      case 1:
        $player->setNameTag("§4"$name);
        break;
      case 2:
        $player->setNameTag("§b"$name);
        break;
      case 3:
        $player->setNameTag("§6"$name);
        break;
      case 4:
        $player->setNameTag("§a"$name);
        break;
      case 5:
        $player->setNameTag("§d"$name);
    }
  }
}
