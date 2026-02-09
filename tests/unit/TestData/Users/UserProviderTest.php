<?php

declare(strict_types=1);

namespace Tests\Unit\TestData\Users;

use Nymph\DemoSdetPhp\TestData\Users\UserFactory;
use Nymph\DemoSdetPhp\TestData\Users\UserProviderInterface;
use PHPUnit\Framework\TestCase;

class UserProviderTest extends TestCase
{
    /**
     * Test that UserFactory creates a correct UserProviderInterface instance.
     *
     * @return void
     */
    public function testFactoryCreatesCorrectInstance(): void
    {
        $provider = UserFactory::create();

        $this->assertInstanceOf(UserProviderInterface::class, $provider);
    }
}
