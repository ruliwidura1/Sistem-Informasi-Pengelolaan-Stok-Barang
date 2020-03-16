<?php
class Barang_Model extends SENE_Model{
  var $is_cacheable;
  var $tbl = 'barang';
  var $tbl_as = 'b';

  public function __construct(){
    parent::__construct();
    $this->is_cacheable;
    $this->db->from($this->tbl,$this->tbl_as);
  }
  public function set($jenis_barang,$harga_barang,$harga_perbungkus_barang,$harga_satuan_barang,$pengeluaran_barang,$pemasukan_barang){
    $sql = "INSERT INTO `barang` (`jenis_barang`, `harga_barang`, `harga_perbungkus_barang`, `harga_satuan_barang`, `pengeluaran_barang`, `pemasukan_barang`) VALUES ('$jenis_barang', '$harga_barang', '$harga_perbungkus_barang', '$harga_satuan_barang', '$pengeluaran_barang', '$pemasukan_barang');";
    return $this->db->exec($sql);
  }
  public function get(){
    $sql = "SELECT * FROM barang";
    return $this->db->query($sql);
  }
  public function getById($id){
    $sql = "SELECT * FROM barang WHERE id=$id";
    return $this->db->query($sql);
  }
  public function update($id,$jenis_barang,$harga_barang,$harga_perbungkus_barang,$harga_satuan_barang,$pengeluaran_barang,$pemasukan_barang){
    $sql = "UPDATE `barang` SET `jenis_barang` = '$jenis_barang', `harga_barang` = '$harga_barang', `harga_perbungkus_barang` = '$harga_perbungkus_barang', `harga_satuan_barang` = '$harga_satuan_barang', `pengeluaran_barang` = '$pengeluaran_barang', `pemasukan_barang` = '$pemasukan_barang' WHERE `barang`.`id` = $id;";
    return $this->db->exec($sql);
  }
  public function del($id){
    $sql = "DELETE FROM `barang` WHERE `barang`.`id` = $id";
    return $this->db->exec($sql);
  }
}
