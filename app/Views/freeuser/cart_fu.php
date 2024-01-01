<?= $this->extend('templatefu/freeusertamplate'); ?>
<?= $this->section('content'); ?>

<div class="hero-wrap hero-bread" style="background-image: url(<?= base_url('assets/images/logo_makanan.png'); ?>);">
    <!-- ... (rest of your code) ... -->
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $totalPrice = 0; ?>
                            <?php foreach ($menucart as $item) : ?>
                                <?php if (is_array($item)) : ?>
                                    <tr class="text-center">
                                        <td>&nbsp;</td>
                                        <td><?= $item['id_menu']; ?></td>
                                        <td><?= $item['nama']; ?></td>
                                        <td>
                                            <input class="quantity-input" type="number" value="1" data-id="<?= $item['id_menu']; ?>" data-stock="<?= $item['stok']; ?>">
                                        </td>

                                        <?php
                                        $itemTotal = $item['harga'] * 1; // Replace '1' with the actual quantity selected
                                        $totalPrice += $itemTotal;
                                        ?>
                                        <td class="item-total" data-id="<?= $item['id_menu']; ?>">Rp <?= $itemTotal; ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <?php foreach ($menucart as $item) : ?>
                        <form action="<?= base_url('checkout/' . $item['id_menu']) ?>" method="post">
                            <?php if (is_array($item)) : ?>
                                <p class="d-flex">
                                    <span><?= $item['nama']; ?></span>
                                    <span>Rp. <?= $item['harga']; ?></span>
                                </p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span style="display: flex;">Rp.<span id="finalTotal"><?= $totalPrice; ?></span>
                            </span>
                            <input type="hidden" name="totalHarga" id="totalHarga" value="<?= $totalPrice ?>">
                        </p>
                </div>
                <p>
                    <button type="submit" onclick="ambilFinaltotal()" class="btn btn-primary py-3 px-4">Checkout(Beli)</button>
                </p>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function ambilFinaltotal() {
        var finalTotalElement = parseInt(document.getElementById('finalTotal').innerHTML)
        var totalHarga = document.getElementById('totalHarga')
        totalHarga.value = finalTotalElement
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var quantityInputs = document.querySelectorAll('.quantity-input');
        var finalTotalElement = document.getElementById('finalTotal');

        quantityInputs.forEach(function(input) {
            input.addEventListener('input', function() {
                updateItemTotal(this);
                updateFinalTotal();
            });
        });

        function updateItemTotal(input) {
            var quantity = parseInt(input.value) || 0;
            var itemId = input.dataset.id;
            var stock = parseInt(input.dataset.stock) || 0;

            if (quantity <= 0) {
                alert('Please enter a valid quantity greater than 0!');
                input.value = 1; // Set the quantity to 1 if it's less than or equal to 0
            } else if (quantity > stock) {
                alert('Quantity exceeds available stock!');
                input.value = stock; // Set the quantity to the available stock
            }

            // ... (potongan kode lainnya)
        }



        function updateFinalTotal() {
            var total = 0;
            var itemRows = document.querySelectorAll('.cart-list tbody tr');

            itemRows.forEach(function(row) {
                var price = parseInt(row.querySelector('.item-total').innerText.replace('Rp ', '')) || 0;
                var quantity = parseInt(row.querySelector('.quantity-input').value) || 0;

                total += price * quantity;
            });

            finalTotalElement.innerText = total;
        }
    });
</script>


<?= $this->endSection(); ?>