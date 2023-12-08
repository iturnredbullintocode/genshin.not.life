<?php
function make_page($parameters=[
    'content_directory' => '/home.php',
    'content' => []    ])
{
   

    $content_directory='';
    if ($parameters['content_directory']) 
        $content_directory=$parameters['content_directory'];

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

    if ($content_directory!='') include $_SERVER['DOCUMENT_ROOT'].$content_directory;

    $parameters['content']();

    ?>


    <?php echo $scripts; ?>
</body>
</html>



<?php
}//--/end function make_page
?>