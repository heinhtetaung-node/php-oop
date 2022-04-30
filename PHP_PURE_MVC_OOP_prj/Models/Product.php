<?php

require_once('Crud.php');
require_once('DbConnect.php');

class Product extends DbConnect {
    use Crud;
}