<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210106102110 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "user" ADD name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ADD firstname VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ALTER roles TYPE TEXT');
        $this->addSql('ALTER TABLE "user" ALTER roles DROP DEFAULT');
        $this->addSql('COMMENT ON COLUMN "user".roles IS \'(DC2Type:array)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "user" DROP name');
        $this->addSql('ALTER TABLE "user" DROP firstname');
        $this->addSql('ALTER TABLE "user" ALTER roles TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE "user" ALTER roles DROP DEFAULT');
        $this->addSql('COMMENT ON COLUMN "user".roles IS NULL');
    }
}
