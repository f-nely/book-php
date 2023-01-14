<?php

// abre conexão com o MySQL
$conn = mysqli_connect('mysql', 'root', '<root-password>', 'book');

// define a consulta que será realizada
$query = 'SELECT code, name FROM famous';

// envia consulta ao banco de dados
$result = mysqli_query($conn, $query);
if ($result) {
    // define a consulta que será realizada
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['code'] . ' - ' . $row['name'] . '<br>';
    }
}

// fecha a conexão
mysqli_close($conn);