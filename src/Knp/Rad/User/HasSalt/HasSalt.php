<?php

declare(strict_types=1);

namespace Knp\Rad\User\HasSalt;

trait HasSalt
{
    /**
     * @return string
     */
    public function getSalt(): ?string
    {
        return $this->salt;
    }

    /**
     * @param string $salt
     *
     * @return self
     */
    public function setSalt(string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }
}
