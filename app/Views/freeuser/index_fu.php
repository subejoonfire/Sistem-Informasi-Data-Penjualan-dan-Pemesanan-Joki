<?= $this->extend('templatefu/freeusertamplate'); ?>
<?= $this->Section('content'); ?>


<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(<?php echo base_url() ?>assets/images/sate.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-sm-12 ftco-animate text-center">
						<h1 class="mb-2">100% Halal</h1>
						<h2 class="subheading mb-4">terjamin bersih &amp; halal</h2>
					</div>

				</div>
			</div>
		</div>
		<div class="slider-item" style="background-image: url(<?php echo base_url() ?>assets/images/minuman.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-12 ftco-animate text-center">
						<h1 class="mb-2">100% bersih</h1>
						<h2 class="subheading mb-4">Terjamin bersih &amp; Halal</h2>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section">

</section>

<section class="ftco-section ftco-category ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6 order-md-last align-items-stretch d-flex">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?php echo base_url() ?>assets/images/logo1.png);">
						</div>
					</div>
					<div class="col-md-6">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?php echo base_url() ?>assets/images/sate.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="shopmakanan">Makanan</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?php echo base_url() ?>assets/images/minuman.jpg);">
					<div class="text px-3 py-1">
						<h2 class="mb-0"><a href="shopminuman">Minuman</a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">

	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Products</span>
				<h2 class="mb-4">Produk</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="container">
			<div class="search-box">
				<input type="search" id="search-input" placeholder="Cari produk...">
				<button id="search-button">Cari</button>
			</div>
			<div class="row">

				<?php foreach ($menu as $m) : ?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">

							<a href="#" class="img-prod"><img class="img-fluid" src="<?php echo base_url() ?>assets/images/<?php echo  $m['gambar']; ?>" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a><?php echo $m['nama']; ?></a></h3>
								<h3>Stok: <span id="stok"><?php echo $m['stok']; ?></span></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span>Rp. <?php echo $m['harga']; ?></span></p>
									</div>
								</div>
								<div class="bottom-area d-flex px-3">
									<div class="m-auto d-flex">
										<a href="cart" class="buy-now d-flex justify-content-center align-items-center mx-1">
											<span><i class="ion-ios-cart"></i></span>
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

</section>
<hr>

<footer class="ftco-footer ftco-section">
	<div class="container">
		<div class="row">
			<div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
				</a>
			</div>
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
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
	</svg></div>
<?= $this->endSection(); ?>