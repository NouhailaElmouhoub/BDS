

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $cef = $_POST['cef'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Connexion à la base de données

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nom_base_de_donnees";
    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO stagiaires (firstName, lastName, cef, email, phone, password) VALUES ('$firstName', '$lastName', '$cef', '$email', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Les données ont été envoyées avec succès.";
    } else {
        echo "Erreur lors de l'envoi des données : " . $conn->error;
    }

  
}

?>






