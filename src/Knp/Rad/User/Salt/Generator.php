<?php

declare(strict_types=1);

namespace Knp\Rad\User\Salt;

interface Generator
{
    public function generate(): string;
}
