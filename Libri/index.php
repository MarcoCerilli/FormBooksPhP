<?php 
require __DIR__ . '/config.php';
require __DIR__ . '/css.html';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Libri</title>
</head>

<body>
    <h2>Aggiungi un libro</h2>
    <form method="post" action="gestione.php">
        <input type="text" name="titolo" placeholder="Titolo" required>
        <input type="text" name="autore" placeholder="Autore" required>
        <input type="number" name="anno" placeholder="Anno Pubblicazione" required>
        <button type="submit" name="aggiungi">Aggiungi</button>
    </form>

    <h2>Elenco Libri</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Titolo</th>
            <th>Autore</th>
            <th>Anno</th>
        </tr>

        <?php
        $libriQuery = "SELECT * FROM libri"; 
        $result = $database->query($libriQuery);

        if ($result->num_rows > 0) {
            foreach ($result as $row) {
                echo "
                <tr>
                    <td>{$row['ID_Libri']}</td>
                    <td>{$row['titolo']}</td>
                    <td>{$row['autore']}</td>
                    <td>{$row['anno']}</td>
                    <td>
                        <form method='post' action='gestione.php'>
                            <input type='hidden' name='id' value='{$row['ID_Libri']}'>
                            <button type='submit' name='rimuovi'>Rimuovi</button>
                        </form>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nessun libro presente</td></tr>";
        }
        ?>

    </table>
</body>
</html>
