<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200911174837 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE work (id INT AUTO_INCREMENT NOT NULL, professor_id INT NOT NULL, student_id INT DEFAULT NULL, name VARCHAR(50) NOT NULL, area VARCHAR(20) NOT NULL, topic VARCHAR(20) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_534E68807D2D84D5 (professor_id), INDEX IDX_534E6880CB944F1A (student_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE work ADD CONSTRAINT FK_534E68807D2D84D5 FOREIGN KEY (professor_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE work ADD CONSTRAINT FK_534E6880CB944F1A FOREIGN KEY (student_id) REFERENCES users (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE work');
    }
}
