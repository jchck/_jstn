<?php namespace Roots\Sage\Date;

function month(){
	$month = date( 'F', strtotime('+1 month') );
	return $month;
}