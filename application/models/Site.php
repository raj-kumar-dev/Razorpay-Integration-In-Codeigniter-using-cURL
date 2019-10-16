<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Model {
    private $_productID;
    public function setProductID($productID) {
        $this->_productID = $productID;
    }
    public function getProduct() {
        $this->db->select(array('p.product_id', 'p.name', 'p.description', 'p.price', 'p.image'));
        $this->db->from('product as p');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getProductDetails() {
        $this->db->select(array('p.product_id', 'p.name', 'p.description', 'p.price', 'p.image'));
        $this->db->from('product as p');
        $this->db->where('p.product_id', $this->_productID);
        $query = $this->db->get();
        return $query->row_array();
    }

}
