<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 20/03/17
 * Time: 09:52
 */

namespace wcs; /** toujours en haut  */


class Computer
{

    private $procType;

    public function __construct($procType = "Unknown processor")
    {
        $this->setProcType($procType);
    }

    public function setProcType($procType)
    {
        if ($procType !== "") {
            $this->procType = $procType;
        } else {
            $this->procType = "Unknown processor";
        }
    }

    public function getProcType()
   {
       return $this->procType;
   }


}