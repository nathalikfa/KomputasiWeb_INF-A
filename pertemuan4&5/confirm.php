<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Data Diri</title>
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
    <div class="container-fluid">
        <h1>Konfirmasi Data Diri</h1>
        <p>Berikut adalah data yang Anda isi:</p>

        <div class="p-4 mb-3 rounded custom-form">
            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <p><?php echo($_GET['name']); ?></p>
            </div>                
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <p><?php echo($_GET['email']); ?>@gmail.com</p>
            </div>
            <div class="mb-3">
                <label class="form-label">No. Handphone:</label>
                <p><?php echo($_GET['hp']); ?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat:</label>
                <p><?php echo($_GET['alamat']); ?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Pekerjaan:</label>
                <p><?php echo($_GET['job']); ?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin:</label>
                <p><?php echo($_GET['gender']); ?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Hobby:</label>
                <p><?php echo ($_GET['hobby']); ?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Status:</label>
                <p><?php echo($_GET['status']); ?></p>
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>