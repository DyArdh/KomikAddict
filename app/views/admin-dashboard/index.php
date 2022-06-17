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
                  <h4 class="fw-bold"><?= $data['countPosted'] ?></h4>
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
                    <h4 class="fw-bold"><?= $data['countPending'] ?></h4>
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
    <div class="row my-4" id="content">
    </div>
</div>