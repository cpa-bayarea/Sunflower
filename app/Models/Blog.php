<?php

namespace App\Models;

class Blog extends \App\Models\Base\Blog
{
	protected $fillable = [
		'TEXTO',
		'DATA',
		'TITULO'
	];
}
