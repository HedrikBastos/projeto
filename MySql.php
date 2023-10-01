<?php
class MySql
{
    private static $pdo;

    public static function conectar()
    {
        if (self::$pdo == null) {
            try {
                self::$pdo = new PDO("mysql:host=localhost; dbname= ", 'root', '');
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo '<h2> Erro ao conectar </h2>' .$e->getMessage();
            }
        }
        return self::$pdo;
    }
}
