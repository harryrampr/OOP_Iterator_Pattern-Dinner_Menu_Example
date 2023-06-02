<?php

namespace App;

use Iterator;

interface Menu
{
    public function createIterator(): Iterator;
}