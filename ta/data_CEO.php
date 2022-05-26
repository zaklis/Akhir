
<?php class CEO {
	private $nama;
	private $tahun;
	private $posisi;
	private $keterangan;
 
	// method untuk setter
	public function setnama($a){
		$this->nama = $a;
	}
	public function settahun($a){
		$this->tahun = $a;
	}
	public function setposisi($a){
		$this->posisi = $a;
	}
	public function setketerangan($a){
		$this->keterangan = $a;
	}
 
	// method untuk getter
	public function getnama() {
		return $this->nama; 
	}
	public function gettahun() {
		return $this->tahun;
	}
	public function getposisi() {
		return $this->posisi;
	}
	public function getketerangan() {
		return $this->keterangan;
	}
}
 
// proses instansiasi object
// buat sebuah object kendaraan
$jabatan = new CEO;
// masukan sebuah nama didalam method setter
$jabatan->setnama("Zaki Listian");
$jabatan->settahun("2021 - Sekarang");
$jabatan->setposisi("CEO OF PT MOQUET");
$jabatan->setketerangan("CEO Terbaru saat ini");
 
// menampilkan  nama yang telah di set diatas
echo "Nama : <b>".$jabatan->getnama()."</b> <br>"; 
echo "Tahun jabatan : <b>".$jabatan->gettahun()."</b> <br>";
echo "Posisi jabatan : <b>".$jabatan->getposisi()."</b> <br>";
echo "Keterangan jabatan : <b>".$jabatan->getketerangan()."</b> <br>"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Data karyawan</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PT.Moquet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_karyawan.php">Data Karyawan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_CEO.php">Data CEO</a>
      </li>
 	  <li class="nav-item">
        <a class="nav-link" href="data_jabatan.php">Data Jabatan</a>
      </li>
    </ul>
        <a class="nav-link" href="login/logout.php" class="form-inline my-2 my-lg-0">Logout</a>
  </div>
</nav>
<br><br>
<center>
	<img src="gambar/1.png">
  <br>
  <br>
  <h1>PT. Moquet</h1>
</center>
</body>
</html>