<?php

function make_page($content=[
    // Note: the "default variables" right here are just for show.
    // They always get overwritten when an array gets passed to $content when make_page() is called.
    'content_directory' => '',
    'content_html' => '',
    'additional_scripts' => [],
    'additional_styles' => []     ])
{
   
    $base_url='https://not.life';
    if ($_SERVER['DOCUMENT_ROOT']=='/home1/not12693/genshin')
        $base_url='https://genshin.not.life';

    // The following are all various parameters that can be passed to make_page().
    // You can add any parameters you want, using arrays like this allows them to be optional.
    // When calling make_page(), you can pass as many, or as little, parameters you want!
    // Defaults for each parameter are provided below, the defaults set in the function definition above

    $content_directory='';
    if (isset($content['content_directory']))
        $content_directory=$content['content_directory'];

    $content_html='';
    if (isset($content['content_html']))
        $content_html=$content['content_html'];

    $scripts='<script type="text/javascript" src="'.$base_url.'/js/general.js"></script>';
    if (isset($content['additional_scripts']))
        foreach($content['additional_scripts'] as $additional_script)
            $scripts=$scripts.'<script type="text/javascript" src="'.$additional_script.'"></script>';

    
    $styles='<link rel="stylesheet" href="'.$base_url.'/styles/general.css">';
    if (isset($content['additional_styles']))
        foreach($content['additional_styles'] as $additional_style)
            $styles=$styles.'<link rel="stylesheet" href="'.$additional_style.'">';
    // append a randomized background style
    $randomized_background='furina_yao_chill';
    if (rand(0,1)==0)
        $randomized_background='furina_yao_play';
    $styles=$styles.'<link rel="stylesheet" href="'.$base_url.'/styles/background_'.$randomized_background.'.css">';

    $title="not life.";
    if (isset($content['title'])) 
        $title=$content['title'];

    $preview_url="http://genshin.not.life/";
    if (isset($content['preview_url']))
        $preview_url=$content['preview_url'];

    $preview_title="hidden achievement tutorials";
    if (isset($content['preview_title']))
        $preview_title=$content['preview_title'];

    $preview_img="http://genshin.not.life/icon/fb_preview_placeholder.jpg";
    if (isset($content['preview_img']))
        $preview_img=$content['preview_img'];

    $preview_description="A list of all ingame achievements and details on how to get them. Team builds & world quest chains prerequisite diagrams coming soon!";
    if (isset($content['preview_description']))
        $preview_description=$content['preview_description'];


?>



<!DOCTYPE html>
<html>
<head>

<!-- ✎ basic head attributes  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<link rel="shortcut icon" href="/icon/favicon.ico" type="image/x-icon" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title><?php echo $title; ?></title>

<!-- ✎ share preview image & text  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<meta property="og:url" content="<?php echo $preview_url; ?>">
<meta property="og:title" content="<?php echo $preview_title; ?>">
<meta property="og:image" content="<?php echo $preview_img; ?>">
<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo $preview_description; ?>">
<link rel="image_src" href="<?php echo $preview_img; ?>" />

<!-- ✎ styles - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php echo $styles; ?>

<?php
/**
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
echo '<link type="text/css" href="http://www.endgame.pk/styles/mobile.css" rel="stylesheet" media="all" />';
**/
?>

<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700|Delius|NTR|Quicksand:400,500,700|Material+Icons" rel="stylesheet">



    
</head>
<body>


    <?php

    if ($content_directory!='') include $_SERVER['DOCUMENT_ROOT'].$content_directory;

    $content_html();

    ?>


    <?php echo $scripts; ?>
</body>
</html>



<?php
}//--/end function make_page
?>