<?php


class product
{
    public $productCode;
    public $productName;
    public $productVendor;
    public $productStock;
    public $productPrice;
    public $MSRP;

    public function __construct($productName,$productVendor,$productStock,$productPrice,$MSRP)
    {
        $this->productName=$productName;
        $this->productVendor=$productVendor;
        $this->productStock=$productStock;
        $this->productPrice=$productPrice;
        $this->MSRP=$MSRP;
    }

}