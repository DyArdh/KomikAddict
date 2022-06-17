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
            <tbody id="dataTable">
                <?php $no = 1; ?>

                <?php foreach ($data['komik'] as $row) : ?>
                <tr class="align-middle">
                <th><?= $no; ?></th>
                <th><?= $row['judul']; ?></th>
                <th><?= $row['penulis'] ?></th>
                <th><?= $row['tanggal'] ?></th>
                <?php if($row['kondisi'] == "Posted") { ?>
                    <th><div class="badge badge-outline-success py-1 px-3 me-2" style="width: 89px;">Posted</div></th>
                <?php } else { ?>
                    <th><div class="badge badge-outline-warning py-1 px-3 me-2" style="width: 89px;">Pending</div></th>
                <?php } ?>
                <th>
                    <div class="action-btn d-flex">
                    <span class="badge rounded-pill bg-success py-2 px-3 me-2">Detail</span>
                    <a href="#edit-content" class="editKomik" data-bs-toggle="modal" data-bs-target="#edit-content" data-id="<?= $row['id']; ?>"><span class="badge rounded-pill bg-primary py-2 px-3 me-2">Edit</span></a>
                    <span class="badge rounded-pill bg-danger py-2 px-3">Hapus</span>
                    </div>
                </th>
                </tr>
                <?php $no++; endforeach; ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#content-table").DataTable({
            lengthChange: false,
            info: false,
            pageLength: 20,
        });

        $(".editKomik").on("click", function () {
            const id = $(this).data("id");
            $.ajax({
                url: 'http://localhost:8080/KomikAddict/public/admin/getEdit',
                data: {id : id},
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    // $('#judul').val(data.judul);
                    // $('#nama').val(data.nama);
                    // $('#nama').val(data.nama);
                }
            });
        });

     });
</script>