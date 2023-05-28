<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
  <div>
    <label for="agree">
      <input type="checkbox" name="agree" id="agree" value="yes">
      I agree to the <a href="#" title="Terms of Service">Terms of Service</a>
    </label>
    <small class="error">
      <?php echo $errors['agree'] ?? ''; ?>
    </small>
  </div>
  <div>
    <button type="submit">Join Us</button>
  </div>
</form>