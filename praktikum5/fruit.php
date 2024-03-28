<?php 
class Fruit {
    public $name = "asdas";
    const Jenis = "Buah";

    public function __construct($name)
    {
        $this->name = $_name;   
    }

}
$mangga = new Fruit();
$mangga ->$name = "Mangga";
echo $mangga ->$name;
echo $mangga::Jenis

?>