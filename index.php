<?php

require_once "assets/geoip2.phar";

use GeoIp2\Database\Reader;

$reader = new Reader("assets/geolite2-country.mmdb");

$record = $reader->country("36.68.54.187");

print_r($record);

print("\n");

$reader = new Reader("assets/geolite2-city.mmdb");

$record = $reader->city("36.68.54.187");

print_r($record);

print("\n");

$reader = new Reader("assets/geolite2-asn.mmdb");

$record = $reader->asn("36.68.54.187");

print_r($record);
