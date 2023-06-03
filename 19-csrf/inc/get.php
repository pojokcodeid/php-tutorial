<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
  <header>
    <h1>Transfer</h1>
  </header>
  <div>
    <label for="amount">Amount (Rp 100 - Rp 1000,000)</label>
    <input type="number" name="amount" id="amount" value="<?= $inputs['amount'] ?? '' ?>">
    <small>
      <?= $errors['amount'] ?? '' ?>
    </small>
  </div>
  <div>
    <label for="recipient_account">Akun Tujuan :</label>
    <input type="text" name="recipient_account" id="recipient_account"
      value="<?= $inputs['recipient_account'] ?? '' ?>">
    <small>
      <?= $errors['recipient_account'] ?? '' ?>
    </small>
  </div>
  <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
  <button type="submit">Transfer</button>
</form>