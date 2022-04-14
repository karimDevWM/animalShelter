<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220414073650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal ADD fk_refuge_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231FCC6DD351 FOREIGN KEY (fk_refuge_id) REFERENCES refuge (id)');
        $this->addSql('CREATE INDEX IDX_6AAB231FCC6DD351 ON animal (fk_refuge_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231FCC6DD351');
        $this->addSql('DROP INDEX IDX_6AAB231FCC6DD351 ON animal');
        $this->addSql('ALTER TABLE animal DROP fk_refuge_id');
    }
}
