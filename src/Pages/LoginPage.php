<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\Pages;

use Facebook\WebDriver\WebDriverBy;

class LoginPage extends BasePage
{
    /**
     * Perform login with the given username and password.
     *
     * @param string $user
     * @param string $pass
     * @return void
     */
    public function login(string $user, string $pass): void
    {
        // Find and fill the username field
        $usernameField = $this->driver->findElement(WebDriverBy::id('username'));
        $usernameField->clear();
        $usernameField->sendKeys($user);

        // Find and fill the password field
        $passwordField = $this->driver->findElement(WebDriverBy::id('password'));
        $passwordField->clear();
        $passwordField->sendKeys($pass);

        // Find and click the login button
        $loginButton = $this->driver->findElement(WebDriverBy::id('login-button'));
        $loginButton->click();
    }

    /**
     * Verify that the login page is displayed.
     *
     * @return bool
     */
    public function isDisplayed(): bool
    {
        try {
            $this->driver->findElement(WebDriverBy::id('login-button'));
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
