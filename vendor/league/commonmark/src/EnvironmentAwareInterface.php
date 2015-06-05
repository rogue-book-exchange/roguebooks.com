<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark;

interface EnvironmentAwareInterface
{
    /**
     * @param Environment $environment
     *
     * @return void
     */
    public function setEnvironment(Environment $environment);
}
