<?php
class MergeNames
{
    public static function unique_names($array1, $array2)
    {
        $array = array_unique (array_merge ($array1, $array2));
        return $array;
    }
}
$names = MergeNames::unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia