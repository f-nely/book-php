<?php

// abre conexão com o MySQL
$conn = mysqli_connect('mysql', 'root', '<root-password>', 'book');

// insere vários registros
mysqli_query($conn, "INSERT INTO famous (code, name) VALUES (1, 'Érico Veríssimo')");
mysqli_query($conn, "INSERT INTO famous (code, name) VALUES (2, 'John Lennon')");
mysqli_query($conn, "INSERT INTO famous (code, name) VALUES (3, 'Mahatma Gandhi')");
mysqli_query($conn, "INSERT INTO famous (code, name) VALUES (4, 'Ayrton Senna')");
mysqli_query($conn, "INSERT INTO famous (code, name) VALUES (5, 'Anita Garibaldi')");
mysqli_query($conn, "INSERT INTO famous (code, name) VALUES (6, 'Mário Quintana')");

// fecha a conexão
mysqli_close($conn);
