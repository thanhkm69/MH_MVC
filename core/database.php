<?php
class Database
{
    private static $instance = null; // Singleton
    private $conn;

    private function __construct()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=" . HOST . ";dbname=" . DBNAME . ";charset=utf8mb4",
                USERNAME,
                PASSWORD
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối: " . $e->getMessage());
        }
    }

    // Singleton instance
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Hàm xử lý query chung
    private function query($sql, $params = [])
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function getAll($sql, $params = [])
    {
        return $this->query($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne($sql, $params = [])
    {
        return $this->query($sql, $params)->fetch(PDO::FETCH_ASSOC);
    }

    public function execute($sql, $params = [])
    {
        return $this->query($sql, $params)->rowCount();
    }

    public function getValue($sql, $params = [])
    {
        return $this->query($sql, $params)->fetchColumn();
    }

    public function getLastInsertId()
    {
        return $this->conn->lastInsertId();
    }

    // Transaction
    public function beginTransaction()
    {
        return $this->conn->beginTransaction();
    }

    public function commit()
    {
        return $this->conn->commit();
    }

    public function rollBack()
    {
        return $this->conn->rollBack();
    }
}
