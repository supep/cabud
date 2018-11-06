<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url()?>aset/images/near-me.jpg);">
		<h2 class="l-text2 t-center">
			Temukan Mitra Terdekat
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="map" data-map-x="" data-map-y="" data-pin="<?php echo base_url()?>aset/images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script type="text/javascript">
(function() {
window.onload = function() {
 
var options = {
zoom: 15,
center: new google.maps.LatLng(-7.283905, 112.793996), 
mapTypeId: google.maps.MapTypeId.ROADMAP
};
 
var map = new google.maps.Map(document.getElementById('map'), options);
var locations = [
                   ['Anda berada disini', -7.283905, 112.793996],
                   ['Toko Oleh-Oleh Akbar', -7.275786, 112.784446],
                   ['Toko Surabaya Punya Oleh-Oleh', -7.278021, 112.789279],
                   ['Toko Merchandise Khas Surabaya', -7.277868, 112.802220],
                   ['Toko Batik Asli Surabaya', -7.290446, 112.795664],
                   ['Toko Vas Maju Jaya', -7.282547, 112.781650],
                   ['Lontong Balap Surabaya Pak Darmo', -7.283627, 112.799653]
];
var infowindow = new google.maps.InfoWindow();
 
    var marker, i;
     /* kode untuk menampilkan banyak marker */
    for (i = 0; i < locations.length; i++) { 
    if (i==0)
    {
    	marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: '<?php echo base_url()?>aset/images/icons/position.png',
	     title: 'Posisi Anda'
	      });
	     /* menambahkan event clik untuk menampikan
	        infowindows dengan isi sesuai denga
	      marker yang di klik */
    } 
    else
    {
    	marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
	     title: 'Mitra Terdekat'
	      });
	     /* menambahkan event clik untuk menampikan
	        infowindows dengan isi sesuai denga
	      marker yang di klik */
     
    }
      
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
};
})();
</script>