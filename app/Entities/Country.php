<?php

declare(strict_types=1);

namespace Alex\Entities;

use Stidges\CountryFlags\CountryFlag;

class Country
{
    private string $name;

    private string $code;

    private string $flag;

    /** @var string[] */
    private array $cities;

    /**
     * @param string[] $cities
     */
    public function __construct(string $name, string $code, array $cities)
    {
        $this->name = $name;
        $this->code = $code;
        $this->flag = (new CountryFlag())->get($code);
        $this->cities = $cities;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getFlag(): string
    {
        return $this->flag;
    }

    /**
     * @return string[]
     */
    public function getCities(): array
    {
        return $this->cities;
    }

    public function getCitiesString(): string
    {
        return implode(', ', $this->getCities());
    }
}
