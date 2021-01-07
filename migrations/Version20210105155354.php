<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210105155354 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE validation_ogra_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE validation_ogra (id INT NOT NULL, extrac INT DEFAULT NULL, type_ligne VARCHAR(30) DEFAULT NULL, codens VARCHAR(30) DEFAULT NULL, code_eve VARCHAR(500) DEFAULT NULL, comvali VARCHAR(1000) DEFAULT NULL, comvaliorias VARCHAR(1000) DEFAULT NULL, date_eve VARCHAR(30) DEFAULT NULL, saisi VARCHAR(10) DEFAULT NULL, telidadrdiff BOOLEAN DEFAULT NULL, com_site VARCHAR(1000) DEFAULT NULL, provenance VARCHAR(100) DEFAULT NULL, numorias VARCHAR(100) DEFAULT NULL, type_raporias VARCHAR(100) DEFAULT NULL, codenstabcleb VARCHAR(100) DEFAULT NULL, videtab VARCHAR(30) DEFAULT NULL, siren VARCHAR(100) DEFAULT NULL, cle_oah VARCHAR(100) DEFAULT NULL, comvalin_1 VARCHAR(1000) DEFAULT NULL, bid VARCHAR(1) DEFAULT NULL, identifiant2017 VARCHAR(1000) DEFAULT NULL, saisin_1 VARCHAR(10) DEFAULT NULL, pstweb BOOLEAN DEFAULT NULL, nbresparcomweb INT DEFAULT NULL, resssagt VARCHAR(100) DEFAULT NULL, res1 VARCHAR(100) DEFAULT NULL, res2 VARCHAR(100) DEFAULT NULL, res3 VARCHAR(100) DEFAULT NULL, res4 VARCHAR(100) DEFAULT NULL, res5 VARCHAR(100) DEFAULT NULL, res6 VARCHAR(100) DEFAULT NULL, res7 VARCHAR(100) DEFAULT NULL, res8 VARCHAR(100) DEFAULT NULL, enseigne1 VARCHAR(500) DEFAULT NULL, enseigne2 VARCHAR(500) DEFAULT NULL, enseigne3 VARCHAR(500) DEFAULT NULL, nomnorm1 VARCHAR(500) DEFAULT NULL, nomnorm2 VARCHAR(500) DEFAULT NULL, nomnorm3 VARCHAR(500) DEFAULT NULL, nomnorm4 VARCHAR(500) DEFAULT NULL, nomnorm5 VARCHAR(500) DEFAULT NULL, nomnorm6 VARCHAR(500) DEFAULT NULL, nomnorm7 VARCHAR(500) DEFAULT NULL, service VARCHAR(500) DEFAULT NULL, codpost VARCHAR(10) DEFAULT NULL, commune VARCHAR(500) DEFAULT NULL, villenorm VARCHAR(500) DEFAULT NULL, ville VARCHAR(500) DEFAULT NULL, numvoie VARCHAR(30) DEFAULT NULL, typevoie VARCHAR(50) DEFAULT NULL, nomvoie VARCHAR(500) DEFAULT NULL, compvoie VARCHAR(500) DEFAULT NULL, tel VARCHAR(50) DEFAULT NULL, fax VARCHAR(50) DEFAULT NULL, cleextrac VARCHAR(255) DEFAULT NULL, tabcleb1 VARCHAR(255) DEFAULT NULL, tabcleb2 VARCHAR(255) DEFAULT NULL, tabcleb3 VARCHAR(255) DEFAULT NULL, tabcleb4 VARCHAR(255) DEFAULT NULL, tabcleb5 VARCHAR(255) DEFAULT NULL, tabcleb6 VARCHAR(255) DEFAULT NULL, tabcleb7 VARCHAR(255) DEFAULT NULL, tabcleb8 VARCHAR(255) DEFAULT NULL, tabcleb9 VARCHAR(255) DEFAULT NULL, tabcleb10 VARCHAR(255) DEFAULT NULL, tabcleb11 VARCHAR(255) DEFAULT NULL, tabcleb12 VARCHAR(255) DEFAULT NULL, tabcleb13 VARCHAR(255) DEFAULT NULL, cleextracnorm VARCHAR(255) DEFAULT NULL, nomcomplet VARCHAR(255) DEFAULT NULL, boite_postale VARCHAR(50) DEFAULT NULL, case_postale VARCHAR(50) DEFAULT NULL, cedex VARCHAR(30) DEFAULT NULL, dep VARCHAR(10) DEFAULT NULL, codinsee VARCHAR(10) DEFAULT NULL, bubagentass BOOLEAN DEFAULT NULL, rubsocass BOOLEAN DEFAULT NULL, rubcourtier BOOLEAN DEFAULT NULL, rubmutuelles BOOLEAN DEFAULT NULL, clenum VARCHAR(10) DEFAULT NULL, commentaire VARCHAR(1000) DEFAULT NULL, commentcorr VARCHAR(1000) DEFAULT NULL, coloriedirect BOOLEAN DEFAULT NULL, adresseweb VARCHAR(1000) DEFAULT NULL, type_ligne_code VARCHAR(1) DEFAULT NULL, resorias1 VARCHAR(500) DEFAULT NULL, resorias2 VARCHAR(500) DEFAULT NULL, resorias3 VARCHAR(500) DEFAULT NULL, resorias4 VARCHAR(500) DEFAULT NULL, resorias5 VARCHAR(500) DEFAULT NULL, resorias6 VARCHAR(500) DEFAULT NULL, telmairie VARCHAR(50) DEFAULT NULL, horairesmairie VARCHAR(1000) DEFAULT NULL, iduser INT DEFAULT NULL, code_couleur VARCHAR(8) DEFAULT NULL, id_etat INT DEFAULT NULL, rech_google BOOLEAN DEFAULT NULL, rech_pj BOOLEAN DEFAULT NULL, rech_google_maps BOOLEAN DEFAULT NULL, rech_societe BOOLEAN DEFAULT NULL, rech_orias BOOLEAN DEFAULT NULL, lock BOOLEAN DEFAULT NULL, traite BOOLEAN DEFAULT NULL, rappel BOOLEAN DEFAULT NULL, valid_tel BOOLEAN DEFAULT NULL, ss_agent BOOLEAN DEFAULT NULL, a_verifier BOOLEAN DEFAULT NULL, date_valide DATE DEFAULT NULL, modif_ville BOOLEAN DEFAULT NULL, datemaoouv VARCHAR(20) DEFAULT NULL, datemaoferm VARCHAR(20) DEFAULT NULL, valid_admin BOOLEAN DEFAULT NULL, dep2 VARCHAR(10) DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE validation_ogra_id_seq CASCADE');
        $this->addSql('DROP TABLE validation_ogra');
    }
}
