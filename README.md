Fork to keep using a specific feature in Symfony 5.x

Rapid Application Development : User
====================================
A **Symfony bundle** to simply handle password encryption by [@KnpLabs](https://github.com/KnpLabs)

# Installation

```bash
composer require tuxxydos/rad-user:~2.0
```

```php
class AppKernel
{
    function registerBundles()
    {
        $bundles = array(
            //...
            new Knp\Rad\User\Bundle\UserBundle(),
            //...
        );

        //...

        return $bundles;
    }
}
```

# Usages

## I want to auto-generate my user password

Your User model should implement the `Knp\Rad\User\HasInitialPassword` interface.

```php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\Rad\User\HasInitialPassword;

/**
 * @ORM\Entity
 */
class User implements HasInitialPassword
{
    use HasInitialPassword\HasInitialPassword; // You can also use this trait

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column
     */
    private $password;
}
```

Now, before your user is inserted or updated into your database, then the plain password will be automaticly generated.

## I want to auto-encode my user password

Your User model should implement the `Knp\Rad\User\HasPassword` interface.

```php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\Rad\User\HasPassword;

/**
 * @ORM\Entity
 */
class User implements HasPassword
{
    use HasPassword\HasPassword; // You can also use this trait

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column
     */
    private $password;
}
```

Now, before your user is inserted or updated into your database, if you have set the attribute 'plainPassword', then the password will be automaticly generated.

# WARNING

The `Knp\Rad\User\HasPassword\HasPassword` trait use the `Knp\Rad\User\HasInitialPassword\HasInitialPassword` trait. So don't use both into the same class or you will have a method conflict.
