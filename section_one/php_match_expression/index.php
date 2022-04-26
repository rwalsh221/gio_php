<?php

$paymentStatus = 3;

// phpinfo();

// strict comparrison. '1' does not equal 1
match($paymentStatus) {
    1 => print 'paid',
    2,3 => print 'payment declined',
    0 => print 'Pending Payment',
    default => 'unknown payment status'
};