<?php

declare(strict_types=1);

namespace Knp\Rad\User\HasSalt;

trait HasSalt
{
    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }
}
