<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Somme de 1 à 100</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(rgba(30, 60, 114, 0.8), rgba(42, 82, 152, 0.8)), url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #1a1a1a;
            padding: 30px 25px;
            border-radius: 20px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            border: 2px solid #00d9ff;
            box-shadow:
                0 0 15px #00d9ff55,
                0 8px 16px rgba(0, 0, 0, 0.4),
                0 20px 40px rgba(0, 0, 0, 0.3);
            transform: perspective(1000px) rotateX(5deg) rotateY(-5deg);
            transition: transform 0.4s ease;
        }

        .container:hover {
            transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale(1.03);
        }

        h1 {
            font-size: 22px;
            color: #00d9ff;
            margin-bottom: 20px;
            text-shadow: 0 0 6px #00d9ff88;
        }

        .result {
            background: linear-gradient(to right, #333, #444);
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .btn-next {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 35px;
            font-size: 16px;
            font-weight: 600;
            color: #00d9ff;
            background: transparent;
            border: 2.5px solid #00d9ff;
            border-radius: 12px;
            cursor: pointer;
            text-decoration: none;
            box-shadow:
                0 4px 6px rgba(0, 217, 255, 0.5),
                inset 0 -3px 8px rgba(0, 217, 255, 0.3);
            transition: background 0.3s, color 0.3s, transform 0.3s;
        }

        .btn-next:hover {
            background: #00d9ff;
            color: #000;
            transform: scale(1.05);
            box-shadow:
                0 6px 15px rgba(0, 217, 255, 0.8),
                inset 0 -4px 10px rgba(0, 217, 255, 0.5);
        }

        footer {
            margin-top: 20px;
            font-size: 12px;
            color: #ccc;
            opacity: 0.8;
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px 15px;
                border-radius: 16px;
            }

            h1 {
                font-size: 20px;
            }

            .result {
                font-size: 16px;
                padding: 12px;
            }

            .btn-next {
                padding: 10px 25px;
                font-size: 14px;
            }

            footer {
                font-size: 11px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Somme des nombres de 1 à 100</h1>
        <div class="result">
            <?php
            $sum = 0;
            $i = 1;
            while ($i <= 100) {
                $sum += $i;
                $i++;
            }
            echo "La somme est : <strong>$sum</strong>";
            ?>
        </div>
        <a href="TP3.php" class="btn-next">Suivant →</a>
        <footer>Kabwit ingénieur 💻</footer>
    </div>
</body>

</html>