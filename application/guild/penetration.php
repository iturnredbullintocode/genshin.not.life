<?php 

/*
function make_page($content=[
    // Note: the "default variables" right here are just for show.
    // They always get overwritten when an array gets passed to $content when make_page() is called.
    'content_directory' => '',
    'content_html' => '',
    'additional_scripts' => [],
    'additional_styles' => []     ])
{

}
*/
function character($stats=[
    'ign' => '',
    'discord_username' => '',
    'discord_nickname' => '',
    'ign' => '',
    'class' => '',
    
]){
    echo "<div><div>$stats[$ign]</div><div>$status[$discord_usename]</div><div>2nd Adv - Sniper</div><div>50</div><div>107,029</div><div> </div><div> </div></div>";
}


include $_SERVER['DOCUMENT_ROOT'].'/framework/make_page.php';
make_page([
    'title' => 'Penetration Union',
    'preview_url' => "nightcrows.not.life/guild/penetration",
    'preview_title' => "Penetration Union & Guild Member Details",
    'preview_img' => "http://nightcrows.not.life/guild/fb_preview.jpg",
    'preview_description' => "Guild & Union player management system. Currently in alpha testing. Each player has the ability to manage their own information, and guild leaders, along with their officers, have an easy way to oversee how the guild is run.",
    'additional_styles' => ['expandy_row'],
    'content_html' => function(){ 
?> 

<style>
@import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap');
</style>



<style>
.guild_header {
    height: 260px;
    background-image: url('/guild/headers/penetration2.png');
    background-size: 664px 253px;
    background-repeat: no-repeat;

    margin-bottom: -243px;
    padding-left: 360px;
    padding-top: 122px;
    color: #7b6f6f;
    text-shadow: 1px 2px 3px #000000;
    font-size: 30px;
    font-family: "Space Grotesk";
    letter-spacing: .3px;
    line-height: 20px;
    /**
    margin-bottom: -240px;
    padding-left: 93px;
    padding-top: 164px;
    color: #c3e8ce;
    font-size: 16px;
    font-family: "main";
    letter-spacing: .3px;
    line-height: 20px;
    **/
}

.guild_title {
    color: #7b6f6f;
    text-shadow: 1px 2px 3px #000000;
    font-size: 30px;
    font-family: "Space Grotesk";
    letter-spacing: .3px;
    line-height: 20px;
}

.guild_members {
    width: 95%;
    display: table;
    border-collapse: separate;
    border-spacing: 6px;
    margin-left: 4px;
    margin-top: 10px;   }
.guild_members > div:first-child > div {
    background: none;
    border: 0px solid #79a896;
    padding-bottom: 0px;    }
.guild_members > div {
    display: table-row;
    white-space: nowrap;   }
.guild_members > div > div:last-child {
    width: 100%; }
.guild_members > div > div {
    display: table-cell;

    border-collapse: collapse;
    border-spacing: 0 30px;

    background: #467469;
    padding: 4px 7px 5px 6px;
    margin: 14px 10px 10px 10px;
    border-radius: 7px;
    border: 1px solid #79a896;

    color: #79a896;
    font-size: 14px;
    font-family: "main";
    letter-spacing: .3px;
    line-height: 20px;
}
</style>






<div class="guild_header">Penetration Union</div>

<!--
<div class="expandy_row wide_last indicator_medium_cool">
    <div onclick="expand_next(this);">
        <div>Analytic Partners</div>
        <div>test</div>
        <div>testsfsfsfs</div>
    </div>
    <div style="display: none;">
        <h1>company info:</h1>
        pjaldjlad
    </div>
</div>
-->

<div class="guild_member header">
    <div>
        <div>ingame name</div>
        <div>discord</div>
        <div>class</div>
        <div>LVL</div>
        <div>GR</div>
        <div>crafting</div>
        <div>note</div>
    </div>
</div>


<div class="guild_member">
    <div onclick="expand_next(this);">
        <div>Mochiron</div>
        <div>jupitoismyamigo</div>
        <div>2nd Adv - Mage</div>
        <div>50 79%</div>
        <div>110,186</div>
        <div> </div>
        <div> </div>
    </div>
    <div style="display: none;">
        asked him activity level: I am active M-Th 6:00pm -8:30pm F-Su 10:00am - 10:00pm depends if I have somewhere to go on weekends.<br>
        posted his GR on his own<br>
        changed his discord name on his own<br>
        Did he add himself to Rave discord? : yes
        Did he register into rave system? : yes
        Did he update his GR? : no
        lvl & GR last updated when: May 17, 2024 in chat, June 1, 2024 in rave original registration
    </div>
</div>

<div class="guild_member">
    <div onclick="expand_next(this);">
        <div>Dmit</div>
        <div>dmitrdima</div>
        <div>2nd Adv - Cleric</div>
        <div>53</div>
        <div>153,164</div>
        <div> </div>
        <div> </div>
    </div>
    <div style="display: none;">
        <!--<h1>company info:</h1>-->
        always AFK, comes randomly to stuff when he wants, has officially declined to participate in PvP guild activity and says he will come simply when he is bored and it looks like fun<br>
        has not posted his gr by himself, I had to ask in chat -_-<br>
        had to change his discord name for him<br>
        lvl & GR last updated when: ???
    </div>
</div>

<div class="guild_member">
    <div onclick="expand_next(this);">
        <div>MagicCrOw102r</div>
        <div>k0cha</div>
        <div>2nd Adv - Cleric</div>
        <div>53</div>
        <div>153,164</div>
        <div> </div>
        <div> </div>
    </div>
    <div style="display: none;">
        <!--<h1>company info:</h1>-->
        always AFK, comes randomly to stuff when he wants, has officially declined to participate in PvP guild activity and says he will come simply when he is bored and it looks like fun<br>
        has not posted his gr by himself, I had to ask in chat -_-<br>
        had to change his discord name for him<br>
        lvl & GR last updated when: ???
    </div>
</div>

<div class="guild_member">
    <div onclick="expand_next(this);">
        <div>Percoc3t</div>
        <div>percoc3t</div>
        <div>1st Adv - Archer</div>
        <div>46</div>
        <div>68,332</div>
        <div> </div>
        <div> </div>
    </div>
    <div style="display: none;">
        asked him activity level, waiting for reply<br>
        joined guild May 27, entered discord on his own, sent me his GR when asked<br>
        Changed his discord name on his own<br>
        lvl & GR last updated when: May 27, 2024
    </div>
</div>


<div class="guild_member">
    <div onclick="expand_next(this);">
        <div>HateBreeD</div>
        <div>anasca</div>
        <div>2nd Adv - General</div>
        <div> </div>
        <div>99,365</div>
        <div> </div>
        <div> </div>
    </div>
    <div style="display: none;">
        usually is active, but for some time will be busy IRL for valid reason he has communicated to me<br>
        posted his GR on his own<br>
        changed his discord name when asked<br>
        lvl & GR last updated when: ???
    </div>
</div>


<div class="guild_member">
    <div onclick="expand_next(this);">
        <div>Creamed</div>
        <div>creamed.panties</div>
        <div>2nd Adv - Sniper</div>
        <div>51</div>
        <div>109,628</div>
        <div> </div>
        <div> </div>
    </div>
    <div style="display: none;">
        available 24/7 except for 7pm-10pm EST. Will come to activity when asked beforehand.<br>
        me. UwU<br>
        lvl & GR last updated when: May 27, 2024
    </div>
</div>


<div class="guild_member">
    <div onclick="expand_next(this);">
        <div>ebishu</div>
        <div>ebishuop</div>
        <div>2nd Adv - Sniper</div>
        <div>51</div>
        <div>94,101</div>
        <div> </div>
        <div> </div>
    </div>
    <div style="display: none;">
        usually he very active but asked him activity level, waiting for reply<br>
        did not post his GR on his own. will need to ask and wait<br>
        changed his discord name on his own<br>
        lvl & GR last updated when: ???
    </div>
</div>


<div class="guild_member">
    <div onclick="expand_next(this);">
        <div>SaintSeiya (UchihaMadara)</div>
        <div>arthur_pendragon_prototype</div>
        <div>2nd Adv - Sniper</div>
        <div>52</div>
        <div>131,125</div>
        <div> </div>
        <div> </div>
    </div>
    <div style="display: none;">
        DMed him, waiting for reply
    </div>
</div>


<div class="guild_member">
    <div onclick="expand_next(this);">
        <div>BASTE</div>
        <div>shine0328</div>
        <div> </div>
        <div> </div>
        <div> </div>
        <div> </div>
        <div> </div>
    </div>
    <div style="display: none;">
        he dmed me his wemix wallet but he's only ever attended one activity
    </div>
</div>


<div class="guild_member">
    <div onclick="expand_next(this);">
        <div> </div>
        <div> </div>
        <div> </div>
        <div> </div>
        <div> </div>
        <div> </div>
        <div> </div>
    </div>
    <div style="display: none;">
        ...
    </div>
</div>




<!--
asked him activity level, waiting for reply<br>

did not post his GR on his own. will need to ask and wait<br>

Hii!! I'm trying figure out when are good times for guild activities
what times are you usually active/ available for guild activity?

would you be able to be in discord voice during guild activities?


        if you do not want to come do elites with us, can you free up a space for someone who can?
        our guild is 50/50. I could move you to our second guild for free farm, instead
        in our https://discord.com/channels/1217927263241371715/1243119709327593572 schedule section of our guild overview, we will likely add some additional prime-times for elites soon, and prime-time for all of us to farm tokens together. We also often post ice cave PvP times in the regular announcement channels. We would like you to come with us for activities like this, would you be able to pay attention to new announcements and come when it's time?
-->
    
<div class="guild_members">



    
    <div><div>ChukzTooGrow</div><div>arthur_pendragon_prototype</div><div>2nd Adv - Mage</div><div>50</div><div>92,334</div><div> </div><div> </div></div>
    <div><div>no2edge</div><div>clawz6176</div><div>2nd Adv - Assassin</div><div>52</div><div>109,111</div><div> </div><div> </div></div>
    <div><div>Joeツ</div><div>joekiller</div><div>2nd Adv - Sniper</div><div>52</div><div>143,661</div><div> </div><div> </div></div>

    <div><div>Jonson</div><div>jonik4321</div><div>2nd Adv - Sniper</div><div>51</div><div>101,102</div><div> </div><div> </div></div>
    <div><div>DaddyShroomZ</div><div>shroomz8511</div><div>2nd Adv - Impaler</div><div>52</div><div>147,949</div><div> </div><div> </div></div>
    <div><div>Maximusツ</div><div>beefyboyy1</div><div>2nd Adv - General</div><div>52</div><div>140,934</div><div> </div><div> </div></div>
    <div><div>FireAngel9ツ</div><div>jonik4321</div><div>2nd Adv - Cleric</div><div>52</div><div>133,007</div><div> </div><div> </div></div>
    <div><div>KingShroomZ</div><div>voodoox</div><div>1st Adv - Assassin</div><div>51</div><div>91,002</div><div> </div><div>note: buying a new NFT today</div></div>
    <div><div> </div><div>voodoox</div><div>2nd Adv - Assassin</div><div>52</div><div>134,424</div><div> </div><div>new NFT</div></div>

    <div><div>XotaPT (Kakaa)</div><div>_xota_</div><div>2nd Adv - Cleric</div><div> </div><div>91,022</div><div>Prosperity - Professional 5%</div><div>Total Achievement rate 143/999</div></div>
    <div><div>R3belu</div><div>r3belu</div><div>1st Adv - Vanguard</div><div>49</div><div>84,206</div><div> </div><div> </div></div>
    <div><div>Saluna</div><div>02908</div><div>1st Adv - Archer</div><div>47</div><div>77,000</div><div> </div><div> </div></div>
    <div><div>xOutlawz</div><div>pinktacos</div><div>2nd Adv - Slayer</div><div>49</div><div>126,517</div><div> </div><div></div> </div>
    <div><div>Fenny21</div><div>thru pinktacos acct</div><div>2nd Adv - General</div><div>49</div><div>100,313</div><div> </div><div></div> </div>

    <div><div>DontSeeEvil</div><div>dontseeevil</div><div>2nd Adv - Slayer</div><div>52</div><div>143,723</div><div> </div><div></div> </div>
    <div><div>Girren</div><div> </div><div>2nd Adv - Sniper</div><div>52</div><div>105,033</div><div> </div><div></div> </div>
    <div><div>LAIANA</div><div>mira_kz</div><div>2nd Adv - Cleric</div><div>52</div><div>110,226</div><div> </div><div></div> </div>
    <div><div>ShadowHanter</div><div> </div><div>2nd Adv - Sniper</div><div>52</div><div>113,331</div><div> </div><div></div> </div>
    <div><div>Tip</div><div> </div><div>2nd Adv - Sniper</div><div>52</div><div>130,492</div><div> </div><div></div> </div>

    <div><div>TaylorSwifty</div><div>ranieroprov</div><div>2nd Adv - Mage</div><div>50</div><div>85,583</div><div> </div><div></div> </div>
    <div><div>Babul9</div><div>shame2355</div><div>2nd Adv - Assassin</div><div>50</div><div>92,805</div><div> </div><div></div> </div>
    <div><div>Bigbah</div><div>bigbah</div><div>2nd Adv - Knight</div><div>51</div><div>111,720</div><div> </div><div> </div></div>
    <div><div>Ludacris</div><div>Ludacris7204</div><div>2nd Adv - Assassin</div><div>52</div><div>108,991</div><div> </div><div></div> </div>
    <div><div>GunBong</div><div>gunbong.</div><div>2nd adv - Sniper</div><div>52</div><div>103,369</div><div> </div><div></div> </div>

    <div><div>Griffin</div><div>executer0718</div><div>2nd adv - Mage</div><div> </div><div>101,222</div><div> </div><div></div> </div>
    <div><div>Iseeu</div><div>sharattv</div><div>2nd Adv - Archer</div><div>49</div><div>94,655</div><div> </div><div></div>  </div>
    <div><div>WoyoBinjlin</div><div>jia2019</div><div>1st Adv - Rogue</div><div>48</div><div>73,160</div><div> </div><div>VERY active but needs job adv</div></div>
    <div><div>Me24u</div><div>me24u.eth</div><div>1st Adv - Archer</div><div>48</div><div>81,586</div><div> </div><div>VERY active, gotta do adv tho..</div></div>
    <div><div>Omeh</div><div>hemikuru</div><div>1st Adv - Archer</div><div>??</div><div>90,048</div><div> </div><div>Very good GR for someone whos 1st adv</div></div>

    <div><div>Asy</div><div>s_t_y_x.</div><div>2nd Adv - Cleric</div><div>51</div><div>97,969</div><div> </div><div> </div></div>
    <div><div>LUSAVE</div><div>lusave.</div><div>2nd Adv - Sniper</div><div>50</div><div>96,583</div><div> </div><div> </div></div>
    <div><div>rANDOMIHERO</div><div>kuolesaatana</div><div> </div><div>??</div><div>59,210</div><div> </div><div>active in disc but low gr T_T</div></div>

    <div><div>Nestida</div><div>tallv</div><div>2nd Adv - Cleric</div><div>??</div><div>91,463</div><div> </div><div></div> </div>
    <div><div>SoulSlayer</div><div>.soulslayer</div><div>2nd Adv - Sniper</div><div>??</div><div>115,524</div><div> </div><div></div> </div>
    <div><div>ChukzTooGrow</div><div>chukztoogrow</div><div>1st Adv - Professor</div><div>??</div><div>89,937</div><div> </div><div>Very good GR for someone whos 1st adv</div></div>
    <div><div>Dethroned</div><div>hardu_</div><div>1st Adv - Archer</div><div>??</div><div>90,939</div><div> </div><div>Very good GR for someone whos 1st adv</div></div>

    <div><div>MistyQ</div><div>misty1969</div><div>1st Adv - Cleric</div><div>??</div><div>64,900</div><div> </div><div>active in disc but low gr T_T</div></div>
    <div><div>Kepot</div><div> </div><div> </div><div>??</div><div> </div><div> </div><div>needs to sign up for website</div></div>
    <div><div>SuGarMoMy</div><div> </div><div> </div><div>??</div><div> </div><div> </div><div>needs to sign up for website</div></div>
    <div><div>에이스</div><div> </div><div>2nd Adv - Assassin</div><div>47</div><div>96,142</div><div> </div><div> </div></div>
    
</div>


<br>
<div class="guild_title">Overlod</div><br>
<div class="guild_members">
    <div><div>ingame name</div><div>discord</div><div>class</div><div>LVL</div><div>GR</div><div>etc</div><div>note</div></div>
    <div><div>Orgullo</div><div>orgullo</div><div>2nd Adv - Impaler</div><div>52</div><div>107,029</div><div>190/999 achiev, prosp professional 1%</div><div>spanish, seems to understand english ok?</div></div>
    <div><div>Vaarus</div><div>morganitsu</div><div>1st Adv - Archer</div><div>48</div><div>76,804</div><div> </div><div></div> </div>
    <div><div>Brianna</div><div>the_bradziag</div><div>1st Adv - Professor</div><div>49</div><div>78,019</div><div> </div><div></div> </div>
    <div><div>Hemera</div><div>nelson.antunes</div><div>2nd Adv - Mage</div><div>??</div><div>95,234</div><div> </div><div></div> </div>
</div>





<br>
<div class="guild_title">Adderaii</div><br>

<div class="guild_member header">
    <div>
        <div>ingame name</div>
        <div>discord</div>
        <div>class</div>
        <div>LVL</div>
        <div>GR</div>
        <div>crafting</div>
        <div>note</div>
    </div>
</div>

<div class="guild_member">
    <div onclick="expand_next(this);">
        <div>Eliizabeth</div>
        <div>chu5459</div>
        <div>2nd Adv - General</div>
        <div> </div>
        <div> </div>
        <div> </div>
        <div> </div>
    </div>
    <div style="display: none;">
        American, used to be super active, but has admitted that right now he is not interested in doing anything except logging on, dailies, log off. Moved to 2nd guild.
    </div>
</div>




<div class="guild_members">
    <div><div>ingame name</div><div>discord</div><div>class</div><div>LVL</div><div>GR</div><div>etc</div><div>note</div></div>
    <div><div>Nazka</div><div>myx3677</div><div>1st Adv - Archer</div><div>42</div><div>60,595</div><div> </div><div> </div></div>
</div>

<br>
<div class="guild_title">Kicked/Left</div><br>
<div class="guild_members">
    <div><div>ingame name</div><div>discord</div><div>class</div><div>LVL</div><div>GR</div><div>etc</div><div>note</div></div>
    <div><div>ElmoHome</div><div>kobe0830</div><div>1st Adv - Dualsword</div><div>49</div><div>76,764</div><div> </div><div>left discord, offline 1 day??</div></div>
</div>

<div class="test_green">


    Hello.<br>
    <br>
    Right now,<br>
    The above is just a small peek at the way this will look, the full code is not live yet.<br>
    <br>
    Additional database fields I'll be adding:<br>
    - languages spoken<br>
    - available playtime during the week<br>
    - timezone<br>
    - have exitlag installed? or are you located near game server?<br>
    - historic data/progress<br>

</div>



<div class="words">
This website is ran by Creamed, leader of the Penetration Union on server Rook 102.<br>
</div>




<!-- scripts go here -->
<script>
function expand_next(element) {
    console.log(element);
    if (element.nextElementSibling.style.display=='block') {
        element.nextElementSibling.style.display='none';     }
    else {
        element.nextElementSibling.style.display='block';    }
}//--/end function expand_next
</script>



<?php } ] ); ?>




