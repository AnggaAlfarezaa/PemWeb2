<?php
require_once('mahasiswa.php');
class IPK extends Mahasiswa
{
    public $ipk;

    public function __construct($nim, $name, $programStudy, $tahunAngkatan, $ipk)
    {
        $this->ipk = $ipk;
        parent::__construct($nim, $name, $programStudy, $tahunAngkatan);
    }
    public function getInfo()
    {
        parent::getInfo();
        echo"IPK Mahasiswa : ". $this->ipk. "<br";
    }
    public function Predikat()
    {
        if ($this->ipk < 2.0){
            return "Cukup";
        } elseif ($this->ipk >= 2.0 and $this->ipk < 3.0) {
            return "Baik";
        } elseif ($this->ipk >= 3.0 and $this->ipk < 3.75) {
            return "Memuaskan";
        } elseif ($this->ipk >= 3.75){
            return"Cumlaude";
        }else {
            return"erorrr";
        }
    }
}
$mahasiswa2 = new IPK("0110223185", "Angga Alfareza", "Teknik Informatika", 2023, 3.8);
$mahasiswa2->getInfo();
?>