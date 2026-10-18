# 02 – Livewire Full-Page-Komponenten

**KI erlaubt:** Nein. Nutze die offizielle Doku:
- Livewire: https://livewire.laravel.com/docs (Abschnitte *Components*, *Pages*, *Properties*, *Actions*)

**Zeit:** ca. 2–3 Stunden

## Ausgangslage

Das Projekt hat Laravel 13 und Livewire 4 bereits installiert. Ein Layout gibt es auch schon: `resources/views/layouts/app.blade.php`.

Bei uns sind die meisten Seiten **Full-Page-Komponenten**. Das heisst, eine Livewire-Komponente ist direkt die ganze Seite und wird in `routes/web.php` mit `Route::livewire(...)` registriert, ohne Controller.

## Starten

```bash
composer run setup   # nur beim ersten Mal
npm run dev          # Vite: baut CSS/JS bei jeder Änderung neu
```

Dann http://02-livewire-fullpage.test im Browser öffnen (Herd).

## Vorgaben vom Team

Damit unsere automatischen Tests deine Lösung prüfen können, halte dich bitte an diese Namen:

| | Komponente | URL | Properties | Methoden |
|---|---|---|---|---|
| 2.1 | `pages::zaehler` | `/zaehler` | `$count` | `increment`, `decrement`, `resetCount` |
| 2.2 | `pages::kunden` | `/kunden` | `$suche`, `$branche` | – |

Tipp: `php artisan make:livewire pages::zaehler`

---

## Aufgabe 2.1 – Zähler

Baue eine Seite `/zaehler` mit:
- einer grossen Zahl in der Mitte (Startwert 0)
- einem Button **+** (erhöht um 1) und einem Button **−** (verringert um 1)
- einem Link oder Button **Zurücksetzen** (setzt auf 0)

Regeln:
- Der Zähler darf **nie unter 0** fallen.
- Der **−**-Button ist deaktiviert, wenn der Zähler auf 0 steht.
- Der Browser-Tab zeigt den Titel „Zähler“.

## Aufgabe 2.2 – Kundensuche

In `app/Support/Kundenliste.php` gibt es eine fixe Liste mit 15 Kunden. Eine Datenbank brauchst du hier noch nicht.

Baue eine Seite `/kunden` mit:
- einer **Tabelle** mit allen Kunden (Name, Ort, Branche)
- einem **Suchfeld**: Während man tippt, wird nach **Name oder Ort** gefiltert, ohne dass die Seite neu lädt
- Die Suche ignoriert Gross-/Kleinschreibung (`zürich` findet „Zürich“)
- einem **Dropdown „Branche“** (Alle / Gastronomie / Handwerk / …), das zusätzlich filtert
- einer Anzeige „**X von 15 Kunden**“
- der Meldung „**Keine Kunden gefunden.**“, wenn nichts passt

---

## Zusatzaufgaben

- Die Suche soll erst 300 ms nach dem letzten Tastendruck auslösen (Stichwort *debounce*).
- Suchbegriff und Branche stehen in der URL (`/kunden?suche=bern`), damit man den Link teilen kann.
- Klick auf den Spaltentitel „Name“ sortiert A–Z bzw. Z–A.
- Schreibe einen Test in `tests/Feature/`, der deinen Zähler prüft.

## Abgabe

Committe deine Arbeit und erkläre uns:
1. Was passiert technisch, wenn man auf **+** klickt? (Browser → Server → Browser)
2. Wo liegt der Zählerstand: im Browser oder auf dem Server?
3. Was war schwierig?
