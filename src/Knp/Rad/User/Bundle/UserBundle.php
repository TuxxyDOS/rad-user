<?php

declare(strict_types=1);

namespace Knp\Rad\User\Bundle;

use Knp\Rad\User\DependencyInjection\UserExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new UserExtension();
    }
}
