<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les valeurs du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Effectuer la connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nom_base_de_donnees";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier si la connexion a échoué
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    // Requête SQL pour vérifier si le stagiaire est déjà inscrit
    $sql = "SELECT * FROM stagiaires WHERE email = '$email'";

    // Exécuter la requête SQL
    $result = $conn->query($sql);

    // Vérifier si des résultats ont été trouvés
    if ($result->num_rows > 0) {
        // Le stagiaire est déjà inscrit
        echo '<script>alert("Le stagiaire est déjà inscrit.");</script>';
    } else {
        // Le stagiaire n'existe pas
        echo '<script>alert("Le stagiaire n\'existe pas.");</script>';
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>





