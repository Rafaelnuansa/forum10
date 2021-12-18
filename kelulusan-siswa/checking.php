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
             <p>
                 <?php
                    $nama = $_POST['nama'];
                    $nilai = $_POST['nilai'];
                    ?>

             <h1><?php echo $nama; ?></h1>
             <?php
                if ($nilai >= 75) {
                    echo "Lulus";
                } elseif ($nilai < 75) {
                    echo "Tidak Lulus";
                } elseif ($nilai > 100) {
                    echo "Maksimal 100";
                } else {
                    echo "Input Error";
                };

                ?>

             </p>
         </center>

     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 </body>

 </html>