<?php
require_once "ClassPasien.php";

class bmi extends pasien{
    public $berat;
    public $tinggi;

    function __construct($kode_pasien, $nama_pasien, $gender, $berat, $tinggi){
        parent::__construct($kode_pasien, $nama_pasien, $gender);
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function getBerat(){
        return $this->berat;
    }

    public function getTinggi(){
        return $this->tinggi;
    }

    public function nilaiBMI(){
        $result = round($this->berat / (($this->tinggi/100)**2),1);
        return $result;
    }

    public function statusBMI(){
        if($this->nilaiBMI() >= 30){
            return "Obesitas 2";
        }

        elseif($this->nilaiBMI() <= 29.9 && $this->nilaiBMI() >=27){
            return "Obesitas 1";
        }

        elseif($this->nilaiBMI() <= 26.9 && $this->nilaiBMI() >= 23){
            return "Kelebihan Bobot";
        }
        
        elseif($this->nilaiBMI() <= 23.9 && $this->nilaiBMI() >= 18.5){
            return "Sehat";
        }

        elseif($this->nilaiBMI() < 18.5){
            return "Kekurangan Berat Badan";
        }

        else{
            return;
        }
    }
}

?>