<?php

use Maxcxam\Arrays\SortedSet;
use PHPUnit\Framework\TestCase;

/**
 * SortedSetTest
 *
 * Unit tests for class SortedSet and its method put
 */
class SortedSetTest extends TestCase
{
    /**
     * Test adding items to the set and automatic sorting
     */
    public function testAddAndSortItem()
    {
        $set = new SortedSet();
        $set->put(5);
        $set->put(3);
        $set->put(4);

        $expected = [3, 4, 5];
        $this->assertEquals($expected, $set->toArray());
    }

    /**
     * Test adding duplicate items to the set
     */
    public function testAddDuplicateItem()
    {
        $set = new SortedSet();
        $set->put(1);
        $set->put(1);
        $set->put(2);

        $expected = [1, 2];
        $this->assertEquals($expected, $set->toArray());
    }

    /**
     * Test adding items of different types to the set
     */
    public function testAddDifferentTypes()
    {
        $set = new SortedSet();
        $set->put(1);
        $set->put('1');
        $expected = [1, '1'];
        $this->assertEquals($expected, $set->toArray(), print_r($set->toArray(), TRUE));
    }
}