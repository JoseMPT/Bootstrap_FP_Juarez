<?php
class PDO_Connection
{
    private string $host = '127.0.0.1';
    private string $dbname = 'hardware_store_es';
    private string $port = '3308';
    private string $user = 'root';
    private string $pass = '123456789M&M';

    public function getPDO(): PDO
    {
        $text = 'mysql:host=%s;dbname=%s;port=%s;user=%s;password=%s';
        $dsn = sprintf($text, $this->host, $this->dbname, $this->port, $this->user, $this->pass);
        return new PDO($dsn);
    }
}