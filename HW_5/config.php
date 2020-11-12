<?php

const SERVER = "localhost";
const DB = "phpLevel1";
const LOGIN = "root";
const PASSWORD = "root";

$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB) or die("Ошибка соединения");