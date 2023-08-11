<?php
namespace MyApp\Controllers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use MyApp\Core\BaseController;
use MyApp\Models\AutentikasiModel;

class BarangController extends BaseController
{

  private $barangModel;
  public function __construct()
  {
    $this->barangModel = $this->model('MyApp\Models\BarangModel');
  }

  private function getToken()
  {
    $headers = getallheaders();
    if (!isset($headers['Authorization']) || $headers['Authorization'] == "") {
      http_response_code(401);
      $data = [
        'status' => '401',
        'error' => '401',
        'message' => 'Access tidak di berikan',
        'data' => null
      ];
      $this->view('template/header');
      header('HTTP/1.0 401 Unauthorized');
      echo json_encode($data);
      exit();
    }
    // Mengambil token
    list(, $token) = explode(' ', $headers['Authorization']);
    try {
      // Men-decode token. Dalam library ini juga sudah sekaligus memverfikasinya
      $decodedToken = JWT::decode($token, new Key(getenv('JWT_SECRET_KEY'), 'HS256'));
      $authModel = new AutentikasiModel();
      $data = $authModel->getByEmail($decodedToken->email);
      return $data;
    } catch (\Exception $e) {
      $data = [
        'status' => '401',
        'error' => '401',
        'message' => 'Token tidak valid',
        'data' => null
      ];
      $this->view('template/header');
      header('HTTP/1.0 401 Unauthorized');
      echo json_encode($data);
      return null;
    }
  }

  public function index($id = null)
  {
    if ($this->getToken()) {
      if ($id == null) {
        try {
          $data = $this->barangModel->getAll();
        } catch (\Exception $e) {
          $data = [
            'status' => '500',
            'error' => '500',
            'message' => 'Internal Server Error',
            'data' => null
          ];
          $this->view('template/header');
          header('HTTP/1.0 500 Internal Server Error');
          echo json_encode($data);
          exit();
        }
      } else {
        try {
          $data = $this->barangModel->getById($id);
        } catch (\Exception $e) {
          $data = [
            'status' => '500',
            'error' => '500',
            'message' => 'Internal Server Error',
            'data' => null
          ];
          $this->view('template/header');
          header('HTTP/1.0 500 Internal Server Error');
          echo json_encode($data);
          exit();
        }
      }
      if ($data) {
        $data = [
          'status' => '200',
          'error' => null,
          'message' => 'Data ditemukan',
          'data' => $data
        ];
        $this->view('template/header');
        header('HTTP/1.0 200 OK');
        echo json_encode($data);
      } else {
        $data = [
          'status' => '404',
          'error' => '404',
          'message' => 'Data tidak ditemukan',
          'data' => null
        ];
        $this->view('template/header');
        header('HTTP/1.0 404 Not Found');
        echo json_encode($data);
      }
    }
  }

  public function insert()
  {
    if ($this->getToken()) {
      $data = json_decode(file_get_contents('php://input'), true);
      $fields = [
        'nama_barang' => 'string | required',
        'jumlah' => 'int | required',
        'harga_satuan' => 'float | required',
        'kadaluarsa' => 'string'
      ];
      $message = [
        'nama_barang' => [
          'required' => 'Nama Barang harus diisi!',
          'alphanumeric' => 'Masukan huruf dan angka',
          'between' => 'Nama Barang harus diantara 3 dan 25 karakter',
        ],
        'jumlah' => [
          'required' => 'Jumlah harus diisi!',
        ],
        'harga_satuan' => [
          'required' => 'Harga Satuan harus diisi!',
        ]
      ];
      [$inputs, $errors] = $this->filter($data, $fields, $message);

      if ($inputs['kadaluarsa'] == "") {
        $inputs['kadaluarsa'] = "0000-00-00";
      }

      if ($errors) {
        $data = [
          'status' => '400',
          'error' => '400',
          'message' => $errors,
          'data' => $inputs
        ];
        $this->view('template/header');
        header('HTTP/1.0 400 Bad Request');
        echo json_encode($data);
        exit();
      } else {
        $proc = $this->barangModel->insert($inputs);
        if ($proc->rowCount() > 0) {
          $data = [
            'status' => '201',
            'error' => null,
            'message' => "Data ditambahkan " . $proc->rowCount() . " baris",
            'data' => $inputs
          ];
          $this->view('template/header');
          header('HTTP/1.0 201 OK');
          echo json_encode($data);
        } else {
          $data = [
            'status' => '400',
            'error' => '400',
            'message' => 'Data gagal ditambahkan',
            'data' => null
          ];
          $this->view('template/header');
          header('HTTP/1.0 400 Bad Request');
          echo json_encode($data);
        }
      }
    }
  }

  public function edit($id = null)
  {
    if ($this->getToken()) {
      $data = json_decode(file_get_contents('php://input'), true);
      $fields = [
        'nama_barang' => 'string | required',
        'jumlah' => 'int | required',
        'harga_satuan' => 'float | required',
        'kadaluarsa' => 'string'
      ];
      $message = [
        'nama_barang' => [
          'required' => 'Nama Barang harus diisi!',
          'alphanumeric' => 'Masukan huruf dan angka',
          'between' => 'Nama Barang harus diantara 3 dan 25 karakter',
        ],
        'jumlah' => [
          'required' => 'Jumlah harus diisi!',
        ],
        'harga_satuan' => [
          'required' => 'Harga Satuan harus diisi!',
        ]
      ];
      [$inputs, $errors] = $this->filter($data, $fields, $message);

      if ($inputs['kadaluarsa'] == "") {
        $inputs['kadaluarsa'] = "0000-00-00";
      }
      $inputs['id'] = $id;

      if ($errors) {
        $data = [
          'status' => '400',
          'error' => '400',
          'message' => $errors,
          'data' => $inputs
        ];
        $this->view('template/header');
        header('HTTP/1.0 400 Bad Request');
        echo json_encode($data);
        exit();
      } else {
        $proc = $this->barangModel->update($inputs);
        if ($proc->rowCount() > 0) {
          $data = [
            'status' => '201',
            'error' => null,
            'message' => "Data diperbarui " . $proc->rowCount() . " baris",
            'data' => $inputs
          ];
          $this->view('template/header');
          header('HTTP/1.0 201 OK');
          echo json_encode($data);
          exit();
        } else {
          $data = [
            'status' => '400',
            'error' => '400',
            'message' => 'Data gagal diperbarui',
            'data' => null
          ];
          $this->view('template/header');
          header('HTTP/1.0 400 Bad Request');
          echo json_encode($data);
          exit();
        }
      }
    }
  }

  public function delete($id = null)
  {
    if ($this->getToken()) {
      if ($id == null) {
        $data = [
          'status' => '404',
          'error' => '404',
          'message' => 'Data tidak ditemukan',
          'data' => null
        ];
        $this->view('template/header');
        header('HTTP/1.0 404 Not Found');
        echo json_encode($data);
        exit();
      } else {
        $proc = $this->barangModel->delete($id);
        if ($proc->rowCount() > 0) {
          $data = [
            'status' => '200',
            'error' => null,
            'message' => 'Data berhasil dihapus',
            'data' => [
              'barang_id' => $id
            ]
          ];
          $this->view('template/header');
          header('HTTP/1.0 200 OK');
          echo json_encode($data);
          exit();
        } else {
          $data = [
            'status' => '404',
            'error' => '404',
            'message' => 'Data tidak ditemukan',
            'data' => [
              'barang_id' => $id
            ]
          ];
          $this->view('template/header');
          header('HTTP/1.0 404 Not Found');
          echo json_encode($data);
          exit();
        }
      }
    }
  }
}