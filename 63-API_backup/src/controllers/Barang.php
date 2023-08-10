<?php


class Barang extends BaseController
{

  private $barang;

  public function __construct()
  {
    $this->barang = $this->model('BarangModel');
  }

  public function index($id = null)
  {
    if ($id == null) {
      $data = $this->barang->getAll();
    } else {
      $data = $this->barang->getById($id);
    }
    if ($data) {
      $data = [
        'status' => '200',
        'error' => null,
        'message' => 'Data ditemukan',
        'data' => $data
      ];
      $this->view('template/header');
      header('HTTP/1.1 200 OK');
      echo json_encode($data);
    } else {
      $data = [
        'status' => '404',
        'error' => '404',
        'message' => 'Data tidak ditemukan',
        'data' => null
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
    $inputs['id'] = $id;

    if ($errors) {
      $data = [
        'status' => '400',
        'error' => 'Data tidak valid',
        'message' => $errors,
        'data' => $inputs
      ];
      $this->view('template/header');
      header('HTTP/1.1 400 Bad Request');
      echo json_encode($data);
    } else {
      $proc = $this->barang->update($inputs);
      if ($proc->rowCount() > 0) {
        $data = [
          'status' => '200',
          'error' => null,
          'message' => "Data diubah " . $proc->rowCount() . " baris",
          'data' => $inputs
        ];
        $this->view('template/header');
        header('HTTP/1.1 200 OK');
        echo json_encode($data);
      } else {
        $data = [
          'status' => '400',
          'error' => '400',
          'message' => 'Data gagal di ubah',
          'data' => null
        ];
        $this->view('template/header');
        header('HTTP/1.1 400 Bad Request');
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
        'status' => '400',
        'errors' => '400',
        'message' => $errors,
        'data' => $inputs
      ];
      $this->view('template/header');
      header('HTTP/1.1 400 Bad Request');
      echo json_encode($data);
    } else {
      $proc = $this->barang->insert($inputs);
      if ($proc->rowCount() > 0) {
        $data = [
          'status' => '201',
          'errors' => null,
          'message' => "Data ditambahkan " . $proc->rowCount() . " baris",
          'data' => $inputs
        ];
        $this->view('template/header');
        header('HTTP/1.1 201 OK');
        echo json_encode($data);
      } else {
        $data = [
          'status' => '400',
          'errors' => '400',
          'message' => 'Data gagal di tambahkan',
        ];
        $this->view('template/header');
        header('HTTP/1.1 400 Bad Request');
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
          'status' => '201',
          'error' => '201',
          'message' => "Data dihapus " . $proc->rowCount() . " baris",
          'data' => $id
        ];
        $this->view('template/header');
        header('HTTP/1.1 201 OK');
        echo json_encode($data);
      } else {
        $data = [
          'status' => '422',
          'error' => '422',
          'message' => "Data dihapus " . $proc->rowCount() . " baris"
        ];
        $this->view('template/header');
        header('HTTP/1.1 422 Unprocessable Entity');
        echo json_encode($data);
      }
    }

  }
}