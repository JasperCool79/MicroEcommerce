<?php

namespace App\Http\Controllers\Admin;

use App\OptionName;
use App\OptionValue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    public function index()
    {
        $option_names = OptionName::paginate(5);
        $option_values = OptionValue::paginate(5);
        return view('admin.options.index', compact('option_names', $option_names, 'option_values', $option_values));
    }


    public function match($id)
    {
        $option_name = OptionName::find($id);
        $option_values = OptionValue::all();
        $select_option_values = $option_name->values()->pluck('value')->toArray();
        return view('admin.options.match', compact('option_name', $option_name, 'option_values', $option_values,'select_option_values',$select_option_values));
    }

    public function match_sync(Request $request,$id)
    {
        $option_name =  OptionName::find($id);

        $option_name->values()->sync($request->get($option_name->name));


        return redirect()->route('options')->with('success', 'The  Select Option Name and Value is Success Match');

    }

    public function newname()
    {

        return view('admin.options.name.create');
    }

    public function newname_sotre(Request $request)
    {
        $this->validate($request, ['name' => 'required']);
        OptionName::create([
            'name' => $request->get('name')
        ]);
        return redirect()->route('options')->with('success', 'A New User Select Option Name is Created Success');
    }

    public function newname_edit($id)
    {
        $option_name = OptionName::find($id);
        return view('admin.options.name.edit', compact('option_name', $option_name));
    }

    public function newname_update(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required']);
        $option_name = OptionName::find($id);
        $option_name->name = $request->get('name');
        $option_name->save();
        return redirect()->route('options')->with('success', 'The User Select Option Name is Success Updated');

    }

    public function newname_delete($id)
    {
        OptionName::destroy($id);
        return redirect()->route('options')->with('info', 'The User Select Option Name is Deleted');
    }


    public function value()
    {

        return view('admin.options.value.create');
    }

    public function value_sotre(Request $request)
    {
        $this->validate($request, ['name' => 'required']);
        OptionValue::create([
            'value' => $request->get('name')
        ]);
        return redirect()->route('options')->with('success', 'A New User Select Option Value is Created Success');
    }

    public function value_edit($id)
    {
        $option_value = OptionValue::find($id);
        return view('admin.options.value.edit', compact('option_value', $option_value));
    }

    public function value_update(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required']);
        $option_value = OptionValue::find($id);
        $option_value->value = $request->get('name');
        $option_value->save();
        return redirect()->route('options')->with('success', 'The User Select Option Value is Success Updated');

    }

    public function value_delete($id)
    {
        OptionValue::destroy($id);
        return redirect()->route('options')->with('info', 'The User Select Option Value is Deleted');
    }
}
