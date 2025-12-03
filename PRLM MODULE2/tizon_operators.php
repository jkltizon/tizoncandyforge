<?php include 'header.php'; ?>

<?php
 

$candies = [
    [
        "name" => "Thunder Punch Gummies",
        "basePrice" => 12,
        "taxRate" => 0.12
    ],
    [
        "name" => "Ironclad Caramel Bricks",
        "basePrice" => 22,
        "taxRate" => 0.12
    ],
    [
        "name" => "Volt Sour Shards",
        "basePrice" => 30,
        "taxRate" => 0.12
    ]
];
?>

<div class="card">
    <h1>Price <span class="badge">Conversion</span></h1>
    <p class="lead">
    
    </p>

    <table>
        <thead>
        <tr>
            <th>Candy</th>
            <th>Base Price</th>
            <th>Tax (12%)</th>
            <th>Discount</th>
            <th>Final Price</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($candies as $candy): ?>
            <?php
                $base   = $candy["basePrice"];
                $tax    = $base * $candy["taxRate"];       
                $final  = $base + $tax;                    
               
                $discount = 0;

                if ($base >= 25) {
                    $discount = $base * 0.10;              
                } elseif ($base >= 20) {
                    $discount = 5;                          
                }

                $final = $final - $discount;               

                
                $isEven = ($base % 2 === 0);              
            ?>
            <tr>
                <td class="candy-name"><?php echo $candy["name"]; ?></td>
                <td class="numeric"><?php echo number_format($base, 2); ?></td>
                <td class="numeric"><?php echo number_format($tax, 2); ?></td>
                <td class="numeric">
                    <?php echo $discount > 0 ? "-" . number_format($discount, 2) : "0.00"; ?>
                </td>
                <td class="numeric"><?php echo number_format($final, 2); ?></td>
                <td>
                    <?php if ($discount > 0): ?>
                        <span class="tag-chip tag-sale">Boss Deal</span>
                    <?php else: ?>
                        <span class="tag-chip tag-regular">Regular Price</span>
                    <?php endif; ?>

                    <?php if ($isEven): ?>
                        <span class="status-flag status-boost">Even # Armor</span>
                    <?php else: ?>
                        <span class="status-flag status-warning">Odd # Rebel</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
