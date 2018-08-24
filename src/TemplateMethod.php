<?php
require __DIR__ . '/../bootstrap.php';

use Pattern\TemplateMethod\StringDisplay;

$string = new StringDisplay('Hello');

$string->display();

