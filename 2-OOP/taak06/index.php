<?php
    class robot{
        public $naam;
        public $geluid;
        public $voorstuwing;
        function setsound($sound_parameter){ 
            $this->geluid = $sound_parameter;
        }
    
        function getSound(){
            return $this->geluid;
        }
    }
    
    $wally=new robot();
    $wally->geluid=("beepboop");
    $wally->naam=("wally");
    $wally->voortsturing=('rollend');

    echo $wally->getSound();
?>