<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CompanyController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        $companies = Company::all();
        return view('circularcompanies.index', ['companies' => $companies]);
    }

    public function create()
    {
        return view('circularcompanies.create');
    }

    public function store(CompanyRequest $request)
    {
        $name = $request->validated()['name'];
        $address = $request->validated()['address'];
        $country = $request->validated()['country'];
        $type = $request->validated()['type'];

        $company = new Company;
        $company->name = $name;
        $company->address = $address;
        $company->country = $country;
        $company->type = $type;

        $company->save();

        return redirect('companies');
    }

    public function delete($id)
    {
        $project = Company::find($id);
        if ($project) {
            $project->delete();
            return redirect('companies')->with('success', 'Company deleted successfully.');
        } else {
            return redirect('companies')->with('error', 'Failed to delete company. Company not found.');
        }
    }
}
