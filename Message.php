<?php

  class message implements JsonSerializable{

    private $name;
    private $id;
    private $content=array();

    public function __construct(){

    }

    public function saySomething($message){
        echo $message;
    }
    public function setName($name){
      $this->name=$name;
    }
    public function setId($id){
      $this->id=$id;
    }

    public function setContent($content){
      $this->content=$content;
    }

    public function getId(){
      return $this->id;
    }

    public function jsonSerialize(){
        return [
          'name'=>$this->name,
          'id'=>$this->id,
          'content'=>$this->content
       ];
    }

  }

?>
