<?php

namespace App\Controller;

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
    public function dataAction()
    {
        return new JsonResponse([
            [
                'id' => 1,
                'name' => '15 berniukas svajoje turėti dviratį',
                'img' => 'https://assets.yeticycles.com/images/bikes/sb6-tr/configurations/2018_YetiCycles_SB6_TR-desktop@2x.jpg',
                'category' => 'dovana',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia nunc sed massa aliquet, ullamcorper aliquet risus malesuada. Maecenas sapien odio, molestie sit amet fringilla vehicula, tincidunt eleifend lectus. Suspendisse vitae ultrices mi, in efficitur ante. Etiam cursus ultrices dictum. ',
                'date' => '2018-03-29',
                'place' => 'Kaunas'
            ],
            [
                'id' => 2,
                'name' => 'Daugiavaikei šeimai reikalingi rūbai',
                'img' => 'http://www.yourdictionary.com/images/definitions/lg/2737.clothes.jpg',
                'category' => 'dovana',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia nunc sed massa aliquet, ullamcorper aliquet risus malesuada. Maecenas sapien odio, molestie sit amet fringilla vehicula, tincidunt eleifend lectus. Suspendisse vitae ultrices mi, in efficitur ante. Etiam cursus ultrices dictum. ',
                'date' => '2018-03-29',
                'place' => 'Vilnius'
            ],
            [
                'id' => 3,
                'name' => '80 senolui reikalinga pagalba, paruošti žiemai malkas',
                'img' => 'https://patcegan.files.wordpress.com/2011/12/old-man-face.jpg',
                'category' => 'geras darbas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia nunc sed massa aliquet, ullamcorper aliquet risus malesuada. Maecenas sapien odio, molestie sit amet fringilla vehicula, tincidunt eleifend lectus. Suspendisse vitae ultrices mi, in efficitur ante. Etiam cursus ultrices dictum. ',
                'date' => '2018-03-29',
                'place' => 'Klaipėda'
            ],
            [
                'id' => 4,
                'name' => '4 metų mergaitė svajoje turėti meškiuka',
                'img' => 'https://www.babymarket.lt/files/resized/443x443/images/products/image-tm-toys-disney-plush-winnie-the-pooh-36cm-34580_2-8944ffe0-20170130084008-576.jpg',
                'category' => 'dovana',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia nunc sed massa aliquet, ullamcorper aliquet risus malesuada. Maecenas sapien odio, molestie sit amet fringilla vehicula, tincidunt eleifend lectus. Suspendisse vitae ultrices mi, in efficitur ante. Etiam cursus ultrices dictum. ',
                'date' => '2018-03-29',
                'place' => 'Klaipėda'
            ],
            [
                'id' => 5,
                'name' => '5 metų berniukui reikalingi akinei',
                'img' => 'http://www.eaglevision.lt/wp-content/uploads/2014/09/1400.jpg',
                'category' => 'dovana',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia nunc sed massa aliquet, ullamcorper aliquet risus malesuada. Maecenas sapien odio, molestie sit amet fringilla vehicula, tincidunt eleifend lectus. Suspendisse vitae ultrices mi, in efficitur ante. Etiam cursus ultrices dictum. ',
                'date' => '2018-03-29',
                'place' => 'Klaipėda'
            ],
        ]);
    }
}
