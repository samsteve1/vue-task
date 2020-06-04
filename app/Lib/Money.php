<?php

namespace App\Lib;

use \NumberFormatter;
use Money\{Currency, Formatter\IntlMoneyFormatter, Currencies\ISOCurrencies};
use Money\Money as BaseMoney;

class Money
{
    protected $money;

    public function __construct($value)
    {
        $this->money = new BaseMoney($value, new Currency('NGN'));
    }

    // format number as Naira currency
    public function formatted()
    {
        $formatter = new IntlMoneyFormatter(
            new  NumberFormatter('en_NG', NumberFormatter::CURRENCY),
            new ISOCurrencies()
        );

        return $formatter->format($this->money);
    }
    // return the actual money amount
    public function amount()
    {
        return $this->money->getAmount();
    }

}
