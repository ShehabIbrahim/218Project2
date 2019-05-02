<?php

namespace ShehabIbrahim;

class record
{
    private $data = array();

    public function __construct(array $values, array $titles)
    {
        $i = 0;
        foreach($titles as $title)
        {
            $this->data[$title] = $values[$i];
            $i++;
        }
    }

    function getData(): array
    {
        return $this->data;
    }

}

