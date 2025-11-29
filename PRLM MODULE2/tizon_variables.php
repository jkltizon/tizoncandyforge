<?php include 'header.php'; ?>

<?php


$candies = [];

// Candy 1
$name1          = "Blaster Berry Bars";
$price1         = 15;         
$rating1        = 4.5;        
$isLimited1     = true;       
$energyBoost1   = "High";    

$candies[] = [
    "name"         => $name1,
    "price"        => $price1,
    "rating"       => $rating1,
    "isLimited"    => $isLimited1,
    "energyBoost"  => $energyBoost1
];

// Candy 2
$name2          = "Rogue Cola Cubes";
$price2         = 20;
$rating2        = 4.2;
$isLimited2     = false;
$energyBoost2   = "Extreme";

$candies[] = [
    "name"         => $name2,
    "price"        => $price2,
    "rating"       => $rating2,
    "isLimited"    => $isLimited2,
    "energyBoost"  => $energyBoost2
];

// Candy 3
$name3          = "Shadow Mint Rounds";
$price3         = 18;
$rating3        = 4.8;
$isLimited3     = true;
$energyBoost3   = "Medium";

$candies[] = [
    "name"         => $name3,
    "price"        => $price3,
    "rating"       => $rating3,
    "isLimited"    => $isLimited3,
    "energyBoost"  => $energyBoost3
];
?>

<div class="card">
    <h1>Variables Loadout <span class="badge">Module 2 • Basics</span></h1>
    <p class="lead">
        Each candy below is powered by different <strong>PHP variables</strong>:
        strings, integers, floats and booleans. A loop prints them all, and
        a condition highlights limited-edition packs.
    </p>

    <table>
        <thead>
        <tr>
            <th>Candy</th>
            <th>Price (PHP)</th>
            <th>Energy Boost</th>
            <th>Rating</th>
            <th>Edition</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($candies as $candy): ?>
            <tr>
                <td class="candy-name"><?php echo $candy["name"]; ?></td>
                <td class="numeric"><?php echo $candy["price"]; ?></td>
                <td>
                    <span class="tag-chip tag-power">
                        <?php echo $candy["energyBoost"]; ?>
                    </span>
                </td>
                <td class="numeric"><?php echo $candy["rating"]; ?></td>
                <td>
                    <?php if ($candy["isLimited"]): ?>
                        <span class="status-flag status-boost">Limited Run ⚔️</span>
                    <?php else: ?>
                        <span class="status-flag status-warning">Regular Squad</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
