<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Carrés des Nombres de 1 à 10</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: url('phot.jpg') no-repeat center center/cover;

            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: rgb(7, 7, 7);
            padding: 25px 20px;
            border-radius: 18px;
            box-shadow:
                0 4px 6px rgba(0, 0, 0, 0.3),
                0 10px 15px rgba(0, 0, 0, 0.2),
                0 20px 40px rgba(0, 0, 0, 0.3);
            transform: perspective(900px) rotateX(5deg) rotateY(-5deg);
            transition: transform 0.4s ease;
            width: 90%;
            max-width: 340px;
            text-align: center;
        }

        .container:hover {
            transform: perspective(900px) rotateX(0deg) rotateY(0deg) scale(1.03);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 22px;
            color: #00d9ff;
            text-shadow: 0 0 5px #00d9ff88;
        }

        .result {
            background: linear-gradient(to right, #2f2f2f, #3b3b3b);
            margin: 6px 0;
            padding: 10px 15px;
            border-radius: 10px;
            font-size: 16px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
            transition: background 0.3s;
        }

        .result:hover {
            background: linear-gradient(to right, #444, #555);
        }

        footer {
            margin-top: 15px;
            font-size: 12px;
            color: #ccc;
            opacity: 0.7;
        }

        /* Bouton Suivant */
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

        @media (max-width: 480px) {
            .container {
                padding: 20px 15px;
                border-radius: 14px;
            }

            .result {
                font-size: 15px;
                padding: 8px 12px;
            }

            h1 {
                font-size: 20px;
            }

            footer {
                font-size: 11px;
            }

            .btn-next {
                padding: 10px 25px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>🔷 Carrés de 1 à 10</h1>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $carre = $i * $i;
            echo "<div class='result'>$i × $i = $carre</div>";
        }
        ?>
        <a href="TP2.php" class="btn-next" aria-label="Passer au TP2">Suivant →</a>
        <footer>❤️ Kabwit tshal Plamedie</footer>
    </div>
</body>

</html>