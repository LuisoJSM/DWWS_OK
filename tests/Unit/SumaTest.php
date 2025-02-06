<?php

use App\Services\Suma;

it('realiza la suma correctamente', function () {
    $suma = new Suma();

    expect($suma->calcular(2, 3))->toBe(5);
    expect($suma->calcular(-2, 3))->toBe(1);
    expect($suma->calcular(0, 0))->toBe(0);
});
