<?php

  class ImportFix{

      //add the the class php files on this array to be included somewhere
      public static $myImports=array(
                "Receiver.php"
                ,"Sender.php"
                ,"Message.php"
                ,"Constants.php"
      );

      public static function fixNow(){
         foreach (self::$myImports as $import) {
           require_once($import);
         }
      }

  }

 ?>
