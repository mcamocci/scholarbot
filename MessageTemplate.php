<?php

  class MessageTemplate implements JsonSerializable{

    public static $type_text="txt";
    public static $type_vid="txt_vid";
    public static $type_file="txt_file";
    public static $type_image="txt_image";

    private $type;
    private $template;
    private $plainTextTemplate;
    private $imageTemplateReply;
    private $videoTemplateReply;
    private $fileTemplateReply;


    public function __construct($type){

        $this->type=$type;
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
        }
    }

  //**************************************(: :)***********************************************//

  $text_template=array(
                'recipient'=>array("id"=>"user"),
                'message'=>array(
                  "text"=>"the message"
                )
  );

  $file_template=array(
              'recipient'=>array("id"=>"user"),
               'message'=>array('attachment'=>array(
                    "type"=>"file",
                        "payload"=>array(
                              "url"=>"https://petersapparel.parseapp.com/img/shirt.png",
                              "is_reusable"=>true
                        )
                      )
                )
  );

  $button_template=array(
    "recipient"=>array("id"=>"the recipient id"),
    "message"=>array(
        "attachment"=>array(
            "type"=>"template",
            "payload"=>array(
                     "template_type"=>"button",
                     "text"=>"What do you want to do next?",
                     "buttons"=>array(
                             array(
                               "type"=>"web_url",
                               "url"=>"https://petersapparel.parseapp.com",
                               "title"=>"Show Website"
                             ),
                             array(
                               "type"=>"postback",
                               "title"=>"Start Chatting",
                               "payload"=>"USER_DEFINED_PAYLOAD"
                             )
                     )
            )
        )
      )
  );
  //**************************************(: :)***********************************************//

  public function getMessageType(){
    return $this->type;
  }

  public function setRecipient($name){
    $this->template['entry'][0]['messaging'][0][1]['recipient']=$name;//['messaging']['sender'];
  }

  public function getMessageObject(){
    if($this->getMessageType()==self::$type_text){
      return $this->template;
    }else{
    }
  }

  public function jsonSerialize(){
      return [
        'name'=>"not implemented"
     ];
  }

}


?>
