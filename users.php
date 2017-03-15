<?php

include './BDD.php';

function getSubscribed($id) {
    $sql = "SELECT u.idUser, s.idUser_subscribed FROM users as u, subscribers as s WHERE u.idUser = s.idUser_subscriber AND u.idUser =:id";
    try {
        $db = getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("id", $id);
        $stmt->execute();
        $subscribed = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($subscribed);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}



?>