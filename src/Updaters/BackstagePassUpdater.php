<?php

namespace App\Updaters;

use App\Item;

class BackstagePassUpdater extends ItemUpdater
{
    public function updateQuality()
    {   
        //Quality +1 car temps passe
        $this->increaseQuality();
        if ($this->item->sell_in < 11) {
            //Quality +1 car jours inférieur à 10
            $this->increaseQuality();
        }
        if ($this->item->sell_in < 6) {
            //Quality +1 encore car jours inférieur à 5
            $this->increaseQuality();
        }
    }
    
    public function updateExpired()
    {   //On met la qualité à 0 car la date est passée
        $this->item->quality = 0;
    }

    public static function resolve(Item $item): bool
    {
        return $item->name == "Backstage passes to a TAFKAL80ETC concert";
    }

}