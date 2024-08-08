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
        $this->addSql('ALTER TABLE AuthStatistics ADD id INT ID NOT NULL');
        $this->addSql('ALTER TABLE AuthStatistics ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE ExpTable ADD id INT ID NOT NULL');
        $this->addSql('ALTER TABLE ExpTable ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE GuildRank ADD id INT ID NOT NULL');
        $this->addSql('ALTER TABLE GuildRank ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE IP ADD id INT ID NOT NULL');
        $this->addSql('ALTER TABLE IP ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE Ip_Log ADD id INT ID NOT NULL');
        $this->addSql('ALTER TABLE Ip_Log ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE ItemBuy_backup ADD id INT ID NOT NULL');
        $this->addSql('ALTER TABLE ItemBuy_backup ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE Log ADD id INT ID NOT NULL');
        $this->addSql('ALTER TABLE Log ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE LoginDeleted ADD pId INT ID NOT NULL');
        $this->addSql('ALTER TABLE LoginDeleted ADD PRIMARY KEY (pId)');
        $this->addSql('ALTER TABLE user_ip ADD id INT ID NOT NULL');
        $this->addSql('ALTER TABLE user_ip ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // nothing to do
    }
}
