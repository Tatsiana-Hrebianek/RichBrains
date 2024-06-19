<?php
/**
 * @param string ...$shapeName
 * @return void
 */
function getCornersCount(string ...$shapeName): void
{
    $arr = ['square' => 4, 'circle' => 0, 'rectangle' => 4, 'triangle' => 3];

    foreach ($shapeName as $elem) {
        switch ($elem) {
            case ('square'):
                echo "square - $arr[square]\n";
                break;

            case ('circle'):
                echo "circle - $arr[circle]\n";
                break;

            case ('rectangle'):
                echo "rectangle - $arr[rectangle]\n";
                break;

            case ('triangle'):
                echo "triangle - $arr[triangle]\n";
                break;
            default:
                echo "$elem - not defined\n";
        }

    }
}

getCornersCount('square', 'oval', 'circle', 'triangle');