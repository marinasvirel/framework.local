<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th>id</th>
			<th>название</th>
      <th>цена</th>
      <th>количество</th>
      <th>описание</th>
			<th>ссылка</th>
		</tr>
		<?php foreach ($products as $product): ?>
		<tr>
			<td><?= $product['id']; ?></td>
			<td><?= $product['name']; ?></td>
      <td><?= $product['price']; ?></td>
      <td><?= $product['count']; ?></td>
      <td><?= $product['description']; ?></td>
			<td><a href="/product/<?= $product['id']; ?>/">ссылка на страницу</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>