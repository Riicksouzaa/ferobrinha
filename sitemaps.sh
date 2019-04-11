#!/usr/bin/env bash
while [ true ]; do
    /c/xampp/php/php.exe -f sitemap.php >> sitemap.log;
    sleep 30;
done