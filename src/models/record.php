<?php

namespace ShehabIbrahim;

class record
{
    public function __construct(Array $data)
    {
        foreach ($data as $key => $value){

            $this->{$key} = $value;
    }
    }
}