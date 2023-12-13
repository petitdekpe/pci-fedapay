<?php
// Inclure le code de connexion à la base de données ici
$servername = "localhost:3306";
$username = "petitde1_pci";
$password = "ahouan1003";
$dbname = "petitde1_pci_live";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    header("Location: index.php");
    exit();
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si le formulaire 1 a été soumis
    if (isset($_POST['formSelector']) && $_POST['formSelector'] == 'form1') {
        // Récupérer les données du formulaire 1
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $pays = $_POST['pays'];
        $telephone = $_POST['telephone'];
        $montant = $_POST['montant'];
        $entreprise = $_POST['entreprise'];
        $ifu = $_POST['ifu'];
        $immatriculation_remorque = $_POST['immatriculation_remorque'];
        $immatriculation_tracteur = $_POST['immatriculation_tracteur'];
        $permis = $_POST['permis'];
        $produit_transporté = $_POST['produit_transporté'];

        // Insérer les données dans la base de données (exemple)
        $stmt = $conn->prepare("INSERT INTO facture_table (nom, prenom, email, pays, telephone, montant, entreprise, ifu, immatriculation_remorque, immatriculation_tracteur, permis, produit_transporté) VALUES (:nom, :prenom, :email, :pays, :telephone, :montant, :entreprise, :ifu, :immatriculation_remorque, :immatriculation_tracteur, :permis, :produit_transporté)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pays', $pays);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':montant', $montant);
        $stmt->bindParam(':entreprise', $entreprise);
        $stmt->bindParam(':ifu', $ifu);
        $stmt->bindParam(':immatriculation_remorque', $immatriculation_remorque);
        $stmt->bindParam(':immatriculation_tracteur', $immatriculation_tracteur);
        $stmt->bindParam(':permis', $permis);
        $stmt->bindParam(':produit_transporté', $produit_transporté);

        // Exécuter la requête
        $stmt->execute();

        // Rediriger ou effectuer d'autres actions après l'insertion
        header("Location: index.php");
        exit();
    }
}
?>


