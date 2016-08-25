<?php

/*
 * This file is part of the `src-run/augustus-inflector-bundle` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * Class AppKernel.
 */
class AppKernel extends \SR\WonkaBundle\Component\HttpKernel\Kernel
{
    /**
     * {@inherit-doc}
     */
    static protected function setupDefinitions()
    {
        self::register(\Symfony\Bundle\MonologBundle\MonologBundle::class);
        self::register(\Symfony\Bundle\FrameworkBundle\FrameworkBundle::class);
        self::register(\Symfony\Bundle\SecurityBundle\SecurityBundle::class);
        self::register(\Symfony\Bundle\TwigBundle\TwigBundle::class);
        self::register(\SR\WonkaBundle\WonkaBundle::class);
        self::register(\SR\Augustus\InflectorBundle\AugustusInflectorBundle::class);
        self::register(\Symfony\Bundle\DebugBundle\DebugBundle::class)
            ->environments(self::ENV_DEV, self::ENV_TEST);
    }
}

/* EOF */
