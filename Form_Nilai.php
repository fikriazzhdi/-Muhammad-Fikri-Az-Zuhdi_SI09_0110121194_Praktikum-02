<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					Sistem Penilaian
				</h5>
				<div class="card-body">
                <form>
  <div class="form-group row mt-5">
    <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="ddp">Dasar Dasar Pemrograman</option>
        <option value="pw">Pemrograman Web</option>
        <option value="matkom">Matematika Komputer</option>
        <option value="so">Sistem Operasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" placeholder="Nilai Tugas / Praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="submit" type="submit" class="btn btn-primary">
    </div>
  </div>
</form>
				</div>
				<div class="card-footer">
					Develop by @fikriganteng 2022
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div class="card">
				<h5 class="card-header">
					Laporan Penilaian
				</h5>
				<div class="card-body">
                <?php
    $proses = $_GET['submit'];
    $siswa = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $tugas = $_GET['tugas'];

        echo ' ' .$proses;
        echo '<br/>Nama : ' .$siswa;
        echo '<br/>Mata Kuliah : ' .$matkul;
        echo '<br/>Nilai UTS :' .$uts;
        echo '<br/>Nilai UAS :' .$uas;
        echo '<br/>Nilai Tugas / Praktikum :' .$tugas;
    

?>
				</div>
				<div class="card-footer">
                Develop by @fikriganteng 2022
				</div>
			</div>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
    
</body>
</html>