<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .main-panel {
            padding: 20px;
        }

        h1,
        h2,
        h3,
        h6 {
            color: #454545;
        }

        .font-weight-bold {
            font-weight: bold;
        }

        .font-weight-normal {
            font-weight: normal;
        }

        .text-primary {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome Pegawai Kedai-J, Semangat!</h3>
                            <h6 class="font-weight-normal mb-0">Belanja hemat dan tenang <span class="text-primary">Kedai-J solusinya!</span></h6>
                            <h2 class="font-weight-bold">Data Penjualan</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>Pelayanan</th>
                            <th>Nama Produk</th>
                            <th>Total</th>
                            <th>Tanggal Penjualan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($pembelianfu as $user): ?>
                            <tr>
                                <td><?= $user['id_pembeli'] ?></td>
                                <td><?= isset($user['nama']) ? $user['nama'] : '' ?></td>
                                <td><?= isset($user['no_hp']) ? $user['no_hp'] : ''?></td>
                                <td><?= isset($user['alamat']) ? $user['alamat'] : ''?></td>
                                <td><?= isset($user['pelayanan']) ? $user['pelayanan'] : '' ?></td>
                                <?php endforeach; ?>
                                <?php foreach ($salesfu as $sale): ?>
                                <td class="tanggal-penjualan"><?= isset($sale['tanggal_penjualan']) ? $sale['tanggal_penjualan'] :  ''?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <!-- Bootstrap JS and Popper.js are required for Bootstrap features -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Menggunakan JavaScript untuk mengisi tanggal penjualan dengan tanggal saat ini
        document.addEventListener("DOMContentLoaded", function() {
            var tanggalPenjualanCells = document.querySelectorAll('.tanggal-penjualan');
            var currentDate = new Date().toLocaleDateString();
            
            tanggalPenjualanCells.forEach(function(cell) {
                cell.textContent = currentDate;
            });
        });
    </script>
</body>

</html>