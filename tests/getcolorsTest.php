<?php

/**
 *  Corresponding Class to test getcolors class
 *
 *  For each class in your library, there should be a corresponding Unit-Test for it
 *  Unit-Tests should be as much as possible independent from other test going on.
 *
 * @author yourname
 */
class getcolorsTest extends PHPUnit_Framework_TestCase
{

    /**
     * Just check if the getcolors has no syntax error
     */
    public function testIsThereAnySyntaxError()
    {
        $var = new atmonshi\gmdcolors\getcolors;
        $this->assertTrue(is_object($var));
        unset($var);
    }

    /**
     * check if return is true and no errors in syntax
     */
    public function testMethod1()
    {
        $var = new atmonshi\gmdcolors\getcolors;
        $this->assertTrue($var->hex("Red", 50) == '#FFEBEE');
        unset($var);
    }

    /**
     * checking if the random generated equal to the requested count
     *
     */
    public function testTheRandomsCounts()
    {
        $var = new atmonshi\gmdcolors\getcolors;
        $this->assertTrue(count($var->rand(15)) == 15);
        unset($var);
    }


}