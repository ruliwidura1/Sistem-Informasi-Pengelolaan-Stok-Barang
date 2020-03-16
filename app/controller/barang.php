<?php
class Barang extends JI_Controller{

	public function __construct(){
    parent::__construct();
		$this->setTheme('front');
    $this->load('barang_model','bm');
	}
	public function index(){
		$data = $this->__init(); //method from app/core/ji_controller



		//this config can be found on app/view/front/page/html/head.php
		$this->setTitle('Tentang ke Pasien '.$this->site_suffix);
		$this->setDescription('Silakan login terlebih dahulu sebelum ikut antrian di '.$this->site_name);
		$this->setKeyword('dr alfred');
    //Ambil data dari tabel
    $data["barang"] = $this->bm->get();

		//sidebar left
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeLeftContent("page/html/sidebar_left",$data); //pass data to view

		//sidebar right
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeRightContent("page/html/sidebar_right",$data); //pass data to view

		//main content
		//this view can be found on app/view/front/home/home.php
		$this->putThemeContent("barang/home",$data); //pass data to view
		//this view for INPAGE JS Script can be found on app/view/front/page/home/home_bottom.php
		$this->putJsContent("barang/home_bottom",$data); //pass data to view

		$this->loadLayout("login",$data);
		$this->render();
	}
  public function tambah(){
		$data = $this->__init(); //method from app/core/ji_controller



		//this config can be found on app/view/front/page/html/head.php
		$this->setTitle('Tentang ke Pasien '.$this->site_suffix);
		$this->setDescription('Silakan login terlebih dahulu sebelum ikut antrian di '.$this->site_name);
		$this->setKeyword('dr alfred');

		//sidebar left
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeLeftContent("page/html/sidebar_left",$data); //pass data to view

		//sidebar right
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeRightContent("page/html/sidebar_right",$data); //pass data to view

		//main content
		//this view can be found on app/view/front/home/home.php
		$this->putThemeContent("barang/tambah",$data); //pass data to view
		//this view for INPAGE JS Script can be found on app/view/front/page/home/home_bottom.php
		$this->putJsContent("barang/tambah_bottom",$data); //pass data to view

		$this->loadLayout("login",$data);
		$this->render();
	}
  public function tambah_proses(){
    //Tangkap inputan  input handler
    $jenis_barang = $this->input->post("jenis_barang");
    $harga_barang = $this->input->post("harga_barang");
    $harga_perbungkus_barang = $this->input->post("harga_perbungkus_barang");
    $harga_satuan_barang = $this->input->post("harga_satuan_barang");
    $pengeluaran_barang = $this->input->post("pengeluaran_barang");
    $pemasukan_barang = $this->input->post("pemasukan_barang");

    //insert into barang table
    $this->bm->set($jenis_barang,$harga_barang,$harga_perbungkus_barang,$harga_satuan_barang,$pengeluaran_barang,$pemasukan_barang);
    echo $pemasukan_barang;
  }
  public function edit($id){
		$data = $this->__init(); //method from app/core/ji_controller
    //Ambil data dari tabel
    $data['barang'] = $this->bm->getById($id);

		//this config can be found on app/view/front/page/html/head.php
		$this->setTitle('Tentang ke Pasien '.$this->site_suffix);
		$this->setDescription('Silakan login terlebih dahulu sebelum ikut antrian di '.$this->site_name);
		$this->setKeyword('dr alfred');

		//sidebar left
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeLeftContent("page/html/sidebar_left",$data); //pass data to view

		//sidebar right
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeRightContent("page/html/sidebar_right",$data); //pass data to view

		//main content
		//this view can be found on app/view/front/home/home.php
		$this->putThemeContent("barang/edit",$data); //pass data to view
		//this view for INPAGE JS Script can be found on app/view/front/page/home/home_bottom.php
		$this->putJsContent("barang/edit_bottom",$data); //pass data to view

		$this->loadLayout("login",$data);
		$this->render();
	}
  public function edit_proses($id){
    //Tangkap inputan  input handler
    $jenis_barang = $this->input->post("jenis_barang");
    $harga_barang = $this->input->post("harga_barang");
    $harga_perbungkus_barang = $this->input->post("harga_perbungkus_barang");
    $harga_satuan_barang = $this->input->post("harga_satuan_barang");
    $pengeluaran_barang = $this->input->post("pengeluaran_barang");
    $pemasukan_barang = $this->input->post("pemasukan_barang");

    //insert into barang table
    $this->bm->update($id,$jenis_barang,$harga_barang,$harga_perbungkus_barang,$harga_satuan_barang,$pengeluaran_barang,$pemasukan_barang);
    echo $pengeluaran_barang;
}
public function hapus($id){
  $data = $this->__init(); //method from app/core/ji_controller
  //Ambil data dari tabel
  $data['barang'] = $this->bm->getById($id);

  //this config can be found on app/view/front/page/html/head.php
  $this->setTitle('Tentang ke Pasien '.$this->site_suffix);
  $this->setDescription('Silakan login terlebih dahulu sebelum ikut antrian di '.$this->site_name);
  $this->setKeyword('dr alfred');

  //sidebar left
  //this view can be found on app/view/front/page/html/sidebar_left.php
  $this->putThemeLeftContent("page/html/sidebar_left",$data); //pass data to view

  //sidebar right
  //this view can be found on app/view/front/page/html/sidebar_left.php
  $this->putThemeRightContent("page/html/sidebar_right",$data); //pass data to view

  //main content
  //this view can be found on app/view/front/home/home.php
  $this->putThemeContent("barang/hapus",$data); //pass data to view
  //this view for INPAGE JS Script can be found on app/view/front/page/home/home_bottom.php
  $this->putJsContent("barang/hapus_bottom",$data); //pass data to view

  $this->loadLayout("login",$data);
  $this->render();
}
public function hapus_proses($id){
  //Tangkap inputan  input handler
  $barang = $this->bm->del($id);

}
}
