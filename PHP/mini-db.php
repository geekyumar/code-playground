<?php

include 'mini-db-class.php';

$db1 = new miniDatabase();

echo $db1->set("name", "Umar Farooq");
echo $db1->get('name');
echo $db1->delete('name');
echo $db1->get('name');