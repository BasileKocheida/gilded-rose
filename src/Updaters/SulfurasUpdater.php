<?php

namespace App\Updaters;

use App\Item;

class SulfurasUpdater extends ItemUpdater
{
    public function update()
    {
        //ne change pas
    }

    public static function resolve(Item $item): bool
    {
        return $item->name == "Sulfuras, Hand of Ragnaros";
    }
}