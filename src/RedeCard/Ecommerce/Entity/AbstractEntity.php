<?php

namespace RedeCard\Ecommerce\Entity;

/**
 * Class AbstractEntity
 *
 * @package RedeCard\Ecommerce
 * @author Carlos Cima
 * @author Thiago Risso
 * @author Daniel Costa
 */
class AbstractEntity {

    /**
     * @return string
     */
    public function __toString()
    {
        $class = explode('\\', get_class($this));
        return end($class);
    }

    /**
     * @return array
     */
    public function __toArray()
    {
        return $this->objectToArray(get_object_vars($this), false);
    }

    /**
     * Convert Object to Array
     *
     * This method omits null value properties
     *
     * @param mixed $obj
     * @param boolean $keepNullProperties Keep null object properties when building the request parameters
     * @return array
     */
    protected function objectToArray($obj, $keepNullProperties = true) {
        $arrObj = is_object($obj) ? get_object_vars($obj) : $obj;
        $arr = array();
        foreach ($arrObj as $key => $val) {
            $val = (is_array($val) || is_object($val)) ? $this->objectToArray($val, $keepNullProperties) : $val;
            if ($keepNullProperties || $val !== null) {
                $val = ($val === null) ? $val = '' : $val;
                $arr[$key] = is_scalar($val) ? ((string) $val) : $val;
            }
        }
        return $arr;
    }

}