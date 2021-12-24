<?php

declare(strict_types=1);

namespace Knp\Rad\User\HasPassword;

use Knp\Rad\User\HasInitialPassword\HasInitialPassword;

trait HasPassword
{
    use HasInitialPassword;

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
