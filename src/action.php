<?php

require_once('youdao.php');

// require_once('workflows.php');
//    $work = new Workflows();
//    $query = trim($argv[1]);
//    $parts = explode(' ', $query);
//    $work->result( 'itemuid', 'itemarg', 'Some Item Title', 'Some item subtitle', 'icon.png', 'yes', 'autocomplete' );
//    echo $work->toxml();

 $youdao = new Youdao();
 $query = trim($argv[1]);
 $youdao->getData($query);


?>