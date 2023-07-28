<?php


class Barang extends BaseController
{

  private $barang;

  public function __construct()
  {
    $this->barang = $this->model('BarangModel');
  }

  public function index()
  {
    $allBarang = $this->barang->getAll();
    $data = [
      'judul' => 'Home',
      'allBarang' => $allBarang
    ];
    $this->view('template/header', $data);
    $this->view('barang/index', $data);
    $this->view('template/footer');
  }

  public function insert()
  {
    $data = [
      'judul' => 'Insert Barang'
    ];
    $this->view('template/header', $data);
    $this->view('barang/insert', $data);
    $this->view('template/footer');
  }

  public function edit($id)
  {
    $data = [
      'judul' => 'Edit Barang',
      'data' => $this->barang->getById($id)
    ];
    $this->view('template/header', $data);
    $this->view('barang/edit', $data);
    $this->view('template/footer');
  }

  public function insert_barang()
  {
    $fields = [
      // 'nama_barang' => 'string | required | alphanumeric | between: 3, 25',  -> ini untk contoh between
      'nama_barang' => 'string | required | alphanumeric',
      'jumlah' => 'int | required',
      'harga_satuan' => 'float | required',
      'kadaluarsa' => 'string'
    ];

    $messages = [
      'nama_barang' => [
        'required' => 'Nama barang harus diisi',
        'alphanumeric' => 'Masukan Huruf dan angka saja',
      ],
      'jumlah' => [
        'required' => 'Jumlah barang harus diisi',
      ],
      'harga_satuan' => [
        'required' => 'Harga barang harus diisi',
      ]
    ];
    [$inputs, $errors] = $this->filter($_POST, $fields, $messages);
    if ($inputs['kadaluarsa'] == "") {
      $inputs['kadaluarsa'] = "0000-00-00";
    }

    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect(BASEURL . '/barang/insert');
    }

    $proc = $this->barang->insert($inputs);
    if ($proc) {
      Message::setFlash('success', 'Berhasil !', 'Data Berhasil Disimpan');
      $this->redirect(BASEURL . '/barang');
    }
  }

  public function edit_barang2()
  {
    $fields = [
      'nama_barang' => 'string | required | alphanumeric',
      'jumlah' => 'int | required',
      'harga_satuan' => 'float | required',
      'kadaluarsa' => 'string',
      'mode' => 'string',
      'id' => 'int'
    ];

    $messages = [
      'nama_barang' => [
        'required' => 'Nama barang harus diisi',
        'alphanumeric' => 'Masukan Huruf dan angka saja',
      ],
      'jumlah' => [
        'required' => 'Jumlah barang harus diisi',
      ],
      'harga_satuan' => [
        'required' => 'Harga barang harus diisi',
      ]
    ];
    [$inputs, $errors] = $this->filter($_POST, $fields, $messages);
    if ($inputs['kadaluarsa'] == "") {
      $inputs['kadaluarsa'] = "0000-00-00";
    }

    if ($errors) {
      Message::setFlash('error', 'Gagal !', $errors[0], $inputs);
      $this->redirect(BASEURL . '/barang/edit/' . $inputs['id']);
    }

    if ($inputs['mode'] == "update") {
      $updated = $this->barang->update($inputs);
      if ($updated) {
        Message::setFlash('success', 'Berhasil !', 'Data Berhasil Diubah');
        $this->redirect(BASEURL . '/barang');
      }
    } else if ($inputs['mode'] == "delete") {
      $deleted = $this->barang->delete($inputs['id']);
      if ($deleted) {
        Message::setFlash('success', 'Berhasil !', 'Data Berhasil Dihapus');
        $this->redirect(BASEURL . '/barang');
      }
    }

  }
}