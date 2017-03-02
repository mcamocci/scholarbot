
<?php

      /*
        ->The challenge for the facebook messenger bot was started today Tuesday of February 28 , 2017
        ->Hope i will win.
        ->Developed by Emmanuel Meena , Dar es salaam tanzania
      */

      require_once("ImportFix.php");
      ImportFix::fixNow();
      header("Content-type:application/json");
      $customObject=new MessageTemplate(MessageTemplate::$type_text);
      $customObject->setRecipient("scholarbot");

      echo json_encode($customObject->getMessageObject());

      /*
      $message=new Message();
      $message->setName("scholar");
      $message->setId(1442);
      $message->setContent(array('itemOne'=>1,'itemTwo'=>2,'itemThree'=>3,'itemFour'=>4));

      $encodedObject=json_encode($message->jsonSerialize());
      echo $encodedObject;

      $decode=json_decode($encodedObject,true);

      print_r($decode);

      echo "this is only id".$decode['content']['itemFour'];
      */


 ?>
