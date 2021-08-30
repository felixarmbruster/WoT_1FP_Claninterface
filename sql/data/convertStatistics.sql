/*
Erzeugt die die neue Statistik mit von (date) bis (date_b) logik aus vorhandener statistics Tabelle

   Vorgehen:
   1. Neue Tabelle anlegen (bstatistics)
   2. Tabelle anpassen  (erweitern um date_b und Index)
   3. Daten transformieren
   4. Tabelle umbenennen in statistics (alt Daten als statistics_old

*/


/* NEUE Tabelle anlegen */
CREATE TABLE bstatistics LIKE statistics;

/* Tabelle anpassen */
ALTER TABLE bstatistics
    ADD COLUMN date_b datetime NOT NULL AFTER date,
    ADD INDEX statistics_date_date_b (date, date_b) USING BTREE;

/* Daten transformieren */
INSERT INTO bstatistics (
     player_id,
     tank_id,
     date,
     date_b,
     battletype,
     damage,
     spotted,
     frags,
     droppedCapturePoints,
     battle,
     win,
     in_garage,
     shots,
     xp,
     hits,
     survived,
     tanking,
     created,
     modified
)
SELECT
    player_id,
    tank_id,
    min(date) AS date,
    max( date ) AS date_b,
    battletype,
    damage,
    spotted,
    frags,
    droppedCapturePoints,
    battle,
    win,
    in_garage,
    shots,
    xp,
    hits,
    survived,
    tanking,
    min(created) as created,
    max(modified) as modified
FROM
    statistics
GROUP BY
    player_id,
    tank_id,
    battletype,
    battletype,
    damage,
    spotted,
    frags,
    droppedCapturePoints,
    battle,
    win,
    in_garage,
    shots,
    xp,
    hits,
    survived,
    tanking;

/* Tabellen umbenennen */
RENAME TABLE statistics TO statistics_old;
RENAME TABLE bstatistics TO statistics;