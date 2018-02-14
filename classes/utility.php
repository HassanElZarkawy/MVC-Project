<?php

class Utility
{
    public static function Objectify($array) {
        $object = new stdClass();
        foreach ($array as $key => $value)
        {
            $object->$key = $value;
        }
        return $object;
    }
}