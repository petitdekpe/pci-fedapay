<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
    <title>PIC INTER SA</title>
    <style>
        body {
            background-image: url('bg.jpg'); /* Remplacez par le chemin de votre image */
            background-size: 100% 110vh;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            background-repeat: no-repeat;
        }

        .navbar {
            background-color: #ffffff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            justify-content: center;
        }

        .navbar-logo {
            max-width: 25%; /* Ajustez la taille de votre logo */
            justify-content: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            margin-top: 120px; /* Ajustez la marge pour éviter le chevauchement avec la barre de navigation */
            z-index: 500;
        }
        .attach{
            height: fit-content;
        }

        h1{
            font-size: x-large;
            font-weight: bolder;
            color:darkblue;
        }
    </style>
</head>

<body class="bg-gray-100 p-8 ">

    <div class="navbar">
        <!-- Votre logo -->
        <img src="logo.png" alt="Logo" class="navbar-logo"> <!-- Remplacez par le chemin de votre logo -->
        <!-- Ajoutez des liens de navigation si nécessaire -->
    </div>

<div class="grid grid-cols-2">
    <div class="container attach">
    <img src="logo.png" alt="Logo" class="navbar-logo">
        <h1>Qui sommes nous?</h1>
        <p>
        Filiale Béninoise du groupe Pétrolin; nous sommes spécialisées dans la gestion et la logistique portuaire. Nous supervisons les activités de transports et de stockage de marchandises entre le Port sec de Parakou les pays de l'hinterland et le Port Autonome de Cotonou.
        </p>
    </div>
    <div class="container max-w-md mx-auto bg-white p-6 rounded-md shadow-md">

        <div class="mb-4">
            <label for="formSelector" class="block text-gray-600 font-bold mb-2">Choisissez votre opération:</label>
            <select id="formSelector" class="border-2 border-gray-300 p-2 w-full" onchange="toggleForm()">
                <option value="form1">Payer Facture</option>
                <option value="form2">Payer Pénalités</option>
            </select>
        </div>

        <!-- Formulaire 1 -->
        <form id="form1" action="facture.php" method="POST">

            <!-- ... (contenu du formulaire 1) -->
            <div class="mb-4">
                <label for="nom" class="block text-gray-600 font-bold mb-2">Nom :</label>
                <input type="text" name="nom" id="nom" class="border-2 border-gray-300 p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="prenom" class="block text-gray-600 font-bold mb-2">Prénom(s) :</label>
                <input type="text" name="prenom" id="prenom" class="border-2 border-gray-300 p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600 font-bold mb-2">Email :</label>
                <input type="email" name="email" id="email" class="border-2 border-gray-300 p-2 w-full" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                <small class="text-gray-500">Format: example@example.com</small>
            </div>

            <div class="mb-4">
                <label for="pays" class="block text-gray-600 font-bold mb-2">Pays :</label>
                <select name="pays" id="pays" class="border-2 border-gray-300 p-2 w-full" required></select>
            </div>

            <div class="mb-4">
                <label for="telephone" class="block text-gray-600 font-bold mb-2">Téléphone :</label>
                <input type="tel" name="telephone" id="telephone" class="border-2 border-gray-300 p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="montant" class="block text-gray-600 font-bold mb-2">Montant :</label>
                <input type="text" name="montant" id="montant" class="border-2 border-gray-300 p-2 w-full" value="10000" disabled>
            </div>

            <div class="mb-4">
                <label for="entreprise" class="block text-gray-600 font-bold mb-2">Nom de l'Entreprise :</label>
                <input type="text" name="entreprise" id="entreprise" class="border-2 border-gray-300 p-2 w-full">
            </div>

            <div class="mb-4">
                <label for="ifu" class="block text-gray-600 font-bold mb-2">Ifu de l'Entreprise :</label>
                <input type="text" name="ifu" id="ifu" class="border-2 border-gray-300 p-2 w-full" pattern="[0-9]{13}" title="Le numéro IFU doit contenir exactement 13 chiffres" required>
                <small class="text-gray-500">Format : 13 chiffres</small>
            </div>

            <div class="mb-4">
                <label for="immatriculation_remorque" class="block text-gray-600 font-bold mb-2">N° Plaque d’immatriculation Remorque :</label>
                <input type="text" name="immatriculation_remorque" id="immatriculation_remorque" class="border-2 border-gray-300 p-2 w-full">
            </div>

            <div class="mb-4">
                <label for="immatriculation_tracteur" class="block text-gray-600 font-bold mb-2">N° Plaque d’immatriculation Tracteur :</label>
                <input type="text" name="immatriculation_tracteur" id="immatriculation_tracteur" class="border-2 border-gray-300 p-2 w-full">
            </div>

            <div class="mb-4">
                <label for="permis" class="block text-gray-600 font-bold mb-2">N° du permis du conducteur :</label>
                <input type="text" name="permis" id="permis" class="border-2 border-gray-300 p-2 w-full">
            </div>

            <div class="mb-4">
                <label for="produit_transporte" class="block text-gray-600 font-bold mb-2">Produit transporté :</label>
                <input type="text" name="produit_transporte" id="produit_transporte" class="border-2 border-gray-300 p-2 w-full">
            </div>

            <script
            src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
            data-public-key="pk_sandbox_xCY2GQDcfEprGAFjWVZsSgGW"
            data-button-text="Valider"
            data-button-class="button-class"
            data-transaction-amount="10000"
            data-transaction-description="Description de la transaction"
            data-currency-iso="XOF"
            data-customer-email=""
            data-customer-firstname=""
            data-customer-lastname=""
            data-customer-phone_number-number=""
            data-customer-phone_number-country="">
            </script>
        </form>

        <!-- Formulaire 2 -->
        <form id="form2" action="penalite.php" method="POST" style="display: none;">

            <!-- ... (contenu du formulaire 2) -->

            <div class="mb-4">
                <label for="nom" class="block text-gray-600 font-bold mb-2">Nom :</label>
                <input type="text" name="nom" id="nom" class="border-2 border-gray-300 p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="prenom" class="block text-gray-600 font-bold mb-2">Prénom(s) :</label>
                <input type="text" name="prenom" id="prenom" class="border-2 border-gray-300 p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600 font-bold mb-2">Email :</label>
                <input type="email" name="email" id="email" class="border-2 border-gray-300 p-2 w-full" required>
            </div>

            
            <div class="mb-4">
                <label for="pays2" class="block text-gray-600 font-bold mb-2">Pays :</label>
                <select name="pays2" id="pays2" class="border-2 border-gray-300 p-2 w-full" required></select>
            </div>

            <div class="mb-4">
                <label for="telephone" class="block text-gray-600 font-bold mb-2">Téléphone :</label>
                <input type="tel" name="telephone" id="telephone" class="border-2 border-gray-300 p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="type_penalite" class="block text-gray-600 font-bold mb-2">Type de Pénalité :</label>
                <select name="type_penalite" id="type_penalite" class="border-2 border-gray-300 p-2 w-full" required>
                    <option value="sejour_7_jours">Pénalité de Séjour Camion pour 07 jours</option>
                    <option value="sejour_8_jours">Pénalité de Séjour Camion à partir du 08ème jour</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="montant" class="block text-gray-600 font-bold mb-2">Montant :</label>
                <input type="text" name="montant" id="montant" class="border-2 border-gray-300 p-2 w-full" value="10,000" disabled>
            </div>

            <div class="mb-4">
                <label for="entreprise" class="block text-gray-600 font-bold mb-2">Nom de l'Entreprise :</label>
                <input type="text" name="entreprise" id="entreprise" class="border-2 border-gray-300 p-2 w-full">
            </div>

            <div class="mb-4">
                <label for="ifu" class="block text-gray-600 font-bold mb-2">Ifu de l'Entreprise :</label>
                <input type="text" name="ifu" id="ifu" class="border-2 border-gray-300 p-2 w-full" pattern="[0-9]{13}" title="Le numéro IFU doit contenir exactement 13 chiffres" required>
            </div>

            <div class="mb-4">
                <label for="immatriculation_remorque" class="block text-gray-600 font-bold mb-2">N° Plaque d’immatriculation Remorque :</label>
                <input type="text" name="immatriculation_remorque" id="immatriculation_remorque" class="border-2 border-gray-300 p-2 w-full">
            </div>

            <div class="mb-4">
                <label for="immatriculation_tracteur" class="block text-gray-600 font-bold mb-2">N° Plaque d’immatriculation Tracteur :</label>
                <input type="text" name="immatriculation_tracteur" id="immatriculation_tracteur" class="border-2 border-gray-300 p-2 w-full">
            </div>

            <div class="mb-4">
                <label for="permis" class="block text-gray-600 font-bold mb-2">N° du permis du conducteur :</label>
                <input type="text" name="permis" id="permis" class="border-2 border-gray-300 p-2 w-full">
            </div>

            <div class="mb-4">
                <label for="ref_facture" class="block text-gray-600 font-bold mb-2">N° de référence facture Initiale :</label>
                <input type="text" name="ref_facture" id="ref_facture" class="border-2 border-gray-300 p-2 w-full">
            </div>

            <div class="mb-4">
                <label for="produit_transporté" class="block text-gray-600 font-bold mb-2">Produit transporté :</label>
                <input type="text" name="produit_transporte" id="produit_transporte" class="border-2 border-gray-300 p-2 w-full">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Soumettre</button>
            </div>

            <script
            src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
            data-public-key="pk_sandbox_xCY2GQDcfEprGAFjWVZsSgGW"
            data-button-text="Valider"
            data-button-class="button-class"
            data-transaction-amount="10000"
            data-transaction-description="Description de la transaction"
            data-currency-iso="XOF"
            data-customer-email=""
            data-customer-firstname=""
            data-customer-lastname=""
            data-customer-phone_number-number=""
            data-customer-phone_number-country="">
            </script>
        </form>

    </div>
    </div>

    <script>
        function toggleForm() {
            var formSelector = document.getElementById('formSelector');
            var form1 = document.getElementById('form1');
            var form2 = document.getElementById('form2');

            if (formSelector.value === 'form1') {
                form1.style.display = 'block';
                form2.style.display = 'none';
            } else {
                form1.style.display = 'none';
                form2.style.display = 'block';
            }
        }

        // Charge la liste des pays depuis l'API Restcountries
        fetch('https://restcountries.com/v2/all')
            .then(response => response.json())
            .then(data => {
                const selectPays = document.getElementById('pays');
                data.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.alpha2Code;
                    option.text = country.name;
                    selectPays.appendChild(option);
                });
            })
            .catch(error => console.error('Erreur lors du chargement des pays', error));
    </script>
</body>

</html>
