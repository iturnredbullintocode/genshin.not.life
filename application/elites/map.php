<?php 

include $_SERVER['DOCUMENT_ROOT'].'/framework/make_page.php';
make_page([
    'title' => 'Creamed Elites Map',
    'preview_url' => "nightcrows.not.life/elites/map",
    'preview_title' => "A map of all the Elites timers in Night Crows",
    'preview_img' => "http://nightcrows.not.life/guild/fb_preview.jpg", 
    'preview_description' => "good fucking luck ;)",
    'content_html' => function(){ 
?> 


<style>
.elites_map {
    width: 950px;
    height: 804px;
    background-image: url('/elites/elites_map.jpg');
    background-size: 950px 804px;
    background-repeat: no-repeat;    }
.elites_map > div {
    position: absolute;
    text-shadow: 1px 1px 1px black, -1px -1px 1px black;
    color: #FFcc88;
    font-family: verdana;
    font-size: 10px;    }
#spider_1 {
    top: 80px;
    left: 475px;  }
#spider_2 {
    top: 55px;
    left: 555px;  }
#spider_3 {
    top: 25px;
    left: 555px;  }
#spider_4 {
    color: red;
    top: 84px;
    left: 590px;  }
#spider_5 {
    top: 73px;
    left: 645px;  }
#spider_6 {
    top: 130px;
    left: 645px; }
#spider_7 {
    top: 135px;
    left: 385px;  }
#spider_8 {
    top: 160px;
    left: 678px;  }
#spider_9 {
    color: red;
    top: 28px;
    left: 355px;  }
#spider_10 {
    top: 65px;
    left: 313px;  }
#spider_11 {
    top: 60px;
    left: 253px;  }
#inferno_1 {
    top: 88px;
    left: 363px;  }
#inferno_2 {
    top: 132px;
    left: 335px;  }
#inferno_3 {
    top: 160px;
    left: 303px;  }
#inferno_4 {
    top: 154px;
    left: 465px;  }
#inferno_5 {
    color: red;
    top: 168px;
    left: 513px;  }
#centaur_1 {
    top: 164px;
    left: 603px;  }
</style>


<div class="elites_map">
    <div id="spider_1">10:59</div>
    <div id="spider_2">2:06:26</div>
    <div id="spider_3">1:08:19</div>
    <div id="spider_4">SPAWNED</div>
    <div id="spider_5">6:02</div>
    <div id="spider_6">1:26:59</div>
    <div id="spider_7">58:04</div>
    <div id="spider_8">48:43</div>
    <div id="spider_9">SPAWNED</div>
    <div id="spider_10">36:12</div>
    <div id="spider_11">3:05:18</div>
    <div id="inferno_1">6:06:43</div>
    <div id="inferno_2">2:43:39</div>
    <div id="inferno_3">5:44:63</div>
    <div id="inferno_4">2:34:33</div>
    <div id="inferno_5">SPAWNED</div>
    <div id="centaur_1">54:55</div>
</div>





<?php } ] ); ?>