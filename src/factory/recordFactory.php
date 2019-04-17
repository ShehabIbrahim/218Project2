<?php


namespace ShehabIbrahim;
use ShehabIbrahim\models\record;

class recordFactory
{

    public static function create(Array $data) {
        return new record($data);
    }
}