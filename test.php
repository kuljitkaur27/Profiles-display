<?php

require_once './src/Profiles.php';

$data = new \Profiles\Profiles();

print_r ($data->generate());
echo "\n";

?>