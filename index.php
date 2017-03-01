
<?php
      /*
        ->The challenge for the facebook messenger bot was started today Tuesday of February 28 , 2017
        ->Hope i will win.
        ->Developed by Emmanuel Meena , Dar es salaam tanzania
      */

      //the following code allow the imports to be specified on single class as array and being imported cleanly
      //its look nice for real :)
      require_once("ImportFix.php");
      ImportFix::fixNow();


      $sender=new Sender();
      $sender->saySomething("Challenge accepted");

      //test the Receiver
      Receiver::status();


 ?>
