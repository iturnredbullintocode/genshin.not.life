<?php include $_SERVER['DOCUMENT_ROOT'].'/framework/make_page.php'; ?>







<!-- I can theoretically call a page like this -->
<?php  /* make_page(['content_directory' => '/home.php'] */ ?>








<!-- or if I want to just write some html with a PHP wrapper, and still keep the HTML syntax, I can do this -->

<?php make_page(['content' => function(){ ?> 






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




<?php } ] ); ?>




