<?php namespace aldorg\validater;

/**
*  Validater Class
*
*  This is an simple class to validate data types for PHP codes. Using php filters with simple methods to verify info.
*
*  @author Aldo Ruiz
*/
class Validater{
  /**
  * Validate that an attribute is a boolean.
  *
  * @param  mixed   $boolean
  * @return bool (string for testing purposes)
  */
    protected function validateBoolean($boolean)
    {
        $acceptable = [true, false, 0, 1, '0', '1'];

        return in_array($boolean, $acceptable, true) ? 'true' : 'false';
    }

  /**
  * Validate that an attribute is an email based on RFC 822 syntax.
  *
  * @param  mixed $email
  * @return bool (string for testing purposes)
  */
   public function validateEmail($email){
			return filter_var($email, FILTER_VALIDATE_EMAIL) ? 'true' : 'false';
   }

  /**
  * Validate that an attribute is an integer.
  *
  * @param  mixed $number
  * @return bool (string for testing purposes)
  */
    public function validateInteger($number)
    {
      return filter_var($number, FILTER_VALIDATE_INT) ? 'true' : 'false';
    }
}