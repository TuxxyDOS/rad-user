<?php

declare(strict_types=1);

namespace Knp\Rad\User\HasInitialPassword;

trait HasInitialPassword
{
    protected ?string $plainPassword = null;

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(?string $plainPassword): self
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }
}
