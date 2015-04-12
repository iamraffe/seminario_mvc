<?php namespace controllers;

use \core\view;

class ComoLlegar extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\comollegar();
	}

	public function index(){
		$data['title'] = 'Cómo llegar';
		$data['isComo-llegar'] = 'class="active"';
		$data['js'] = "
			<script type='text/javascript'>
				$(document).ready(function($){	
					$('.accordion').each(function(){
					    var acc = $(this).attr('rel') * 2;
					    $(this).find('.accordion-inner:nth-child(' + acc + ')').show();
					     $(this).find('.accordion-inner:nth-child(' + acc + ')').prev().addClass('active');
					});
					
					$('.accordion .accordion-title').click(function() {
					    if($(this).next().is(':hidden')) {
					        $(this).parent().find('.accordion-title').removeClass('active').next().slideUp(200);
					        $(this).toggleClass('active').next().slideDown(200);
					    }
					    return false;
					});
				});
			</script>
		";
		View::rendertemplate('header', $data);
		View::render('comollegar', $data);
		View::rendertemplate('footer', $data);

	}
}
?>