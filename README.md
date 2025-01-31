# FormBooksPhP
![image](https://github.com/user-attachments/assets/f545ffe4-c6b9-4a5a-ae46-ef1417e09fb5)


Connessione al Database:
In questa sezione viene effettuata la connessione al database MySQL utilizzando le credenziali specificate.
Se la connessione fallisce, viene mostrato un messaggio di errore e il programma termina.


Gestione del Form di Aggiunta e Rimozione Libri:
Quando il form viene inviato con il metodo POST, il codice controlla quale operazione è stata richiesta: aggiungere un libro o rimuoverne uno.
Aggiunta libro: I dati del form (titolo, autore, anno) vengono recuperati, validati (l'anno deve essere un numero positivo), e poi inseriti nel database.
Rimozione libro: Se l'utente ha selezionato di rimuovere un libro, viene eseguita una query SQL che elimina il libro con l'ID corrispondente dal database.


Integrazione dei File di Configurazione:
Viene incluso un file di configurazione (config.php) e un file di stili CSS (css.html), che conterranno impostazioni comuni e 
il layout dell'applicazione (il contenuto di questi file non è incluso nel codice fornito).


Interfaccia Utente (HTML):
Questa parte crea un form che permette all'utente di inserire il titolo, l'autore e l'anno di pubblicazione di un libro.
Quando l'utente invia il form, viene eseguita una richiesta POST alla stessa pagina (gestione.php), dove vengono gestiti i dati.


Visualizzazione dei Libri e Rimozione:
Qui vengono visualizzati tutti i libri presenti nel database in una tabella HTML.
Ogni libro ha un pulsante di rimozione che invia una richiesta POST per eliminare il libro selezionato dal database.
