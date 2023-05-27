<?php

const NAME_REQUERED = 'Nama harus diisi';
const EMAIL_REQUERED = 'Periksa kembali email anda';
const EMAIL_INVALID = 'Email tidak valid';

// berikan validasi nama
// jika kosong tambahkan ke error
// $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$name = isset($_POST['name']) ? $_POST['name'] : '';

//replace all tag html
$name = strip_tags($name);
// izinkan hanya huruf dan angka
$name = trim(preg_replace('/[^A-Za-z0-9 ]/', '', $name));
$inputs['name'] = $name;

if ($name) {
  $name = trim($name);
  if ($name === "") {
    $errors['name'] = NAME_REQUERED;
  }
} else {
  $errors['name'] = NAME_REQUERED;
}

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$inputs['email'] = $email;

if ($email) {
  //lakukan validasi email
  $email = filter_var($email, FILTER_VALIDATE_EMAIL);
  if ($email === false) {
    $errors['email'] = EMAIL_INVALID;
  }
} else {
  $errors['email'] = EMAIL_REQUERED;
}

if (count($errors) === 0):

  ?>

  <section>
    <h2>
      Terimakasih
      <?php echo htmlspecialchars($name) ?> atas subscribenya !
    </h2>
    <ol>
      <li>Periksa kembali email anda (
        <?php echo htmlspecialchars($email) ?>)
      </li>
      <li>Klik link pada email untuk konfirmasi ...</li>
    </ol>
  </section>

<?php endif ?>