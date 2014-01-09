<?php

return array(
    /*
	|--------------------------------------------------------------------------
	| Location of the selenium jar file
	|--------------------------------------------------------------------------
	|
	| This location is searched for the selenium jar file when running an
    | IntegrationTestCase. The value can be either a string or a function
    | returning a string.
	|
	*/
    'selenium-jar-location' => function() {
            if(isset($_SERVER['HOME']))
                return $_SERVER['HOME'].'/.selenium';
            return $_SERVER['HOMEDRIVE'].$_SERVER['HOMEPATH'].'/selenium';
        }
);