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

namespace SR\Augustus\InflectorBundle\Tests\Helper;

use SR\Augustus\InflectorBundle\Helper\InflectionHelper;
use SR\WonkaBundle\Test\TestCase;

/**
 * Class InflectionHelperTest.
 */
class InflectionHelperTest extends TestCase
{
    public function testHelperInflection()
    {
        $inflection = new InflectionHelper();

        static::assertSame('indexes', $inflection->inflect('indexes', 0));
        static::assertSame('index', $inflection->inflect('indexes', 1));
        static::assertSame('indexes', $inflection->inflect('indexes', 2));
    }
}

/* EOF */
