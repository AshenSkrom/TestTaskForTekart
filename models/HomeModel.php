<?

class HomeModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli("c99978ri.beget.tech", "c99978ri_task@localhost", "TestTask123", "c99978ri_task");
        $this->conn->query("SET NAMES 'utf8'");
    }

    public function getLastNews()
    {
        $sql = "SELECT * FROM news ORDER BY date DESC LIMIT 1";
        return $this->conn->query($sql)->fetch_assoc();
    }

    public function getNews($offset, $items_per_page)
    {
        $sql = "SELECT * FROM news ORDER BY date DESC LIMIT $items_per_page OFFSET $offset";
        return $this->conn->query($sql);
    }

    public function getTotalNewsCount()
    {
        $sql = "SELECT COUNT(id) AS total_count FROM news";
        return $this->conn->query($sql)->fetch_assoc()['total_count'];
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
