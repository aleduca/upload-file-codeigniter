<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload File Codeigniter 4</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,600;1,100&display=swap" rel="stylesheet">
</head>
<link rel="stylesheet" href="assets/css/style.css">

<body>
  <div class="container">
    <div class="d-flex justify-content-md-center align-items-center vh-100">
      <div class="bg bg-light p-2 border border-secondary rounded">
        <h2>Upload de arquivo</h2>
        <?php if (session()->has('errors')) : ?>
          <span class="text text-danger"><?php echo session()->get('errors')['userfile']; ?></span>
        <?php endif; ?>
        <?php if (session()->has('uploaded')) : ?>
          <span class="text text-success"><?php echo session()->get('uploaded'); ?></span>
        <?php endif; ?>
        <form action="<?php echo url_to('upload');  ?>" method="post" enctype="multipart/form-data">
          <input type="file" name="userfile" class="form-control-file">
          <button type="submit">Upload</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>