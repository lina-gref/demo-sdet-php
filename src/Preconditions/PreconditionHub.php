<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\Preconditions;

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Nymph\DemoSdetPhp\Configuration\Domain;
use Nymph\DemoSdetPhp\Pages\LoginPage;

class PreconditionHub
{
    private RemoteWebDriver $driver;

    public function __construct(RemoteWebDriver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Get the LoginPage for the specified domain.
     *
     * @param Domain $domain
     * @return LoginPage
     */
    public function loginPage(Domain $domain): LoginPage
    {
        $this->driver->get($domain->value);

        return new LoginPage($this->driver);
    }
}
