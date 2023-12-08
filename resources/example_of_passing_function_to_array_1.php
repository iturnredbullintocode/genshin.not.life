<?php
function make_page($parameters=[
    'content' => '/home.php',  // or '<!--internal-->  <b>html right here</b> blah blah blah etc'
    'function_echo_content' => [] ,
    'additional_scripts' => [],
    'additional_styles' => []     ])
{
   

    $content='/home.php';
    if ($parameters['content']) 
        $content=$parameters['content'];

    $scripts='';

    $styles='';
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $styles; ?>
</head>
<body>

    <?php

    /*function blorp()
        { echo 'test456'; }*/

    /*if (strpos($content, '<!--internal-->')===0)*/ echo $content; 
    /*else include $_SERVER['DOCUMENT_ROOT'].$content; */
    /*$parameters['function_echo_content']=blorp();*/
    $$parameters['function_echo_content'];
    ?>

    <?php echo $scripts; ?>
</body>
</html>



<?php
}//--/end function make_page
?>









<?php
function blorp()
        { echo 'test456'; }
?>



<?php make_page(['content' => $content2,  'function_echo_content' => blorp() ]

 );
?>




