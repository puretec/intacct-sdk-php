<?php

/**
 * Copyright 2017 Intacct Corporation.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"). You may not
 * use this file except in compliance with the License. You may obtain a copy
 * of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * or in the "LICENSE" file accompanying this file. This file is distributed on
 * an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Intacct\Functions\Common\Query\Comparison;

abstract class AbstractArrayInteger extends AbstractComparison
{

    /**
     * @var int[]
     */
    protected $value;

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int[] $value
     */
    public function setValue($value)
    {
        if (count($value) < 1 || count($value) > 1000) {
            throw new \OutOfRangeException('Comparison value array item count must be between 1 and 1000');
        }
        foreach ($value as $key => $item) {
            if (!is_int($item)) {
                throw new \InvalidArgumentException('Comparison value array item variable must be an integer type');
            }
        }
        $this->value = $value;
    }
}
