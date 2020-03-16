<style>
.container{

  width:100%;
}
.tentang{
  font-style: italic;
}
.waktu{
  font-style: italic;
}
.tempat{
  font-style: italic;
}
.gallery{
  font-style: italic;
}
.peta-lokasi{
  font-style: italic;
}
.md{
  padding-left: 50px;
  padding-right: 50px;
  padding-bottom:25px;
  padding-top:50px;
}
.wi{
  padding-left: 170px;
  padding-right: 50px;
  padding-bottom:25px;
  padding-top:50px;
}
.dn{
  padding-left: 200px;
  padding-right: 50px;
  padding-bottom:25px;
  padding-top:50px;
}
</style>
<div class="row">
  <div class="col-md-12">
    <?php //$this->debug($barang);?>
    <div class="btn btn-info">Tambah Barang</div>
    <table class="table table-bordered">
<thead>
  <tr>
    <th>Id</th>
    <th>Jenisa Barang</th>
    <th>Harga Barang</th>
    <th>Harga Perbungkus Barang</th>
    <th>Harga Satuan Barang</th>
    <th>Pengeluaran Barang</th>
    <th>Pemasukan Barang</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  <?php foreach($barang as $b){ ?>
  <tr>
    <td><?=$b->id?></td>
    <td><?=$b->jenis_barang?></td>
    <td><?=$b->harga_barang?></td>
    <td><?=$b->harga_perbungkus_barang?></td>
    <td><?=$b->harga_satuan_barang?></td>
    <td><?=$b->pengeluaran_barang?></td>
    <td><?=$b->pemasukan_barang?></td>
    <td>
      <a href="<?=base_url()?>barang/edit/<?=$b->id?>" class="btn btn-info">Edit</a>
      <a href="<?=base_url()?>barang/hapus/<?=$b->id?>" class="btn btn-danger">Hapus</a>
    </td>
  </tr>
  <?php } ?>
</tbody>
</table>
  </div>
</div>
