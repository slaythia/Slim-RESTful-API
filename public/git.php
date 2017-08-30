<?php

    $output = array();

<<<<<<< HEAD
    exec('git pull origin master 2>&1', $output);

    // exec('pwd', $output);
=======
    exec('sudo git pull origin master', $output);
>>>>>>> ba4530232ba612d89ec89582fda8acaf4a258863

    var_dump($output);





