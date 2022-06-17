<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- local css -->
    <link rel="stylesheet" href="<?= base_url; ?>/assets/css/main-style.css">
  </head>
  <body>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #191c25;">
  <div class="container">
    <a class="navbar-brand" href="#" style="font-weight: bold;font-size: 30px;color: #fff;">KomikAddict</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars" style="color: #fff;"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav fw-bold me-auto mb-3 mb-lg-0 ms-md-5">
        <li class="nav-item me-3">
          <a class="nav-link active" style = "color: white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style = "color: white" href="#">List</a>
        </li>
      </ul>
    </div>
  </div>
</nav>