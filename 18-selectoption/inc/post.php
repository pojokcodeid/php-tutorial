<?php

$selected_colors = isset($_POST['colors']) ? $_POST['colors'] : [];

?>
<?php if ($selected_colors): ?>
  <p>Anda memilih warna :</p>
  <ul>
    <?php foreach ($selected_colors as $color): ?>
      <li style="color:<?= $color ?>"><?= $color ?></li>
    <?php endforeach; ?>
  </ul>
<?php else: ?>
  <p class="error">Anda tidak memilih warna</p>
<?php endif; ?>
<a href="index.php">Back</a>