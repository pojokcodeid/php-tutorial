<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
  <div>
    <label for="color">Background Color :</label>
    <select name="colors[]" id="colors" multiple>
      <option value="red">Red</option>
      <option value="blue">Blue</option>
      <option value="green">Green</option>
      <option value="yellow">Yellow</option>
      <option value="black">Black</option>
      <option value="white">White</option>
      <option value="purple">purple</option>
      <option value="cyan">cyan</option>
    </select>
  </div>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>