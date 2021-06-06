<?php

return [

    'styles' => [
        // Boostrap 3
        'bs3-navbar' => \Spinzar\Menu\Presenters\Bootstrap3\Navbar::class,
        'bs3-navbar-right' => \Spinzar\Menu\Presenters\Bootstrap3\NavbarRight::class,
        'bs3-nav-pills' => \Spinzar\Menu\Presenters\Bootstrap3\NavPills::class,
        'bs3-nav-tab' => \Spinzar\Menu\Presenters\Bootstrap3\NavTab::class,
        'bs3-sidebar' => \Spinzar\Menu\Presenters\Bootstrap3\Sidebar::class,
        'bs3-navmenu' => \Spinzar\Menu\Presenters\Bootstrap3\Nav::class,

        // Zurb
        'zurb' => \Spinzar\Menu\Presenters\Foundation\Zurb::class,

        // Admin
        'adminlte' => \Spinzar\Menu\Presenters\Admin\Adminlte::class,
        'argon' => \Spinzar\Menu\Presenters\Admin\Argon::class,
        'metronic-horizontal' => \Spinzar\Menu\Presenters\Admin\MetronicHorizontal::class,
    ],

    'home_urls' => [
        '/',
    ],

    'ordering' => false,

];
