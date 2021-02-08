<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210208161717 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, location_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_64C19C164D218E (location_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE concerne (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE controle (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, controle_id INT NOT NULL, concerne_id INT NOT NULL, frequence_id INT NOT NULL, name VARCHAR(255) NOT NULL, date DATE DEFAULT NULL, INDEX IDX_B26681E12469DE2 (category_id), INDEX IDX_B26681E758926A6 (controle_id), INDEX IDX_B26681E6406FEF1 (concerne_id), INDEX IDX_B26681E8E487805 (frequence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE frequence (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE location (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, designation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C164D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E758926A6 FOREIGN KEY (controle_id) REFERENCES controle (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E6406FEF1 FOREIGN KEY (concerne_id) REFERENCES concerne (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E8E487805 FOREIGN KEY (frequence_id) REFERENCES frequence (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E12469DE2');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E6406FEF1');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E758926A6');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E8E487805');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C164D218E');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE concerne');
        $this->addSql('DROP TABLE controle');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE frequence');
        $this->addSql('DROP TABLE location');
    }
}
