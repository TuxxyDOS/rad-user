<?php

declare(strict_types=1);

namespace Knp\Rad\User;

interface HasInitialPassword
{
    public function getPlainPassword(): ?string;

    public function setPlainPassword(?string $plainPassword): HasInitialPassword;
}
