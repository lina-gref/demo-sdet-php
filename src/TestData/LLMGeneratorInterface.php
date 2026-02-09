<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\TestData;

interface LLMGeneratorInterface
{
    /**
     * Generate test data using an LLM.
     *
     * @param string $prompt
     * @return array<string, mixed>
     */
    public function generate(string $prompt): array;
}
