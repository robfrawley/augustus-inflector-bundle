<?php

/*
 * This file is part of the `src-run/augustus-inflector-bundle` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Augustus\InflectorBundle\Helper;

use Symfony\Component\Inflector\Inflector;

/**
 * Class InflectionHelper.
 */
class InflectionHelper
{
    /**
     * @param string         $word
     * @param int|\Countable $count
     *
     * @return mixed
     */
    public function inflect($word, $count)
    {
        $count = (int) ($count instanceof \Countable ? $count->count() : $count);

        if ($count === 1) {
            return Inflector::singularize($word);
        }

        return $word;
    }
}

/* EOF */
