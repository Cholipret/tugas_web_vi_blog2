<?php  

	$mysqli=new mysqli("localhost","root","","latihan2");

class artikel
{

	public $koneksi;
	function __construct($mysqli)
	{
		$this->koneksi=$mysqli;
	}


	function tambah($judul,$isi)
	{
		$this->koneksi->query("INSERT INTO artikel (judul_ar,isi_ar) VALUES ('$judul','$isi')");

	}

}

$artikel=new artikel($mysqli);

?>