<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Helpers\NumberHelper;
use App\Models\Employee;

class EmployeeController extends Controller
{

	/**
	* Site Access
	**/
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	public function index()
	{
		$rows = Employee::orderBy('status', 'desc')->orderBy('id', 'desc')->get();
		return view('backend.pages.employee.index', compact('rows'));
	}

	public function add()
	{
		return view('backend.pages.employee.add');
	}

	public function store(Request $request)
	{
		
		$this->validate($request, [
			'name' => 'required',
			'mobile' => 'required',
			'address' => 'required',
			'designation' => 'required',
		]);

		$data = $request->except(['_token','image','save']);

		$imag_extension = request()->image->getClientOriginalExtension();
		$image_name = time().'.'.$imag_extension;
		$location = 'public/images/employee/';
		request()->image->move($location, $image_name);
		$data['image'] = $location.$image_name;

		QueryHelper::simpleInsert('Employee', $data);
		session()->flash('add_message', 'Save Successfull!!!');
		return redirect()->route('admin.employee.index');
	}

	public function edit($id)
	{
		$row = Employee::where('id', $id)->first();
		return view('backend.pages.employee.edit', compact('row'));
	}

	public function update(Request $request, $id)
	{
		$employee = Employee::where('id', $id)->first();

		$this->validate($request, [
			'name' => 'required',
			'mobile' => 'required',
			'address' => 'required',
			'designation' => 'required',
		]);

		$data = $request->except(['_token','image','save']);

		if($request->image != ''){
			unlink($employee->image);
			$imag_extension = request()->image->getClientOriginalExtension();
			$image_name = time().'.'.$imag_extension;
			$location = 'public/images/employee/';
			request()->image->move($location, $image_name);
			$data['image'] = $location.$image_name;
		}

		$employee->update($data);
		session()->flash('update_message', 'Update Successfull!!');
		return redirect()->route('admin.employee.index');
	}

	public function delete($id)
	{
		$employee = Employee::where('id', $id)->delete();
		session()->flash('delete_message', 'Delete Successfull!!!!');
		return redirect()->route('admin.employee.index');
	}

	public function view($id)
	{
		$employee = Employee::where('id', $id)->first();
		return view('backend.pages.employee.view', compact('employee'));
	}
}

