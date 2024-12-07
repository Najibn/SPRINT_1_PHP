<?php

class TeachingResources{
    public $name;
    public $url;
    public Topic $topic;
    public Type $type;                

    public function __construct($name,$url,Topic $topic,Type $type)
    {
        $this->name=$name;
        $this->url=$url;
        $this->topic=$topic ;
        $this->type=$type;
    }


    public function status(){
        return sprintf(
            "Resource Name: %s\nTopic: %s\nURL: %s\nType: %s\n",
            $this->name,
            $this->topic->statusTopic(),
            $this->url,
            $this->type->statusType(),
        );
    }


    }







?>