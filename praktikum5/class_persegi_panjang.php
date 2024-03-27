<?php
class Persegipanjang{
    private $lebar;
    private $panjang;

    public function __construct($lebar, $panjang)
    {
        $this->lebar = $lebar;
        $this->panjang = $panjang;    
    }
    public function getLuas(){
        return $this->lebar * $this->panjang;
    }
    public function getKeliling(){
        return 2 * ( $this->lebar + $this->panjang );
    }
}

?>