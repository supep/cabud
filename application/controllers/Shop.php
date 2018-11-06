<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$test = "test";
		$data['produk']['1'] = array(
			'nama' => 'Proll Tape khas Jember',
			'harga' => '30000',
			'toko' => 'Toko Primadona Jember',
			'gambar' => 'proll_tape_khas_jember',
			'deskripsi' => 'Proll Tape adalah makanan oleh-oleh dari Kota Jember, Jawa Timur. Makanan yang berbahan dasar tape singkong ini ini ada berbagai macam rasa mulai coklat, keju, kismis, dan orisinal. Kue yang terbuat dari tepung terigu, tape singkong, susu, mentega dan telur ini rasanya hampir seperti kue cake tapi aroma rasa tapenya sangat terasa yaitu manis, kecut dan gurih. Nama prol tape sendiri kurang diketahui darimana asalnya. Tapi kalau dimakan memang kue prol tapenya seperti ngeprol (rontok) dan terasa lunak di lidah.'
		);
	}
	public function index()
	{
		$data['konten'] = 'shop';
		$this->load->view('page', $data);
	}
	public function produk($produk = " ")
	{
		if("1"===" ")
		{
			redirect(base_url('shop'),'refresh');
		}
		$data['konten'] = 'produk';
		$this->load->view('page', $data);
	}
	public function kategori($kategori = " ")
	{
		if($kategori===" ")
		{
			redirect(base_url('shop'),'refresh');
		}
	}
	public function search($key=" ")
	{
		if($key === " ")
		{
			redirect(base_url('shop'),'refresh');
		}
	}
}

/* End of file Shop.php */
/* Location: ./application/controllers/Shop.php */