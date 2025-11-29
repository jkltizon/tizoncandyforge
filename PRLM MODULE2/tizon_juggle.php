<?php include 'header.php'; ?>

<?php


$candies = [
    [
        "name"        => "Binary Blast Bites",
        "priceString" => "15",
        "bonusString" => "5.5"
    ],
    [
        "name"        => "Hex Shock Lollies",
        "priceString" => "20",
        "bonusString" => "2"
    ],
    [
        "name"        => "Dark Mode Marshmallows",
        "priceString" => "30",
        "bonusString" => "0"
    ],
];

?>

<div class="card">
    <h1>Type Juggle Lab <span class="badge">Strings vs Numbers</span></h1>
    <p class="lead">
        Here the prices start as <strong>strings</strong>. PHP automatically
        performs <strong>type juggling</strong> when we add them. Casting with
        <code>(int)</code> and <code>(float)</code> keeps the candy math under
        control.
    </p>

    <table>
        <thead>
        <tr>
            <th>Candy</th>
            <th>Original (String)</th>
            <th>Bonus (String)</th>
            <th>Numeric Price</th>
            <th>Total Power</th>
            <th>Tier</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($candies as $candy): ?>
            <?php
                $priceString = $candy["priceString"];  
                $bonusString = $candy["bonusString"]; 

               
                $numericPrice = (int)$priceString;      
                $bonusPower   = (float)$bonusString;   

                $totalPower   = $numericPrice + $bonusPower;

               
                if ($totalPower >= 30) {
                    $tier = "Legend";
                } elseif ($totalPower >= 20) {
                    $tier = "Pro";
                } else {
                    $tier = "Rookie";
                }
            ?>
            <tr>
                <td class="candy-name"><?php echo $candy["name"]; ?></td>
                <td class="numeric"><?php echo $priceString; ?></td>
                <td class="numeric"><?php echo $bonusString; ?></td>
                <td class="numeric"><?php echo $numericPrice; ?></td>
                <td class="numeric"><?php echo number_format($totalPower, 2); ?></td>
                <td>
                    <?php if ($tier === "Legend"): ?>
                        <span class="tag-chip tag-sale">Legend Tier</span>
                    <?php elseif ($tier === "Pro"): ?>
                        <span class="tag-chip tag-power">Pro Tier</span>
                    <?php else: ?>
                        <span class="tag-chip tag-regular">Rookie Tier</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
