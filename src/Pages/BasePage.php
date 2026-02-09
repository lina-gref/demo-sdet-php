<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\Pages;

use Facebook\WebDriver\Remote\RemoteWebDriver;

abstract class BasePage implements PageInterface
{
    protected RemoteWebDriver $driver;

    public function __construct(RemoteWebDriver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Open a page at the given URL.
     *
     * @param string $url
     * @return void
     */
    public function open(string $url): void
    {
        $this->driver->get($url);
    }

    /**
     * Get the WebDriver instance.
     *
     * @return RemoteWebDriver
     */
    public function getDriver(): RemoteWebDriver
    {
        return $this->driver;
    }
}
