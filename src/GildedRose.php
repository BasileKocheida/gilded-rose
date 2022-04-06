<?php

namespace App;

use App\ItemClassifier;

final class GildedRose
{
    /**
     * @var Item[]
     */
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function updateQuality(): void
    {
        foreach($this->items as $item)
        {
            $this->updateItem($item);
        }
    }

    public function updateItem($item)
    {
        $itemClassifier = new ItemClassifier();
        $myItem = $itemClassifier->categorize($item);
        $myItem->update();
    }
}
