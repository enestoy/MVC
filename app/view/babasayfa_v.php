<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC UYGULAMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">

<div class="row text-center">


    <div class="col-lg-12">
    
        <table class="table table-bordered mt-2">
        <thead>
        <tr class="font-weight-bold">
        <td>#İD</td>
        <td>BAŞLIK</td>
        <td>iÇERİK</td>
        <td>İŞLEM <a href="http://localhost/mvc-2/boots/kayitekle" class="btn btn-success btn-sm">YENİ KAYIT</a></td>
        </tr>
        </thead>	
        <tbody><?php
        foreach ($data as $value):
        echo '<tr>                 
        <td>'.$value["id"].'</td>
        <td>'.$value["baslik"].'</td>
        <td>'.$value["icerik"].'</td>
        <td><a href="http://localhost/mvc-2/boots/kayitguncelle/'.$value["id"].'" class="btn btn-primary btn-sm">Güncelle</a> 
        <a href="http://localhost/mvc-2/boots/kayitsil/'.$value["id"].'" class="btn btn-danger btn-sm">Sil</a></td>  
        </tr>';
      endforeach;?>
        </tbody>
    </table>
    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>