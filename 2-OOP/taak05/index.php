<?php
   class lamp{
        public $kleur;
        public $helderhei;
        public $isAan;
      function setStatus($status){
        $this->isAan = $status;
    }  
   };
   $woonkamerlamp=new lamp();

   
   $keukenlamp=new lamp();
   $keukenlamp->Kleur='wit';
   $keukenlamp->Helderheid='vel';
   $keukenlamp->isAan=true;
   $keukenlamp->setStatus(true);
   
   
   
    echo $keukenlamp->isAan;
?>