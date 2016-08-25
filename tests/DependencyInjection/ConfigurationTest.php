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

namespace SR\Augustus\InflectorBundle\Tests\DependencyInjection;

use SR\Augustus\InflectorBundle\DependencyInjection\Configuration;
use SR\WonkaBundle\Test\TestCase;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * Class ConfigurationTest.
 */
class ConfigurationTest extends TestCase
{
    public function testConfigTreeBuilder()
    {
        $configuration = new Configuration();

        $this->assertInstanceOf(TreeBuilder::class, $configuration->getConfigTreeBuilder());
    }
}

/* EOF */
