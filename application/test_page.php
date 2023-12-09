<?php 
include $_SERVER['DOCUMENT_ROOT'].'/framework/make_page.php';
make_page([
    'title' => 'Test Page',
    'content_html' => function(){ 
?> 

<style>



  /** ✎ adds a handwriting font file (english only) **/
    @font-face {
        font-family: "hugirl";
        src: url("/fonts/hugirl.eot");
        src: local("☺"),
             url('/fonts/hugirl.woff') format('woff'), 
             url('/fonts/hugirl.eot'), 
             url('/fonts/hugirl.eot?#iefix') format('embedded-opentype'),
             url('/fonts/hugirl.svg') format('svg'),
             url('/fonts/hugirl.ttf') format('truetype');
        font-weight: normal;
            font-style: normal;    }


/* For tertiary text. Small and neat light brown. */
.text3 {color: #4a4342; font-family: 'Quicksand', Verdana;font-size: 14px;font-weight: normal;text-shadow: 1px 1px 0 #ffddcc;  -webkit-text-stroke: .5px #79625e;}


  
/** ┬  ┌─┐┬ ┬┌─┐┬ ┬┌┬┐
 ** │  ├─┤└┬┘│ ││ │ │ 
 ** ┴─┘┴ ┴ ┴ └─┘└─┘ ┴ 
 ****************************************************************************
 ** This first section is the foundation of the website's CSS. 
 ** It defines the main layouts of the pages, and colors/design.
 **/



/** ✎ structure of page ****************************************************
 ** here is how page structure is meant to be set up:

        <div class="title">
            <img src="/img/title.jpg">
        </div><!--//end class title -->


        <div class="main_section">

            <div class="main_container">
            </div><!--//end class main_container -->

            <div class="side_container">
            </div><!--//end class side_container-->

        </div><!--//end class main_section -->


        <div class="bonus_section">
        </div><!--//end class bonus_section -->

 ** note: after the title, an unlimited amount of main sections and bonus 
 ** sections can be added, in any order.
 **/

.title {
    width: 100%;    }
.title > img {
    width: 100%;
    height: auto;    }
.bonus_section {
    width: 100%;    }



/** ✎ cleaning up the body, adding overall page designs *******************/
body { 
    margin: 0px;
    padding: 0px;
    cursor: url('/img/icecream.cur'), auto;
    background-image: url('/img/bg.gif'), url('/img/bg_length_creator.jpg'), url('/img/bg_stripes.jpg');
    background-repeat: no-repeat, repeat-y, repeat;    }























.comment_table {
    width: 439px;
    height: 431px;
    position: absolute; 
    top: 315px;
    left: 990px;
    z-index: 6;
    background-image: url(/img/note_top.gif), url(/img/note_top.png);
    background-repeat: no-repeat, no-repeat;
    background-position: 12px 40px, left top;    }
.comment-heading {
    font-family: hugirl;
    font-size: 20px;
    color: #999999;
    text-decoration: none;
    font-weight: normal;
    position: absolute;
    top: 98px;
    left: 110px;    }
.comment_table_name {
    font-family: hugirl;
    font-size: 20px;
    color: #999999;
    text-decoration: none;
    font-weight: normal;
    position: absolute;
    top: 119px;
    left: 24px;
    background: transparent;
    width: 300px;
    height: 20px;
    border: 1px #ffffff dashed; /* for browsers that don't support rgba */
    border: 1px rgba(0,0,0,0) dashed;    }
.comment_table_name:hover {
    border: 1px #999999 dashed;   }
.comment_table_name:focus {
    outline: none;    }
.comment_table_comment {
    font-family: hugirl;
    font-size: 20px;
    color: #999999;
    text-decoration: none;
    font-weight: normal;
    position: absolute;
    top: 168px;
    left: 24px;
    background: transparent;
    width: 220px;
    height: 180px;
    line-height: 26px;
    border: 1px #ffffff dashed; /* for browsers that don't support rgba */
    border: 1px rgba(0,0,0,0) dashed;    }
.comment_table_comment:hover {
    border: 1px #999999 dashed;    }
.comment_table_comment:focus {
    outline: none;    }
.comment_table_submit {
    position: absolute;
    top: 360px;
    left: 70px;    }
</style>




<div class="title">
    <!--<img src="/img/title.jpg">-->
</div><!--//end class title -->




<table class="comment_table" cellpadding="0" cellspacing="0">
    <tr><td>
        <div class="comment-heading">You can post something.</div>
        <textarea class="area1 comment_table_name" placeholder="name~"></textarea><br>
        <div class="comment_loggedin_name"><div class="text3">Wellsie</div><div>
        <input class="btn-submit button01 comment_table_submit" type="submit" value="submit comment">
    </td><td>
        <textarea class="area1 comment_table_comment" placeholder="comment~"></textarea>';
    </td></tr>
</table>


<style>
.comment_list  {
    background-image: url(/img/comment_end.gif), url(/img/comment_end.png), url(/img/comment_start.png), url(/img/comment_mid.jpg);
    background-repeat: no-repeat, no-repeat, no-repeat, repeat ;
    background-position: left bottom, left bottom, left top, 0px 10px;
    position: absolute;
    top: 746px;
    left: 1002px;
    width: 413px;
    z-index: 10;
    -webkit-box-shadow: 1px 1px 10px 0px rgba(0,0,0,0.3);
    -moz-box-shadow: 1px 1px 10px 0px rgba(0,0,0,0.3);
    box-shadow: 1px 1px 10px 0px rgba(0,0,0,0.3);
    margin-bottom: 30px;
    padding: 26px 0 60px 0;     }   
.comment_container_pleb  {
    font-family: hugirl;
    font-size: 20px;
    padding: 0 10px 0 10px;
    color: rgb(153, 153, 153);
    line-height: 26px;
    word-wrap:break-word;    }
.comment_list .comment_container_pleb:last-child {
    width: 200px; }

</style>





<div class="comment_list">
    <div style="line-height:90%">
        <div class="comment_container_pleb">
            <span class="text2">Allison</span>
            <span class="text2">Hi there.</span>
        </div>
        <div class="comment_container_pleb">
            <span class="text2">Allison</span>
            <span class="text2">Hi thereHi thereHi thereHi thereHi thereHi thereHi thereHi thereHi thereHi thereHi thereHi there.</span>
        </div>
        <div class="comment_container_pleb">
            <span class="text2">Allison</span>
            <span class="text2">Hi there.</span>
        </div>
    </div>
</div>



<style>

        .contents {
            position: absolute;
            top: 340px;
            left: 320px;
            width: 550px;
            overflow-y: hidden;
            margin-bottom: 30px;
            font-family: verdana, arial;
            font-size: 10px;
            color: #999999;    }


        h1 {
            font-family: hugirl;
            font-size: 20px;
            color: #999999;
            text-decoration: none;
            font-weight: normal;
            margin-top: 0px;    }
</style>


<div class="contents">




<!-- CONTENTS START -->
<h1>Sunday, February 28, 2016</h1>


<img src="/img/separator_rose_ribbon.gif" style="margin-bottom: 20px;">
<!-- CONTENTS END -->



</div><!-- /contents -->














<div class="main_section">

    <div class="main_container">
    </div><!--//end class main_container -->

    <div class="side_container">
    </div><!--//end class side_container-->

</div><!--//end class main_section -->





<div class="bonus_section">
</div><!--//end class bonus_section -->


<div class="main_section">

    <div class="main_container">
    </div><!--//end class main_container -->

    <div class="side_container">
    </div><!--//end class side_container-->

</div><!--//end class main_section -->







<div class="bonus_section">
</div><!--//end class bonus_section -->

<!-- longer loading time stuff -->
<script src="/scripts/general.js"></script>




<?php } ] ); ?>