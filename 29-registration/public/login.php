<?php

require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/login.php';
?>

<?php view('header', ['title' => 'Login']) ?>

<?php if (isset($errors['login'])): ?>
  <div class="alert alert-error">
    <?= $errors['login'] ?>
  </div>
<?php endif ?>

<form action="login.php" method="post">
  <h1>Login</h1>
  <div>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>">
    <small>
      <?= $errors['username'] ?? '' ?>
    </small>
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <small>
      <?= $errors['password'] ?? '' ?>
    </small>
  </div>
  <section>
    <button type="submit">Login</button>
    <a href="register.php">Register</a>
  </section>
</form>

<?php view('footer') ?>