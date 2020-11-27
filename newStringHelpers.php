<?php

# str_starts_with

$id = 'this_is_something';
//$result = stripos($id, 'this_') === 0;

$result = str_starts_with($id, 'this_');
var_dump($result);

# str_ends_with
$ends = str_ends_with($id, '_something');
var_dump($ends);

# str_contains
$does_it_contain = str_contains($id, 'this');
var_dump($does_it_contain);