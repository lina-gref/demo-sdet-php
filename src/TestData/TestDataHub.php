<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\TestData;

use Nymph\DemoSdetPhp\TestData\Users\UserGenerator;

class TestDataHub
{
    private UserGenerator $userGenerator;

    public function __construct(UserGenerator $userGenerator)
    {
        $this->userGenerator = $userGenerator;
    }

    /**
     * Get the user generator.
     *
     * @return UserGenerator
     */
    public function users(): UserGenerator
    {
        return $this->userGenerator;
    }
}
