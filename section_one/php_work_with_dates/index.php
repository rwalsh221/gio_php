<?php

// DATE AND TIME

echo time() . '<br>';

echo date('m/d/y g:ia') . '<br>';

date_default_timezone_set('UTC');

echo date('m/d/y g:ia') . '<br>';

echo date_default_timezone_get() . '<br>';
