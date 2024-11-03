<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

$data = [$nim, $nama, $jenis_kelamin, $alamat, $no_hp, $email];


$file = fopen('data.csv', 'a'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penyimpanan Data</title>
    <style>
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #333;
        }

      
        .message-box {
            background-color: #fff;
            padding: 25px 35px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
            transition: transform 0.3s ease;
        }

        .message-box:hover {
            transform: scale(1.02);
        }

      
        h2 {
            color: #4CAF50;
            font-size: 24px;
            font-weight: 600;
        }

        h2.error {
            color: red;
        }

       
        p {
            margin-top: 20px;
            font-size: 14px;
        }

        a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #5a67d8;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <?php if ($file) {
            fputcsv($file, $data); 
            fclose($file);
            echo "<h2>Data berhasil disimpan!</h2>";
        } else {
            echo "<h2 class='error'>Gagal membuka file!</h2>";
        }
        ?>
        <p><a href="index.php">Kembali ke Form</a></p>
    </div>
</body>
</html>
