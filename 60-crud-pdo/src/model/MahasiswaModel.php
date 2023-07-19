<?php

class MahasiswaModel
{
  private $conn;

  public function __construct()
  {
    $this->conn = Connection::getConnection();
  }

  public function getAllMahasiswa()
  {
    $query = "SELECT * FROM mahasiswa";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getMahasiswa($id)
  {
    $query = "SELECT * FROM mahasiswa WHERE nim = :nim";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':nim', $id);
    $stmt->execute();
    return $stmt->fetch();
  }

  public function insert(array $mhs)
  {
    $query = "INSERT INTO mahasiswa(nama, tempat_lahir, tanggal_lahir, jenis_kelamin, telepon, alamat) VALUES(:nama, :tempat_lahir, :tanggal_lahir, :jenis_kelamin, :telepon, :alamat)";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':nama', $mhs['nama'], PDO::PARAM_STR);
    $stmt->bindParam(':tempat_lahir', $mhs['tempat_lahir'], PDO::PARAM_STR);
    $stmt->bindParam(':tanggal_lahir', $mhs['tanggal_lahir'], PDO::PARAM_STR);
    $stmt->bindParam(':jenis_kelamin', $mhs['jenis_kelamin'], PDO::PARAM_INT);
    $stmt->bindParam(':telepon', $mhs['telepon'], PDO::PARAM_STR);
    $stmt->bindParam(':alamat', $mhs['alamat'], PDO::PARAM_STR);
    return $stmt->execute();
  }

  public function update(array $mhs)
  {
    $query = "UPDATE mahasiswa SET nama=:nama, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, jenis_kelamin=:jenis_kelamin, telepon=:telepon, alamat=:alamat WHERE nim=:nim";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':nama', $mhs['nama'], PDO::PARAM_STR);
    $stmt->bindParam(':tempat_lahir', $mhs['tempat_lahir'], PDO::PARAM_STR);
    $stmt->bindParam(':tanggal_lahir', $mhs['tanggal_lahir'], PDO::PARAM_STR);
    $stmt->bindParam(':jenis_kelamin', $mhs['jenis_kelamin'], PDO::PARAM_INT);
    $stmt->bindParam(':telepon', $mhs['telepon'], PDO::PARAM_STR);
    $stmt->bindParam(':alamat', $mhs['alamat'], PDO::PARAM_STR);
    $stmt->bindParam(':nim', $mhs['nim'], PDO::PARAM_STR);
    return $stmt->execute();
  }

  public function delete($nim)
  {
    $query = "DELETE FROM mahasiswa WHERE nim = :nim";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':nim', $nim);
    return $stmt->execute();
  }
}