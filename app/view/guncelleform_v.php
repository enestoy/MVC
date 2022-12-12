<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MVC APP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <?php
    foreach ($data as $value) :
      $id = $value["id"];
      $baslik = $value["baslik"];
      $icerik = $value["icerik"];
    endforeach; ?>
    <div class="row text-center">
      <div class="col-lg-12">
        <div class="col-lg-12 mt-5">
          <form action="<?php echo SİTE_URL; ?>kayitguncelleson" method="post">
                    
                    <div class="mb-3">
                        <label for="baslik" class="form-label">Başlık</label>
                        <input type="text" name ="baslik" value="<?php echo $baslik; ?>" class="form-control" id="baslik" >
                    </div>
                    <div class="mb-3">
                        <label for="icerik" class="form-label">İçerik</label>
                        <input type="text" name="icerik" value="<?php echo $icerik; ?>" class="form-control" id="icerik" >
                    </div>
                    <div class="mb-3">
                    <input type="hidden" class="form-control" name="kayitid" value="<?php echo $id; ?>">
                    </div>

                    <input type="submit" class="btn btn-primary" name="buton" value="Kaydet">
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>