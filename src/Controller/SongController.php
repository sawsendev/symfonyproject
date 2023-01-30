<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
class SongController extends AbstractController{


  #[Route('api/songs/{id<\d+>}',name:'song',methods:['GET'])]
    public function getSong(int $id,LoggerInterface $logger): Response{

      $song=[
        'id'=>$id,
        'name'=>'Sing song',
        'url'=>'https://symfonycasts.com/screencast/symfony/json-api',
      ];
     $logger->info('test api {song}',['song'=>$id,]);
      return new JsonResponse($song);
    }

}
