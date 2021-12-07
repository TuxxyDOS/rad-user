<?php

declare(strict_types=1);

namespace Knp\Rad\User;

interface HasPassword
{
    /**
     * @param string $password
     *
     * @return HasPassword
     */
    public function setPassword(string $password);

    /**
     * @return string
     */
    public function getPlainPassword(): string;

    /**
     * @param string $plainPassword
     *
     * @return HasPassword
     */
    public function setPlainPassword(string $plainPassword);

    /**
     * @return HasPassword
     */
    public function eraseCredentials();
}
