<?php

namespace Alex\Entities;

use Stidges\CountryFlags\CountryFlag;

class Country
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $flag;

    /**
     * @var array
     */
    protected $cities;

    /**
     * @param string $name
     * @param string $code
     * @param array $cities
     */
    public function __construct(string $name, string $code, array $cities)
    {
        $this->name = $name;
        $this->code = $code;
        $this->flag = (new CountryFlag())->get($code);
        $this->cities = $cities;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getFlag(): string
    {
        return $this->flag;
    }

    /**
     * @return array
     */
    public function getCities(): array
    {
        return $this->cities;
    }

    /**
     * @return string
     */
    public function getCitiesString(): string
    {
        return implode(', ', $this->getCities());
    }
}
