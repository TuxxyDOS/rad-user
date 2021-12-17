<?php

declare(strict_types=1);

namespace Knp\Rad\User;

interface HasInitialPassword
{
    /**
     * @return string
     */
    public function getPlainPassword(): ?string;

    /**
     * @param string $plainPassword
     *
     * @return HasInitialPassword
     */
    public function setPlainPassword(string $plainPassword): HasInitialPassword;
}
