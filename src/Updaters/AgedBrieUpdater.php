<?php

namespace App\Updaters;

use App\Item;

class AgedBrieUpdater extends ItemUpdater
{
    public function updateQuality()
    {
        $this->increaseQuality();
    }
    
    public function updateExpired()
    {
        $this->increaseQuality();
    }

    public static function resolve(Item $item): bool
    {
        return $item->name == "Aged Brie";
    }
}