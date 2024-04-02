<?php
class mahasiswa{
//member1 - variabel
    public $nim;
    public $nama;
    public $kuliah;
    public $matakuliah;
    public $nilai;

//member2 (special method) - constructor 
public function __construct( $nim, $nama, $kuliah, $matakuliah, $nilai){
    $this->nim = $nim;
    $this->nama = $nama;
    $this->kuliah = $kuliah;
    $this->matakuliah = $matakuliah;
    $this->nilai = $nilai;

}   

//member3 (method) - function return
    public function getHasil() {
        if ($this->nilai >= 65) return "Lulus";
        else return "Tidak Lulus";
    }   
}
?>