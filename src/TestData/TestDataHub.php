<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\TestData;

use Nymph\DemoSdetPhp\TestData\Users\UserGenerator;

class TestDataHub
{
    private UserGenerator $userGenerator;
    private LLMGeneratorInterface $llmGenerator;

    public function __construct(UserGenerator $userGenerator, LLMGeneratorInterface $llmGenerator)
    {
        $this->userGenerator = $userGenerator;
        $this->llmGenerator = $llmGenerator;
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

    /**
     * Get the LLM generator for AI-driven test data generation.
     *
     * @return LLMGeneratorInterface
     */
    private function llmGenerator(): LLMGeneratorInterface
    {
        return $this->llmGenerator;
    }
}
