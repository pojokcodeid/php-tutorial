<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <header>
    <h1>Dapatkan Update</h1>
    <p>Silahkan isi form berikut</p>
  </header>
  <div>
    <label for="name">Name :</label>
    <input type="text" name="name" id="name" placeholder="Full Name" value="<?php echo $inputs['name'] ?? ''; ?>">
    <small>
      <?php echo $errors['name'] ?? ''; ?>
    </small>
  </div>
  <div>
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" placeholder="Masukan Email"
      value="<?php echo $inputs['email'] ?? ''; ?>">
    <small>
      <?php echo $errors['email'] ?? ''; ?>
    </small>
  </div>
  <button type="submit">Subscribe</button>
</form>