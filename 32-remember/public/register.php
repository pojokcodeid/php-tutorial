<?php
require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/register.php';
?>

<?php view('header', ['title' => 'Register']) ?>

<form action="register.php" method="post">
  <h1>Sign Up</h1>

  <div>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>"
      class="<?= error_class($errors, 'username') ?>">
    <small>
      <?= $errors['username'] ?? '' ?>
    </small>
  </div>

  <div>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>"
      class="<?= error_class($errors, 'email') ?>">
    <small>
      <?= $errors['email'] ?? '' ?>
    </small>
  </div>

  <div>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" value="<?= $inputs['password'] ?? '' ?>"
      class="<?= error_class($errors, 'password') ?>">
    <small>
      <?= $errors['password'] ?? '' ?>
    </small>
  </div>

  <div>
    <label for="password2">Password Again:</label>
    <input type="password" name="password2" id="password2" value="<?= $inputs['password2'] ?? '' ?>"
      class="<?= error_class($errors, 'password2') ?>">
    <small>
      <?= $errors['password2'] ?? '' ?>
    </small>
  </div>

  <div>
    <label for="agree">
      <input type="checkbox" name="agree" id="agree" value="checked" <?= $inputs['agree'] ?? '' ?> /> I
      agree
      with the
      <a href="#" title="term of services">term of services</a>
    </label>
    <small>
      <?= $errors['agree'] ?? '' ?>
    </small>
  </div>

  <button type="submit">Register</button>

  <footer>Already a member? <a href="login.php">Login here</a></footer>

</form>

<?php view('footer') ?>