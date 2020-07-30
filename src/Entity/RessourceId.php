<?php
declare (strict_types=1 ); 

namespace App\Entity ;

trait RessourceId 
{
   /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    public function getId(): ?int
    {
        return $this->id;
    }

}