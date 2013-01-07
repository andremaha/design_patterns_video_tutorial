<?php

namespace OOPHP\Observer\Weather;

use OOPHP\Observer\Weather\Observer;

interface Subject
{
    public function registerObserver(Observer $o);
    public function removeObserver(Observer $o);
    public function notifyObservers();
}