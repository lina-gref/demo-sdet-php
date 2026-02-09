<?php

declare(strict_types=1);

namespace Tests\UI;

use Nymph\DemoSdetPhp\Configuration\Domain;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    use \Nymph\DemoSdetPhp\AMTestCaseTrait;

    /**
     * Test that we can navigate to the Facebook login page.
     *
     * @return void
     */
    public function testCanNavigateToLoginPage(): void
    {
        // Navigate to the Facebook login page
        $loginPage = $this->precondition()->loginPage(Domain::Facebook);

        // Assert that the login page is displayed
        $this->assertTrue($loginPage->isDisplayed());
    }
}