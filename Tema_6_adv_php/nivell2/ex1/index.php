//Create a class that represents a teaching resource of this specialty. Resources must have a name, 
//a topic ( that can only be PHP, CSS, HTML, SQL, Laravel) a URL and a resource type (File, Web article, Video). 
//It implements both the topic and the type of resource with enums.

<?php
require_once 'topic.php';
require_once 'type.php';
require_once 'resources.php';


//calling.............
    $resource = new TeachingResources(
        "sql Basics",
        "https://google.com/sql-basics",
        Topic::SQL,
        Type::Videos 
    );
   
    $resource2 = new TeachingResources(
        "php enums",
        "https://php/enums.com/php-basics/enums",
        Topic::PHP,
        Type::Webarticle
    );

    echo $resource->status();
    echo $resource2->status();




?>