<?php 
namespace KenticoCloud\Delivery\Models\Taxonomies;

/**
 * Term
 *
 * Represents taxonomy 'terms' element.
 */
class Term
{
    public $name = null;
    public $codename = null;
    public $terms = null; 

    public function __construct($name, $codename, $terms)
    {
        $this->name = $name;
        $this->codename = $codename;
        $this->terms = $terms;
    }
}