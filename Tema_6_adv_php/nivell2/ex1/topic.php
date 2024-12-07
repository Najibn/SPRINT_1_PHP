<?php


enum Topic{

    case  PHP;
    case  CSS ;
    case  HTML;
    case  SQL;
    case  Laravel;


public function statusTopic(){
     return match ($this) {
         Topic::PHP =>     "php",
         Topic::CSS=>      "css",
         Topic::HTML=>     "html",    
         Topic::SQL=>      "sql",   
         Topic::Laravel=>  "laravel  ",          
        };
    } 
}

?>