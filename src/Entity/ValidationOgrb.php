<?php

namespace App\Entity;

use App\Repository\ValidationOgrbRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValidationOgrbRepository::class)
 */
class ValidationOgrb
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
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
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $date_eve;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $saisi;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $siren;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $tabcle_obh1;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $tabcle_obh2;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $tabcle_obh3;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $tabcle_obh4;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $tabcle_obh5;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $tabcle_obh6;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $tabcle_obh7;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $tabcle_obh8;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $tabcle_obh9;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $tabcle_obh10;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $tabcle_obh11;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $presweb;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbensparcomweb;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbensparcomogrb;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $comvalin_1;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $identifiant;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $saisin_1;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $nouvguichet;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $commao;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $ancguichet;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $prov;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $groupe;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $reseau;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $enseigne;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $qualite;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $service;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $autre;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $codpost;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $commune;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $villenorm;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $numvoie;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $typevoie;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $nomvoie;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $compvoie;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boite_postale;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $case_postale;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $cedex;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $comment;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rubim;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rub1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rub2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rub3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rub4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rub5;

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
    private $ccial;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $agpart;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $agent;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $clenum;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $cleextracsansrub;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $coloriedirect;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ligneweb;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $identifiantposte;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $adresseweb;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $type_ligne_code;

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
    private $a_verifier;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $poste;

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

    public function setExtrac(int $extrac): self
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

    public function getSiren(): ?string
    {
        return $this->siren;
    }

    public function setSiren(?string $siren): self
    {
        $this->siren = $siren;

        return $this;
    }

    public function getTabcleObh1(): ?string
    {
        return $this->tabcle_obh1;
    }

    public function setTabcleObh1(?string $tabcle_obh1): self
    {
        $this->tabcle_obh1 = $tabcle_obh1;

        return $this;
    }

    public function getTabcleObh2(): ?string
    {
        return $this->tabcle_obh2;
    }

    public function setTabcleObh2(?string $tabcle_obh2): self
    {
        $this->tabcle_obh2 = $tabcle_obh2;

        return $this;
    }

    public function getTabcleObh3(): ?string
    {
        return $this->tabcle_obh3;
    }

    public function setTabcleObh3(?string $tabcle_obh3): self
    {
        $this->tabcle_obh3 = $tabcle_obh3;

        return $this;
    }

    public function getTabcleObh4(): ?string
    {
        return $this->tabcle_obh4;
    }

    public function setTabcleObh4(?string $tabcle_obh4): self
    {
        $this->tabcle_obh4 = $tabcle_obh4;

        return $this;
    }

    public function getTabcleObh5(): ?string
    {
        return $this->tabcle_obh5;
    }

    public function setTabcleObh5(?string $tabcle_obh5): self
    {
        $this->tabcle_obh5 = $tabcle_obh5;

        return $this;
    }

    public function getTabcleObh6(): ?string
    {
        return $this->tabcle_obh6;
    }

    public function setTabcleObh6(?string $tabcle_obh6): self
    {
        $this->tabcle_obh6 = $tabcle_obh6;

        return $this;
    }

    public function getTabcleObh7(): ?string
    {
        return $this->tabcle_obh7;
    }

    public function setTabcleObh7(?string $tabcle_obh7): self
    {
        $this->tabcle_obh7 = $tabcle_obh7;

        return $this;
    }

    public function getTabcleObh8(): ?string
    {
        return $this->tabcle_obh8;
    }

    public function setTabcleObh8(?string $tabcle_obh8): self
    {
        $this->tabcle_obh8 = $tabcle_obh8;

        return $this;
    }

    public function getTabcleObh9(): ?string
    {
        return $this->tabcle_obh9;
    }

    public function setTabcleObh9(?string $tabcle_obh9): self
    {
        $this->tabcle_obh9 = $tabcle_obh9;

        return $this;
    }

    public function getTabcleObh10(): ?string
    {
        return $this->tabcle_obh10;
    }

    public function setTabcleObh10(?string $tabcle_obh10): self
    {
        $this->tabcle_obh10 = $tabcle_obh10;

        return $this;
    }

    public function getTabcleObh11(): ?string
    {
        return $this->tabcle_obh11;
    }

    public function setTabcleObh11(?string $tabcle_obh11): self
    {
        $this->tabcle_obh11 = $tabcle_obh11;

        return $this;
    }

    public function getPresweb(): ?bool
    {
        return $this->presweb;
    }

    public function setPresweb(?bool $presweb): self
    {
        $this->presweb = $presweb;

        return $this;
    }

    public function getNbensparcomweb(): ?int
    {
        return $this->nbensparcomweb;
    }

    public function setNbensparcomweb(?int $nbensparcomweb): self
    {
        $this->nbensparcomweb = $nbensparcomweb;

        return $this;
    }

    public function getNbensparcomogrb(): ?int
    {
        return $this->nbensparcomogrb;
    }

    public function setNbensparcomogrb(?int $nbensparcomogrb): self
    {
        $this->nbensparcomogrb = $nbensparcomogrb;

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

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(?string $identifiant): self
    {
        $this->identifiant = $identifiant;

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

    public function getNouvguichet(): ?string
    {
        return $this->nouvguichet;
    }

    public function setNouvguichet(?string $nouvguichet): self
    {
        $this->nouvguichet = $nouvguichet;

        return $this;
    }

    public function getCommao(): ?string
    {
        return $this->commao;
    }

    public function setCommao(?string $commao): self
    {
        $this->commao = $commao;

        return $this;
    }

    public function getAncguichet(): ?string
    {
        return $this->ancguichet;
    }

    public function setAncguichet(?string $ancguichet): self
    {
        $this->ancguichet = $ancguichet;

        return $this;
    }

    public function getProv(): ?string
    {
        return $this->prov;
    }

    public function setProv(?string $prov): self
    {
        $this->prov = $prov;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(?string $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getReseau(): ?string
    {
        return $this->reseau;
    }

    public function setReseau(?string $reseau): self
    {
        $this->reseau = $reseau;

        return $this;
    }

    public function getEnseigne(): ?string
    {
        return $this->enseigne;
    }

    public function setEnseigne(?string $enseigne): self
    {
        $this->enseigne = $enseigne;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getQualite(): ?string
    {
        return $this->qualite;
    }

    public function setQualite(?string $qualite): self
    {
        $this->qualite = $qualite;

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

    public function getAutre(): ?string
    {
        return $this->autre;
    }

    public function setAutre(?string $autre): self
    {
        $this->autre = $autre;

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

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getRubim(): ?int
    {
        return $this->rubim;
    }

    public function setRubim(?int $rubim): self
    {
        $this->rubim = $rubim;

        return $this;
    }

    public function getRub1(): ?int
    {
        return $this->rub1;
    }

    public function setRub1(?int $rub1): self
    {
        $this->rub1 = $rub1;

        return $this;
    }

    public function getRub2(): ?int
    {
        return $this->rub2;
    }

    public function setRub2(?int $rub2): self
    {
        $this->rub2 = $rub2;

        return $this;
    }

    public function getRub3(): ?int
    {
        return $this->rub3;
    }

    public function setRub3(?int $rub3): self
    {
        $this->rub3 = $rub3;

        return $this;
    }

    public function getRub4(): ?int
    {
        return $this->rub4;
    }

    public function setRub4(?int $rub4): self
    {
        $this->rub4 = $rub4;

        return $this;
    }

    public function getRub5(): ?int
    {
        return $this->rub5;
    }

    public function setRub5(?int $rub5): self
    {
        $this->rub5 = $rub5;

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

    public function getCcial(): ?bool
    {
        return $this->ccial;
    }

    public function setCcial(?bool $ccial): self
    {
        $this->ccial = $ccial;

        return $this;
    }

    public function getAgpart(): ?bool
    {
        return $this->agpart;
    }

    public function setAgpart(?bool $agpart): self
    {
        $this->agpart = $agpart;

        return $this;
    }

    public function getAgent(): ?bool
    {
        return $this->agent;
    }

    public function setAgent(?bool $agent): self
    {
        $this->agent = $agent;

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

    public function getCleextracsansrub(): ?string
    {
        return $this->cleextracsansrub;
    }

    public function setCleextracsansrub(?string $cleextracsansrub): self
    {
        $this->cleextracsansrub = $cleextracsansrub;

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

    public function getLigneweb(): ?bool
    {
        return $this->ligneweb;
    }

    public function setLigneweb(?bool $ligneweb): self
    {
        $this->ligneweb = $ligneweb;

        return $this;
    }

    public function getIdentifiantposte(): ?string
    {
        return $this->identifiantposte;
    }

    public function setIdentifiantposte(?string $identifiantposte): self
    {
        $this->identifiantposte = $identifiantposte;

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

    public function getAVerifier(): ?bool
    {
        return $this->a_verifier;
    }

    public function setAVerifier(?bool $a_verifier): self
    {
        $this->a_verifier = $a_verifier;

        return $this;
    }

    public function getPoste(): ?bool
    {
        return $this->poste;
    }

    public function setPoste(?bool $poste): self
    {
        $this->poste = $poste;

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
