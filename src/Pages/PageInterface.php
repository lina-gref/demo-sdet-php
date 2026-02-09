<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\Pages;

interface PageInterface
{
    /**
     * Open a page at the given URL.
     *
     * @param string $url
     * @return void
     */
    public function open(string $url): void;
}
