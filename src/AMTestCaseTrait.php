<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp;

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Nymph\DemoSdetPhp\Api\PublicApiHub;
use Nymph\DemoSdetPhp\Preconditions\PreconditionHub;
use Nymph\DemoSdetPhp\TestData\LLMGenerator;
use Nymph\DemoSdetPhp\TestData\TestDataHub;
use Nymph\DemoSdetPhp\TestData\Users\UserFactory;
use Nymph\DemoSdetPhp\TestData\Users\UserGenerator;

trait AMTestCaseTrait
{
    private ?TestDataHub $testDataHub = null;
    private ?PublicApiHub $publicApiHub = null;
    private ?PreconditionHub $preconditionHub = null;

    /**
     * Get the TestDataHub for accessing test data generators.
     *
     * @return TestDataHub
     */
    private function data(): TestDataHub
    {
        if ($this->testDataHub === null) {
            $userProvider = UserFactory::create();
            $userGenerator = new UserGenerator($userProvider);
            $llmGenerator = new LLMGenerator();
            $this->testDataHub = new TestDataHub($userGenerator, $llmGenerator);
        }

        return $this->testDataHub;
    }

    /**
     * Get the PublicApiHub for accessing API providers.
     *
     * @return PublicApiHub
     */
    private function api(): PublicApiHub
    {
        if ($this->publicApiHub === null) {
            $userProvider = UserFactory::create();
            $this->publicApiHub = new PublicApiHub($userProvider);
        }

        return $this->publicApiHub;
    }

    /**
     * Get the PreconditionHub for accessing precondition setup pages.
     *
     * @return PreconditionHub
     */
    private function precondition(): PreconditionHub
    {
        if ($this->preconditionHub === null) {
            // Placeholder: WebDriver initialization would happen here
            // For now, we'll create a dummy instance - to be properly initialized in actual test setup
            $driver = null;
            if ($driver instanceof RemoteWebDriver) {
                $this->preconditionHub = new PreconditionHub($driver);
            }
        }

        return $this->preconditionHub;
    }
}
