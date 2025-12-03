<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tizon Candy Forge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: radial-gradient(circle at top, #1e2a3a, #05060a);
            color: #f5f7ff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: #080d16;
            border-bottom: 3px solid #2e4cff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);
        }

        .brand-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 18px 12px 10px;
            gap: 10px;
        }

        .brand-logo {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: linear-gradient(145deg, #2e4cff, #10b981);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 0 15px rgba(46, 76, 255, 0.7);
        }

        .brand-title {
            font-weight: 700;
            font-size: 26px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 24px;
            padding: 8px 0 14px;
        }

        nav a {
            text-decoration: none;
            color: #f5f7ff;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 999px;
            border: 1px solid transparent;
            transition: 0.2s;
        }

        nav a:hover {
            border-color: #10b981;
            box-shadow: 0 0 10px rgba(16, 185, 129, 0.5);
        }

        nav a.active {
            background: linear-gradient(145deg, #2e4cff, #10b981);
            box-shadow: 0 0 18px rgba(46, 76, 255, 0.8);
        }

        .page-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            padding: 36px 10px 80px;
        }

        .card {
            width: 100%;
            max-width: 840px;
            background: rgba(12, 19, 31, 0.96);
            border-radius: 18px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.85);
            border: 1px solid rgba(46, 76, 255, 0.5);
            padding: 22px 26px 30px;
        }

        .card h1 {
            font-size: 22px;
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card h1 span.badge {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 2px 8px;
            border-radius: 999px;
            border: 1px solid #10b981;
        }

        .card p.lead {
            font-size: 13px;
            color: #a8b5d4;
            margin-bottom: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 14px;
        }

        thead {
            background: linear-gradient(145deg, #2e4cff, #10b981);
        }

        thead th {
            padding: 10px 12px;
            text-align: left;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 11px;
        }

        tbody tr {
            background: rgba(11, 18, 30, 0.96);
        }

        tbody tr:nth-child(even) {
            background: rgba(17, 26, 42, 0.96);
        }

        tbody td {
            padding: 10px 12px;
            border-top: 1px solid rgba(60, 72, 107, 0.6);
        }

        .candy-name {
            font-weight: 600;
        }

        .tag-chip {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 999px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .tag-power {
            background: rgba(46, 76, 255, 0.15);
            border: 1px solid rgba(46, 76, 255, 0.7);
        }

        .tag-sale {
            background: rgba(16, 185, 129, 0.2);
            border: 1px solid rgba(16, 185, 129, 0.9);
        }

        .tag-regular {
            background: rgba(148, 163, 184, 0.18);
            border: 1px solid rgba(148, 163, 184, 0.7);
        }

        .numeric {
            text-align: right;
        }

        .status-flag {
            font-size: 11px;
            padding: 3px 8px;
            border-radius: 999px;
        }

        .status-boost {
            background: rgba(56, 189, 248, 0.16);
            border: 1px solid rgba(56, 189, 248, 0.9);
        }

        .status-warning {
            background: rgba(244, 63, 94, 0.16);
            border: 1px solid rgba(244, 63, 94, 0.9);
        }

        img.candy-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: radial-gradient(circle at 30% 0, #f97316, #1e293b);
            object-fit: cover;
        }

        @media (max-width: 640px) {
            .card {
                padding: 18px 14px 22px;
            }
            nav {
                gap: 10px;
            }
            .brand-title {
                font-size: 18px;
            }
            thead th, tbody td {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
<header>
    <div class="brand-bar">
        <div class="brand-title">Tizon Candy Forge</div>
    </div>
    <nav>
        <a href="tizon_variables.php">Overview</a>
        <a href="tizon_operators.php">Conversion</a>
        <a href="tizon_shorthand.php">Discount</a>
        <a href="tizon_juggle.php">Tax</a>
        <a href="functions.php">Stock Monitor</a>
    </nav>
</header>

<main class="page-wrapper">
