-- Make A Way Foundation Website: Database Tables
-- Database: SQLite (database/database.sqlite), built with Laravel migrations
-- Relationship: one event can have many volunteers (events 1 : N volunteers)

CREATE TABLE "events" (
    "id"          INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "title"       VARCHAR NOT NULL,
    "event_date"  DATE    NOT NULL,
    "event_time"  VARCHAR,
    "location"    VARCHAR,
    "description" TEXT,
    "created_at"  DATETIME,
    "updated_at"  DATETIME
);

CREATE TABLE "volunteers" (
    "id"          INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "name"        VARCHAR NOT NULL,
    "email"       VARCHAR NOT NULL,
    "phone"       VARCHAR,
    "event_id"    INTEGER,
    "message"     TEXT,
    "created_at"  DATETIME,
    "updated_at"  DATETIME,
    FOREIGN KEY ("event_id") REFERENCES "events" ("id") ON DELETE SET NULL
);
