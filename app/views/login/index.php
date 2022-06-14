<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Custom -->
    <link rel="stylesheet" href="<?= base_url; ?>/assets/css/main-style.css">
</head>
<body>
    <div class="container bg-black py-5 h-100">
        <div class="row d-flex justify-content-center align-item-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-dark p-5 text-center">
                    <div class="mb-md-5 mt-md-4 pb-5">
                        <h2 class="fw-bold mb-2 mt-5 text-uppercase text-light">Login</h2>
                        <p class="text-white-50 mb-5">Masukkan Username dan Password</p>
                        <div class="row">
                            <div class="col-12">
                                <?php 
                                    Flasher::Notification();
                                ?>
                            </div>
                        </div>
                        <form action="<?= base_url; ?>/login/authLogin" method="POST">
                            <div class="form-floating form-white mb-4">
                                <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Username" required />
                                <label class="form-label" for="username">Username</label>
                            </div>

                            <div class="form-floating form-white mb-5">
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required />
                                <label class="form-label" for="email">Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- JS Custom -->
    <script src="<?= base_url; ?>/assets/js/main.js"></script>
    </body>
</html>