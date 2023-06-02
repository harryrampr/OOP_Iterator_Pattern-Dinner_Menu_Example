<?php
declare(strict_types=1);

namespace App;

use ArrayIterator;
use Ds\Map;
use Iterator;

class CafeMenu implements Menu
{
    private Map $menuItems;

    public function __construct()
    {
        $this->menuItems = new Map();
        $this->addItem('Soup of the day',
            'A cup of the soup of the day, with a side salad',
            false, 3.69);
        $this->addItem('Burrito',
            'A large burrito, with whole pinto beans, salsa, guacamole',
            true, 4.29);
        $this->addItem('Veggie Burger and Air Fries',
            'Veggie burger on a whole wheat bun, lettuce, tomato, and fries',
            true, 3.99);
    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price): void
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems->put($menuItem->getName(), $menuItem);
    }

    public function createIterator(): Iterator
    {
        $values = array_values($this->menuItems->toArray());
        return new ArrayIterator($values);
    }

}