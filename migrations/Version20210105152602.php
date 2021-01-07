<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210105152602 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE validation_ogrb_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE validation_ogrb (id INT NOT NULL, extrac INT NOT NULL, type_ligne VARCHAR(30) DEFAULT NULL, codens VARCHAR(30) DEFAULT NULL, code_eve VARCHAR(500) DEFAULT NULL, comvali VARCHAR(1000) DEFAULT NULL, date_eve VARCHAR(30) DEFAULT NULL, saisi VARCHAR(10) DEFAULT NULL, siren VARCHAR(1000) DEFAULT NULL, tabcle_obh1 VARCHAR(1000) DEFAULT NULL, tabcle_obh2 VARCHAR(1000) DEFAULT NULL, tabcle_obh3 VARCHAR(1000) DEFAULT NULL, tabcle_obh4 VARCHAR(1000) DEFAULT NULL, tabcle_obh5 VARCHAR(1000) DEFAULT NULL, tabcle_obh6 VARCHAR(1000) DEFAULT NULL, tabcle_obh7 VARCHAR(1000) DEFAULT NULL, tabcle_obh8 VARCHAR(1000) DEFAULT NULL, tabcle_obh9 VARCHAR(1000) DEFAULT NULL, tabcle_obh10 VARCHAR(1000) DEFAULT NULL, tabcle_obh11 VARCHAR(1000) DEFAULT NULL, presweb BOOLEAN DEFAULT NULL, nbensparcomweb INT DEFAULT NULL, nbensparcomogrb INT DEFAULT NULL, comvalin_1 VARCHAR(1000) DEFAULT NULL, identifiant VARCHAR(1000) DEFAULT NULL, saisin_1 VARCHAR(10) DEFAULT NULL, nouvguichet VARCHAR(10) DEFAULT NULL, commao VARCHAR(1000) DEFAULT NULL, ancguichet VARCHAR(10) DEFAULT NULL, prov VARCHAR(1000) DEFAULT NULL, groupe VARCHAR(1000) DEFAULT NULL, reseau VARCHAR(1000) DEFAULT NULL, enseigne VARCHAR(1000) DEFAULT NULL, nom VARCHAR(1000) DEFAULT NULL, qualite VARCHAR(1000) DEFAULT NULL, service VARCHAR(1000) DEFAULT NULL, autre VARCHAR(1000) DEFAULT NULL, codpost VARCHAR(10) DEFAULT NULL, commune VARCHAR(1000) DEFAULT NULL, villenorm VARCHAR(1000) DEFAULT NULL, ville VARCHAR(1000) DEFAULT NULL, numvoie VARCHAR(30) DEFAULT NULL, typevoie VARCHAR(30) DEFAULT NULL, nomvoie VARCHAR(1000) DEFAULT NULL, compvoie VARCHAR(1000) DEFAULT NULL, boite_postale VARCHAR(20) DEFAULT NULL, case_postale VARCHAR(20) DEFAULT NULL, cedex VARCHAR(30) DEFAULT NULL, tel VARCHAR(50) DEFAULT NULL, fax VARCHAR(20) DEFAULT NULL, comment VARCHAR(1000) NOT NULL, rubim INT DEFAULT NULL, rub1 INT DEFAULT NULL, rub2 INT DEFAULT NULL, rub3 INT DEFAULT NULL, rub4 INT DEFAULT NULL, rub5 INT DEFAULT NULL, dep VARCHAR(10) DEFAULT NULL, codinsee VARCHAR(10) DEFAULT NULL, ccial BOOLEAN DEFAULT NULL, agpart BOOLEAN DEFAULT NULL, agent BOOLEAN DEFAULT NULL, clenum VARCHAR(10) DEFAULT NULL, cleextracsansrub VARCHAR(1000) DEFAULT NULL, coloriedirect BOOLEAN DEFAULT NULL, ligneweb BOOLEAN DEFAULT NULL, identifiantposte VARCHAR(1000) DEFAULT NULL, adresseweb VARCHAR(1000) DEFAULT NULL, type_ligne_code VARCHAR(10) DEFAULT NULL, telmairie VARCHAR(50) DEFAULT NULL, horairesmairie VARCHAR(1000) DEFAULT NULL, iduser INT DEFAULT NULL, code_couleur VARCHAR(8) DEFAULT NULL, id_etat INT DEFAULT NULL, rech_google BOOLEAN DEFAULT NULL, rech_pj BOOLEAN DEFAULT NULL, rech_google_maps BOOLEAN DEFAULT NULL, rech_societe BOOLEAN DEFAULT NULL, rech_orias BOOLEAN DEFAULT NULL, lock BOOLEAN DEFAULT NULL, traite BOOLEAN DEFAULT NULL, rappel BOOLEAN DEFAULT NULL, valid_tel BOOLEAN DEFAULT NULL, a_verifier BOOLEAN DEFAULT NULL, poste BOOLEAN DEFAULT NULL, date_valide DATE DEFAULT NULL, modif_ville BOOLEAN DEFAULT NULL, datemaoouv VARCHAR(20) DEFAULT NULL, datemaoferm VARCHAR(20) DEFAULT NULL, valid_admin BOOLEAN DEFAULT NULL, dep2 VARCHAR(10) DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE validation_ogrb_id_seq CASCADE');
        $this->addSql('DROP TABLE validation_ogrb');
    }
}
