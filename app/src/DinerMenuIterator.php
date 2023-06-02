<?php
declare(strict_types=1);

namespace App;

use Iterator;

class DinerMenuIterator implements Iterator
{
    /** @var MenuItem[] */
    protected array $list;
    protected int $position = 0;

    /**
     * @param MenuItem[] $list
     */
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    public function current(): MenuItem
    {
        return $this->list[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): string
    {
        return array_keys($this->list)[$this->position];
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        if ($this->position >= count($this->list) || is_null($this->list[$this->position])) {
            return false;
        }
        return true;
    }
}