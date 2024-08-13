<div id="employee_id">
@if(isset($employees))
        @foreach ($employees as $employee)
            {{-- input hiden emplyee id  --}}
            <input type="hidden" name="employees[]" value="{{ $employee->id }}">
            <h2 class="accordion-header" id="heading_{{ $employee->id }}">
                <input type="hidden" name="employee_id" value="2">
                <button style="color: #3c8dbc; " class="accordion-button collapsed accordionDefault"
                    type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $employee->id }}"
                    aria-expanded="false" aria-controls="collapse_{{ $employee->id }}">
                    <a class="btn btn-default " style="margin-top: 6px;margin-left:5px;  ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a class="btn btn-default " style="margin-top: 6px;margin-left:40px;  ">
                        <i class="fa fa-trash"></i>
                    </a>
                    <i class="fa fa-user" style="margin-top: 6px;margin-left:5px; color: #3c8dbc; "></i>

                        EMP{{ $employee->id }} - {{ $employee->name_ar }}

                </button>

            </h2>
            <div class="accordion-item ">
                <div id="collapse_{{ $employee->id }}" class="accordion-collapse collapse" aria-labelledby="heading_{{ $employee->id }}"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="col-md-12 table-responsive-lg ">
                            <div class="form my-5 p0-5">
                                <table class="table table-bordered payroll-employee-info">
                                    <thead>
                                        <tr>
                                            <th>معلومات عامة</th>
                                            <th>الراتب الأساسي</th>
                                            <th>التأمينات الاجتماعية</th>
                                            <th>البدلات</th>
                                            <th>خصومات دورية</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <!-- EMPLOYEE's INFO-->
                                                <dl class="dl-horizontal">
                                                    <dt>المسمى الوظيفي</dt>
                                                    <dd>
                                                        {{ $employee->Job_Name }}
                                                    </dd>
                                                    <dt>القسم</dt>
                                                    <dd></dd>
                                                    <dt>تاريخ الانضمام</dt>
                                                    <dd>2023-01-07</dd>
                                                    <dt>اَخر راتب دفع كان في</dt>
                                                    <dd>لم يدفع له أي راتب</dd>
                                                </dl>
                                            </td>
                                            <td>
                                                <dl class="dl-horizontal">
                                                    <dt>مرتب شهري</dt>
                                                    <dd>{{ $employee->Salary_Value }} ر.س</dd>
                                                </dl>
                                            </td>

                                            <td>
                                                <dl class="dl-horizontal">
                                                </dl>
                                            </td>

                                            <td>
                                                <dl class="dl-horizontal">
                                                </dl>
                                            </td>

                                            <td>
                                                <dl class="dl-horizontal">
                                                </dl>

                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
    @endif
</div>
