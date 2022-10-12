<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "ini kontroller latihan 1" ;
    }

    public function fungsi()
    {
        echo "ini kontroller fungsi" ;
    }

    public function hobi()
    {
        echo "hobi saya ngojek " ;
    }

    public function nama ()
    {
        echo"nama saya abdul";    
    }
    public function ayang ()
    { 
        echo "ayangku lola maryam" ;
    }

    public function hitung($n1, $n2)
    {
        $this->load->model('Model_Latihan1');
        $hasil=$this->Model_Latihan1->jumlah($n1,$n2);
        
        echo" hasil penjumlahan dari ".$n1."+".$n2."=".$hasil ;

    }

    public function hitung2($n1,$n2)
    {
        $hasil=$n1+$n2;
        echo"hasil penjumlahan".$n1."+".$n2."=".$hasil;
    }

    public function hitung3($n1, $n2)
    {
        $this->load->model('Model_Latihan1');

        $data['nilai1'] = $n1 ;
        $data['nilai2'] = $n2 ;

        $data['hasil']=$this ->Model_Latihan1->jumlah($n1,$n2);

        $this->load->view('view_latihan.php',$data);
    }
}