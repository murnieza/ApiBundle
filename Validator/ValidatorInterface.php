<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\ApiBundle\Validator;

interface ValidatorInterface
{
    /**
     * @param array $data
     *
     * @return bool
     */
    public function validate(array $data);

    /**
     * @return array
     */
    public function getErrors();
}
