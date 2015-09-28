-- loading postgis into it
\c postgres;
CREATE EXTENSION postgis;
CREATE EXTENSION postgis_topology;
CREATE EXTENSION fuzzystrmatch;
CREATE EXTENSION postgis_tiger_geocoder;

-- creating the related tables
CREATE TABLE Heroes (id SERIAL, location GEOGRAPHY(POINT, 4326));

-- inserting
INSERT INTO Heroes (location) VALUES (ST_GeographyFromText('SRID=4326;POINT(45.4128061 -75.6860167)'));
