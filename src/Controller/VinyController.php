<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinyController extends AbstractController
{

    // #[Route('/')]
    public function home(): Response
      {
        $tracks=['dei frau','der man','ich','du'];

          //dd($tracks);
        return $this->render('viny/home.html.twig',[
            'title'=>'Hob allah',
            'tracks'=>$tracks,

          ]);

      }

      public function browse(string $slug =null): Response
      {

        // if($slug){
        //   $title= 'test'.str_replace('-',' ',$slug);
        // }
        // else {
        //   $title='Inshallah we will marry';
        // }

        $genre= $slug ? 'test'.str_replace('-',' ',$slug) : null;
         return $this->render('viny/browser.html.twig',[ 'genre'=>$genre,]);
      }
}
