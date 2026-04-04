<?php

namespace Sce\PracticaVendorTest\Repository;

use Sce\PracticaVendorTest\DTO\Requests\CarQuery\CarQueryRequestDTO;
use Sce\PracticaVendorTest\DTO\Requests\CarQuery\CarQueryResponseDTO;

class CarRepository extends AbstractRepository
{
    public function query(CarQueryRequestDTO $request): CarQueryResponseDTO
    {
        $url = $this->url . '/cars/query';

        //De moment no farem servir la API key, al proper laboratori la utilitzarem per autenticar-nos a l'API

        $jsonRequest = $this->serializer->serialize($request, 'json');

        $response = (new \GuzzleHttp\Client())->post($url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'body' => $jsonRequest,
        ]);

        $jsonResponse = $response->getBody()->getContents();

        return $this->serializer->deserialize($jsonResponse, CarQueryResponseDTO::class, 'json');
    }
}