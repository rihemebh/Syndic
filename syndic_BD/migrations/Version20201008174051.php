<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201008174051 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE garage (id INT AUTO_INCREMENT NOT NULL, number INT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE house (id INT AUTO_INCREMENT NOT NULL, appart VARCHAR(255) NOT NULL, immeuble VARCHAR(255) NOT NULL, date_achat DATE NOT NULL, dette DOUBLE PRECISION NOT NULL, price1 DOUBLE PRECISION NOT NULL, price2 DOUBLE PRECISION NOT NULL, price3 DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE owner (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, birthday DATE NOT NULL, age INT NOT NULL, cin INT NOT NULL, tel INT NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transaction (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE worker (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, age INT NOT NULL, birthday DATE NOT NULL, cin INT NOT NULL, num_tel INT NOT NULL, adr VARCHAR(255) NOT NULL, date_recrut DATE NOT NULL, contract_type VARCHAR(255) NOT NULL, job VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE garage');
        $this->addSql('DROP TABLE house');
        $this->addSql('DROP TABLE owner');
        $this->addSql('DROP TABLE transaction');
        $this->addSql('DROP TABLE worker');
    }
}
