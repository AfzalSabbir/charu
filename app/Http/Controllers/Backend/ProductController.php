<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Helpers\NumberHelper;
use App\Models\Product;
use DB;

class ProductController extends Controller
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
		$rows = Product::orderBy('status', 'desc')->orderBy('id', 'desc')->get();
		return view('backend.pages.product.index', compact('rows'));
	}

	public function add()
	{
		return view('backend.pages.product.add');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'type' => 'required',
		]);
		$data = $request->except(['_token', 'image']);
        $data['slug'] = StringHelper::createSlug($request->name, 'Product', 'slug');

        $image_input_name = 'image';

        if($request->$image_input_name) {
        	$upload_location = 'public/images/products';
        	$image_name = ImageUploadHelper::smartSingleImageUpload($request, $upload_location, $image_input_name);
        													//(full_request, image_upload_location, Input Name)
            $data[$image_input_name] = 'public/images/products/'.$image_name;
        }

		QueryHelper::simpleInsert('Product', $data);
		session()->flash('add_message', 'Added');
		return redirect()->route('admin.product.index');
	}

	public function view($id)
	{
		$row = Product::where('id', $id)->first();
		return view('backend.pages.product.view', compact('row'));
	}

	public function edit($id)
	{
		$row = Product::where('id', $id)->first();
		return view('backend.pages.product.edit', compact('row'));
	}

	public function update(Request $request, $id)
	{
		$product = DB::table('products')->where('id', $id);
		$this->validate($request, [
			'name' => 'required',
			'type' => 'required',
		]);

        $image_input_name = 'image';

		$data = $request->except(['_token', 'image']);
        $data['slug'] = StringHelper::createSlug($request->name, 'Product', 'slug');

        if($request->$image_input_name) {
        	$upload_location = 'public/images/products';
        	$image_name = ImageUploadHelper::smartSingleImageUpdate($request, $upload_location, $image_input_name, $product->first()->image);
        									//(full_request, image_upload_location, Input Name, Old Image Location)
            $data[$image_input_name] = 'public/images/products/'.$image_name;
        }

		$product->update($data);
		session()->flash('update_message', 'Added');
		return redirect()->route('admin.product.index');
	}

	public function delete($id)
	{
		$data = DB::table('products')->where('id', $id);

		unlink($data->first()->image);
		$data->delete();

		session()->flash('delete_message', 'Deactived');
		return redirect()->route('admin.product.index');
	}
}
