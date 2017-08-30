<?php

    $output = array();

    exec('sudo git pull origin master', $output);

    var_dump($output);





