<?php
//var_dump($product)

echo $product['name'];
$totalPrice = $product['price'] * $product['quantity'];
echo "<h1>Продукт \"{$product['name']}\" из категории \"{$product['category']}\"</h1>
<p>
	Цена: {$product['price']}, количество: {$product['quantity']}
</p>
<p>
	Стоимость ({$product['price']} * {$product['quantity']}): {$totalPrice}$
</p>";
