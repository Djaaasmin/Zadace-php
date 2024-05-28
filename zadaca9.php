<?php

function calculateVAT($price)
{
    if (!is_numeric($price)) {
        echo "Cijena mora biti numerička vrijednost";
    } elseif ($price < 1) {
        echo "Cijena ne može biti manja od 1";
    } else {
        $vat = $price * 0.22;
        echo $vat;
    }
}

calculateVAT("100");
