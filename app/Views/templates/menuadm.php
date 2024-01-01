<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                            <h2 class="font-weight-bold">Stok Makanan yang Tersedia</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-end mb-3">
                    <button onclick="window.location.href='<?= base_url('add_data_menu') ?>'" class="btn btn-primary mr-3">Tambah Menu</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Opsi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter = 1;
                            foreach ($menu as $m) : ?>
                                <tr>
                                    <td><?= $counter++ ?></td>
                                    <td><?= $m['nama'] ?></td>
                                    <td><?= $m['kategori'] ?></td>
                                    <td><?= $m['harga'] ?></td>
                                    <td><?= $m['stok'] ?></td>
                                    <td>
                                        <img src="<?= $m['gambar'] ?>" alt="<?= $m['nama'] ?>" class="img-fluid" style="max-width: 150px; max-height: 150px; object-fit: cover;">
                                    </td>

                                    <td>
                                        <a href="#" class="btn btn-warning edit-button" data-toggle="modal" data-target="#editModal<?= $m['id_menu'] ?>">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger delete-button" data-toggle="modal" data-target="#deleteModal" data-id-menu="<?= $m['id_menu'] ?>">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Modal for Edit -->
                                <div class="modal fade" id="editModal<?= $m['id_menu'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $m['id_menu'] ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel<?= $m['id_menu'] ?>">Edit Menu</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Formulir Edit di sini -->
                                                <form action="<?= base_url('menuadm/update'); ?>" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="id_menu" value="<?= $m['id_menu']; ?>">
                                                    <div class="form-group">
                                                        <label for="nama_edit<?= $m['id_menu'] ?>">Nama Menu:</label>
                                                        <input type="text" class="form-control" id="nama_edit<?= $m['id_menu'] ?>" name="nama" value="<?= $m['nama']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="kategori">Kategori</label>
                                                        <select name="kategori" class="form-control" id="">
                                                            <option value="Makanan">Makanan</option>
                                                            <option value="Minuman">Minuman</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please enter a valid name.
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="harga">Harga</label>
                                                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $m['harga']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="stok">Stok</label>
                                                        <input class="form-control" id="stok" name="stok" value="<?= $m['stok']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="gambar">Gambar</label>
                                                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Preview Gambar</label>
                                                        <div>
                                                            <img id="previewImage" src="<?= $m['gambar'] ?>" alt="<?= $m['nama'] ?>" class="img-fluid" style="max-width: 150px; max-height: 150px; object-fit: cover;">
                                                        </div>
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
                    <h5 class="modal-title" id="deleteModalLabel">Delete Menu</h5>
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
            $('.delete-button').click(function() {
                var idMenu = $(this).data('id-menu');
                var deleteUrl = '<?= base_url('menuadm/') ?>' + idMenu;
                $('#deleteForm').attr('action', deleteUrl);
            });
        });
    </script>
</body>

</html>