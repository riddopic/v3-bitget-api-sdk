<?php


namespace bitget\model\mix\account;


class SetMarginReq
{
    /**
     * Currency pair
     */
    var string $symbol;
    /**
     * Deposit currency
     */
    var string $marginCoin;
    /**
     * Position direction (all positions are not transferred)
     */
    var string $holdSide;
    /**
     * Amount greater than 0 increases less than 0 decreases
     */
    var string $amount;

    /**
     * @return mixed
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param mixed $symbol
     */
    public function setSymbol($symbol): void
    {
        $this->symbol = $symbol;
    }

    /**
     * @return mixed
     */
    public function getMarginCoin()
    {
        return $this->marginCoin;
    }

    /**
     * @param mixed $marginCoin
     */
    public function setMarginCoin($marginCoin): void
    {
        $this->marginCoin = $marginCoin;
    }

    /**
     * @return mixed
     */
    public function getHoldSide()
    {
        return $this->holdSide;
    }

    /**
     * @param mixed $holdSide
     */
    public function setHoldSide($holdSide): void
    {
        $this->holdSide = $holdSide;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }



}