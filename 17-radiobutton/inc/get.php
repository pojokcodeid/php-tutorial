<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
  <div>Silahkan memilih metode untuk menghubungi anda :</div>
  <?php foreach ($contacts as $key => $value): ?>
    <div>
      <input type="radio" name="contact" value="<?php echo $key ?>" id="contact_<?php echo $key ?>">
      <label for="contact_<?php echo $key ?>"><?php echo $value ?></label>
    </div>
  <?php endforeach ?>
  <div>
    <small class="error">
      <?php echo $errors['contact'] ?? '' ?>
    </small>
  </div>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>