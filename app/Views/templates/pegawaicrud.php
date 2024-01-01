<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            word-wrap: break-word;
            /* Allow long words to break and wrap to the next line */
            max-width: 200px;
            /* Set the maximum width for each cell */
            overflow: hidden;
            text-overflow: ellipsis;
            /* Adds an ellipsis (...) when text overflows */
            white-space: normal;
            /* Allow wrapping to the next line */
        }

        .edit-button,
        .delete-button {
            white-space: nowrap;
            /* Prevents button text from wrapping */
        }

        /* Customize the style for the "Detail Pegawai" column */
        /* Add this style to allow "Detail Pegawai" data to wrap to a new line */
        td.detail-column {
            white-space: normal;
        }
    </style>

    <title>Admin Page</title>
</head>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome Admin Kedai-J, Semangat!</h3>
                            <h6 class="font-weight-normal mb-0">Belanja hemat dan tenang <span class="text-primary">Kedai-J solusinya!</span></h6>
                            <h2 class="font-weight-bold">Data Pegawai</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-end mb-3">
                    <button onclick="window.location.href='<?= base_url('add_data_pegawai') ?>'" class="btn btn-primary mr-3">Tambah Pegawai</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Detail Pegawai</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter = 1;
                            foreach ($pegawai as $pegawaiItem) : ?>
                                <tr>
                                    <td><?= $counter++ ?></td>
                                    <td><?= $pegawaiItem['NIK'] ?></td>
                                    <td><?= $pegawaiItem['nama_pegawai'] ?></td>
                                    <td><?= $pegawaiItem['jenis_kelamin'] ?></td>
                                    <td class="detail-column"><?= $pegawaiItem['detail_pegawai'] ?></td>
                                    <td>
                                        <a href="#" class="btn btn-warning edit-button" data-toggle="modal" data-target="#editModal<?= $pegawaiItem['id_pegawai'] ?>">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger delete-button" data-toggle="modal" data-target="#deleteModal" data-id-pegawai="<?= $pegawaiItem['id_pegawai'] ?>">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>

                                    </td>
                                </tr>

                                <!-- Modal for Edit -->
                                <div class="modal fade" id="editModal<?= $pegawaiItem['id_pegawai'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $pegawaiItem['id_pegawai'] ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel<?= $pegawaiItem['id_pegawai'] ?>">Edit Pegawai</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Formulir Edit di sini -->
                                                <form action="<?= base_url('pegawaicrud/update'); ?>" method="post">
                                                    <input type="hidden" name="id_pegawai" value="<?= $pegawaiItem['id_pegawai']; ?>">
                                                    <div class="form-group">
                                                        <label for="NIK">NIK</label>
                                                        <input type="text" class="form-control" id="NIK" name="NIK" value="<?= $pegawaiItem['NIK']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_makanan_edit<?= $pegawaiItem['nama_pegawai'] ?>">Nama Pegawai:</label>
                                                        <input type="text" class="form-control" id="nama_pegawai_edit<?= $pegawaiItem['id_pegawai'] ?>" name="nama_pegawai" value="<?= $pegawaiItem['nama_pegawai']; ?>">
                                                        <div class="form-group">
                                                            <label for="jenis_kelamin">Kategori</label>
                                                            <select name="jenis_kelamin" class="form-control" id="">
                                                                <option value="laki-laki">Laki-Laki</option>
                                                                <option value="perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="detail_pegawai">Detail Pegawai</label>
                                                            <input class="form-control" id="detail_pegawai" name="detail_pegawai" value="<?= $pegawaiItem['detail_pegawai']; ?>">
                                                        </div>

                                                        <!-- Tambahkan formulir lainnya sesuai kebutuhan -->
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Delete Confirmation -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this item?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <form id="deleteForm" action="" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Set the action attribute of the delete form when delete button is clicked
            $('.delete-button').click(function() {
                var idPegawai = $(this).data('id-pegawai');
                var deleteUrl = '<?= base_url('pegawaicrud/') ?>' + idPegawai;
                $('#deleteForm').attr('action', deleteUrl);
            });
        });
    </script>
</body>

</html>