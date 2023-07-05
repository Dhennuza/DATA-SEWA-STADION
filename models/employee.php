<?php
class Employee
{
    // Connection
    private $conn;
    // Table
    private $db_table = "Employee";
    // Columns
    public $id;
    public $nama_pemesan;
    public $email;
    public $waktu_mulai;
    public $waktu_selesai;
    public $created;
    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    // GET ALL
    public function getEmployee()
    {
        $sqlQuery = "SELECT id, nama_pemesan, email, waktu_mulai, waktu_selesai, created FROM "
            . $this->db_table . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
    // CREATE
    public function createEmployee()
    {
        $sqlQuery = "INSERT INTO
" . $this->db_table . "
SET
nama_pemesan = :nama_pemesan, 
email = :email, 
waktu_mulai = :waktu_mulai, 
waktu_selesai = :waktu_selesai, 
created = :created";
        $stmt = $this->conn->prepare($sqlQuery);
        // sanitize
        $this->nama_pemesan=htmlspecialchars(strip_tags($this->nama_pemesan));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->waktu_mulai=htmlspecialchars(strip_tags($this->waktu_mulai));
        $this->waktu_selesai=htmlspecialchars(strip_tags($this->waktu_selesai));
        $this->created=htmlspecialchars(strip_tags($this->created));
        // bind data
        $stmt->bindParam(":nama_pemesan", $this->nama_pemesan);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":waktu_mulai", $this->waktu_mulai);
        $stmt->bindParam(":waktu_selesai", $this->waktu_selesai);
        $stmt->bindParam(":created", $this->created);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    // READ single
    public function getSingleEmployee()
    {
        $sqlQuery = "SELECT
id,
nama_pemesan, 
tanggal, 
waktu_mulai, 
waktu_selesai, 
email
FROM
" . $this->db_table . "
WHERE 
id = ?
LIMIT 0,1";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->nama_pemesan = $dataRow['nama_pemesan'];
        $this->email = $dataRow['email'];
        $this->waktu_mulai = $dataRow['waktu_mulai'];
        $this->waktu_selesai = $dataRow['waktu_selesai'];
        $this->created = $dataRow['created'];
    }
    // UPDATE
    public function updateEmployee()
    {
        $sqlQuery = "UPDATE
" . $this->db_table . "
SET
nama_pemesan = :nama_pemesan, 
tanggal = :tanggal, 
waktu_mulai = :waktu_mulai, 
waktu_selesai = :waktu_selesai, 
email = :email
WHERE 
id = :id";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->nama_pemesan=htmlspecialchars(strip_tags($this->nama_pemesan));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->waktu_mulai=htmlspecialchars(strip_tags($this->waktu_mulai));
        $this->waktu_selesai=htmlspecialchars(strip_tags($this->waktu_selesai));
        $this->created=htmlspecialchars(strip_tags($this->created));
        $this->id=htmlspecialchars(strip_tags($this->id));
        // bind data
        $stmt->bindParam(":nama_pemesan", $this->nama_pemesan);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":waktu_mulai", $this->waktu_mulai);
        $stmt->bindParam(":waktu_selesai", $this->waktu_selesai);
        $stmt->bindParam(":created", $this->created);
        $stmt->bindParam(":id", $this->id);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    // DELETE
    function deleteEmployee()
    {
        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>