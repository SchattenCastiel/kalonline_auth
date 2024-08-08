<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240807134759 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE AuthStatisticsEntity ADD id INT IDENTITY NOT NULL');
        $this->addSql('ALTER TABLE AuthStatisticsEntity ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE ExpTableEntity ADD id INT IDENTITY NOT NULL');
        $this->addSql('ALTER TABLE ExpTableEntity ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE GuildRankEntity ADD id INT IDENTITY NOT NULL');
        $this->addSql('ALTER TABLE GuildRankEntity ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE IPEntity ADD id INT IDENTITY NOT NULL');
        $this->addSql('ALTER TABLE IPEntity ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE Ip_Log ADD id INT IDENTITY NOT NULL');
        $this->addSql('ALTER TABLE Ip_Log ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE ItemBuy_backup ADD id INT IDENTITY NOT NULL');
        $this->addSql('ALTER TABLE ItemBuy_backup ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE LogEntity ADD id INT IDENTITY NOT NULL');
        $this->addSql('ALTER TABLE LogEntity ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE LoginDeletedEntity ADD pId INT IDENTITY NOT NULL');
        $this->addSql('ALTER TABLE LoginDeletedEntity ADD PRIMARY KEY (pId)');
        $this->addSql('ALTER TABLE user_ip ADD id INT IDENTITY NOT NULL');
        $this->addSql('ALTER TABLE user_ip ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // nothing to do
    }
}
