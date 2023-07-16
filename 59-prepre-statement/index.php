<?php
require_once 'Connection.php';
class Data
{
  private $pdo;

  public function __construct()
  {
    $this->pdo = Connection::getConnection();
  }

  function insertData($nama, $alamat)
  {
    $sql = "INSERT INTO mahasiswa (nama, alamat) VALUES (:nama, :alamat)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':alamat', $alamat);
    return $stmt->execute();
  }

  function getLike($nama)
  {
    $parameter = '%' . $nama . '%';
    $sql = "SELECT * FROM mahasiswa WHERE nama LIKE :nama";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(':nama', $parameter);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function getIn(array $list)
  {
    $placeholder = str_repeat('?,', count($list) - 1) . '?';
    $sql = "SELECT * FROM mahasiswa WHERE nama IN ($placeholder)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($list);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

$data = new Data();
// if ($data->insertData('Budi Sudarsono', 'Jombang')) {
//   echo "Data berhasil ditambahkan";
// } else {
//   echo "Data gagal ditambahkan";
// }

echo '<br> ------------- Data dengan like ------------- <br>';
$mhs = $data->getLike('Budi');
foreach ($mhs as $m) {
  echo $m['nama'] . ' - ' . $m['alamat'] . ' <br>';
}

echo '<br> ------------- Data dengan list ------------- <br>';
$mhs = $data->getIn(['Budi', 'Budi Sudarsono']);
foreach ($mhs as $m) {
  echo $m['nama'] . ' - ' . $m['alamat'] . ' <br>';
}