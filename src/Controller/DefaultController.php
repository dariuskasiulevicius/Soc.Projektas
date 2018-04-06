<?php

namespace App\Controller;

use App\API\DbData;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('Default/index.html.twig', []);
    }

    /**
     * @Route("/getList", name="getList")
     * @Method({"GET"})
     */
    public function getListAction()
    {
        $list = new DbData();
        $wishList = $list->getWishList();

        return new JsonResponse( $wishList);

    }
}
