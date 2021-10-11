<?php

namespace App\Controller\ApiController;

use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GenreController extends AbstractController
{
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em=$em;
    }

    public function __invoke()
    {
       return $this->em->getRepository(Book::class)->findBy(['isRented'=>false]);

    }
}