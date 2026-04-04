<?php

namespace Sce\PracticaVendorTest\DTO\Requests\CarQuery;

use Sce\PracticaVendorTest\DTO\Entity\CarDTO;

class CarQueryResponseDTO
{
    private int $code;
    private ?string $message = null;
    private CarDTO $data;

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function getData(): CarDTO
    {
        return $this->data;
    }

    public function setData(CarDTO $data): void
    {
        $this->data = $data;
    }
}