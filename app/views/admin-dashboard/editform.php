<div class="modal fade" id="edit-content" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content px-5">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Comic</h5>
        <button type="button" id="close-btn" data-bs-dismiss="modal" aria-label="Close" style="background-color: transparent; border: none; color: #fff;">
          <i class="fa-solid fa-xmark fa-xl"></i>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url; ?>/admin/addComic" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="judul" class="fw-bold">Judul :</label>
            <input type="text" class="form-control mt-2" name="judul" id="judul" required>
          </div>
          <div class="mb-3">
            <label for="penulis_id" class="fw-bold">Penulis :</label>
            <select class="form-select" name="penulis_id" id="penulis_id">
              <option selected>Pilih Penulis</option>
              <?php foreach($data['penulis'] as $row) : ?>
                <option value="<?= $row['id'] ?>"><?= $row['penulis'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="tahun" class="fw-bold">Tahun :</label>
            <input type="number" class="form-control mt-2" name="tahun" id="tahun" required>
          </div>
          <div class="mb-3">
            <label for="genre" class="fw-bold mb-2">Genre :</label>
            <select class="form-select" name="genre[]" id="genre" multiple="multiple" size="4">
              <option value="Action">Action</option>
              <option value="Fantasy">Fantasy</option>
              <option value="Sci-Fi">Sci-Fi</option>
              <option value="Comedy">Comedy</option>
              <option value="Mystery">Mystery</option>
              <option value="Romance">Romance</option>
              <option value="Slice of Life">Slice of Life</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="bahasa" class="fw-bold mb-2">Bahasa :</label>
            <select class="form-select" name="bahasa_id" id="bahasa_id">
              <option selected>Pilih Bahasa</option>
              <?php foreach($data['bahasa'] as $row) : ?>
                <option value="<?= $row['id'] ?>"><?= $row['bahasa'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="sinopsis" class="fw-bold mb-2">Sinopsis :</label>
            <input type="hidden" id="sinopsis" name="sinopsis">
            <trix-editor input="sinopsis"></trix-editor>
          </div>
          <div class="mb-3">
            <label for="kondisi" class="fw-bold mb-2">Status :</label>
            <select class="form-select" name="kondisi" id="kondisi">
              <option value="Posted">Posted</option>
              <option value="Pending">Pending</option>
            </select>
          </div>
          <div class="button-group d-grid gap-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button class="btn btn-outline-light">Kembali</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>