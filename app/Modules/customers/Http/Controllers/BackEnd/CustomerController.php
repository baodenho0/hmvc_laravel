<?php 

namespace Customers\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Customers\Models\Customer;
use Customers\Http\Requests\BackEnd\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
	public function index(){
		$customer = new Customer;
		$data = $customer->getData();

		return view('customers::backend.index', $data);
	}
}