<?php
namespace MyApp\Controllers;

use Mpdf\Mpdf;
use MyApp\Core\BaseController;
use MyApp\Core\Message;
use MyApp\Helpers\DocNumber;
use MyApp\Helpers\Terbilang;
use MyApp\Models\BarangModel;
use MyApp\Models\SupplierModel;

class Pembelian extends BaseController
{

  private $pembelianModel;

  public function __construct()
  {
    $this->pembelianModel = $this->model('MyApp\Models\PembelianModel');
  }

  public function index()
  {
    $getAll = $this->pembelianModel->getAll();
    $data = [
      'judul' => 'Barang Kategori',
      'pembelian' => $getAll
    ];
    $this->view('template/header', $data);
    $this->view('pembelian/index', $data);
    $this->view('template/footer');
  }

  public function insert()
  {
    // $docNo = new DocNumber();
    // $doc = $docNo->getData('PO');
    $doc = "PO-xxxxxx-xxxx";
    $supplierMode = new SupplierModel();
    $supplier = $supplierMode->getAll();
    $data = [
      'judul' => 'Tambah Pembelian',
      'documentNumber' => $doc,
      'supplier' => $supplier
    ];
    $this->view('template/header', $data);
    $this->view('pembelian/insert', $data);
    $this->view('template/footer');

  }

  public function add_barang()
  {
    $field = [
      'nama_pembelian' => 'string | required',
      'tanggal' => 'string | required',
      'supplier' => 'int | required',
      'keterangan' => 'string'
    ];
    $message = [
      'nama_pembelian' => 'Nama Pembelian Tidak Boleh Kosong',
      'tanggal' => 'Tanggal Pembelian Tidak Boleh Kosong',
      'supplier' => 'Supplier harus dipilih',
    ];
    [$inputs, $errors] = $this->filter($_POST, $field, $message);

    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('pembelian/insert');
    }

    if (isset($_SESSION['pembelian']['detail'])) {
      $detail = $_SESSION['pembelian']['detail'];
    } else {
      $detail = [];
    }

    // simpan data kedalam session
    $_SESSION['pembelian'] = [
      'nama_pembelian' => $inputs['nama_pembelian'],
      'tanggal' => $inputs['tanggal'],
      'supplier' => $inputs['supplier'],
      'keterangan' => $inputs['keterangan'],
      'detail' => $detail
    ];
    $barangModel = new BarangModel();
    $data = [
      'judul' => 'Tambah Pembelian',
      'barangs' => $barangModel->getAll()
    ];
    $this->view('template/header', $data);
    $this->view('pembelian/insertdata', $data);
    $this->view('template/footer');
  }

  public function add_data()
  {
    $barangModel = new BarangModel();
    $data = [
      'judul' => 'Tambah Pembelian',
      'barangs' => $barangModel->getAll()
    ];
    $this->view('template/header', $data);
    $this->view('pembelian/insertdata', $data);
    $this->view('template/footer');
  }

  public function add_item()
  {
    $field = [
      'barang' => 'string | required',
      'jumlah' => 'int | required'
    ];
    $message = [
      'barang' => 'Barang harus dipilih',
      'jumlah' => 'Jumlah harus diisi'
    ];
    [$inputs, $errors] = $this->filter($_POST, $field, $message);
    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('/pembelian/add-barang');
    }
    $barangModel = new BarangModel();
    $barang = $barangModel->getById($inputs['barang']);
    array_push($_SESSION['pembelian']['detail'], [
      'id_barang' => $barang['id_barang'],
      'nama_barang' => $barang['nama_barang'],
      'harga_satuan' => $barang['harga_jual'],
      'jumlah' => $inputs['jumlah'],
      'harga' => ($barang['harga_jual'] * $inputs['jumlah'])
    ]);
    $this->redirect('pembelian/insert');
  }

  public function edit_barang($id)
  {
    $data = $_SESSION['pembelian']['detail'][$id];
    $barangModel = new BarangModel();
    $data = [
      'judul' => 'Tambah Pembelian',
      'barangs' => $barangModel->getAll(),
      'brg' => $data,
      'id' => $id
    ];
    $this->view('template/header', $data);
    $this->view('pembelian/editdata', $data);
    $this->view('template/footer');
  }

  public function edit_data($id)
  {
    $field = [
      'barang' => 'string | required',
      'jumlah' => 'int | required'
    ];
    $message = [
      'barang' => 'Barang harus dipilih',
      'jumlah' => 'Jumlah harus diisi'
    ];
    [$inputs, $errors] = $this->filter($_POST, $field, $message);
    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('/pembelian/edit-barang/' . $id);
    }
    $barangModel = new BarangModel();
    $barang = $barangModel->getById($inputs['barang']);
    $_SESSION['pembelian']['detail'][$id] = [
      'id_barang' => $barang['id_barang'],
      'nama_barang' => $barang['nama_barang'],
      'harga_satuan' => $barang['harga_jual'],
      'jumlah' => $inputs['jumlah'],
      'harga' => ($barang['harga_jual'] * $inputs['jumlah'])
    ];
    $this->redirect('pembelian/insert');
  }

  public function delete_barang($id)
  {
    unset($_SESSION['pembelian']['detail'][$id]);
    $this->redirect('pembelian/insert');
  }

  public function delete()
  {
    unset($_SESSION['pembelian']);
    $this->redirect('pembelian/insert');
  }

  public function save()
  {
    $field = [
      'nama_pembelian' => 'string | required',
      'tanggal' => 'string | required',
      'supplier' => 'int | required',
      'keterangan' => 'string'
    ];
    $message = [
      'nama_pembelian' => 'Nama Pembelian Tidak Boleh Kosong',
      'tanggal' => 'Tanggal Pembelian Tidak Boleh Kosong',
      'supplier' => 'Supplier harus dipilih',
    ];
    [$inputs, $errors] = $this->filter($_POST, $field, $message);
    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect('pembelian/insert');
    }

    if (!isset($_SESSION['pembelian']['detail'])) {
      Message::setFlash('error', 'Gagal !', "Detail barang belum diisi");
      $this->redirect('pembelian/insert');
    }

    $hasil = $this->pembelianModel->insert($_SESSION['pembelian']);
    if ($hasil) {
      Message::setFlash('success', 'Berhasil !', "Data berhasil disimpan");
      unset($_SESSION['pembelian']);
      $this->redirect('pembelian');
    } else {
      Message::setFlash('error', 'Gagal !', "Data gagal disimpan");
      $this->redirect('pembelian/insert');
    }
  }

  public function printPembelian($id)
  {
    $mpdf = new Mpdf();
    $pembelian = $this->pembelianModel->getById($id);
    $pembeliandtl = $this->pembelianModel->getPembelianDtl($id);
    $terbilang = new Terbilang();
    $output = $terbilang->getterbilang((0.11 * $pembelian['total']) + $pembelian['total']);
    $data = [
      'pembelian' => $pembelian,
      'pembeliandtl' => $pembeliandtl,
      'terbilang' => $output
    ];
    $html = $this->view('pembelian/print', $data, true);
    $mpdf->WriteHTML($html);
    $mpdf->Output('FakrurPembelian.pdf', "I");
  }

}