<?php

namespace App\Entity;

use App\Repository\ValidationOgraRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValidationOgraRepository::class)
 */
class ValidationOgra
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $extrac;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $type_ligne;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $codens;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $code_eve;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $comvali;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $comvaliorias;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $date_eve;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $saisi;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $telidadrdiff;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $com_site;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $provenance;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $numorias;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $type_raporias;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $codenstabcleb;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $videtab;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $siren;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $cle_oah;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $comvalin_1;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $bid;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $identifiant2017;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $saisin_1;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $pstweb;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbresparcomweb;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $resssagt;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $res1;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $res2;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $res3;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $res4;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $res5;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $res6;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $res7;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $res8;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $enseigne1;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $enseigne2;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $enseigne3;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $nomnorm1;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $nomnorm2;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $nomnorm3;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $nomnorm4;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $nomnorm5;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $nomnorm6;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $nomnorm7;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $service;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $codpost;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $commune;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $villenorm;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $numvoie;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $typevoie;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $nomvoie;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $compvoie;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cleextrac;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb10;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb11;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb12;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcleb13;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cleextracnorm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomcomplet;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $boite_postale;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $case_postale;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $cedex;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $dep;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $codinsee;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $bubagentass;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rubsocass;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rubcourtier;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rubmutuelles;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $clenum;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $commentcorr;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $coloriedirect;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $adresseweb;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $type_ligne_code;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $resorias1;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $resorias2;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $resorias3;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $resorias4;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $resorias5;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $resorias6;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $telmairie;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $horairesmairie;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $iduser;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code_couleur;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_etat;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rech_google;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rech_pj;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rech_google_maps;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rech_societe;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rech_orias;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $lock;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $traite;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rappel;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $valid_tel;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ss_agent;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $a_verifier;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_valide;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $modif_ville;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $datemaoouv;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $datemaoferm;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $valid_admin;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $dep2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExtrac(): ?int
    {
        return $this->extrac;
    }

    public function setExtrac(?int $extrac): self
    {
        $this->extrac = $extrac;

        return $this;
    }

    public function getTypeLigne(): ?string
    {
        return $this->type_ligne;
    }

    public function setTypeLigne(?string $type_ligne): self
    {
        $this->type_ligne = $type_ligne;

        return $this;
    }

    public function getCodens(): ?string
    {
        return $this->codens;
    }

    public function setCodens(?string $codens): self
    {
        $this->codens = $codens;

        return $this;
    }

    public function getCodeEve(): ?string
    {
        return $this->code_eve;
    }

    public function setCodeEve(?string $code_eve): self
    {
        $this->code_eve = $code_eve;

        return $this;
    }

    public function getComvali(): ?string
    {
        return $this->comvali;
    }

    public function setComvali(?string $comvali): self
    {
        $this->comvali = $comvali;

        return $this;
    }

    public function getComvaliorias(): ?string
    {
        return $this->comvaliorias;
    }

    public function setComvaliorias(?string $comvaliorias): self
    {
        $this->comvaliorias = $comvaliorias;

        return $this;
    }

    public function getDateEve(): ?string
    {
        return $this->date_eve;
    }

    public function setDateEve(?string $date_eve): self
    {
        $this->date_eve = $date_eve;

        return $this;
    }

    public function getSaisi(): ?string
    {
        return $this->saisi;
    }

    public function setSaisi(?string $saisi): self
    {
        $this->saisi = $saisi;

        return $this;
    }

    public function getTelidadrdiff(): ?bool
    {
        return $this->telidadrdiff;
    }

    public function setTelidadrdiff(?bool $telidadrdiff): self
    {
        $this->telidadrdiff = $telidadrdiff;

        return $this;
    }

    public function getComSite(): ?string
    {
        return $this->com_site;
    }

    public function setComSite(?string $com_site): self
    {
        $this->com_site = $com_site;

        return $this;
    }

    public function getProvenance(): ?string
    {
        return $this->provenance;
    }

    public function setProvenance(?string $provenance): self
    {
        $this->provenance = $provenance;

        return $this;
    }

    public function getNumorias(): ?string
    {
        return $this->numorias;
    }

    public function setNumorias(?string $numorias): self
    {
        $this->numorias = $numorias;

        return $this;
    }

    public function getTypeRaporias(): ?string
    {
        return $this->type_raporias;
    }

    public function setTypeRaporias(?string $type_raporias): self
    {
        $this->type_raporias = $type_raporias;

        return $this;
    }

    public function getCodenstabcleb(): ?string
    {
        return $this->codenstabcleb;
    }

    public function setCodenstabcleb(?string $codenstabcleb): self
    {
        $this->codenstabcleb = $codenstabcleb;

        return $this;
    }

    public function getVidetab(): ?string
    {
        return $this->videtab;
    }

    public function setVidetab(?string $videtab): self
    {
        $this->videtab = $videtab;

        return $this;
    }

    public function getSiren(): ?string
    {
        return $this->siren;
    }

    public function setSiren(?string $siren): self
    {
        $this->siren = $siren;

        return $this;
    }

    public function getCleOah(): ?string
    {
        return $this->cle_oah;
    }

    public function setCleOah(?string $cle_oah): self
    {
        $this->cle_oah = $cle_oah;

        return $this;
    }

    public function getComvalin1(): ?string
    {
        return $this->comvalin_1;
    }

    public function setComvalin1(?string $comvalin_1): self
    {
        $this->comvalin_1 = $comvalin_1;

        return $this;
    }

    public function getBid(): ?string
    {
        return $this->bid;
    }

    public function setBid(?string $bid): self
    {
        $this->bid = $bid;

        return $this;
    }

    public function getIdentifiant2017(): ?string
    {
        return $this->identifiant2017;
    }

    public function setIdentifiant2017(?string $identifiant2017): self
    {
        $this->identifiant2017 = $identifiant2017;

        return $this;
    }

    public function getSaisin1(): ?string
    {
        return $this->saisin_1;
    }

    public function setSaisin1(?string $saisin_1): self
    {
        $this->saisin_1 = $saisin_1;

        return $this;
    }

    public function getPstweb(): ?bool
    {
        return $this->pstweb;
    }

    public function setPstweb(?bool $pstweb): self
    {
        $this->pstweb = $pstweb;

        return $this;
    }

    public function getNbresparcomweb(): ?int
    {
        return $this->nbresparcomweb;
    }

    public function setNbresparcomweb(?int $nbresparcomweb): self
    {
        $this->nbresparcomweb = $nbresparcomweb;

        return $this;
    }

    public function getResssagt(): ?string
    {
        return $this->resssagt;
    }

    public function setResssagt(?string $resssagt): self
    {
        $this->resssagt = $resssagt;

        return $this;
    }

    public function getRes1(): ?string
    {
        return $this->res1;
    }

    public function setRes1(?string $res1): self
    {
        $this->res1 = $res1;

        return $this;
    }

    public function getRes2(): ?string
    {
        return $this->res2;
    }

    public function setRes2(?string $res2): self
    {
        $this->res2 = $res2;

        return $this;
    }

    public function getRes3(): ?string
    {
        return $this->res3;
    }

    public function setRes3(?string $res3): self
    {
        $this->res3 = $res3;

        return $this;
    }

    public function getRes4(): ?string
    {
        return $this->res4;
    }

    public function setRes4(?string $res4): self
    {
        $this->res4 = $res4;

        return $this;
    }

    public function getRes5(): ?string
    {
        return $this->res5;
    }

    public function setRes5(?string $res5): self
    {
        $this->res5 = $res5;

        return $this;
    }

    public function getRes6(): ?string
    {
        return $this->res6;
    }

    public function setRes6(?string $res6): self
    {
        $this->res6 = $res6;

        return $this;
    }

    public function getRes7(): ?string
    {
        return $this->res7;
    }

    public function setRes7(?string $res7): self
    {
        $this->res7 = $res7;

        return $this;
    }

    public function getRes8(): ?string
    {
        return $this->res8;
    }

    public function setRes8(?string $res8): self
    {
        $this->res8 = $res8;

        return $this;
    }

    public function getEnseigne1(): ?string
    {
        return $this->enseigne1;
    }

    public function setEnseigne1(?string $enseigne1): self
    {
        $this->enseigne1 = $enseigne1;

        return $this;
    }

    public function getEnseigne2(): ?string
    {
        return $this->enseigne2;
    }

    public function setEnseigne2(?string $enseigne2): self
    {
        $this->enseigne2 = $enseigne2;

        return $this;
    }

    public function getEnseigne3(): ?string
    {
        return $this->enseigne3;
    }

    public function setEnseigne3(?string $enseigne3): self
    {
        $this->enseigne3 = $enseigne3;

        return $this;
    }

    public function getNomnorm1(): ?string
    {
        return $this->nomnorm1;
    }

    public function setNomnorm1(?string $nomnorm1): self
    {
        $this->nomnorm1 = $nomnorm1;

        return $this;
    }

    public function getNomnorm2(): ?string
    {
        return $this->nomnorm2;
    }

    public function setNomnorm2(?string $nomnorm2): self
    {
        $this->nomnorm2 = $nomnorm2;

        return $this;
    }

    public function getNomnorm3(): ?string
    {
        return $this->nomnorm3;
    }

    public function setNomnorm3(?string $nomnorm3): self
    {
        $this->nomnorm3 = $nomnorm3;

        return $this;
    }

    public function getNomnorm4(): ?string
    {
        return $this->nomnorm4;
    }

    public function setNomnorm4(?string $nomnorm4): self
    {
        $this->nomnorm4 = $nomnorm4;

        return $this;
    }

    public function getNomnorm5(): ?string
    {
        return $this->nomnorm5;
    }

    public function setNomnorm5(?string $nomnorm5): self
    {
        $this->nomnorm5 = $nomnorm5;

        return $this;
    }

    public function getNomnorm6(): ?string
    {
        return $this->nomnorm6;
    }

    public function setNomnorm6(?string $nomnorm6): self
    {
        $this->nomnorm6 = $nomnorm6;

        return $this;
    }

    public function getNomnorm7(): ?string
    {
        return $this->nomnorm7;
    }

    public function setNomnorm7(?string $nomnorm7): self
    {
        $this->nomnorm7 = $nomnorm7;

        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getCodpost(): ?string
    {
        return $this->codpost;
    }

    public function setCodpost(?string $codpost): self
    {
        $this->codpost = $codpost;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(?string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getVillenorm(): ?string
    {
        return $this->villenorm;
    }

    public function setVillenorm(?string $villenorm): self
    {
        $this->villenorm = $villenorm;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNumvoie(): ?string
    {
        return $this->numvoie;
    }

    public function setNumvoie(?string $numvoie): self
    {
        $this->numvoie = $numvoie;

        return $this;
    }

    public function getTypevoie(): ?string
    {
        return $this->typevoie;
    }

    public function setTypevoie(?string $typevoie): self
    {
        $this->typevoie = $typevoie;

        return $this;
    }

    public function getNomvoie(): ?string
    {
        return $this->nomvoie;
    }

    public function setNomvoie(?string $nomvoie): self
    {
        $this->nomvoie = $nomvoie;

        return $this;
    }

    public function getCompvoie(): ?string
    {
        return $this->compvoie;
    }

    public function setCompvoie(?string $compvoie): self
    {
        $this->compvoie = $compvoie;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getCleextrac(): ?string
    {
        return $this->cleextrac;
    }

    public function setCleextrac(?string $cleextrac): self
    {
        $this->cleextrac = $cleextrac;

        return $this;
    }

    public function getTabcleb1(): ?string
    {
        return $this->tabcleb1;
    }

    public function setTabcleb1(?string $tabcleb1): self
    {
        $this->tabcleb1 = $tabcleb1;

        return $this;
    }

    public function getTabcleb2(): ?string
    {
        return $this->tabcleb2;
    }

    public function setTabcleb2(?string $tabcleb2): self
    {
        $this->tabcleb2 = $tabcleb2;

        return $this;
    }

    public function getTabcleb3(): ?string
    {
        return $this->tabcleb3;
    }

    public function setTabcleb3(?string $tabcleb3): self
    {
        $this->tabcleb3 = $tabcleb3;

        return $this;
    }

    public function getTabcleb4(): ?string
    {
        return $this->tabcleb4;
    }

    public function setTabcleb4(?string $tabcleb4): self
    {
        $this->tabcleb4 = $tabcleb4;

        return $this;
    }

    public function getTabcleb5(): ?string
    {
        return $this->tabcleb5;
    }

    public function setTabcleb5(?string $tabcleb5): self
    {
        $this->tabcleb5 = $tabcleb5;

        return $this;
    }

    public function getTabcleb6(): ?string
    {
        return $this->tabcleb6;
    }

    public function setTabcleb6(?string $tabcleb6): self
    {
        $this->tabcleb6 = $tabcleb6;

        return $this;
    }

    public function getTabcleb7(): ?string
    {
        return $this->tabcleb7;
    }

    public function setTabcleb7(?string $tabcleb7): self
    {
        $this->tabcleb7 = $tabcleb7;

        return $this;
    }

    public function getTabcleb8(): ?string
    {
        return $this->tabcleb8;
    }

    public function setTabcleb8(?string $tabcleb8): self
    {
        $this->tabcleb8 = $tabcleb8;

        return $this;
    }

    public function getTabcleb9(): ?string
    {
        return $this->tabcleb9;
    }

    public function setTabcleb9(?string $tabcleb9): self
    {
        $this->tabcleb9 = $tabcleb9;

        return $this;
    }

    public function getTabcleb10(): ?string
    {
        return $this->tabcleb10;
    }

    public function setTabcleb10(?string $tabcleb10): self
    {
        $this->tabcleb10 = $tabcleb10;

        return $this;
    }

    public function getTabcleb11(): ?string
    {
        return $this->tabcleb11;
    }

    public function setTabcleb11(?string $tabcleb11): self
    {
        $this->tabcleb11 = $tabcleb11;

        return $this;
    }

    public function getTabcleb12(): ?string
    {
        return $this->tabcleb12;
    }

    public function setTabcleb12(?string $tabcleb12): self
    {
        $this->tabcleb12 = $tabcleb12;

        return $this;
    }

    public function getTabcleb13(): ?string
    {
        return $this->tabcleb13;
    }

    public function setTabcleb13(?string $tabcleb13): self
    {
        $this->tabcleb13 = $tabcleb13;

        return $this;
    }

    public function getCleextracnorm(): ?string
    {
        return $this->cleextracnorm;
    }

    public function setCleextracnorm(?string $cleextracnorm): self
    {
        $this->cleextracnorm = $cleextracnorm;

        return $this;
    }

    public function getNomcomplet(): ?string
    {
        return $this->nomcomplet;
    }

    public function setNomcomplet(?string $nomcomplet): self
    {
        $this->nomcomplet = $nomcomplet;

        return $this;
    }

    public function getBoitePostale(): ?string
    {
        return $this->boite_postale;
    }

    public function setBoitePostale(?string $boite_postale): self
    {
        $this->boite_postale = $boite_postale;

        return $this;
    }

    public function getCasePostale(): ?string
    {
        return $this->case_postale;
    }

    public function setCasePostale(?string $case_postale): self
    {
        $this->case_postale = $case_postale;

        return $this;
    }

    public function getCedex(): ?string
    {
        return $this->cedex;
    }

    public function setCedex(?string $cedex): self
    {
        $this->cedex = $cedex;

        return $this;
    }

    public function getDep(): ?string
    {
        return $this->dep;
    }

    public function setDep(?string $dep): self
    {
        $this->dep = $dep;

        return $this;
    }

    public function getCodinsee(): ?string
    {
        return $this->codinsee;
    }

    public function setCodinsee(?string $codinsee): self
    {
        $this->codinsee = $codinsee;

        return $this;
    }

    public function getBubagentass(): ?bool
    {
        return $this->bubagentass;
    }

    public function setBubagentass(?bool $bubagentass): self
    {
        $this->bubagentass = $bubagentass;

        return $this;
    }

    public function getRubsocass(): ?bool
    {
        return $this->rubsocass;
    }

    public function setRubsocass(?bool $rubsocass): self
    {
        $this->rubsocass = $rubsocass;

        return $this;
    }

    public function getRubcourtier(): ?bool
    {
        return $this->rubcourtier;
    }

    public function setRubcourtier(?bool $rubcourtier): self
    {
        $this->rubcourtier = $rubcourtier;

        return $this;
    }

    public function getRubmutuelles(): ?bool
    {
        return $this->rubmutuelles;
    }

    public function setRubmutuelles(?bool $rubmutuelles): self
    {
        $this->rubmutuelles = $rubmutuelles;

        return $this;
    }

    public function getClenum(): ?string
    {
        return $this->clenum;
    }

    public function setClenum(?string $clenum): self
    {
        $this->clenum = $clenum;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getCommentcorr(): ?string
    {
        return $this->commentcorr;
    }

    public function setCommentcorr(?string $commentcorr): self
    {
        $this->commentcorr = $commentcorr;

        return $this;
    }

    public function getColoriedirect(): ?bool
    {
        return $this->coloriedirect;
    }

    public function setColoriedirect(?bool $coloriedirect): self
    {
        $this->coloriedirect = $coloriedirect;

        return $this;
    }

    public function getAdresseweb(): ?string
    {
        return $this->adresseweb;
    }

    public function setAdresseweb(?string $adresseweb): self
    {
        $this->adresseweb = $adresseweb;

        return $this;
    }

    public function getTypeLigneCode(): ?string
    {
        return $this->type_ligne_code;
    }

    public function setTypeLigneCode(?string $type_ligne_code): self
    {
        $this->type_ligne_code = $type_ligne_code;

        return $this;
    }

    public function getResorias1(): ?string
    {
        return $this->resorias1;
    }

    public function setResorias1(?string $resorias1): self
    {
        $this->resorias1 = $resorias1;

        return $this;
    }

    public function getResorias2(): ?string
    {
        return $this->resorias2;
    }

    public function setResorias2(?string $resorias2): self
    {
        $this->resorias2 = $resorias2;

        return $this;
    }

    public function getResorias3(): ?string
    {
        return $this->resorias3;
    }

    public function setResorias3(?string $resorias3): self
    {
        $this->resorias3 = $resorias3;

        return $this;
    }

    public function getResorias4(): ?string
    {
        return $this->resorias4;
    }

    public function setResorias4(?string $resorias4): self
    {
        $this->resorias4 = $resorias4;

        return $this;
    }

    public function getResorias5(): ?string
    {
        return $this->resorias5;
    }

    public function setResorias5(?string $resorias5): self
    {
        $this->resorias5 = $resorias5;

        return $this;
    }

    public function getResorias6(): ?string
    {
        return $this->resorias6;
    }

    public function setResorias6(?string $resorias6): self
    {
        $this->resorias6 = $resorias6;

        return $this;
    }

    public function getTelmairie(): ?string
    {
        return $this->telmairie;
    }

    public function setTelmairie(?string $telmairie): self
    {
        $this->telmairie = $telmairie;

        return $this;
    }

    public function getHorairesmairie(): ?string
    {
        return $this->horairesmairie;
    }

    public function setHorairesmairie(?string $horairesmairie): self
    {
        $this->horairesmairie = $horairesmairie;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(?int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getCodeCouleur(): ?string
    {
        return $this->code_couleur;
    }

    public function setCodeCouleur(?string $code_couleur): self
    {
        $this->code_couleur = $code_couleur;

        return $this;
    }

    public function getIdEtat(): ?int
    {
        return $this->id_etat;
    }

    public function setIdEtat(?int $id_etat): self
    {
        $this->id_etat = $id_etat;

        return $this;
    }

    public function getRechGoogle(): ?bool
    {
        return $this->rech_google;
    }

    public function setRechGoogle(?bool $rech_google): self
    {
        $this->rech_google = $rech_google;

        return $this;
    }

    public function getRechPj(): ?bool
    {
        return $this->rech_pj;
    }

    public function setRechPj(?bool $rech_pj): self
    {
        $this->rech_pj = $rech_pj;

        return $this;
    }

    public function getRechGoogleMaps(): ?bool
    {
        return $this->rech_google_maps;
    }

    public function setRechGoogleMaps(?bool $rech_google_maps): self
    {
        $this->rech_google_maps = $rech_google_maps;

        return $this;
    }

    public function getRechSociete(): ?bool
    {
        return $this->rech_societe;
    }

    public function setRechSociete(?bool $rech_societe): self
    {
        $this->rech_societe = $rech_societe;

        return $this;
    }

    public function getRechOrias(): ?bool
    {
        return $this->rech_orias;
    }

    public function setRechOrias(?bool $rech_orias): self
    {
        $this->rech_orias = $rech_orias;

        return $this;
    }

    public function getLock(): ?bool
    {
        return $this->lock;
    }

    public function setLock(?bool $lock): self
    {
        $this->lock = $lock;

        return $this;
    }

    public function getTraite(): ?bool
    {
        return $this->traite;
    }

    public function setTraite(?bool $traite): self
    {
        $this->traite = $traite;

        return $this;
    }

    public function getRappel(): ?bool
    {
        return $this->rappel;
    }

    public function setRappel(?bool $rappel): self
    {
        $this->rappel = $rappel;

        return $this;
    }

    public function getValidTel(): ?bool
    {
        return $this->valid_tel;
    }

    public function setValidTel(?bool $valid_tel): self
    {
        $this->valid_tel = $valid_tel;

        return $this;
    }

    public function getSsAgent(): ?bool
    {
        return $this->ss_agent;
    }

    public function setSsAgent(?bool $ss_agent): self
    {
        $this->ss_agent = $ss_agent;

        return $this;
    }

    public function getAVerifier(): ?bool
    {
        return $this->a_verifier;
    }

    public function setAVerifier(?bool $a_verifier): self
    {
        $this->a_verifier = $a_verifier;

        return $this;
    }

    public function getDateValide(): ?\DateTimeInterface
    {
        return $this->date_valide;
    }

    public function setDateValide(?\DateTimeInterface $date_valide): self
    {
        $this->date_valide = $date_valide;

        return $this;
    }

    public function getModifVille(): ?bool
    {
        return $this->modif_ville;
    }

    public function setModifVille(?bool $modif_ville): self
    {
        $this->modif_ville = $modif_ville;

        return $this;
    }

    public function getDatemaoouv(): ?string
    {
        return $this->datemaoouv;
    }

    public function setDatemaoouv(?string $datemaoouv): self
    {
        $this->datemaoouv = $datemaoouv;

        return $this;
    }

    public function getDatemaoferm(): ?string
    {
        return $this->datemaoferm;
    }

    public function setDatemaoferm(?string $datemaoferm): self
    {
        $this->datemaoferm = $datemaoferm;

        return $this;
    }

    public function getValidAdmin(): ?bool
    {
        return $this->valid_admin;
    }

    public function setValidAdmin(?bool $valid_admin): self
    {
        $this->valid_admin = $valid_admin;

        return $this;
    }

    public function getDep2(): ?string
    {
        return $this->dep2;
    }

    public function setDep2(?string $dep2): self
    {
        $this->dep2 = $dep2;

        return $this;
    }
}
