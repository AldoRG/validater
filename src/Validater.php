<?php namespace aldorg\validater;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author yourname
*/
class Validater{

   /**  @var string $m_SampleProperty define here what this variable is for, do this for every instance variable */
   private $m_SampleProperty = '';
 
  /**
  * Sample method 
  *
  * Always create a corresponding docblock for each method, describing what it is for,
  * this helps the phpdocumentator to properly generator the documentation
  *
  * @param string $email A string containing the parameter, do this for each parameter to the function, make sure to make it descriptive
  *
  * @return string
  */
   public function validateEmail($email){
			return filter_var($email, FILTER_VALIDATE_EMAIL) ? 'true' : 'false';
   }

  /**
  * Validate that an attribute is an integer.
  *
  * @param  string  $attribute
  * @param  mixed   $value
  * @return bool
  */
    public function validateInteger($number)
    {
      return filter_var($number, FILTER_VALIDATE_INT) ? 'true' : 'false';
    }
}