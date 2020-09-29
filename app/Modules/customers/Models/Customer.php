<?php

namespace Customers\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';

	public function getData(){
		return [
			'data' => 'data customer model, module customer',
		];
	}
}