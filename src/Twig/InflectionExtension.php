<?php

/*
 * This file is part of the `src-run/augustus-inflector-bundle` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Augustus\InflectorBundle\Twig;

use SR\Augustus\InflectorBundle\Helper\InflectionHelper;
use SR\WonkaBundle\Twig\TwigExtension;

/**
 * Class InflectionExtension.
 */
class InflectionExtension extends TwigExtension
{
    /**
     * @var InflectionHelper
     */
    private $inflectionHelper;

    /**
     * @param InflectionHelper $inflectionHelper
     */
    public function __construct(InflectionHelper $inflectionHelper)
    {
        parent::__construct();

        $this->inflectionHelper = $inflectionHelper;
        $this->addFunction('inflect', [$this, 'inflect']);
    }

    /**
     * @param string $word
     * @param int    $count
     *
     * @return string
     */
    public function inflect($word, $count = 0)
    {
        return $this->inflectionHelper->inflect($word, $count);
    }
}

/* EOF */
