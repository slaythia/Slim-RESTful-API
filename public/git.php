<?php

    $output = array();

    exec('who 2>&1', $output);

    // exec('git pull origin master 2>&1', $output);

    var_dump($output);





