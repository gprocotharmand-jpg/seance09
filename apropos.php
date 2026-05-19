<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>À Propos de l'élève</h1>
        <?php include 'menu.php'; ?>
    </header>

    <main>
        <section class="card">
            <h2>Informations Étudiant</h2>
            <ul>
                <li><strong>Groupe :</strong> TPH</li>
                <li><strong>Identifiant MMI :</strong> mmi25h13</li>
                <li><strong>Prénom :</strong> Gabyn</li>
                <li><strong>Nom :</strong> Procot-Harmand</li>
                <li><strong>Mise en ligne :</strong> <?php 
                    date_default_timezone_set('Europe/Paris');
                    echo date('d/m/Y à H:i'); 
                ?></li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 - MMI</p>
    </footer>

</body>
</html>