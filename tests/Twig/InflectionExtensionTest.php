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

namespace SR\Augustus\InflectorBundle\Tests\Twig;

use SR\Augustus\InflectorBundle\Helper\InflectionHelper;
use SR\Augustus\InflectorBundle\Twig\InflectionExtension;
use SR\WonkaBundle\Test\TestCase;

/**
 * Class InflectionExtensionTest.
 */
class InflectionExtensionTest extends TestCase
{
    public function testExtensionInflection()
    {
        $extension = new InflectionExtension(new InflectionHelper());

        static::assertSame('indexes', $extension->inflect('indexes', 0));
        static::assertSame('index', $extension->inflect('indexes', 1));
        static::assertSame('indexes', $extension->inflect('indexes', 2));
    }
}

/* EOF */
