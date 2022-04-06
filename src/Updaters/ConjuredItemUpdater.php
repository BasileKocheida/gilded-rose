<?php

namespace App\Updaters;

use App\Item;

class ConjuredItemUpdater extends ItemUpdater
{
    public function updateQuality()
    {
        parent::updateQuality();
    }

    protected function updateExpired()
    {
        parent::updateExpired();
    }

    public static function resolve(Item $item): bool
    {
        return $item->name == "Conjured";
    }
}