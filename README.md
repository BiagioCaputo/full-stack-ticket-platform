# Laravel-Tickets Brief

## **Introduzione**

---

-   Realizziamo un’applicazione in Laravel che visualizza e permette di gestire e ricercare in maniera interattiva dei Ticket di supporto. E’ prevista una sola tipologia di utente: admin. L’admin ha accesso alla lista degli operatori, dei ticket e delle relative categorie.
-   Sui ticket sono possibili le seguenti operazioni: creazione, aggiornamento dello stato e assegnazione ad un operatore. Un ticket deve essere obbligatoriamente assegnato ad un operatore **disponibile** in fase di creazione.
-   Per questa fase non è prevista alcuna visualizzazione avanzata dei ticket se non una semplice lista.

## **Tipi di Utenti**

---

-   **Utente registrato UR** → un utente che ha effettuato la registrazione come admin

## Milestone

---

-   [ ] **Milestone** 1️⃣ → Sviluppare un diagramma ER per le entità e le relazioni dell’applicativo.
-   [ ] **Milestone** 2️⃣ → Seguendo il diagramma creato nella prima milestone
    -   Creiamo e popoliamo il database attraverso migrations e seeders
        -   [ ] Migrations (admin, ticket, operatore, categoria)
        -   [ ] Factory (ticket, operator)
    -   Caratteristiche entità Ticket
        -   id
        -   data
        -   titolo
        -   descrizione
        -   categoria
        -   operatore
        -   stato (assigned, work in progress, closed)
-   [ ] **Milestone** 3️⃣ → Realizziamo un setup dell’applicativo con back-office e autenticazione riservata ad un unico utente amministratore: l’admin.
-   [ ] **Milestone** 4️⃣ → Aggiungiamo la possibilità di creare un nuovo ticket, a cui andrà obbligatoriamente assegnata anche una categoria, un operatore e uno stato. In questa fase nella selezione possiamo includere tutti gli operatori.
    -   **Attenzione →** vedi Milestone \*\*\*\*7️⃣
        -   Un ticket deve essere obbligatoriamente assegnato ad un operatore **disponibile** in fase di creazione ➜ One To Many (un ticket lo posso assegnare a piu operatori)
        -   Controllo sugli operatori, se hanno già un ticket attivo non sono piu selezionabili
-   [ ] **Milestone** 5️⃣ → Realizziamo una pagina di dettaglio del singolo ticket, con la visualizzazione di tutte le informazioni contenute in esso (facoltativa)
-   [ ] **Milestone** 6️⃣ → Aggiungiamo la possibilità di modificare lo stato di un ticket (ad esempio da “work in progress” a “closed”). Le altre proprietà non possono essere modificate.
-   [ ] **Milestone** 7️⃣ → In fase di assegnazione di un ticket, aggiungiamo la verifica della disponibilità dell’operatore. Un operatore è occupato quando:
    -   ha un ticket attivo già assegnato, oppure
    -   ha il flag non disponibile attivo

---

---

-   [ ] **Bonus** 1️⃣ **→** Alla creazione e alla chiusura del ticket viene inviata una mail all’operatore che lo informi dell’avvenuta creazione o dell’avvenuta chiusura del ticket in oggetto.
-   [ ] **Bonus** 2️⃣ **→** Aggiungiamo delle note aggiuntive (testuali) alla risorsa ticket, da poter visualizzare nella pagina di dettaglio.

## **Lista delle pagine**

---

-   **Homepage → non ha caratteristiche particolari**
-   **Register Page** → ci si può registrare
-   **Login Page** → si può effettuare l’accesso
-   **Dashboard Utente Registrato →** permette la gestione dei propri dati
    -   **Add A New Ticket** | **Create & Store** → crea un nuovo ticket
    -   **Ticket Page | Show→ permette di vedere il ticket nel dettaglio**
    -   **Tickets Page** | **Index** → tabella dei ticket
