<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210407191912 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE collections (id INT AUTO_INCREMENT NOT NULL, users_id INT NOT NULL, categories_id INT NOT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(255) DEFAULT NULL, comments VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, INDEX IDX_D325D3EE67B3B43D (users_id), INDEX IDX_D325D3EEA21214B7 (categories_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE collections ADD CONSTRAINT FK_D325D3EE67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE collections ADD CONSTRAINT FK_D325D3EEA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE collections');
    }
}
