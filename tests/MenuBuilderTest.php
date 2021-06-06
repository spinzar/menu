<?php

namespace Spinzar\Menu\Tests;

use Spinzar\Menu\MenuBuilder;
use Spinzar\Menu\MenuItem;
use Illuminate\Config\Repository;

class MenuBuilderTest extends TestCase
{
    /** @test */
    public function it_makes_a_menu_item()
    {
        $builder = new MenuBuilder('main', app(Repository::class));

        self::assertInstanceOf(MenuItem::class, $builder->url('hello', 'world'));
    }
}
