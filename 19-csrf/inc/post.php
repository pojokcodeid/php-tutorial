<?php

$token = isset($_POST['token']) ? $_POST['token'] : '';
$token = strip_tags($token);
$token = trim(preg_replace('/[^A-Za-z0-9]/', '', $token));

if (!$token || $token !== $_SESSION['token']) {
  echo '<p class="error">Error : Form tidak valid</p>';
  header($_SERVER['SERVER_PROTOCOL'] . ' 405 Metode tidak diizinkan');
  exit;
}

//valid amount
$amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_INT);
$inputs['amount'] = $amount;

if ($amount) {
  $amount = filter_var(
    $amount,
    FILTER_VALIDATE_INT,
    ['options' => ['min_range' => 100, 'max_range' => 1000000]]
  );
  if (!$amount) {
    $errors['amount'] = 'Jumlah tidak valid';
  }
} else {
  $errors['amount'] = 'Masukan nilai transfer';
}

//valid account
$recipient_account = filter_input(
  INPUT_POST,
  'recipient_account',
  FILTER_SANITIZE_NUMBER_INT
);
$inputs['recipient_account'] = $recipient_account;

if ($recipient_account) {
  $recipient_account = filter_var(
    $recipient_account,
    FILTER_VALIDATE_INT
  );
  if (!$recipient_account) {
    $errors['recipient_account'] = 'Akun tidak valid';
  }
} else {
  $errors['recipient_account'] = 'Masukan akun tujuan';
}
?>

<?php if (!$errors): ?>
  <section>
    <div class="circle">
      <div class="check"></div>
    </div>
    <h1 class="message">Transfer anda berhasil</h1>
    <h2 class="amount">Rp
      <?= $amount ?>
    </h2>

    <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="btn">Kembali</a>
  </section>
<?php endif ?>