<?php include 'header.php'; ?>

<?php

$candies = [
    ["name" => "Rocket Fuel Chews", "price" => 10, "discount" => 0.50],
    ["name" => "Steel Jaw Taffy",   "price" => 18, "discount" => 1.00],
    ["name" => "Turbo Frost Bites", "price" => 25, "discount" => 2.25],
];

$totalOriginal   = 0;
$totalDiscounted = 0;
$totalSaved      = 0;
?>

<div class="card">
    <h1>Discount <span class="badge">Offers</span></h1>
    <p class="lead">
       
    </p>

    <table>
        <thead>
        <tr>
            <th>Candy</th>
            <th>Original Price</th>
            <th>Discount</th>
            <th>Discounted Price</th>
            <th>Label</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($candies as $candy): ?>
            <?php
                $original  = $candy["price"];
                $discount  = $candy["discount"];
                $final     = $original - $discount;

               
                $totalOriginal   += $original;
                $totalDiscounted += $final;
                $totalSaved      += $discount;

               
                $label = "Squad";
                if ($final < 12) {
                    $label .= " Starter";        
                } elseif ($final <= 20) {
                    $label .= " Mid";           
                } else {
                    $label .= " Elite";          
                }
            ?>
            <tr>
                <td class="candy-name"><?php echo $candy["name"]; ?></td>
                <td class="numeric"><?php echo number_format($original, 2); ?></td>
                <td class="numeric">-<?php echo number_format($discount, 2); ?></td>
                <td class="numeric"><?php echo number_format($final, 2); ?></td>
                <td>
                    <span class="tag-chip tag-power"><?php echo $label; ?></span>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td class="candy-name"><strong>Totals</strong></td>
            <td class="numeric"><strong><?php echo number_format($totalOriginal, 2); ?></strong></td>
            <td class="numeric"><strong>-<?php echo number_format($totalSaved, 2); ?></strong></td>
            <td class="numeric"><strong><?php echo number_format($totalDiscounted, 2); ?></strong></td>
            <td>
                <?php
                    $message = "Squad saved ";
                    $message .= number_format($totalSaved, 2) . " PHP overall.";
                ?>
                <span class="status-flag status-boost">
                    <?php echo $message; ?>
                </span>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
