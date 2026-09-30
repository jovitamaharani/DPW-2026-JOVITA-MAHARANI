<?php
$host = getenv('DB_HOST') ?: "aws-0-ap-southeast-1.pooler.supabase.com";
$port = getenv('DB_PORT') ?: "5432";
$db   = getenv('DB_NAME') ?: "postgres";
$user = getenv('DB_USER') ?: "postgres.cyugcjlaklpqttejrqfp";
$pass = getenv('DB_PASS') ?: "PASSWORD_SUPABASE_KAMU";

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}