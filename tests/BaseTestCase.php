<?php

namespace Spinzar\Menus\Tests;

use Collective\Html\HtmlServiceProvider;
use Spinzar\Menus\MenusServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class BaseTestCase extends OrchestraTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            HtmlServiceProvider::class,
            MenusServiceProvider::class,
        ];
    }

    /**
     * Set up the environment.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('menu', [
            'styles' => [
                'bs3-navbar' => \Spinzar\Menu\Presenters\Bootstrap3\Navbar::class,
                'bs3-navbar-right' => \Spinzar\Menu\Presenters\Bootstrap3\NavbarRight::class,
                'bs3-nav-pills' => \Spinzar\Menu\Presenters\Bootstrap3\NavPills::class,
                'bs3-nav-tab' => \Spinzar\Menu\Presenters\Bootstrap3\NavTab::class,
                'bs3-sidebar' => \Spinzar\Menu\Presenters\Bootstrap3\Sidebar::class,
                'bs3-navmenu' => \Spinzar\Menu\Presenters\Bootstrap3\Nav::class,
            ],

            'ordering' => false,
        ]);
    }
}
