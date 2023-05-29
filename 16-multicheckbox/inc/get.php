<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

    <h1>Pilih varian Donat anda:</h1>
    <ul>
        <?php foreach ($donat_toppings as $topping => $price): ?>
            <li>
                <div>
                    <input type="checkbox" name="donat_toppings[]" value="<?php echo $topping ?>"
                        id="donat_topping_<?php echo $topping ?>" <?php echo checked($topping, $_SESSION['selected_toppings'] ?? []) ?> />
                    <label for="donat_topping_<?php echo $topping ?>"><?php echo ucfirst($topping) ?></label>
                </div>
                <span>
                    <?php echo 'Rp ' . number_format($price) ?>
                </span>
            </li>
        <?php endforeach ?>
    </ul>

    <button type="submit">Pesan Sekarang</button>
</form>