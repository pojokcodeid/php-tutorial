<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>
    <button type="submit">Subscribe</button>
</form>