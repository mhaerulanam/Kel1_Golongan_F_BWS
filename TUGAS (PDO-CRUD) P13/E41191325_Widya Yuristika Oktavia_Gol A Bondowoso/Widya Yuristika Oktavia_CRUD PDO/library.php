<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_crud_widya";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_mk ($kode_mk,$nama_mk,$SKS, $semester)
    {
        $data_mk = $this->db->prepare('INSERT INTO mata_kuliah (kode_mk,nama_mk,SKS,semester) VALUES (?,?, ?, ?)');
        
        $data_mk->bindParam(1, $kode_mk);
        $data_mk->bindParam(2, $nama_mk);
        $data_mk->bindParam(3, $SKS);
        $data_mk->bindParam(4, $semester);
 
        $data_mk->execute();
        return $data_mk->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM mata_kuliah");
        $query->execute();
        $data_mk = $query->fetchAll();
        return $data_mk;
    }
 
    public function get_by_id($kode_mk){
        $query = $this->db->prepare("SELECT * FROM mata_kuliah where kode_mk=?");
        $query->bindParam(1, $kode_mk);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($kode_mk,$nama_mk,$SKS, $semester){
        $query = $this->db->prepare('UPDATE mata_kuliah set nama_mk=?,SKS=?,semester=? where kode_mk=?');
        
        $query->bindParam(1, $nama_mk);
        $query->bindParam(2, $SKS);
        $query->bindParam(3, $semester);
        $query->bindParam(4, $kode_mk);
        $query->execute();
        return $query->rowCount();
    }
 
    public function delete($kode_mk)
    {
        $query = $this->db->prepare("DELETE FROM mata_kuliah where kode_mk=?");
 
        $query->bindParam(1, $kode_mk);
 
        $query->execute();
        return $query->rowCount();
    }
 
}
?>