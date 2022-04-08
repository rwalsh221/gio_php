<?php

    // Constants

    define('STATUS_PAID', 'paid');

    echo STATUS_PAID;

    const STATUS_PAID_CONST = 'paid const';

    echo STATUS_PAID_CONST;

    echo PHP_VERSION;

    // Variable Variables

    $foo = 'bar';

    $$foo = 'baz';
    $bar = 'baz'; // same as above. takes value of foo and names new var

