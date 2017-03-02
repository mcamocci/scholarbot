<?php

  class ImportFix{

      public static $myImports=array(
                "Receiver.php"
                ,"Sender.php"
                ,"Message.php"
                ,"Constants.php"
                ,"MessageTemplate.php"
      );

      public static function fixNow(){
         foreach (self::$myImports as $import) {
           require_once($import);
         }
      }

  }

 ?>
