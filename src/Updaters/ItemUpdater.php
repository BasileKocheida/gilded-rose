<?php

namespace App\Updaters;

class ItemUpdater
{
    protected $item;

    public function __construct($item)
    {
        $this->item = $item;
    }

    public function increaseQuality()
    {
       if($this->item->quality < 50)
       {
            $this->item->quality = $this->item->quality + 1;
       }
    }

    public function decreaseQuality()
    {
        if($this->item->quality > 0)
        {
            $this->item->quality = $this->item->quality - 1;
        }
    }

    public function updateQuality()
    {
        $this->decreaseQuality();
    }
    
    public function updateSellIn()
    {
        $this->item->sell_in = $this->item->sell_in - 1;
    }

    public function update()
    {
        
        $this->updateQuality();
        $this->updateSellIn();
        if($this->item->sell_in < 0)
        {
            $this->updateExpired();
        }
    }

    protected function updateExpired()
    {
        //$this->item->quality = 0; MEME CHOSE ?
        $this->decreaseQuality();
    }

    public function __toString()
    {
        return "{$this->item}";
    }
}