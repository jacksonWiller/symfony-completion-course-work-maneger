<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200913172906 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE work DROP FOREIGN KEY FK_534E6880CB944F1A');
        $this->addSql('DROP INDEX IDX_534E6880CB944F1A ON work');
        $this->addSql('ALTER TABLE work DROP student_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE work ADD student_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE work ADD CONSTRAINT FK_534E6880CB944F1A FOREIGN KEY (student_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_534E6880CB944F1A ON work (student_id)');
    }
}
