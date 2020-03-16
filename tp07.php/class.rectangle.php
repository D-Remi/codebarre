<?php

include_once  ('rectangle.php');

$rectangle1 = new rectangle() ;

$rectangle1->$l(12);
$rectangle1->$h(3);

echo "Aire du rectangle : " . $rectangle1->calculAire($l,$h);



