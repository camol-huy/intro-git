<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10-Oct-19
 * Time: 8:35 PM
 */

class test
{
    private $pretecr = "gg";

    /**
     * test constructor.
     * @param string $pretecr
     */
    public function __construct(string $pretecr)
    {
        $this->pretecr = $pretecr;
    }


    // je m aime



    /**
     * @param string $pretecr
     */
    public function setPretecr(string $pretecr): void
    {$this->pretecr = $pretecr;
    }





}