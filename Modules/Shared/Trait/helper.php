<?php

namespace Modules\Shared\Trait;

trait helper
{
    public function getNotEmptyValues($array)
    {
        return array_filter($array, fn($value) => $value !== '' && !is_null($value));
    }
}
