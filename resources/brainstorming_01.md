<?php 

include($_SERVER['DOCUMENT_ROOT'] . "/head.php"); 
include($_SERVER['DOCUMENT_ROOT'] . "/body.php"); 

insert_head();
insert_body($content=[
    "content_url" => "/home/index.php"    ]);

?> 



I kind of want to structure it like



basic_page_schema(

<<not writing variable here bc its default>>
<<not writing variable here bc its default>>
<<not writing variable here bc its default>>
<<not writing variable here bc its default>>
some_sorta_header_variable = blah
<<not writing variable here bc its default>>
 can I write body code directly here without having to pass stuff like this?
$content=[
    "content_url" => "/home/index.php"    ]); 


<<not writing variable here bc its default>>
<<not writing variable here bc its default>>

maybe more content and overrides?

);
