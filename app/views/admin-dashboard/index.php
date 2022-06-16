<div class="container mt-2">
    <div class="row">
        <div class="col-12 col-md-4">
          <div class="card card-content detail">
            <div class="card-body">
              <div class="row">
                <div class="col-2 px-5">
                  <i class="fa-solid fa-upload fa-2xl pt-4"></i>
                </div>
                <div class="col-6 content-count">
                  <h6>Uploaded</h6>
                  <h4 class="fw-bold">10</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card card-content detail">
              <div class="card-body">
                <div class="row">
                  <div class="col-2 px-5">
                    <i class="fa-solid fa-folder fa-2xl pt-4"></i>
                  </div>
                  <div class="col-6 content-count">
                    <h6>Pending</h6>
                    <h4 class="fw-bold">10</h4>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card card-content detail">
            <div class="card-body">
              <div class="row">
                <div class="col-12 d-grid px-3 pt-2">
                  <button type="button" class="btn btn-primary uni-btn" data-bs-toggle="modal" data-bs-target="#add-content">Add New Content</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row my-4">
      <div class="col-12">
        <div class="card card-content">
          <div class="card-body">
            <div class="card-title">
              <h5 class="fw-bold">Content List</h5>
            </div>
            <div class="table-responsive">
              <table class="table mt-2" id="content-table">
                <thead>
                  <tr>
                    <th style="width: 5%;">#</th>
                    <th>Judul</th>
                    <th style="width: 20%;">Penulis</th>
                    <th style="width: 20%;">Tanggal Dibuat</th>
                    <th style="width: 15%;">Status</th>
                    <th style="width: 20%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="align-middle">
                    <th>1</th>
                    <th>Test 1 2 3 4 5 6</th>
                    <th>Oda Sensei</th>
                    <th>12 Desember 2022</th>
                    <th><div class="badge badge-outline-success py-1 px-3 me-2">Posted</div></th>
                    <th>
                      <div class="action-btn d-flex">
                        <span class="badge rounded-pill bg-success py-2 px-3 me-2">Detail</span>
                        <span class="badge rounded-pill bg-primary py-2 px-3 me-2">Edit</span>
                        <span class="badge rounded-pill bg-danger py-2 px-3">Hapus</span>
                      </div>
                    </th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>