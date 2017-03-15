<?php

function getConnection() {
    $dbhost="mysql.montpellier.epsi.fr";
    $dbuser="c.boissiere";
    $dbpass="epsi857FHG";
    $dbname="Babeltest";
    $dbh = new PDO('mysql:host='.$dbhost.';port=3306;dbname='.$dbname.'', $dbuser, $dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

?>