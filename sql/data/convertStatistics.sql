/* Erzeugt die die neue Statistik mit von (date) bis (date_b) logik aus vorhandener statistics Tabelle

   Vorgehen:
   1. bstatistics anlegen (Struktur von statistics) und date_b einfügen.
   2. diesen script ausführen
   3. statistics mit bstatistics überschreiben
   */
INSERT INTO wotclan.bstatistics (
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