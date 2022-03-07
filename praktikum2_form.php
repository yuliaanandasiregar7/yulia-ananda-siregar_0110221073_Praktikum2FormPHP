<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_Yulia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<h1>Form Nilai Siswa</h1>
<form action="praktikum2_form.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="BDI">Basis Data</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="SIMPAN" name="proses">
    </div>
  </div>

</form>

<!--kode php--> 
<!--grade nilai-->
<!--predikat nilai-->
<?php

$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];
$nilai_tugas = $_POST["nilai_tugas"];
$nilai_total = (0.35*$nilai_uts) + (0.35*$nilai_uas) + (0.35*$nilai_tugas);


if ($nilai_total > 55) {
  $status = "LULUS";
} else {
  $status = "Tidak Lulus";
}

// if else
if ($nilai_total >= 85 && $nilai_total <= 100) {
  $grade = "A";
} elseif ($nilai_total >= 74 && $nilai_total <= 84) {
  $grade = "B";
} elseif ($nilai_total >= 56 && $nilai_total <= 69) {
  $grade = "C";
}elseif ($nilai_total >= 36 && $nilai_total <= 55) {
  $grade = "D";
} elseif ($nilai_total >= 0 && $nilai_total <= 35) {
  $grade = "E";
} else {
  $grade = "I";
}

// switch
switch ($grade) {
  case "A";
  $predikat ="sangat memuaskan";
    break;
  case "B";
  $predikat ="memuaskan";
    break;
  case "C";
  $predikat ="cukup";
    break;
  case "D";
  $predikat ="kurang";
    break;
  case "E";
  $predikat ="sangat kurang";
    break;
  default:
  $predikat ="tidak ada";
    break;
}

echo 'Proses :' . $proses;
echo '<br> Nama :' . $nama;
echo '<br> Mata Kuliah :' . $matkul;
echo '<br> Nilai UTS :' . $nilai_uts;
echo '<br> Nilai UAS :' . $nilai_uas;
echo '<br> Nilai Tugas :' . $nilai_tugas;
echo '<br> Nilai Total :' . $nilai_total = (0.35*$nilai_uts) + (0.35*$nilai_uas) + (0.35*$nilai_tugas);
echo '<br> Grade :' . $grade;
echo '<br> Predikat :' . $predikat;
echo '<br> Status :' . $status;

?>

</body>
</html>