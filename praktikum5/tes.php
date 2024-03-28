<?php
class PersegiPanjang {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function getLuas()
    {}
    public function getKeliling()
    {
        $hasil = 2 * ($this->panjang *$this->lebar);
        
    }
    
}
?>