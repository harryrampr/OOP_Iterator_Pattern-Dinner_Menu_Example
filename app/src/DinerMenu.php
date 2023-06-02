<?php
declare(strict_types=1);

namespace App;

use Iterator;

class DinerMenu implements Menu
{
    const MAX_ITEMS = 6;
    private int $numberOfItems = 0;
    /** @var MenuItem[] */
    private array $menuItems;

    public function __construct()
    {
        $this->menuItems = array_fill(0, self::MAX_ITEMS, null);
        $this->addItem('Vegetarian BLT',
            "(Fakin') Bacon with lettuce & tomato on whole wheat", true, 2.99);
        $this->addItem('BLT',
            'Bacon with lettuce & tomato on whole wheat', false, 2.99);
        $this->addItem('Soup of the day',
            'Soup of the day, with a side of potato salad', false, 3.29);
        $this->addItem('Hotdog',
            'A hot dog, with saurkraut, relish, onions, topped with cheese',
            false, 3.05);
    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price): void
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        if ($this->numberOfItems >= self::MAX_ITEMS) {
            echo 'Sorry, menu is full! Can’t add item to menu', PHP_EOL;
        } else {
            $this->menuItems[$this->numberOfItems] = $menuItem;
            $this->numberOfItems++;
        }
    }

    public function createIterator(): Iterator
    {
        return new DinerMenuIterator($this->menuItems);
    }
}