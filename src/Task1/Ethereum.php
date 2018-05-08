<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class Ethereum implements Currency
{
    private $name = 'Ethereum';
    private $dailyPrice;
    private $logoUrl = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png';

    public function __construct(float $price)
    {
        $this->dailyPrice = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDailyPrice(): float
    {
        return $this->dailyPrice;
    }

    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }
}