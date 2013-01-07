<?php

namespace OOPHP\Observer\Weather;

interface Observer
{
    public function update($temp, $humidity, $pressure);
}