@extends('layouts.vertical', ['title' => 'اضافة ' . $title])
@section('content')
<section id="content-wrapper" class="content-header">
    <div class="row">

      <div class="col-lg-12 mt-3">
        <ul class="d-flex align-content-center">

          <li><span class="text-dark ml-3">محاسبة</span></li>
          <li class="text-primary">
            <i class="fa fa-angle-double-left mx-2 "></i><a href="daily-accounting-entries.html"> قيود محاسبية
              يدوية</a>
          </li>
          <li class="text-primary">
            <i class="fa fa-angle-double-left mx-2 "></i><a href="add-daily-accounting-entries.html">قيد يدوي
              جديد</a>
          </li>
        </ul>
      </div>



    </div>
  </section>


  <section>
    <div class="d-flex justify-content-sm-end mx-5 ">
      <button class="btn btn-primary mx-2 "> <a href="daily-accounting-entries.html" class="text-light"> رجوع </a>
        <i class="fa-solid fa-plus"></i></button>

    </div>
    <div class="container my-3 max-con">
      <div class="row">
        <div class="col-md-12 hi-mohasba">

          <h4 class="mx-4">قيد يدوي جديد</h4>
        </div>

      </div>
      <form action="{{ route('DailyAccountingEntries.create.post') }}" method="post" id="DailyAccountingEntriesFrom" onsubmit="return false;">
        @csrf
        <div class="row bg-light pb-4 brdr">

            <div class="row my-5">

              <div class="col-md-6">

                <div class="d-flex align-content-center justify-content-around">
                  <label class="mt-3 mx-4 ml-5"> الوصف</label><input type="text" name="Note" class="form-control w-75 my-2">
                </div>

                <div class="d-flex align-content-center justify-content-around">
                  <label class="mt-3 ml-5 mx-4"> الموقع</label>
                  <select class="form-control w-75 my-3" name="site_id" id="">
                    <optgroup>
                      <option value="">اختر الموقع</option>
                      @foreach ($Sites as $site)
                        <optgroup>
                            <option value="{{ $site->id }}">{{ $site->name_ar }}</option>
                        </optgroup>
                      @endforeach

                    </optgroup>
                  </select>
                </div>

              </div>

              <div class="col-md-6">

                <div class="d-flex align-content-center justify-content-around">
                  <label class="mt-3 ml-5"> التاريخ</label><input type="date" name="date" class="form-control w-75 my-2">
                </div>

              </div>

            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="table-holder responsive-scroll">
                  <table class="table text-center">
                    <thead class="table-head">
                      <tr>

                        <th scope="col">الحساب</th>
                        <th scope="col">مدين </th>
                        <th scope="col">دائن </th>
                        <th scope="col"> التعليقات </th>


                      </tr>
                    </thead>
                    <tbody class="text-center" id="t-body">



                    </tbody>
                  </table>
                  <div class="w-25 my-5  d-flex align-content-between justify-content-around">
                    <label class="mt-1 mx-3">مجموع المدين: </label>
                    <input type="text" placeholder="00.00$" class="form-control" name="Total" id="total_from">
                  </div>
                  <div class="w-25 my-5  d-flex align-content-between justify-content-around">
                    <label class="mt-1 mx-3">مجموعة الدائن: </label>
                    <input type="text" placeholder="00.00$" class="form-control" id="total_to">
                  </div>
                  <a class="btn btn-primary" onclick="addCode()">اضافةالمزيد</a>

                  <div class="my-5 d-flex align-content-center justify-content-start mx-3">
                    <span>ترتيب البنود حسب:</span>

                    <div class="d-flex mx-3 align-content-center justify-content-center">
                      <input class="mx-2" type="radio">
                      <label>المدين ثم الدائن</label>
                    </div>

                    <div class="d-flex align-content-center justify-content-center">
                      <input class="mx-2" type="radio">
                      <label> الترتيب الأصلي</label>
                    </div>

                  </div>

                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseFive" aria-expanded="false"
                          aria-controls="flush-collapseThree">
                          المرفقات
                        </button>
                      </h2>
                      <div id="flush-collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          <div class="col-md-12 add-sub">
                            <h5 class="text-primary">المرفقات</h5>

                            <div class="d-flex align-content-center justify-content-center text-center">
                              <div>
                                <button class="btn btn-light">تصفح ملفاتك</button>
                                <h5 class="my-3">او</h5>
                                <h5>قم بسحب الملفات مباشرة هنا</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item my-2">
                      <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
                          معلومات إضافية
                        </button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><label class="mx-4">إضافة إلى</label><input type="radio"> مشروع
                          <input type="radio"> مهمة
                          <br>
                          <div class="d-flex align-content-center justify-content-sm-between my-3">
                            <label class="mt-3 ml-5">إضافة مشروع/ مهمة</label>
                            <select class="form-control w-75" name="" id="">
                              <optgroup>
                                <option value="">1</option>
                                <option value=""> 2</option>

                              </optgroup>
                            </select>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="btn-holder">
                    <button onclick="submitform()" class="btn btn-primary submit" type="submit">حفظ</button>
                    <button class="btn btn-dark re-submit">الغاء</button>

                  </div>

                </div>
              </div>
            </div>


          </div>
      </form>

    </div>
  </section>

@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


<script src="{{ URL('js/main.js') }}"></script>
<script>
    let id = 0;
    let sumValfrom = 0;
    let sumValto = 0;
    var Total_amount_from = [];
    var line      = 0 ;
    var Total_amount_to = [];
    function addCode() {

        var table  = document.getElementById("t-body");
        var row    = table.insertRow(-1);
        var cell1  = row.insertCell(0);
        var cell2  = row.insertCell(1);
        var cell3  = row.insertCell(2);
        var cell4  = row.insertCell(3);

        // id="product_${id}"
        cell1.innerHTML =
        `<select id="accpunt_${id}"   name="test[]"  class="form-control w-100 my-2 mt-2" >
            <optgroup>
                @foreach ($accounts as $account )
                    <option  value="{{ $account->id }}">{{ $account->name  }}</option>
                @endforeach
            </optgroup>
        </select>`;
        cell2.innerHTML = `<input id="amount_from_${id}"     onfocusout="result(${id})" name="test[]"  value="0"   type="text" class="form-control w-100">`;

        cell3.innerHTML  = `<input id="amount_to_${id}" onfocusout="result(${id})"  name="test[]" value="0"  type="text" class="form-control w-100">`;
        cell4.innerHTML  = `<input id="des_${id}"       name="test[]" type="text" class="form-control w-100">`;

        Total_amount_from[id] = 0;
        Total_amount_to[id] = 0;
        id += 1
        line += 1
        // console.log(id);


    }



    function getSum() {
        for (let index = 0; index < Total_amount_from.length ; index++) {

            sumValfrom       += Total_amount_from[index];
            sumValto         += Total_amount_to[index];


        }

        if (sumValfrom > sumValto) {
           alert("total from big then to " + sumValfrom);
        } else if (sumValto > sumValfrom) {
            alert("total to big then from " + sumValto);
        }

        document.getElementById('total_from').value   = sumValfrom;
        document.getElementById('total_to').value     = sumValto;

        sumValfrom = 0;
        sumValto = 0;

    }


    function result (id) {
        var amount_from = document.getElementById('amount_from_'+id).value
        var amount_to   = document.getElementById('amount_to_'  +id).value
        // console.log(id);
        Total_amount_from[id] = parseFloat(amount_from)
        Total_amount_to[id]   = parseFloat(amount_to)
        getSum();

    }

    var form = document.getElementById("DailyAccountingEntriesFrom");

        form.addEventListener("submit", function(event) {
        event.preventDefault(); // Stop the form submission


        for (let index = 0; index < Total_amount_from.length ; index++) {

            sumValfrom       += Total_amount_from[index];
            sumValto         += Total_amount_to[index];


        }
        if (sumValfrom > sumValto || sumValto > sumValfrom) {
           alert("القيد غير متوازن بمقدار  " + Math.abs((sumValfrom - sumValto)));
        }  else if (sumValfrom ==  sumValto) {
            form.submit();
        }
        sumValfrom = 0;
        sumValto = 0;
  });



</script>
@endsection
