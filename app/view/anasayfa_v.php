<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anasayfa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <h1 class="mt-3 mb-3 text-danger">Anasayfadasın</h1>
      <?php
        foreach ($data as $value): 
      ?><div class="col-3 mb-3 mt-3 ">
        <div class="card" style="width: 16rem; height:16rem;">
          <div class="card-body">
            <h5 class="card-title"><?= $value["baslik"]; ?></h5>
            <p class="card-text"><?= $value["icerik"]; ?></p>
          </div>
        </div>
      </div><?php
    endforeach; ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>