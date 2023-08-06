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
    if ($allBarang) {
      $data = [
        'status' => 'ok',
        'data' => $allBarang
      ];
      $this->view('template/header');
      header('HTTP/1.1 200 OK');
      echo json_encode($data);
    } else {
      $data = [
        'status' => 'Error',
        'message' => 'Data tidak ditemukan'
      ];
      $this->view('template/header');
      header('HTTP/1.1 404 Not Found');
      echo json_encode($data);
    }
  }

  public function getById($id)
  {
    $data = $this->barang->getById($id);
    if ($data) {
      $data = [
        'status' => 'ok',
        'data' => $data
      ];
      $this->view('template/header');
      header('HTTP/1.1 200 OK');
      echo json_encode($data);
    } else {
      $data = [
        'status' => 'Error',
        'message' => 'Data tidak ditemukan'
      ];
      $this->view('template/header');
      header('HTTP/1.1 404 Not Found');
      echo json_encode($data);
    }
  }

  public function edit($id = null)
  {
    $data = json_decode(file_get_contents("php://input"), true);
    $fields = [
      'nama_barang' => 'string | required',
      'jumlah' => 'int | required',
      'harga_satuan' => 'float | required',
      'kadaluarsa' => 'string',
      'id' => 'int | required'
    ];

    $messages = [
      'nama_barang' => [
        'required' => 'Nama barang harus diisi',
      ],
      'jumlah' => [
        'required' => 'Jumlah barang harus diisi',
      ],
      'harga_satuan' => [
        'required' => 'Harga barang harus diisi',
      ]
    ];
    [$inputs, $errors] = $this->filter($data, $fields, $messages);
    if (isset($inputs['kadaluarsa']) && $inputs['kadaluarsa'] == "") {
      $inputs['kadaluarsa'] = "0000-00-00";
    }

    if ($errors) {
      $data = [
        'status' => 'Error',
        'message' => 'Data tidak valid',
        'errors' => $errors,
        'data' => $inputs
      ];
      $this->view('template/header');
      header('HTTP/1.1 422 Unprocessable Entity');
      echo json_encode($data);
    } else {
      $proc = $this->barang->update($inputs);
      if ($proc->rowCount() > 0) {
        $data = [
          'status' => 'ok',
          'message' => "Data diubah " . $proc->rowCount() . " baris",
          'data' => $inputs
        ];
        $this->view('template/header');
        header('HTTP/1.1 201 OK');
        echo json_encode($data);
      } else {
        $data = [
          'status' => 'Error',
          'message' => 'Data gagal di ubah',
          'errors' => "Data diubah " . $proc->rowCount() . " baris"
        ];
        $this->view('template/header');
        header('HTTP/1.1 422 Unprocessable Entity');
        echo json_encode($data);
      }
    }
  }

  public function insert()
  {
    $data = json_decode(file_get_contents("php://input"), true);
    $fields = [
      'nama_barang' => 'string | required',
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
    [$inputs, $errors] = $this->filter($data, $fields, $messages);
    if ($inputs['kadaluarsa'] == "") {
      $inputs['kadaluarsa'] = "0000-00-00";
    }

    if ($errors) {
      $data = [
        'status' => 'Error',
        'message' => 'Data tidak valid',
        'errors' => $errors,
        'data' => $inputs
      ];
      $this->view('template/header');
      header('HTTP/1.1 422 Unprocessable Entity');
      echo json_encode($data);
    } else {
      $proc = $this->barang->insert($inputs);
      if ($proc->rowCount() > 0) {
        $data = [
          'status' => 'ok',
          'message' => "Data ditambahkan " . $proc->rowCount() . " baris",
          'data' => $inputs
        ];
        $this->view('template/header');
        header('HTTP/1.1 201 OK');
        echo json_encode($data);
      } else {
        $data = [
          'status' => 'Error',
          'message' => 'Data gagal di tambahkan',
          'errors' => "Data ditambahkan " . $proc->rowCount() . " baris"
        ];
        $this->view('template/header');
        header('HTTP/1.1 422 Unprocessable Entity');
        echo json_encode($data);
      }
    }

  }

  public function delete($id = null)
  {
    if ($id == null) {
      $data = [
        'status' => 'Error',
        'message' => 'Id tidak ditemukan'
      ];
      $this->view('template/header');
      header('HTTP/1.1 404 Not Found');
      echo json_encode($data);
    } else {
      $proc = $this->barang->delete($id);
      if ($proc->rowCount() > 0) {
        $data = [
          'status' => 'ok',
          'message' => "Data dihapus " . $proc->rowCount() . " baris",
          'data' => $id
        ];
        $this->view('template/header');
        header('HTTP/1.1 200 OK');
        echo json_encode($data);
      } else {
        $data = [
          'status' => 'Error',
          'message' => 'Data gagal di hapus',
          'errors' => "Data dihapus " . $proc->rowCount() . " baris"
        ];
        $this->view('template/header');
        header('HTTP/1.1 422 Unprocessable Entity');
        echo json_encode($data);
      }
    }

  }
}