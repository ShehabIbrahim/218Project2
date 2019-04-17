<?php


namespace ShehabIbrahim\file;


class csvLoad
{
        public static function returnArray(String $filePath) :array
        {
            $file = fopen("..data/deniro.csv", "r");
            $records =array();
            while (!feof($file)) {
                $records[]= (fgetcsv($file));
            }

            fclose($file);
            return $records;
        }
}