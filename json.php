<?php
   class Emp {
       public $name = "";
       public $hobbies  = "";
       public $birthDate = "";
   }
   $e = new Emp();
   $e->name = "guo";
   $e->hobbies  = "sports";
   $e->birthDate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

   echo json_encode($e);
?>