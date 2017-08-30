<?php

    $output = array();

    exec('sudo git pull origin master 2>&1', $output);

    var_dump($output);





