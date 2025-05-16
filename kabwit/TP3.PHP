<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Statut selon l'âge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1607746882042-944635dfe10e?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            position: relative;
            background: #111;
            padding: 40px 30px;
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
            border: 3px solid;
            border-image: linear-gradient(45deg, #00fff0, #0066ff, #a600ff) 1;
        }

        h1 {
            margin-bottom: 25px;
            color: #00e6ff;
            text-shadow: 0 0 5px #00e6ff88;
        }

        input[type="number"] {
            padding: 12px;
            width: 80%;
            border-radius: 10px;
            border: none;
            font-size: 17px;
            margin-bottom: 20px;
            outline: none;
        }

        button {
            padding: 12px 30px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            background: #00e6ff;
            color: #000;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #00b4d8;
        }

        .result {
            margin-top: 20px;
            background: #222;
            padding: 20px;
            border-radius: 10px;
            font-size: 18px;
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }

            h1 {
                font-size: 20px;
            }

            input,
            button {
                font-size: 15px;
            }

            .result {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Entrez votre âge</h1>
        <form method="POST">
            <input type="number" name="age" placeholder="Votre âge" required>
            <br>
            <button type="submit">Vérifier</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["age"])) {
            $age = (int)$_POST["age"];
            echo '<div class="result">';
            if ($age > 80) {
                echo "👴🏻 Vous êtes <strong>vieillard</strong>";
            } elseif ($age > 65) {
                echo "👴 Vous êtes <strong>senior</strong>";
            } elseif ($age >= 18) {
                echo "👤 Vous êtes <strong>majeur</strong>";
            } else {
                echo "🧒 Vous êtes <strong>mineur</strong>";
            }
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>