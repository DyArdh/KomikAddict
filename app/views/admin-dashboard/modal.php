<div class="modal fade" id="add-content" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Comic</h5>
        <button type="button" class="btn-close" id="close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="judul" class="fw-bold">Judul :</label>
            <input type="text" class="form-control mt-2" name="judul" id="judul" required>
          </div>
          <div class="mb-3">
            <label for="penulis" class="fw-bold">Penulis :</label>
            <input type="text" class="form-control mt-2" name="penulis" id="penulis" required>
          </div>
          <div class="mb-3">
            <label for="tahun" class="fw-bold">Tahun :</label>
            <input type="number" class="form-control mt-2" name="tahun" id="tahun" required>
          </div>
          <div class="mb-3">
            <label for="genre" class="fw-bold">Genre :</label>
            <select class="form-select" name="genre" id="genre">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="bahasa" class="fw-bold">Bahasa :</label>
            <select class="form-select" name="bahasa" id="bahasa">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="sinopsis" class="fw-bold">Sinopsis :</label>
            <textarea name="sinopsis" id="sinopsis" rows="4" class="form-control mt-2"></textarea>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>