<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_toko";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_brg($kd_barang, $nama_barang, $satuan_barang, $stok_barang, $harga_barang)
    {
        $data_brg = $this->db->prepare('INSERT INTO tbl_barang (kd_barang,nama_barang,satuan_barang,stok_barang,harga_barang) VALUES (?,?, ?, ?)');
        
        $data_brg->bindParam(1, $kd_barang);
        $data_brg->bindParam(2, $nama_barang);
        $data_brg->bindParam(3, $satuan_barang);
        $data_brg->bindParam(4, $stok_barang);
        $data_brg->bindParam(5, $harga_barang);
 
        $data_brg->execute();
        return $data_brg->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM tbl_barang");
        $query->execute();
        $data_brg = $query->fetchAll();
        return $data_brg;
    }
 
    public function get_by_id($kd_barang){
        $query = $this->db->prepare("SELECT * FROM tbl_barang where kd_barang=?");
        $query->bindParam(1, $kd_barang);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($kd_barang,$nama_barang, $satuan_barang, $stok_barang, $harga_barang){
        $query = $this->db->prepare('UPDATE tbl_barang set nama_barang=?,satuan_barang=?,stok_barang=?,harga_barang=? where kd_barang=?');
        
        $query->bindParam(1,$nama_barang);
        $query->bindParam(2, $satuan_barang);
        $query->bindParam(3, $stok_barang);
        $query->bindParam(4,$harga_barang);
        $query->bindParam(5,$kd_barang);

        $query->execute();
        return $query->rowCount();
    }
 
    public function delete($kd_barang)
    {
        $query = $this->db->prepare("DELETE FROM tbl_barang where kd_barang=?");
 
        $query->bindParam(1, $kd_barang);
 
        $query->execute();
        return $query->rowCount();
    }
 
}
?>