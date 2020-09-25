<!doctype html>
<html lang="en">
<head>

 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

 <link rel="stylesheet" href="style.css">

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body >
 <nav class="navbar navbar-light bg-transparent fixed-top">
  <div class="container-fluid">
   <a class="navbar-brand fa fa-arrow-left fa-3x" href="index.php" style="padding-top:50px" >
   </a>
</div>
</nav>
<div class="jumbotron">
   <div class="container" > 
      <h2 class=" display-4 font-weight-bold "style="color:#FCB371;margin-top:-10px">Tambah Data</h2>

      <form method="post" action="proses_insert.php">
       <div class="form-group" style="margin-top:30px;">
        <input type="text" class="form-control" placeholder="Input Nama Produk"  name="nama_produk">
     </div>
     <div class="form-group">
      <textarea class="form-control" rows="4" name="keterangan" placeholder="Keterangan" id="comment"> keterangan</textarea>
   </div>

   <!-- Contoh Menggunakan Grid System -->
   <div class="form-group">
     <input type="text" class="form-control"  placeholder="Harga"  name="harga">
  </div>


  <div class="form-group">
     <input type="text" class="form-control" placeholder="Jumlah"  name="jumlah">
  </div>



  <input type="submit" value="Tambah Data" class="col-sm btn btn-light btn-lg" href="data.php" role="button" style="margin-top:40px;">
</form>
</div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

