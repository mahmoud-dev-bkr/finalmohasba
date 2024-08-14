<?php

namespace App\Http\Controllers;

use App\Employe;
use App\Employee;
use App\Item;
use App\site;
use App\WorkingHour;
use Illuminate\Http\Request;

class PayRollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('payrolls.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites = site::all();
        return view('payrolls.create', compact('sites'));
    }

    public function getEmployesWithSiteId(Request $request)
    {
        $employees = Employee::where('site_id', $request->site_id)->get();

        return response()->json(
            [
                'employees' => view('payrolls.employees', compact('employees'))->render()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Request $request)
    {
        $data = $request->all();
        // dd($data['code']);
        session(['step2' => $data]);
        return view('payrolls.step2');
    }
    public function createStep3(Request $request)
    {
        $data = $request->all();

        session(['step3' => $data]);
        $Employeesdata = $this->cloulatorSalary(session('step3')['employees']);
        // dd($Employeesdata);
        return view('payrolls.step3', compact('Employeesdata'));
    }
    public function createStep4(Request $request)
    {
        $data = $request->all();

        session(['step4' => $data]);
        $Employeesdata = $this->cloulatorSalary(session('step2')['employees']);
        // dd($Employeesdata);
        return view('payrolls.step4', compact('Employeesdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }

    public function cloulatorSalary($data)
    {
        $employees = [];
        foreach ($data as $key => $value) {
            if (!is_array($value)) {
                continue; // Skip this iteration if $value is not an array
            }

            $totalSalary = 0;
            $value['date'] = date('Y-m-d');
            $value['company_id'] = auth()->user()->company_id;
            $employessSalary = Employee::find($value['employee_id']);
            $employeeWorkingHour = WorkingHour::where('employee_id', $value['employee_id'])
                ->where('date', date('Y-m-d'))
                ->where('company_id', auth()->user()->company_id)
                ->first();
            $SalaryMonth = $value['real_hours'] / $employessSalary->monthly_working_hours * $employessSalary->Salary_Value;
            $PonsSalary  = $employessSalary->Salary_Value / $employessSalary->monthly_working_hours * 1.5 * $value['overtime_hours'];
            $totalSalary = $SalaryMonth + $PonsSalary;
            if ($employeeWorkingHour) {
                $employeeWorkingHour->delete();
            }
            $value['total_salary'] = $totalSalary;
            $employees[] = WorkingHour::create($value);
        }

        return $employees;
    }
}
