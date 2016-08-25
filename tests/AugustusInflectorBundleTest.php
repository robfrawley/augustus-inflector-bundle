<?php

/*
 * This file is part of the `src-run/wonka-bundle` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 * (c) Scribe Inc      <scr@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Augustus\InflectorBundle\Tests;

use SR\WonkaBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class AugustusInflectorBundleTest.
 */
class AugustusInflectorBundleTest extends KernelTestCase
{
    public function testCanBuildContainer()
    {
        static::assertInstanceOf(ContainerInterface::class, $this->getContainer());
    }
}

/* EOF */
