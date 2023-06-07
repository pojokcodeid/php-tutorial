<?php
if (isset($message)) {
  echo $message;
}
?>
<form action="index.php" method="post">
  <header>
    <h1>Kirimkan kami pesan</h1>
  </header>
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?= $inputs['name'] ?? '' ?>" placeholder="Full Name">
    <small>
      <?= $errors['name'] ?? '' ?>
    </small>
  </div>
  <div>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>" placeholder="Email">
    <small>
      <?= $errors['email'] ?? '' ?>
    </small>
  </div>
  <div>
    <label for="subject">Subject:</label>
    <input type="subject" name="subject" id="subject" value="<?= $inputs['subject'] ?? '' ?>" placeholder="Subject">
    <small>
      <?= $errors['subject'] ?? '' ?>
    </small>
  </div>
  <div>
    <label for="message">Message</label>
    <textarea name="message" id="message" cols="30" rows="5"><?= $inputs['message'] ?? '' ?></textarea>
    <small>
      <?= $errors['message'] ?? '' ?>
    </small>
  </div>
  <label for="nickname" aria-hidden="true" class="user-cannot-see">Nickname
    <input type="text" name="nickname" id="nickname" class="user-cannot-see" tabindex="-1" autocomplete="off">
  </label>
  <button type="submit">Send Message</button>
</form>