<?php
$koneksi = mysqli_connect("localhost", "root", "", "kesanpesan");

// Mengambil data dari formulir
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Pesan = $_POST['Pesan'];

// Validasi data (contoh sederhana)
// Di sini Anda dapat menambahkan validasi tambahan sesuai kebutuhan Anda

// Menjalankan query untuk menyimpan data ke dalam database
$query = "INSERT INTO masukan VALUES ('$Nama', '$Email', '$Phone', '$Pesan')";

if($Nama == ""){
    echo "<script>
        alert('Lengkapi data');
        window.location='index.php';
    </script>";
} else {
    mysqli_query($koneksi, $query);
    echo "<script>alert('Masukkan sudah diterima, Terimakasih!. ');
                    window.location='index.php';
                </script>";
}
?>

