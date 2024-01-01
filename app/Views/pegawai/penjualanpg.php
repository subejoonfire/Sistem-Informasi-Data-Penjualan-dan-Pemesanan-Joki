<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        h1, h2, h3, h6 {
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

        .table-responsive {
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f9f9f9; /* Light gray background */
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #333; /* Darker text color for better visibility */
        }

        thead {
            background-color: #4CAF50;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #ddd;
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
                            <h3 class="font-weight-bold">Welcome Admin Kedai-J, Semangat!</h3>
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
                            <th>Nama Produk</th>
                            <th>Kuantitas</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Tanggal Penjualan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sales as $sale) : ?>
                            <tr>
                                <td><?= $sale['id_sales'] ?></td>
                                <td><?= $sale['nama_produk'] ?></td>
                                <td><?= $sale['kuantitas'] ?></td>
                                <td>Rp<?= number_format($sale['harga'], 0, ',', '.') ?></td>
                                <td>Rp<?= number_format($sale['total'], 0, ',', '.') ?></td>
                                <td><?= $sale['tanggal_penjualan'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
