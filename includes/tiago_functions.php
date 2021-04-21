<?php

function strip_bad_chars($input){
	return preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
}

function suggested_tip($price, $tip){
	return number_format($price * $tip, 2);
}