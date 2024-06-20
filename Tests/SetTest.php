<?php


use Maxcxam\Arrays\Set;
use PHPUnit\Framework\TestCase;

class SetTest extends TestCase
{
    private Set $set;

    protected function setUp(): void
    {
        parent::setUp();

        $this->set = new Set([1, 2, 3]);
    }

    /**
     * Test the put method.
     */
    public function testPutMethodShouldAddNewUniqueElement()
    {
        $this->assertFalse($this->set->contains(4));
        $this->set->put(4);
        $this->assertTrue($this->set->contains(4));
    }

    /**
     * Test that put method ensures uniqueness.
     */
    public function testPutMethodShouldNotAddDuplicateElement()
    {
        $this->set->put(2);
        $this->assertTrue($this->set->count() === 3);
    }
}