<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis_article
 *
 * @ORM\Table(name="avis_article")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Avis_articleRepository")
 */
class Avis_article
{
    /**
     * @ORM\ManyToOne(targetEntity="Articles")
     */
    private $articles;

    /**
     * @ORM\ManyToOne(targetEntity="user")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="Jaime", type="boolean")
     */
    private $jaime;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set jaime
     *
     * @param boolean $jaime
     *
     * @return Avis_article
     */
    public function setJaime($jaime)
    {
        $this->jaime = $jaime;

        return $this;
    }

    /**
     * Get jaime
     *
     * @return bool
     */
    public function getJaime()
    {
        return $this->jaime;
    }
}

