<?php


namespace App\Controller;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinyController
{

  // #[Route('/home')] en symfony 6

      /**
       * @Route("/", name="homepage")
       */
  public function home(): Response
    {
        return new Response('title:bb james');
    }
    /**
     * @Route("/browse/{slug}", name="homepage")
     */
    public function browse(string $slug): Response
    {

      if($slug){
        $title= 'habibi: '.str_replace('-',' ',$slug);
      }
      else {
        $title='Inshallah we will marry';
      }
       return new Response('i love you habibi  '.$title);
    }
}
