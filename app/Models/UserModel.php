<?php
class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance(); // singleton
    }
    function getAllUser()
    {
        $sql = "SELECT * FROM user ORDER BY id DESC";
        return $this->db->getAll($sql);
    }
    function getOneUser($id)
    {
        $sql = "SELECT * FROM user WHERE id = ?";
        return $this->db->getOne($sql, [$id]);
    }
    function createUser($name, $email, $password, $phone = NULL, $img = "img.webp")
    {
        $sql = "INSERT INTO user(name,email,password,phone,img) VALUES (?,?,?,?,?)";
        return $this->db->execute($sql, [$name, $email, $password, $phone, $img]);
    }
    function updateUser($name, $email, $password, $phone = NULL, $img = "img.webp", $id)
    {
        $sql = "UPDATE user SET name = ?,email=?,password=?,phone=?,img=? WHERE id = ?";
        return $this->db->execute($sql, [$name, $email, $password, $phone, $img, $id]);
    }
    function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE id = ?";
        return $this->db->execute($sql, [$id]);
    }
}
?>
