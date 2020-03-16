<div class="row">
  <div class="col-md-12">
    <form method="post" action="<?=base_url()?>barang/edit_proses/<?=$barang[0]->id?>">
    <label for="ijenis_barang">Jenis Barang</label>
    <input id="ijenis_barang" name="jenis_barang" class="form-control" value="<?=$barang[0]->jenis_barang?>" required />
    <label for="ijenis">Harga Barang</label>
    <input id="iharga_barang" name="harga_barang" class="form-control" value="<?=$barang[0]->harga_barang?>" required />
    <label for="ijenis">Harga Perbungkus Barang</label>
    <input id="iharga_perbungkus_barang" name="harga_perbungkus_barang" class="form-control" value="<?=$barang[0]->harga_perbungkus_barang?>" required />
    <label for="ijenis">Harga Satuan Barag</label>
    <input id="iharga_satuan_barang" name="harga_satuan_barang" class="form-control" value="<?=$barang[0]->harga_satuan_barang?>" required />
    <label for="ijenis">Pengeluaran Barang</label>
    <input id="ipengeluaran_barang" name="pengeluaran_barang" class="form-control" value="<?=$barang[0]->pengeluaran_barang?>" required />
    <label for="ijenis">Pemasukan Barang</label>
    <input id="ipemasukan_barang" name="pemasukan_barang" class="form-control" value="<?=$barang[0]->pemasukan_barang?>" required />
    <br />
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
  </div>
</div>
