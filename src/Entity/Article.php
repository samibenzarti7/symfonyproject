<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomarticle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomarticle(): ?string
    {
        return $this->nomarticle;
    }

    public function setNomarticle(string $nomarticle): self
    {
        $this->nomarticle = $nomarticle;

        return $this;
    }
}
