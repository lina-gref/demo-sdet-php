<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\Configuration;

enum Domain: string
{
    case JsonPlaceholder = 'https://jsonplaceholder.typicode.com';
    case Facebook = 'https://www.facebook.com';
}
