<?php
function make_page($parameters=[
    'content' => '/home.php',  // or '<!--internal-->  <b>html right here</b> blah blah blah etc'
    'function_echo_content' => [],
    'additional_scripts' => [],
    'additional_styles' => []     ], $function_echo_content2)
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
    /*if (strpos($content, '<!--internal-->')===0)*/ echo $content; 
    /*else include $_SERVER['DOCUMENT_ROOT'].$content; */
    $function_echo_content2();
    ?>

    <?php echo $scripts; ?>
</body>
</html>



<?php
}//--/end function make_page
?>





<?php $content2 = <<<EOT

<div class="words">
    Hello.<br>
    <br>
    Currently,<br>
    this is a sandbox / fun testing area for a certain developer.<br>
    You may contact the developer by email: anna@micromana.ge<br>
    <br>

    <div class="smaller">
        I suggest to bring offerings/gifts.<br>
        (cat pictures are acceptable)<br>
    </div>

</div>



<!--
sidebar:
achievements
world quest chain
team comps
discord



add login later
(what benefits?)



add my frameworks for other ppl to use later



instead of ads, do partnerships and sell my own products/merch
-->






<br>
owned by resident crackhead Cryo Dehya<br>



EOT; 

?>


<?php
function testfunc1() { 
    echo 'testing19719739171'; } ?>

<?php make_page(['content' => $content2], 'testfunc1');
?>




