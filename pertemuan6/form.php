<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: "Mali", cursive;
        }

        .custom-form {
            width: 50%;
            min-height: 400px;
            border: 2px solid; 
            border-color: #E90074 !important;
        }

        .btn-pink {
            background-color: black;
            border-width: 0;
        }
        .btn-pink:hover {
            background-color: #d41273;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        $host = "localhost";
        $username = "root";
        $password = "dede1006";
        $dbname = "form_p6";
        
        $conn = new mysqli($host, $username, $password, $dbname);
        
        // Cek koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }
        
        // Ambil data dari form
        $name = $_POST['name'];
        $email = $_POST['email'] . '@gmail.com';
        $hp = $_POST['hp'];
        $alamat = $_POST['alamat'];
        $job = $_POST['job'];
        $gender = $_POST['gender'];
        $hobby = $_POST['hobby'];
        $status = $_POST['status'];
        
        // Query untuk memasukkan data
        $sql = "INSERT INTO data_diri (name, email, hp, alamat, job, gender, hobby, status)
        VALUES ('$name', '$email', '$hp', '$alamat', '$job', '$gender', '$hobby', '$status')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil disimpan!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        // Tutup koneksi
        $conn->close();
    ?>

    <div class="container-fluid">
        <h1>Form Data Diri</h1>
        <p>Silahkan isi form di bawah ini.</p>

        <form action="form.php" method="POST" class="p-4 mb-3 rounded custom-form">
            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name" required>
            </div>                
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan Email" name="email" required>
                    <span class="input-group-text">@gmail.com</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">No. Handphone:</label>
                <input type="text" class="form-control" id="hp" placeholder="Masukkan No. Handphone" name="hp" required>
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat:</label>
                <textarea class="form-control" rows="3" id="Alamat" name="alamat" required></textarea>
            </div>
            <div class="mb-3">
                <label for="job" class="form-label">Pekerjaan:</label>
                <input type="text" class="form-control" id="job" placeholder="Masukkan Pekerjaan" name="job" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin:</label><br>
                <input type="radio" class="form-check-input" id="radio1" name="gender" value="perempuan" checked>Perempuan
                <label class="form-check-label" for="radio1"></label>
                <input type="radio" class="form-check-input" id="radio2" name="gender" value="Laki-laki">Laki-laki
                <label class="form-check-label" for="radio2"></label>
            </div>
            <div class="mb-3">
                <label for="hobby" class="form-label">Hobby:</label>
                <textarea class="form-control" rows="2" id="hobby" name="hobby" required></textarea>
            </div>
            <div class="mb-5">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select" name="status" required>
                    <option value="Belum menikah">Belum menikah</option>
                    <option value="Sudah menikah">Sudah menikah</option>
                    <option value="Sudah menikah tapi cerai">Sudah menikah tapi cerai</option>
                    <option value="Tidak mau menikah">Tidak mau menikah</option>
                </select>
            </div>
            <div class="mb-1">
                <button type="submit" class="btn btn-primary btn-pink">Submit</button>
            </div>
        </form>
    </div>

  <!-- Bootstrap JS and Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>