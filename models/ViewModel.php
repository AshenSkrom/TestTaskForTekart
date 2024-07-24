<?
class ViewModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "c99978ri_task", "TestTask123", "c99978ri_task");
        $this->conn->query("SET NAMES 'utf8'");
    }

    public function getNewsById($id)
    {
        $sql = "SELECT * FROM news WHERE id = " . $id;
        return $this->conn->query($sql)->fetch_assoc();
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
