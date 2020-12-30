<?php
class Java {
    public $fromphp;
    function __construct(Php $value){
        $this->fromphp = $value;
        $this->fromphp->framework();
        $this->fromphp->cms();
    }
}
class Php{
    function framework(){
        echo "Cake PHP is a framework. <br>";
    }
    function cms(){
        echo "WordPress is a cms.";
    }
}

$php = new Php;
new Java($php);

?>
