<?php namespace core;
use core\controller,
    core\view;

/*
 * error class - calls a 404 page
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
 */
class Success extends Controller {

	/**
	 * $error holder
	 * @var string
	 */
	private $_success = null; 

	/**
	 * save error to $this->_error
	 * @param string $error 
	 */
	public function __construct($error){
		parent::__construct();
		$this->_success = $success;
	}

	/**
	 * display success messages
	 * @param  array  $error an error of errors
	 * @param  string $class name of class to apply to div
	 * @return string        return the errors inside divs
	 */
	public static function display($message, $class = 'col-md-10 col-md-offset-1 alert alert-success'){
		if (is_array($message)){

			foreach($message as $message){
				$row.= "<div class='row'><div class='$class'>$message</div></div>";
			}
			return $row;

		} else {

			if(isset($message)){
				return "<div class='row'><div class='$class'>$message</div></div>";
			}

		}
	}


}
