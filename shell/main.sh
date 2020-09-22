#!/bin/bash
echo("using bash not nodejs, nodejs is reccommended.")

php -S localhost:5000 index.html
php -S localhost:5001 syinfo.php
