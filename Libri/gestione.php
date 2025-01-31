<?php
require __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['aggiungi'])) {
        // Recupera i dati dal form
        $titolo = $_POST['titolo'];
        $autore = $_POST['autore'];
        $anno = $_POST['anno'];

        // Se il campo "anno" è vuoto, impostalo su NULL
        if (empty($anno)) {
            $anno = "NULL"; // Imposta NULL se non c'è un valore
        } elseif (!is_numeric($anno) || $anno <= 0) {
            echo "Anno non valido. Assicurati di inserire un numero positivo.";
            exit;
        }

        // Query SQL diretta senza preparazione
        $query = "INSERT INTO libri (titolo, autore, anno) VALUES ('$titolo', '$autore', $anno)";

        // Esegui la query
        if ($database->query($query)) {
            header("Location: index.php");
            exit;
            echo "Libro aggiunto con successo!";
        } else {
            echo "Errore nell'aggiungere il libro: " . $database->error;
        }
    }
    if(isset($_POST['rimuovi'])) {
        $id = $_POST['id'];

        $query = "DELETE FROM libri WHERE ID_Libri = $id";
        if($database->query($query)) {
            header("Location: index.php");
            exit;
        } else {
            echo "Errore nella rimozione del libro: " . $databse->error;
        }

    }
}

?>
