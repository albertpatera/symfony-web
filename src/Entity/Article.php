<?php


namespace App\Entity;
use Doctrine\ORM as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraint as Assert;

/**
 * Class Article
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 * @UniqueEntity("url", "url severved")
 */
class Article
{
    /**
     * @var int uniqiue article id
     * @ORM\Id()
     * @ORM\GenarateValue()
     * @ORM\Culumn(type="integer")
     */
    private $id;

    /**
     * @var string perex
     * @ORM\Perex()
     * @ORM\GenarateValue()
     * @ORM\Culumn(type="string")
     */
    private $perex;

    /**
     * @var string contentUrl
     * @ORM\ContentUrl()
     * @ORM\GenarateValue()
     * @ORM\Culumn(type="string")
     */
    private $content_url;

    /**
     * @var string date_created
     * @ORM\dateCreated()
     * @ORM\GenarateValue()
     * @ORM\Culumn(type="string")
     */
    private $date_created;

    /**
     * @var string files
     * @ORM\Files()
     * @ORM\GenarateValue()
     * @ORM\Culumn(type="string")
     */
    private $files;

    public function getId() :int
    {
        return $this->id;
    }

    public function getPerex() : string
    {
        return $this->perex;
    }

    public function getContentUrl() : string
    {
        return $this->content_url;
    }

    public function getDateCreated() : string
    {
        return $this->date_created;
    }

    public function setPerex($perex = NULL) : self
    {
        $this->perex = $perex;
        return $this;
    }

    public function setContentUrl($contentUrl = NULL) : self
    {
        $this->content_url = $contentUrl;
        return $this;
    }

    public function setDateCreated($dateCreated = NULL) : self
    {
        $this->date_created = $dateCreated;

        return $this;
    }




}