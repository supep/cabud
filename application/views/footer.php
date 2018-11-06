

	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					ABOUT
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Cabud merupakan platform yang menghubungkan penggunanya dengan mitra untuk
melakukan transaksi daring yang menyediakan keanekaragaman produk kebudayaan
Indonesia seperti kerajinan, makanan, ataupun <i>merchandise</i> lokal
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Kategori
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="<?php echo base_url();?>shop" class="s-text7">
							Makanan & Minuman
						</a>
					</li>
					<li class="p-b-9">
						<a href="<?php echo base_url();?>shop" class="s-text7">
							Pakaian
						</a>
					</li>

					<li class="p-b-9">
						<a href="<?php echo base_url();?>shop" class="s-text7">
							Kerajinan Tangan
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Kritik & Saran
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="Masukkan Kritik & Saran Anda">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Kirim
						</button>
					</div>

				</form>
			</div>
		</div>
	</footer>

<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>aset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>aset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>aset/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>aset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>aset/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>aset/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>aset/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>aset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>aset/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>aset/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			if(1==0)
			{
				var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
				$(this).on('click', function(){
					swal(nameProduct, "is added to cart !", "success");
				});
			}
			
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>aset/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>aset/js/main.js"></script>
<!--===============================================================================================-->
</body>
</html>
