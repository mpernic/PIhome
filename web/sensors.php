<?php

include("config.php");

try {
    $conn = new PDO("mysql:host=$db_server;dbname=$db_db", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT id, value, timestamp FROM sensors WHERE sensor=? ORDER BY timestamp DESC LIMIT 100");
    $stmt->execute(array($_REQUEST['page']));

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

echo '
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Value</th>
        <th>Timestamp</th>
      </tr>
    </thead>
    <tbody>
    ';


    foreach($stmt->fetchAll() as $k) {
        echo "
        <tr>
            <td>".$k['id']."</td>
            <td>".$k['value']."</td>
            <td>".$k['timestamp']."</td>
        </tr>
        ";
    }


echo '
    </tbody>
  </table>
    ';

}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

