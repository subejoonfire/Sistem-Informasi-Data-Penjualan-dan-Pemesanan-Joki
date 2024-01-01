<!-- END nav -->
<?= $this->extend('templatefu/freeusertamplate'); ?>
<?= $this->Section('content'); ?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url() ?>assets/images/logo_makanan.png');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index_fu.php">Home</a></span>
				<h1 class="mb-0 bread">Products</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 mb-5 text-center">
				<ul class="product-category">
					<li><a href="shopall" class="btn btn-primary">Semua</a></li>
					<li><a href="shopmakanan" class="btn btn-primary">Makanan</a></li>
					<li><a href="shopminuman" class="btn btn-primary">Minuman</a></li>
				</ul>
			</div>
			<div class="search-box">
				<input type="search" id="search-input" placeholder="Cari produk...">
				<button id="search-button">Cari</button>
			</div>
		</div>
		<section class="ftco-section">
			<div class="container">
				<div class="row">

					<?php foreach ($menu as $food) : ?>

						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">

								<a href="#" class="img-prod">
									<img class="img-fluid" src="<?= $food->gambar ?>" alt="<?= $food->nama ?>" alt="Colorlib Template">
									<div class="overlay"></div>
								</a>

								<div class="text py-3 pb-4 px-3 text-center">
									<h3><?= $food->nama ?></h3>

									<p>
										Rp <?= $food->harga ?>
									</p>

									<a href="#" class="btn btn-primary d-block">
										<i class="ion-ios-cart"></i>
									</a>

								</div>

							</div>
						</div>

					<?php endforeach; ?>

				</div>
			</div>
		</section>
</section>


<footer class="ftco-footer ftco-section">
	<div class="container">
		<div class="row">
			<div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
				</a>
			</div>
		</div>
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
	<div class="row">
		<div class="col-md-12 text-center">
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
	</svg></div>


</body>

</html>
<?= $this->endSection(); ?>