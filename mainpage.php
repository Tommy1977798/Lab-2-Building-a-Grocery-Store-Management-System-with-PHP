<?php
require_once "store.php";
$store = new GroceryStore();
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Tommy's Grocery store management system</title>
    <link rel="stylesheet" href="decoration.css">
</head>
<body>

<h2>🛒 inventory</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Expiry</th>
        <th>State</th>
    </tr>
    <?php foreach ($store->items as $item): ?>
        <tr class="<?= $store->isExpired($item['expiry']) ? 'expired' : '' ?>">
            <td><?= htmlspecialchars($item["name"]) ?></td>
            <td><?= htmlspecialchars($item["type"]) ?></td>
            <td>$<?= $item["price"] ?></td>
            <td><?= $item["expiry"] ?></td>
            <td>
                <?= $store->isExpired($item['expiry']) ? '<span class="warning">⚠️ already expired</span>' : '✅ normal' ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>➕ Add new goods</h2>
<form method="post" action="store.php">
    <input type="text" name="name" placeholder="goods' name" required>
    <input type="text" name="type" placeholder="category" required>
    <input type="number" name="price" placeholder="price" step="0.01" required>
    <input type="date" name="expiry" required>
    <button type="submit" name="addItem">Add item</button>
</form>

</body>
</html>
