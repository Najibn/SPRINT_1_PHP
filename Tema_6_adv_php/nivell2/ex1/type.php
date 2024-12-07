
<?php
//

    enum Type{

        case  File;
        case  Webarticle ;
        case  Videos;

 public function statusType(){
        return match ($this) {
            Type::  File=> "file ",
            Type::  Webarticle=> "web articles",
            Type::  Videos => "videos ",
           
        };
    }


} 






?>