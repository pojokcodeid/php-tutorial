<?php

$selected_toppings = isset($_POST['donat_toppings']) ? $_POST['donat_toppings'] : [];
//select topping name
$toppings = array_keys($donat_toppings);
$_SESSION['selected_toppings'] = []; // for storing selected toppings
$total = 0; // for storing total

// check data against the original values
if ($selected_toppings) {
  foreach ($selected_toppings as $topping) {
    if (in_array($topping, $toppings)) {
      $topping = trim(preg_replace('/[^a-zA-Z0-9 ]/', '', strip_tags($topping)));
      $_SESSION['selected_toppings'][] = $topping;
      $total += $donat_toppings[$topping];
    }
  }
} ?>

<?php if ($_SESSION['selected_toppings']): ?>
  <h1>Rincian Pesanan</h1>
  <ul>
    <?php foreach ($_SESSION['selected_toppings'] as $topping): ?>
      <li>
        <span>
          <?php echo ucfirst($topping) ?>
        </span>
        <span>
          <?php echo 'Rp ' . number_format($donat_toppings[$topping]) ?>
        </span>
      </li>
    <?php endforeach ?>

    <li class="total"><span>Total</span><span>
        <?php echo 'Rp ' . number_format($total) ?>
      </span></li>
  </ul>
<?php else: ?>
  <p>Apakah anda akan memilih varian baru ?</p>
<?php endif ?>
<menu>
  <a class="btn" href="<?php htmlentities($_SERVER['PHP_SELF']) ?>" title="kembali ke halaman utama">Ubah Varian</a>
</menu>