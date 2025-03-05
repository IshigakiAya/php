<?php

function getSquareArea($bottom, $height) {
    return $bottom * $height;
}
function getTriangleArea($bottom, $height) {
    return $bottom * $height / 2;
}
function getTrapezoidArea($top, $bottom, $height) {
    $trapezoid = (($top + $bottom) * $height) / 2;
    return $trapezoid;
}

echo getSquareArea(5,4) . "\n";
echo getTriangleArea(5,4) . "\n";
echo getTrapezoidArea(5,4,3);