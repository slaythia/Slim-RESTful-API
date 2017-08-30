<?php

    $output = array();

    exec('git pull origin master 2>&1', $output);

    // exec('pwd', $output);

    var_dump($output);





