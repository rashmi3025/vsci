<?php


	class SampleTest extends PHPUnit_Framework_TestCase
	{
	    public function testFailure()
	    {
	        $this->assertEquals(1, 0);
	    }
	    public function testFailure2()
	    {
	        $this->assertEquals('bar', 'baz');
	    }
	}
