<?php
/**
 * @link http://astwell.com/
 * @copyright Copyright (c) 2014 Astwell Soft
 * @license http://astwell.com/license/
 */

namespace lembadm\barcode\type;

use lembadm\barcode\AbstractType;

class EAN8 extends AbstractType
{
    protected $length = [7, 8];

    protected $characters = '/^.{0-9}$/';

    protected $checksum = 'GTIN';

    protected function validateLength($model, $attribute)
    {
        $this->checksum = !(strlen($model->{$attribute}) == 7)
            ? $this->checksum
            : null;

        parent::validateLength($model, $attribute);
    }
}