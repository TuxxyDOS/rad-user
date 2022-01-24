<?php

declare(strict_types=1);

namespace Knp\Rad\User;

interface HasPassword
{
    public function setPassword(?string $password): HasPassword;

    public function getPlainPassword(): ?string;

    public function setPlainPassword(?string $plainPassword): HasPassword;

    public function eraseCredentials(): HasPassword;
}
