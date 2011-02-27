<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Locale\Stub\DateFormat;

/**
 * Parser and formatter for date formats
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 */
class AmPmTransformer extends Transformer
{
    public function format(\DateTime $dateTime, $length)
    {
        return $dateTime->format('A');
    }

    public function getReverseMatchingRegExp($length)
    {
        return 'AM|PM';
    }

    public function extractDateOptions($matched, $length)
    {
        return array(
            'marker' => $matched
        );
    }
}
