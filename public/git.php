<?php

    $output = array();

    exec('git pull origin master', $output);

    var_dump($output);





