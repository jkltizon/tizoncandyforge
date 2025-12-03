<?php
declare(strict_types=1);  

include 'header.php';

 
$taxRate = 12;

 
$products = [
    "Chocolate Bar"     => ["price" => 25, "stock" => 8],
    "Gummy Bears"       => ["price" => 15, "stock" => 12],
    "Marshmallow"       => ["price" => 30, "stock" => 5],
    "Candy Cane"        => ["price" => 18, "stock" => 7],
    "Lollipop Blast"    => ["price" => 12, "stock" => 30],
    "Caramel Crunch"    => ["price" => 22, "stock" => 8],
    "Strawberry Chews"  => ["price" => 15, "stock" => 5],
    "Chocolate Drops"   => ["price" => 20, "stock" => 18]
];

 
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

 
function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

 
function get_tax_due(float $price, int $qty, int $rate = 0): float {
    return $price * $qty * ($rate / 100);
}
?>

<div class="card">
    <h1>Stock Level Monitor</h1>
    <p class="lead">
    
    </p>

    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Stock</th>
                <th>Reorder?</th>
                <th>Total Value (PHP)</th>
                <th>Tax Due (PHP)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product_name => $data): 
                $price = $data['price'];
                $stock = $data['stock'];
            ?>
            <tr>
                <td class="candy-name"><?= htmlspecialchars($product_name) ?></td>
                <td><?= $stock ?></td>
                <td><?= get_reorder_message($stock) ?></td>
                <td><?= number_format(get_total_value($price, $stock), 2) ?></td>
                <td><?= number_format(get_tax_due($price, $stock, $taxRate), 2) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
