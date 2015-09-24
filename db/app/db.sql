# creating the database
CREATE DATABASE stuff;

# loading postgis into it
\c stuff;
CREATE EXTENSION postgis;
CREATE EXTENSION postgis_topology;
CREATE EXTENSION fuzzystrmatch;
CREATE EXTENSION postgis_tiger_geocoder;

# creating the related tables
CREATE TABLE Heroes (id INT NOT NULL, location GEOGRAPHY(POINT, 4326));
