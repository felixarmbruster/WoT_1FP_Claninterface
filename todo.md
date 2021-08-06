# TODO-Liste

DIes ist die Liste mit offenen Punkten. 
Falls es Fragen zu einzelnen Punkten gibt bitte die Issues in GitHub nutzen.

## Dokumentation

- Vollständige "first run" Dokumentation.
  - es ist davon auszugehen, dass `Apache`, `PHP` und `MySQL` (`MariaDB`, `HeidiSQL`) bereits installiert ist.
  - wir gehen von einem System mit `Cron` aus
- Codedokumentation
  - Klassenbeschreibungen
  - Funktionsbeschreibungen
  - komplexe Abschnitte innerhalb von Funktionen


## Funktionen

- WN8 berechnung auf Spielerbasis nach der "schnellen" Formel [GitHub](https://github.com/artur-stepien/wot-wn8)
- Aufstellen eines idealen Teams
  - Eingabe: gewünschte Panzer und verfügbare Spieler
  - Ergebnis möglichst ideale Zuordnung der beiden 
- Eventanmeldungen: Nachdem die Eventteilnahme schon verfügbar ist. soll man sich jetzt auch voranmelden könne.
  - Die Zusage erfolgt in 'Ja', 'Nein', 'Vielleicht'
  - Es gibt eine Übersicht über die Teilnehmer der kommenden Veranstaltungen
    - Einzelne Spieler (eventuell mit der Abweichung zwischen den letzten Anmeldungen und tatsächlichen Erscheinen)
    - Zusammengefasst nach Spieler, Feldkommandanten, und Clanleitung
- Spieler vergleichen
- Nutzerverwaltung
- DSGVO-Dashboard

## Technisches

- Umbau der Table `statistics` in ein Format mit von bis Datum
  - Einsparung aller Datensätze bei denen nur das Datum sich ändert. (ca. jeder 25. Datensatz ist wirklich neu)
  - Anpassungen der internen Funktionen auf das neue Format
  - Anpassungen des import Script
- Verbesserung des CrossSite-Scripting Schutzes (`h()`)
- Übersetzung des Portals

