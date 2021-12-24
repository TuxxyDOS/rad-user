<?php

declare(strict_types=1);

namespace Knp\Rad\User\Password;

interface Generator
{
    public function generate(): string;
}
