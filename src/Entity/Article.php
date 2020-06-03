<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $content;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private ?\DateTimeInterface $created_at;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private ?\DateTimeInterface $updated_at;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $announce;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getAnnounce(): ?string
    {
        return $this->announce;
    }

    public function setAnnounce(?string $announce): self
    {
        $this->announce = $announce;

        return $this;
    }
}
