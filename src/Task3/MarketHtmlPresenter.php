<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $currencies = $market->getCurrencies();
        $presentationString = '';
        foreach ($currencies as $currency) {
            $presentationString .= '<img src="' . $currency->getLogoUrl() . '">' . $currency->getName() . ': ' .
                $currency->getDailyPrice() . "<br>\n";
        }
        return $presentationString;
    }
}