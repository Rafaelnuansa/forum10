<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Kelulusan Siswa</title>
</head>

<body>
    <div class="container">
        <center style="margin-top: 50px;">
            <h1>Algoritma Percabangan Bersarang</h1>
            <span>Menentukan Lulus Atau Tidaknya Siswa </span>
        </center>
        <form action="checking.php" method="POST">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda">
            </div>
            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai :</label>
                <input type="number" class="form-control" name="nilai" id="nilai" placeholder="Input Nilai Anda">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>