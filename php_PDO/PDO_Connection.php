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

    public function getCartID($email): string
    {
        $pdo = $this->getPDO();
        $command = $pdo->prepare('SELECT buy_id FROM buy_products WHERE :email = buy_user;');
        $command->bindParam(':email', $email);
        $command->execute();
        $result = $command->fetchAll(PDO::FETCH_CLASS);
        return $result[0]->buy_id;
    }

    public function addToCart($id, $amount, $buy_id): void
    {
        $pdo = $this->getPDO();
        $command = $pdo->prepare('CALL insert_sale_data(:id, :amount, :buy_id);');
        $command->bindParam(':id', $id);
        $command->bindParam(':amount', $amount);
        $command->bindParam(':buy_id', $buy_id);
        $command->execute();
    }
}