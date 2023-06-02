<?php
declare(strict_types=1);

namespace App;

use Iterator;

class Waitress
{
    private Menu $pancakeHouseMenu;
    private Menu $dinerMenu;
    private Menu $cafeMenu;

    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu, Menu $cafeMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
        $this->cafeMenu = $cafeMenu;
    }

    public function printMenu(): void
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        $dinerIterator = $this->dinerMenu->createIterator();
        $cafeIterator = $this->cafeMenu->createIterator();

        echo '<h1>MENU</h1>', PHP_EOL;
        echo '<h2>BREAKFAST:</h2>', PHP_EOL;
        $this->printMenuItems($pancakeIterator);
        echo '<h2>LUNCH:</h2>', PHP_EOL;
        $this->printMenuItems($dinerIterator);
        echo '<h2>DINNER:</h2>', PHP_EOL;
        $this->printMenuItems($cafeIterator);

    }

    private function printMenuItems(Iterator $iterator): void
    {
        while ($iterator->valid()) {
            /** @var MenuItem $menuItem */
            $menuItem = $iterator->current();
            echo sprintf("<h3>%s, $%.2F</h3>\n<p>%s</p>%s",
                $menuItem->getName(), $menuItem->getPrice(),
                $menuItem->getDescription(), PHP_EOL);
            $iterator->next();
        }
    }

}