#!/bin/bash

cd target && php -c ../php.ini -S 127.0.0.1:8080   &
cd attacker && php -c ../php.ini -S 127.0.0.1:8081 &

wait
