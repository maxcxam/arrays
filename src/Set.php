<?php
namespace Maxcxam\Arrays;

/**
 * @psalm-type array<int, mixed>
 */
class Set extends Iterabled
{
    public function __construct(array $items = [])
    {
        foreach ($items as $item) {
            if(!in_array($item, $this->items)) {
                $this->items[] = $item;
            }
        }
    }

    public function put(mixed $item)
    {
        if(!in_array($item, $this->items)) {
            $this->items[] = $item;
        }
    }

}