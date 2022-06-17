<div class="container mt-5">
    <div class="row">
        <div class="col-xs-12 col-md-9">
            <div class="card lessblack text-center">
                <div class="card-header">
                  <h4 class="fw-bold">Latest Review</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-xs-12 col-md-4">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <a class="stretched-link" href="index.php"></a>
                            <img src="<?=base_url?>/assets/img/spyxfamily.jpg" class="card-img-top" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 style="background-color: rgba(27, 27, 27, 0.641);">First slide label</h5>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <a class="stretched-link" href="index.php"></a>
                            <img src="<?=base_url?>/assets/img/spyxfamily.jpg" class="card-img-top" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 style="background-color: rgba(27, 27, 27, 0.641);">Second slide label</h5>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <a class="stretched-link" href="index.php"></a>
                            <img src="<?=base_url?>/assets/img/spyxfamily.jpg" class="card-img-top" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 style="background-color: rgba(27, 27, 27, 0.641);">Third slide label</h5>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title text-light" style="text-align: left;">Welcome to KomikAddict</h5>
                        <p class="card-text" style="text-align: justify;"><b>KomikAddict </b> adalah sebuah situs review buku komik dari seluruh dunia. Kami menilai dan menuliskan review singkat komik tersebut berdasarkan data yang sebenarnya atau tidak dibuat-buat hanya untuk keuntungan kelompok tertentu. Ini adalah review kami yang paling baru. Selamat mencari komik kesayangan anda di sini dan tunggu review kami berikutnya! </p>
                        <a href="#" class="btn btn-primary d-md-block ">Random Comic Button</a>
                    </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                  2 days ago
                </div>
              </div>
            <div class="row mt-2">
                <div class="col-xs-12">
                    <div class="card px-4 py-4 lessblack">
                        <h4 class="fw-bold" style="color: var(--text-color-light);">Daftar Komik</h4>
                        <div class="header-content d-flex align-self-end">
                            <div class="dropdown mx-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  Sort by
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="#">A-Z</a></li>
                                  <li><a class="dropdown-item" href="#">Z-A</a></li>
                                </ul>
                            </div>
                            <form role="search">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                              </form>                      
                        </div> 
                        <div class="row row-cols-1 row-cols-md-3 g-4 pt-4" id="daftarKomik">
                            
                        </div>            
                      </div>
                    </div>
                </div>
            </div>
        <div class="col-md-3 sidebar text-light">
            <div class="card lessblack">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card my-2 lessblack">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
  $(document).ready(function () {
  loadDaftarKomik();
  function loadDaftarKomik() {
    $.ajax({
      url: "http://localhost:8080/KomikAddict/public/home/getDaftarKomik",
      method: "POST",
      success: function (data) {
        $("#daftarKomik").html(data);
      },
    });
  }
});
</script>