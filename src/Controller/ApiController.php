<?php

namespace App\Controller;

use App\Repository\CommuneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class ApiController extends AbstractController {

    private $communeRepository;

    public function __construct(CommuneRepository $communeRepository) {
        $this->communeRepository = $communeRepository;
    }

    #[Route('/localidad', name: 'app_api_localidad', methods: 'POST')]
    public function index(Request $request): JsonResponse {
        
        $preNames = $request->request->get('filter');
        $names = explode(',', $preNames);

        $localidads = $this->communeRepository->findByNames($names);

        // Filter localidads to retLocalidads
        $retLocalidads = array();

        foreach ($localidads as $loc) {

            $region_id = $loc['region_id'];
            $region_name = $loc['region_name'];
            $province_id = $loc['province_id'];
            $province_name = $loc['province_name'];
            $commune_id = $loc['commune_id'];
            $commune_name = $loc['commune_name'];
            
            $region_flag = $province_flag = false;

            // Check region
            if (!array_key_exists($region_id, $retLocalidads) && in_array($region_name, $names)) {
                $retLocalidads["a".$region_id]['id'] = $region_id;
                $retLocalidads["a".$region_id]['text'] = $region_name;
                $region_flag = true;
            }
            // Check province
            if (!array_key_exists($province_id, $retLocalidads) && ($region_flag || in_array($province_name, $names))) {
                $retLocalidads["b".$province_id]['id'] = $province_id;
                $retLocalidads["b".$province_id]['text'] = $province_name;
                $province_flag = true;
            }
            // Check commune
            if (!array_key_exists($commune_id, $retLocalidads)) {
                $retLocalidads["c".$commune_id]['id'] = $commune_id;
                $retLocalidads["c".$commune_id]['text'] = $commune_name;
            }
        }

        ksort($retLocalidads);
        
        return $this->json([
            'results' => $retLocalidads
        ]);
    }
    
#[Route('/localidad/all', name: 'app_api_localidad_all', methods: 'GET')]
    public function all(Request $request): JsonResponse {

        $name = trim(strtolower($request->query->get('filter')));

        $localidads = $this->communeRepository->findByNames(array($name));

        // Filter localidads to retLocalidads

        $retLocalidads = array();
        
        $stringCounter = strlen($name);

        foreach ($localidads as $loc) {

            $region_id = $loc['region_id'];
            $region_name = $loc['region_name'];
            $province_id = $loc['province_id'];
            $province_name = $loc['province_name'];
            $commune_id = $loc['commune_id'];
            $commune_name = $loc['commune_name'];
            
            // Check region
            $passName = false;
            if ($name === substr(strtolower($region_name), 0, $stringCounter)) {
                $passName = true;
            }
            if (!array_key_exists($region_id, $retLocalidads) && $passName) {
                $retLocalidads["a".$region_id]['id'] = $region_id;
                $retLocalidads["a".$region_id]['text'] = $region_name;
            }
            // Check province
            $passName = false;
            if ($name === substr(strtolower($province_name), 0, $stringCounter)) {
                $passName = true;
            }
            if (!array_key_exists($province_id, $retLocalidads) && $passName) {
                $retLocalidads["b".$province_id]['id'] = $province_id;
                $retLocalidads["b".$province_id]['text'] = $province_name;
            }
            // Check commune
            $passName = false;
            if ($name === substr(strtolower($commune_name), 0, $stringCounter)) {
                $passName = true;
            }
            if (!array_key_exists($commune_id, $retLocalidads) && $passName) {
                $retLocalidads["c".$commune_id]['id'] = $commune_id;
                $retLocalidads["c".$commune_id]['text'] = $commune_name;
            }
        }

        ksort($retLocalidads);
        
        return $this->json([
            'results' => array_values($retLocalidads)
        ]);
    }

}
