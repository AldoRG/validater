<?php 

/**
*  Corresponding Class to test Validater class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author Aldo Ruiz
*/
class ValidaterTest extends PHPUnit_Framework_TestCase{
	
  /**
  * Just check if the Validater has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testIsThereAnySyntaxError(){
    $var = new aldorg\validater\Validater;
    $this->assertTrue(is_object($var));
    unset($var);
  }
  
  /**
  * Test Case for validateEmail method
  *
  * Validate two scenarios for using a correct email,
  * and another one with a wrong pattern.
  *
  */
  public function testValidateEmail(){
    $var = new aldorg\validater\Validater;
    $this->assertTrue($var->validateEmail("name@example.com") == 'true');
    $this->assertTrue($var->validateEmail("name@example,.com") == 'false');
    $this->assertTrue($var->validateEmail("nameexample.com") == 'false');
    unset($var);
  }
  
  /**
  * Test Case for validateBoolean method 
  *
  * Validate four scenarios for test differents values acceptable for
  * boolean variables, using boolean or strings.
  *
  */
  public function testValidateBoolean(){
    $var = new aldorg\validater\Validater;
    $this->assertTrue($var->validateBoolean(true) == 'true');
    $this->assertTrue($var->validateBoolean(false) == 'true');
    $this->assertTrue($var->validateBoolean(1) == 'true');
    $this->assertTrue($var->validateBoolean(0) == 'true');
    $this->assertTrue($var->validateBoolean("1") == 'true');
    $this->assertTrue($var->validateBoolean("0") == 'true');
    $this->assertTrue($var->validateBoolean('true') == 'false');
    $this->assertTrue($var->validateBoolean('false') == 'false');
    unset($var);
  }

  /**
  * Test Case for validateInteger method 
  *
  * Validate scenarios for test differents values acceptable for
  * integer variables.
  *
  */
  public function testValidateInteger(){
    $var = new aldorg\validater\Validater;
    $this->assertTrue($var->validateInteger(1) == 'true');
    $this->assertTrue($var->validateInteger(1.0) == 'true');
    $this->assertTrue($var->validateInteger(1.1) == 'false');
    $this->assertTrue($var->validateInteger("1") == 'true');
    $this->assertTrue($var->validateInteger("1.0") == 'false');
    $this->assertTrue($var->validateInteger("1.1") == 'false');
    unset($var);
  }
  
  /**
  * Test Case for validateArray method 
  *
  * Validate scenarios for test differents values acceptable for
  * array variables.
  *
  */
  public function testValidateArray(){
    $var = new aldorg\validater\Validater;
    $this->assertTrue($var->validateArray([1, 2]) == 'true');
    $this->assertTrue($var->validateArray("[1, 2]") == 'false');
    $this->assertTrue($var->validateArray("2") == 'false');
    $this->assertTrue($var->validateArray("test") == 'false');
    unset($var);
  }
  
  /**
  * Test Case for validateNumeric method 
  *
  * Validate scenarios for test differents values acceptable for
  * numeric variables.
  *
  */
  public function testValidateNumeric(){
    $var = new aldorg\validater\Validater;
    $this->assertTrue($var->validateNumeric(1) == 'true');
    $this->assertTrue($var->validateNumeric("1") == 'true');
    $this->assertTrue($var->validateNumeric(1.0) == 'true');
    $this->assertTrue($var->validateNumeric("1.0") == 'true');
    $this->assertTrue($var->validateNumeric("number") == 'false');
    unset($var);
  }
  
  /**
  * Test Case for validateString method 
  *
  * Validate scenarios for test differents values acceptable for
  * string variables.
  *
  */
  public function testValidateString(){
    $var = new aldorg\validater\Validater;
    $this->assertTrue($var->validateString("test") == 'true');
    $this->assertTrue($var->validateString("1") == 'true');
    $this->assertTrue($var->validateString(1) == 'false');
    unset($var);
  }
  
  /**
  * Test Case for validateUrl method 
  *
  * Validate scenarios for test differents values acceptable for
  * string variables.
  *
  */
  public function testValidateUrl(){
    $var = new aldorg\validater\Validater;
    $this->assertTrue($var->validateUrl("https://github.com/AldoRG/validater") == 'true');
    $this->assertTrue($var->validateUrl("test") == false);
    unset($var);
  }
  
  /**
  * Test Case for validateAlpha method 
  *
  * Validate scenarios for test differents values acceptable for
  * string variables.
  *
  */
  public function testValidateAlpha(){
    $var = new aldorg\validater\Validater;
    $this->assertTrue($var->validateAlpha("test") == true);
    $this->assertTrue($var->validateAlpha("test1") == false);
    unset($var);
  }
  
  /**
  * Test Case for validateAlphaNum method 
  *
  * Validate scenarios for test differents values acceptable for
  * string variables.
  *
  */
  public function testValidateAlphaNum(){
    $var = new aldorg\validater\Validater;
    $this->assertTrue($var->validateAlphaNum("test") == true);
    $this->assertTrue($var->validateAlphaNum("test1") == true);
    unset($var);
  }
  
  /**
  * Test Case for validateDate method 
  *
  * Validate scenarios for test differents values acceptable for
  * string variables.
  *
  */
  public function testValidateDate(){
    $var = new aldorg\validater\Validater;
    $this->assertTrue($var->validateDate("04/04/17") == true);
    $this->assertTrue($var->validateDate("04-04-17") == true);
    $this->assertTrue($var->validateDate("test1") == false);
    unset($var);
  }
  
}