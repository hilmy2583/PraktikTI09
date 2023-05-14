<?php

//panggil data produk
$new = new Produk();
$data = $new->dataProduk();
//jadikan data produk menjadi array
require_once '../admin/koneksi.php';

?>

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-lg-3 col-md-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/product01.png" alt="">
					</div>
					<div class="shop-body">
						<?php
						$dataa = $data[0];
						echo "<h3>$dataa[nama]</h3>";
						?>
						<a href="#hide1" class="cta-btn">Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-lg-3 col-md-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/product02.png" alt="">
					</div>
					<div class="shop-body">
						<?php
						$datab = $data[1];
						echo "<h3>$datab[nama]</h3>";
						?>
						<a href="#hide2" class="cta-btn">Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-lg-3 col-md-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/product03.png" alt="">
					</div>
					<div class="shop-body">
						<?php
						$datac = $data[2];
						echo "<h3>$datac[nama]</h3>";
						?>
						<a href="hide3" class="cta-btn">Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-lg-3 col-md-6">
				<div class="shop">
					<div class="shop-img">
						<img src="img/product09.png" alt="">
					</div>
					<div class="shop-body">
						<?php
						$datad = $data[3];
						echo "<h3>$datad[nama]</h3>";
						?>
						<a href="hide4" class="cta-btn">Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

		</div>
		<!-- /row -->

		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-lg-3 col-md-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/product05.png" alt="">
					</div>
					<div class="shop-body">
						<?php
						$datae = $data[4];
						echo "<h3>$datae[nama]</h3>";
						?>
						<a href="hide5" class="cta-btn">Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-lg-3 col-md-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/product06.png" alt="">
					</div>
					<div class="shop-body">
						<?php
						$dataf = $data[5];
						echo "<h3>$dataf[nama]</h3>";
						?>
						<a href="hide6" class="cta-btn">Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-lg-3 col-md-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/product07.png" alt="">
					</div>
					<div class="shop-body">
						<?php
						$datag = $data[6];
						echo "<h3>$datag[nama]</h3>";
						?>
						<a href="hide7" class="cta-btn">Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-lg-3 col-md-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/product08.png" alt="">
					</div>
					<div class="shop-body">
						<?php
						$datah = $data[7];
						echo "<h3>$datah[nama]</h3>";
						?>
						<a href="hide8" class="cta-btn">Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-3" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-3">
					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product07.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product08.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product09.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>

					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product01.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product02.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product03.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>
				</div>
			</div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-4" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-4">
					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product04.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product05.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product06.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>

					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product07.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product08.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product09.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>
				</div>
			</div>

			<div class="clearfix visible-sm visible-xs"></div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-5" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-5">
					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product01.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product02.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product03.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>

					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product04.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product05.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product06.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>
				</div>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<form method="POST" action="proses.php">
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-12">
					<!-- Billing Details -->
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Pemesanan</h3>
						</div>
						<div class="form-group">
							<?php
							$sqljenis = "SELECT * FROM produk";
							$rsjenis = $dbh->query($sqljenis);
							?>
							<select id="jenis" name="jenis" class="input">
								<?php
								foreach ($rsjenis as $rowjenis) {
								?>
									<option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<input class="input" type="date" id="tanggal" name="tanggal" placeholder="Tanggal" required>
						</div>
						<div class="form-group">
							<input class="input" type="text" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Pemesanan" required>
						</div>
						<div class="form-group">
							<input class="input" type="text" id="alamat_pemesanan" name="alamat_pemesanan" placeholder="Alamat Pemesanan" required>
						</div>
						<div class="form-group">
							<input class="input" type="number" id="no_hp" name="no_hp" placeholder="Nomor Handphone" required>
						</div>
						<div class="form-group">
							<input class="input" type="email" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input class="input" type="number" id="jumlah_pesanan" name="jumlah_pesanan" placeholder="Jumlah Pesanan" required>
						</div>
						<div class="order-notes">
							<textarea class="input" id="deskripsi" name="deskripsi" placeholder="Deskripsi"></textarea>
						</div>
						<br>
						<input type="submit" name="proses" type="submit" class="primary-btn order-submit" value="Order" />
					</div>
					<!-- /Billing Details -->
				</div>
			</div>
			<!-- /row -->
		</div>
	</form>

	<!-- /container -->
</div>
<!-- /SECTION -->