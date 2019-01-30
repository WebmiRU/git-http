#!/usr/bin/php7.2
<?php

$stdin = fopen ("php://stdin","r");
$login = trim(fgets($stdin));
$password = trim(fgets($stdin));

exit(0);
