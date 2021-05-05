<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210504140018 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE job (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, country VARCHAR(255) DEFAULT NULL, role VARCHAR(255) DEFAULT NULL, starting_salary NUMERIC(10, 2) DEFAULT NULL, year_starting_salary INT DEFAULT NULL, ending_salary NUMERIC(10, 2) DEFAULT NULL, year_ending_salary INT DEFAULT NULL, type_contract VARCHAR(255) DEFAULT NULL, degrees_required VARCHAR(255) DEFAULT NULL, years_experience INT DEFAULT NULL, INDEX IDX_FBD8E0F8A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, gender VARCHAR(255) DEFAULT NULL, ethnicity VARCHAR(255) DEFAULT NULL, degrees VARCHAR(255) DEFAULT NULL, other_sources_income VARCHAR(255) DEFAULT NULL, years_experience INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_job (id INT AUTO_INCREMENT NOT NULL, role VARCHAR(255) DEFAULT NULL, starting_salary NUMERIC(10, 2) DEFAULT NULL, contract_starting_salary VARCHAR(255) DEFAULT NULL, year_starting_salary INT DEFAULT NULL, ending_salary NUMERIC(10, 2) DEFAULT NULL, contract_ending_salary VARCHAR(255) DEFAULT NULL, year_ending_salary INT DEFAULT NULL, type_contract VARCHAR(255) DEFAULT NULL, years_experience INT DEFAULT NULL, gender VARCHAR(255) DEFAULT NULL, ethnicity VARCHAR(255) DEFAULT NULL, degrees_required VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F8A76ED395');
        $this->addSql('DROP TABLE job');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_job');
    }
}
