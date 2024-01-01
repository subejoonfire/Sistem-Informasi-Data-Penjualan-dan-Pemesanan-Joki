<!-- END nav -->
<?= $this->extend('templatefu/freeusertamplate'); ?>
<?= $this->Section('content'); ?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url() ?>assets/images/logo_makanan.png');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index_fu.php">Home</a></span>
				<h1 class="mb-0 bread">Checkout</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-7 ftco-animate">
				<!-- ... (previous HTML code) ... -->

				<form action="<?= base_url('pembelian/submitForm') ?>" method="post">
					<input type="hidden" name="id_keranjang" value="<?= $id_keranjang ?>">
					<h3 class="mb-4 billing-heading">Masukkan Data Anda</h3>
					<input type="text" class="form-control" value="<?= $nama_menu ?>" readonly>
					<div class="row align-items-end">
						<div class="col-md-12">
							<div class="form-group">
								<label for="name">Nama</label>
								<input type="text" class="form-control" id="name" name="nama" placeholder="Masukkan nama Anda" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="gender">Jenis Kelamin</label>
								<select class="form-control" id="gender" name="gender" required>
									<option value="male">Laki-Laki</option>
									<option value="female">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="phone">Nomor HP</label>
								<input type="tel" class="form-control" id="phone" name="phone" placeholder="Masukkan nomor HP Anda" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="address">Alamat</label>
								<textarea class="form-control" id="address" name="address" placeholder="Masukkan alamat Anda" required></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="pelayanan" value="antar" class="mr-2" required>Antar Kerumah</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="pelayanan" value="ambil" class="mr-2" required>Ambil Ketempat</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- ... (remaining HTML code) ... -->

			</div>
			<div class="col-xl-5">
				<div class="row mt-5 pt-3">
					<div class="col-md-12">
						<div class="cart-detail p-3 p-md-4">
							<h3 class="billing-heading mb-4">Catatan</h3>
							<p class="d-flex total-price">
								<span>*Antar ke rumah terdapat ongkos tambahan</span>
							</p>
							<p><button type="submit" class="btn btn-primary py-3 px-4">Pesan</button></p>
						</div>
					</div>
					</form>

				</div>
			</div> <!-- .col-md-8 -->
		</div>
	</div>
	</form>
</section> <!-- .section -->


<footer class="ftco-footer ftco-section">
	<div class="container">
		<div class="row">
			<div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
				</a>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Alamat dan Sosial media yang bisa dihubungi?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon icon-map-marker"></span><span class="text">Jl. Karang Jawa Rt. 002 Rw. 001 Keluarahan Karang Taruna, Kecamanatan Panyipatan</span></li>
							<li><a href="#"><span class="icon icon-phone"></span><span class="text">+628 2244 3455</span></a></li>
							<li><a href="#"><span class="icon icon-envelope"></span><span class="text">Kedai_J@Gmail.com</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
	</svg></div>

<script>
	function addToCart(menuId) {
		var quantity = document.getElementById('quantity_' + menuId).value;

		// Make an AJAX request to your server to add the item to the cart
		// You'll need to implement this on the server side using your controller and model
		// Example using jQuery for simplicity:
		$.ajax({
			type: 'POST',
			url: '<?= base_url('cart/addToCart'); ?>',
			data: {
				menuId: menuId,
				quantity: quantity
			},
			success: function(response) {
				// Handle the response if needed
				console.log(response);

				// If the request is successful, update the cart in the UI
				updateCartUI(response);
			}
		});
	}

	function updateCartUI(cart) {
		// This function is responsible for updating the cart UI on the product page
		// You need to define how the cart information should be displayed on the product page
		// For example, you can update a dropdown, display a mini cart, etc.
		// Extract relevant information from the cart array and update the UI accordingly
	}
</script>

</body>

</html>
<?= $this->endSection(); ?>