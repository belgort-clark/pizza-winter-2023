<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    <label for="pizza_type">Which type of pizza would you like to order</label>
    <br>
    <select name="pizza_type" id="pizza_type">
        <option value="cheese" <?= ($pizza_type == 'cheese') ? 'selected' : null ?>>Cheese</option>
        <option value="pepperoni" <?= ($pizza_type == 'pepperoni') ? 'selected' : null ?>>Pepperoni</option>
        <option value="hawaiian" <?= ($pizza_type == 'hawaiian') ? 'selected' : null ?>>Hawaiian</option>
        <option value="meatball" <?= ($pizza_type == 'meatball') ? 'selected' : null ?>>Meatball</option>
    </select>
    <br><br>
    <label for="qty">No. of Pizzas</label>
    <br>
    <select name="qty" id="qty">
        <option value="1" <?= ($qty == '1') ? 'selected' : null ?>>1</option>
        <option value="2" <?= ($qty == '2') ? 'selected' : null ?>>2</option>
        <option value="3" <?= ($qty == '3') ? 'selected' : null ?>>3</option>
        <option value="4" <?= ($qty == '4') ? 'selected' : null ?>>4</option>
        <option value="5" <?= ($qty == '5') ? 'selected' : null ?>>5</option>
    </select>
    <br><br>
    <label for="customer_name">Your name</label>
    <br>
    <input type="text" name="customer_name" id="customer_name" value="<?= $customer_name ?>" size="40">
    <br><br>
    <label for="street">Street</label>
    <br>
    <input type="text" name="street" id="street" value="<?= $street ?>">
    <br><br>
    <label for="city">City</label>
    <br>
    <input type="text" name="city" id="city" value="<?= $city ?>">
    <br><br>
    <label for="state">State</label>
    <br>
    <select name="state" id="state">
        <option value="wa" <?= ($state == 'wa') ? 'selected' : null ?>>Washington</option>
        <option value="or" <?= ($state == 'or') ? 'selected' : null ?>>Oregon</option>
    </select>
    <br><br>
    <label for="zip">Zip</label>
    <br>
    <input type="text" name="zip" id="zip" size="11" value="<?= $zip ?>">
    <br><br>
    <label for="payment_method">Payment Method</label>
    <br>
    <select name="payment_method" id="payment_method">
        <option value="cash" <?= ($payment_method == 'cash') ? 'selected' : null ?>>Cash</option>
        <option value="credit" <?= ($payment_method == 'credit') ? 'selected' : null ?>>Credit Card</option>
    </select>
    <br><br>
    <input type="submit" value="Place your order...">
</form>