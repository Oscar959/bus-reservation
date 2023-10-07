<?php


function connectDbFunction(){
    return new PDO("mysql:host=localhost; dbname=bus_reservation; charset=utf8", "root", "");
}