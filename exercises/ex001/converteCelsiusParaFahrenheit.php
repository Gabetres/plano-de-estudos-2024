<?php

function converteCelsiusParaFahrenheit(int $celsius): float
{
    return (($celsius * 9/5) + 32);
}

echo converteCelsiusParaFahrenheit(32);