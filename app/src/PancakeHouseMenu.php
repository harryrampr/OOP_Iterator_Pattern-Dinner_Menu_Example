<?php
declare(strict_types=1);

namespace App;

use ArrayObject;
use Iterator;

class PancakeHouseMenu implements Menu
{
    private ArrayObject $menuItems;

    public function __construct()
    {
        $this->menuItems = new ArrayObject();
        $this->addItem("K&B's Pancake Breakfast",
            'Pancakes with scrambled eggs, and toast',
            true,
            2.99);
        $this->addItem('Regular Pancake Breakfast',
            'Pancakes with fried eggs, sausage',
            false,
            2.99);
        $this->addItem('Regular Pancake Breakfast',
            'Pancakes with fried eggs, sausage',
            false,
            2.99);
        $this->addItem('Waffles',
            'Waffles, with your choice of blueberries or strawberries',
            true,
            3.59);
    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price): void
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems->append($menuItem);
    }

    public function createIterator(): Iterator
    {
        return $this->menuItems->getIterator();
    }

}