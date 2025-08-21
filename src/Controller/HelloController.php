<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations\Get;

/**
 * @Route("/test")
 * @Get()
 */
class HelloController extends AbstractController
{

  private $tokenStorage;

  private $JWTManager;

  private $serializer;
  public function __construct(

  ) {

  }

  public function __invoke(Request $request)
  {
    
    return new Response('not authenticated', Response::HTTP_FORBIDDEN);
  }
}