<?php foreach ($data['komik'] as $row) : ?>
    <div class="col">
        <div class="card box">
            <a class="stretched-link" href="index.php"></a>
            <img src="<?= base_url; ?>/assets/img/tesgambar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $row['judul'] ?></h5>
            </div>
            </div>
        </div>
<?php endforeach; ?>