<?php

it('convertimos texti en maýuscula', function () {
    expect(convertirMayusculas('hola'))->toBe('HOLA');
    expect(convertirMayusculas('que'))->toBe('KE');
    expect(convertirMayusculas('tal'))->toBe('TAL');
});
