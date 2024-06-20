<?php

namespace Maxcxam\Arrays;

use Iterator;

class Iterabled implements Iterator
{
    protected array $items = [];

    private int $position = 0;

    public function rewind(): void {
        $this->position = 0;
    }

    public function valid(): bool {
        return $this->position < count($this->items);
    }

    public function key(): int {
        return $this->position;
    }

    public function current(): mixed {
        return $this->items[$this->position];
    }

    public function next(): void {
        $this->position++;
    }

    public function containsKey(mixed $key): bool
    {
        return array_key_exists($key, $this->items);
    }

    public function count()
    {
        return count($this->items);
    }

    public function contains(mixed $item): bool
    {
        if(is_scalar($item)) {
            return in_array($item, $this->items, TRUE);
        } else {
            $serialized = serialize($item);
            foreach($this->items as $_item) {
                if(serialize($_item) === $serialized) {
                    return TRUE;
                }
            }
        }
        return FALSE;
    }

    public function toArray()
    {
        return $this->items;
    }

}