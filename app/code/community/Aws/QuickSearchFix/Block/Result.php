<?php
/*
 * A very simple file to extend the Mage_CatalogSearch_Block_Result to apply a
 * fix without changing core. This block will be loaded instead of the 
 * 'catalogsearch/result' block.
 */


/**
 * Product search result block
 *
 * @category   Mage
 * @package    Aws
 * @module     QuickSearchFix / CatalogSearch
 */
class Aws_QuickSearchFix_Block_Result extends Mage_CatalogSearch_Block_Result
{
    /**
     * Set Search Result collection
     * Changed to set the collection
     *
     * @return Mage_CatalogSearch_Block_Result
     */
    public function setListCollection()
    {
        $this->getListBlock()
            ->setCollection($this->_getProductCollection());
       return $this;
    }

    /**
     * Retrieve loaded category collection
     * Changed to use code from 1.4.1, because that works ok?
     *
     * @return Mage_CatalogSearch_Model_Resource_Fulltext_Collection
     */
    protected function _getProductCollection()
    {
        if (is_null($this->_productCollection)) {
            $this->_productCollection = Mage::getSingleton('catalogsearch/layer')->getProductCollection();
        }

        return $this->_productCollection;
    }
}
