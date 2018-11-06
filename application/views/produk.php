	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="<?php echo base_url(); ?>aset/images/Proll Tape.jpg" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Proll Tape khas Jember
					</h3>
					<p style="color: #2b2e33;" class="p-b-28">
						<a href="#"><strong>Toko Primadona Jember</strong></a>
					</p>
					<p id="harga" style="margin-top: -20px; color: #2b2e33;" class="p-b-28">
						<strong>Rp <l id="harga">30.000</l></strong>
					</p>
					<p style="color: #2b2e33;" class="p-b-28">
						<strong>Deskripsi</strong>
					</p>
					<p style="margin-top: -20px;" class="p-b-28">
						Proll Tape adalah makanan oleh-oleh dari Kota Jember, Jawa Timur. Makanan yang berbahan dasar tape singkong ini ini ada berbagai macam rasa mulai coklat, keju, kismis, dan orisinal. Kue yang terbuat dari tepung terigu, tape singkong, susu, mentega dan telur ini rasanya hampir seperti kue cake tapi aroma rasa tapenya sangat terasa yaitu manis, kecut dan gurih. Nama prol tape sendiri kurang diketahui darimana asalnya. Tapi kalau dimakan memang kue prol tapenya seperti ngeprol (rontok) dan terasa lunak di lidah.
					</p>
					<p style="color: #2b2e33;" class="p-b-28">
						<strong>Pesan Sekarang: <br/></strong>
					</p>
					<div style="margin-top: -45px;" class="flex-w p-b-90">
						<div class="w-size21 p-t-30 p-l-15 p-r-15 respon3">
							<p style="color: #2b2e33;" class="p-b-28">
								<strong>Jumlah:</strong>
							</p>
						</div>
						<div style="max-width: 100px;" class="p-t-30 p-l-15 p-r-15 respon3">
							<p style="color: #2b2e33;" class="p-b-28">
								<input id="quantity" class="s-text7 bg6 w-full p-b-5" type="number" min="1" value="1" onchange="updateHarga()">
							</p>
						</div>
					</div>
					<div style="margin-top: -130px;" class="flex-w p-b-90">
						<div class="w-size21 p-t-30 p-l-15 p-r-15 respon3">
							<p style="color: #2b2e33;" class="p-b-28">
								<strong>Tujuan:</strong>
							</p>
						</div>
						<div style="width: 80%;" class="p-t-30 p-l-15 p-r-15 respon3">
							<p style="color: #2b2e33;" class="p-b-28">
								<input class="s-text7 bg6 w-full p-b-5" type="text" placeholder="Masukkan Alamat Tujuan">
							</p>
						</div>
					</div>
					<div style="margin-top: -130px;" class="flex-w p-b-90">
						<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
							<p style=" color: black;" class="p-b-28">
								<strong>Produk: Rp <l id="jumlah"></l>
								<br/>Ongkir: Rp 15.000
								<br/>Total : Rp <l id="total"></l></strong>
							</p>
							<!-- Button -->
							<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
								Pesan Biasa
							</button>
							<p class="p-b-28">
								* waktu kirim +- 3 hari
							</p>
						</div>
						<div class="w-size1 p-t-30 p-l-15 p-r-15 respon3">

						</div>
						<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
							<p style=" color: black;" class="p-b-28">
								<strong>Produk: Rp <l id="jumlah1"></l>
								<br/>Ongkir: Rp 5.000
								<br/>Total : Rp <l id="oneday"></l></strong>
							</p>
							<!-- Button -->
							<!-- Button -->
							<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
								One Day Service
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		window.onload = function(e){ 
   updateHarga(); 
	}
		function updateHarga()
		{
			var harga = document.getElementById('harga').innerText;	
			harga = harga.replace(".", "");
			harga = harga.replace("Rp ", "");
			var inpt = document.getElementById('quantity').value;
			if(inpt >=1)
			{
				var baru = harga * inpt;
				var total = baru + 15000;
				var oneday = baru + 5000;
				baru = " " + baru;
				total = " " + total;
				oneday = " " + oneday;
				if(baru.length>3)
				{
					var pnjg = baru.length;
					var temp = (pnjg-1)/3;
					temp = Math.floor(temp);
					if(pnjg%3==1)
					{
						temp--;
					}
					for(var i = 0; i<temp; i++)
					{
						baru = baru.insert(pnjg - 3*(i+1), ".");
					}
					document.getElementById("jumlah").innerText = baru;
					document.getElementById("jumlah1").innerText = baru;
				}
				if(total.length>3)
				{
					var pnjg = total.length;
					var temp = (pnjg-1)/3;
					temp = Math.floor(temp);
					if(pnjg%3==1)
					{
						temp--;
					}
					for(var i = 0; i<temp; i++)
					{
						total = total.insert(pnjg - 3*(i+1), ".");
					}
					document.getElementById("total").innerText = total;
				}
				if(oneday.length>3)
				{
					var pnjg = oneday.length;
					var temp = (pnjg-1)/3;
					temp = Math.floor(temp);
					if(pnjg%3==1)
					{
						temp--;
					}
					for(var i = 0; i<temp; i++)
					{
						oneday = oneday.insert(pnjg - 3*(i+1), ".");
					}
					document.getElementById("oneday").innerText = oneday;
				}
				
			}

		}
		String.prototype.insert = function (index, string) {
		  if (index > 0)
		    return this.substring(0, index) + string + this.substring(index, this.length);
		  else
		    return string + this;
		};
	</script>