 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Crypto Library
 */
class Crypto
{
	protected $_ci;

	function __construct()
	{
		$this->_ci =& get_instance();
        $this->_ci->load->library('encryption');
	}

    function encrypt($string)
    {
        $ret = $this->_ci->encryption->encrypt($string);

            $ret = strtr(
                    $ret,
                    array(
                        '+' => '.',
                        '=' => '-',
                        '/' => '~'
                    )
                );

        return $ret;
    }


    function decrypt($string)
    {
        $string = strtr(
                $string,
                array(
                    '.' => '+',
                    '-' => '=',
                    '~' => '/'
                )
            );

        return $this->_ci->encryption->decrypt($string);
    }
}