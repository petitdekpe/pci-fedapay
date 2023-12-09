<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle Forms</title>
    <style>
        /* Style optionnel pour masquer les formulaires au chargement de la page */
        #form2 {
            display: none;
        }
        body{
            background: url(bg-pic.jpg) no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>
<body>

    <!-- Formulaire 1 -->
    <form id="form1" action="traitement_form1.php" method="post">
        <!-- Contenu du formulaire 1 -->
        <label for="champ1_form1">Champ 1 Formulaire 1:</label>
        <input type="text" name="champ1_form1" id="champ1_form1" placeholder="Champ 1 Formulaire 1">
        <!-- Autres champs et bouton de soumission -->
        <input type="submit" value="Soumettre Formulaire 1">
    </form>

    <!-- Formulaire 2 -->
    <form id="form2" action="traitement_form2.php" method="post">
        <!-- Contenu du formulaire 2 -->
        <label for="champ1_form2">Champ 1 Formulaire 2:</label>
        <input type="text" name="champ1_form2" id="champ1_form2" placeholder="Champ 1 Formulaire 2">
        <!-- Autres champs et bouton de soumission -->
        <input type="submit" value="Soumettre Formulaire 2">
    </form>

    <!-- Bouton de bascule -->
    <button onclick="toggleForms()">Basculer entre les formulaires</button>

    <!-- Script JavaScript pour le toggle -->
    <script>
        function toggleForms() {
            var form1 = document.getElementById('form1');
            var form2 = document.getElementById('form2');

            if (form1.style.display === 'none') {
                form1.style.display = 'block';
                form2.style.display = 'none';
            } else {
                form1.style.display = 'none';
                form2.style.display = 'block';
            }
        }
    </script>

</body>
</html>
