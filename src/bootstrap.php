<?php

namespace ShehabIbrahim;
use ShehabIbrahim\file\csvLoad;

class bootstrap
{
    public function __construct(String $filePath)
    {

        $records = csvLoad::returnArray($filePath);

        $records = csvLoad::returnArray($filePath);


        factory\recordFactory::create($record);

        print_r($object);
        echo table::tableTag('stuff');

    }
}


