<?php
namespace Maxcxam\Arrays;

class SortedSet extends Iterabled
{
    public function __construct(array $items = [])
    {
        foreach ($items as $item) {
            if(!in_array($item, $this->items, TRUE)) {
                $this->items[] = $item;
            }

            sort($this->items);
        }
    }

    public function put(mixed $item)
    {
        if(!$this->contains($item)) {
            $this->items[] = $item;
        }

        sort($this->items);
    }

}