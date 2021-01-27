<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210127143959 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` ADD client_id_id INT NOT NULL, ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398DC2902E0 FOREIGN KEY (client_id_id) REFERENCES customer (id)');
        $this->addSql('CREATE INDEX IDX_F5299398DC2902E0 ON `order` (client_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398DC2902E0');
        $this->addSql('DROP INDEX IDX_F5299398DC2902E0 ON `order`');
        $this->addSql('ALTER TABLE `order` DROP client_id_id, DROP created_at, DROP updated_at');
    }
}
