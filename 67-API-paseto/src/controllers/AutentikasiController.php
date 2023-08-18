<?php
namespace MyApp\Controllers;

use DateInterval;
use DateTime;
use DateTimeZone;
use Firebase\JWT\JWT;
use MyApp\Core\BaseController;
use ParagonIE\Paseto\Builder;
use ParagonIE\Paseto\Keys\Version4\SymmetricKey;

class AutentikasiController extends BaseController
{

  private $authModel;
  private const MESSAGE = [
    'email' => [
      'required' => 'Email harus diisi',
      'email' => 'Email tidak valid'
    ],
    'password' => [
      'required' => 'Password harus diisi',
      'secure' => 'Password minimal 8 karakter, kombinasi huruf besar, huruf kecil dan karakter khusus!'
    ]
  ];

  public function __construct()
  {
    $this->authModel = $this->model('MyApp\Models\AutentikasiModel');
  }

  public function register()
  {
    $dataUser = json_decode(file_get_contents("php://input"), true);
    if (!$dataUser) {
      $data = [
        'status' => '400',
        'error' => '400',
        'message' => 'Bad Request',
        'data' => null
      ];
      $this->view('template/header');
      header('HTTP/1.1 400 Bad Request');
      echo json_encode($data);
      exit();
    }
    $field = [
      'email' => 'string | required | email | unique: autentikasi, email',
      'password' => 'string | required | secure',
    ];
    [$inputs, $errors] = $this->filter($dataUser, $field, self::MESSAGE);
    if ($errors) {
      $data = [
        'status' => '400',
        'error' => '400',
        'message' => $errors,
        'data' => $inputs
      ];
      $this->view('template/header');
      header('HTTP/1.1 400 Bad Request');
      echo json_encode($data);
      exit();
    } else {
      $proc = $this->authModel->insert($inputs);
      if ($proc->rowCount() > 0) {
        $data = [
          'status' => '201',
          'error' => '201',
          'message' => "Data ditambahkan " . $proc->rowCount() . " baris",
          'data' => $inputs
        ];
        $this->view('template/header');
        header('HTTP/1.1 200 OK');
        echo json_encode($data);
        exit();
      } else {
        $data = [
          'status' => '400',
          'error' => '400',
          'message' => "Data gagal ditambahkan",
          'data' => null
        ];
        $this->view('template/header');
        header('HTTP/1.1 400 Bad Request');
        echo json_encode($data);
        exit();
      }
    }
  }

  public function login()
  {
    $data = json_decode(file_get_contents("php://input"), true);
    if (!$data) {
      $data = [
        'status' => '400',
        'error' => '400',
        'message' => 'Bad Request',
        'data' => null
      ];
      $this->view('template/header');
      header('HTTP/1.1 400 Bad Request');
      echo json_encode($data);
      exit();
    }
    $field = [
      'email' => 'string | required | email',
      'password' => 'string | required'
    ];
    [$inputs, $errors] = $this->filter($data, $field, self::MESSAGE);
    if ($errors) {
      $data = [
        'status' => '400',
        'error' => '400',
        'message' => $errors,
        'data' => $inputs
      ];
      $this->view('template/header');
      header('HTTP/1.1 400 Bad Request');
      echo json_encode($data);
      exit();
    } else {
      $proc = $this->authModel->getByEmail($inputs['email']);
      if ($proc) {
        if (password_verify($inputs['password'], $proc['password'])) {
          $iat = time();
          $expire_time = $iat + getenv('JWT_TIME_TO_LIVE');
          // set expire time 
          // $timestamp = (new DateTime())->add(new DateInterval('PT1H'));
          $timestamp = (new DateTime());
          $timestamp->setTimezone(new DateTimeZone('Asia/Jakarta'));
          $timestamp->setTimestamp($expire_time);
          $payload = [
            'email' => $inputs['email'],
            'iat' => $iat,
            'exp' => $timestamp->format(DateTime::ISO8601)
          ];
          // $acess_token = JWT::encode($payload, getenv('JWT_SECRET_KEY'), 'HS256');
          // generate random key
          // **** untuk generate screret key gunakan script di bawah ini ****
          // $sharedKey = new SymmetricKey(random_bytes(32));
          // $data = $sharedKey->encode();
          // var_dump($data);

          $sharedKey = SymmetricKey::fromEncodedString(getenv('JWT_SECRET_KEY'));
          // Membuat token Paseto versi 4 local dengan data
          $builder = Builder::getLocal($sharedKey)
            ->setExpiration(
              // Set it to expire in one day
              // (new DateTime())->add(new DateInterval('PT1H'))
              $timestamp
            )
            ->setClaims($payload);

          $acess_token = $builder->toString();
          // update key_token di database
          // $this->authModel->setKey($dataKey, $inputs['email']);
          $data = [
            'status' => '200',
            'error' => '200',
            'message' => "Login berhasil",
            'data' => [
              'accessToken' => $acess_token,
              // 'expiry' => date(DATE_ISO8601, $timestamp)
              'expiry' => $timestamp->format(DateTime::ISO8601)
            ]
          ];
          $this->view('template/header');
          header('HTTP/1.1 200 OK');
          echo json_encode($data);
          exit();
        } else {
          $data = [
            'status' => '400',
            'error' => '400',
            'message' => "Password anda salah !",
            'data' => $inputs
          ];
          $this->view('template/header');
          header('HTTP/1.1 400 Bad Request');
          echo json_encode($data);
          exit();
        }
      } else {
        $data = [
          'status' => '400',
          'error' => '400',
          'message' => "Login gagal",
          'data' => null
        ];
        $this->view('template/header');
        header('HTTP/1.1 400 Bad Request');
        echo json_encode($data);
        exit();
      }
    }
  }

}