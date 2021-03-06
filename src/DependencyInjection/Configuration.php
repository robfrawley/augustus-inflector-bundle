<?php

/*
 * This file is part of the `src-run/augustus-inflector-bundle` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Augustus\InflectorBundle\DependencyInjection;

use SR\WonkaBundle\Component\DependencyInjection\AbstractConfiguration;

/**
 * Class Configuration.
 */
class Configuration extends AbstractConfiguration
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        return $this
            ->getBuilderRoot()
            ->getNodeDefinition()
            ->info('Configuration for src-run/augustus-inflector-bundle')
            ->canBeEnabled()
            ->end();
    }
}

/* EOF */
