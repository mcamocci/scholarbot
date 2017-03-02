<?php

  class MessageTemplate implements JsonSerializable{

    public static $type_text="txt";
    public static $type_vid="txt_vid";
    public static $type_file="txt_file";
    public static $type_image="txt_image";

    private $template;
    private $plainTextTemplate;
    private $imageTemplateReply;
    private $videoTemplateReply;
    private $fileTemplateReply;


    public function __construct($type){

        if($type==self::$type_text){

          $this->template=array(
            'object1'=>"page",
            'entry'=>array(array(
                "id"=>"id",
                "time"=>"time",
                'messaging'=>array(
                  array(
                    array('sender'=>'sender is here')
                    ,array('recipient'=>'recipient')
                  )
                )
              )
            )
          );
        }else{

        }
    }

  public function setMessageType($type){
    $this->type=$type;
  }

  public function getMessageType(){
    return $this->type;
  }

  public function setRecipient($name){
    $this->template['entry'][0]['messaging'][0][1]['recipient']=$name;//['messaging']['sender'];
  }

  public function getMessageObject(){
    return $this->template;
  }

  public function jsonSerialize(){
      return [
        'name'=>"not implemented"
     ];
  }

}


?>
