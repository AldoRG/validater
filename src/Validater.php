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
    public static function validateBoolean($boolean)
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
   public static function validateEmail($email){
			return filter_var($email, FILTER_VALIDATE_EMAIL) ? 'true' : 'false';
   }

  /**
  * Validate that an attribute is an integer.
  *
  * @param  mixed $number
  * @return bool (string for testing purposes)
  */
    public static function validateInteger($number)
    {
      return filter_var($number, FILTER_VALIDATE_INT) ? 'true' : 'false';
    }

  /**
  * Validate that an attribute is an array.
  *
  * @param  array $array
  * @return bool
  */
    public static function validateArray($array)
    {
      return is_array($array) ? 'true' : 'false';
    }

  /**
  * Validate that an attribute is numeric.
  *
  * @param  mixed $number
  * @return bool
  */
    public static function validateNumeric($number)
    {
      return is_numeric($number) ? 'true' : 'false';
    }

  /**
  * Validate that an attribute is a string.
  *
  * @param  string $string
  * @return bool
  */
    public static function validateString($string)
    {
      return is_string($string) ? 'true' : 'false';
    }

  /**
  * Validate that an attribute is a valid URL.
  *
  * @param  mixed $url
  * @return bool
  */
    public static function validateUrl($url)
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }

  /**
  * Validate that an attribute contains only alphabetic characters.
  *
  * @param  mixed $string
  * @return bool
  */
    public static function validateAlpha($string)
    {
      return preg_match('/^[\pL\pM]+$/u', $string);
    }

  /**
  * Validate that an attribute contains only alpha-numeric characters.
  *
  * @param  mixed $string
  * @return bool
  */
    public static function validateAlphaNum($string)
    {
      return preg_match('/^[\pL\pM\pN]+$/u', $string);
    }

  /**
  * Validate that an attribute is a valid date.
  *
  * @param  mixed $date
  * @return bool
  */
    public static function validateDate($date)
    {
        if ($date instanceof DateTime) {
            return true;
        }

        if (strtotime($date) === false) {
            return false;
        }

        $date = date_parse($date);

        return checkdate($date['month'], $date['day'], $date['year']);
    }
}