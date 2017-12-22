<?php

function checkElementsMoreThan($checkArr, $allowedNumber)
{
    if (count($checkArr) < $allowedNumber) {
        die("Wrong arguments count!\n\n");
    }
}
