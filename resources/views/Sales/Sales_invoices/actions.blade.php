@switch($type)
    @case('action')
        <div>
            <ul>
            {{-- @can('show_salesinvoices') --}}
             <a href="{{ route('sales_invoices.show',  $PurchaseInvoices->id) }}"><li><i class="fa-solid fa-eye"></i></li></a>
            {{-- @endcan --}}
            {{-- @can('download_salesinvoices') --}}
                <a href="{{ route('sales_invoices.print',  $PurchaseInvoices->id) }}" target="_blank"><li><i class="fas fa-print"></i></li></a>
                <a href="{{ route('sales_invoices.pdf',    $PurchaseInvoices->id) }}" target="_blank"><li><li><i class="fas fa-download"></i></li></li></a>
            {{-- @endcan --}}

            {{-- @can('copy_salesinvoices') --}}
            <a href="{{ route('sales_invoices.copy', $PurchaseInvoices->id) }}" ><li><i class="fas fa-copy"></i></li></a>
                <li><i class="fas fa-envelope"></i></li>
            {{-- @endcan --}}

            {{-- @can('pay_salesinvoices') --}}
                @if($is_done == "ok" && $PurchaseInvoices->done == 1)
                    <a data-toggle="modal" data-target="#exampleModal" onclick="check_data({{$PurchaseInvoices->id}})"><li><i class="fa fa-credit-card"></i></li></a>
                @elseif($PurchaseInvoices->done == 0)
                    <a  onclick="showErrorNotDone()" id="edit-action_{{ $PurchaseInvoices->id }}"><li><i class="fa fa-credit-card canupdate"></i></li></a>
                @else
                    <a  onclick="showErrorDelete()" id="edit-action_{{ $PurchaseInvoices->id }}"><li><i class="fa fa-credit-card canupdate"></i></li></a>
                @endif
            {{-- @endcan --}}

            {{-- @can('update_salesinvoices') --}}

                @if($premation == "ok" || $PurchaseInvoices->done == 0)
                    <a href="{{ route('sales_invoices.update', $PurchaseInvoices->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
                @else
                    <a  onclick="showerror()" id="edit-action_{{ $PurchaseInvoices->id }}"><li><i id="" class="fa-solid fa-pen-to-square"></i></li></a>
                @endif

            {{-- @endcan --}}

            {{-- @can('delete_salesinvoices') --}}

                @if($is_done == "ok" && $premation == "ok")
                    <form action="{{ route('sales_invoices.destroy', $PurchaseInvoices->id) }}" method="post">
                        @csrf
                        <button class="action-icon delete btn  btn-sm text-white" type="submit">
                            <li><i class="fa-solid fa-trash"></i></li></button>
                    </form>
                @else

                    <button onclick="showErrorDelete()" class="action-icon  btn  btn-sm text-white" type="button">
                        <li><i class="fa-solid fa-trash"></i></li></button>
                @endif

            {{-- @endcan --}}
        </ul>

    </div>
    @break

    @default

@endswitch
<script>
    var globalTotal = 0;
    function showerror()
    {
        alert("لا يمكن التعديل علي هذه الفاتورة لانها مستعمله")

    }

    function showErrorDelete()
    {
             alert("لا يمكن الدفع علي الفاتورة لانه تم السداد")

    }
    function showErrorNotDone ()
    {
         alert("لا يمكن الدفع علي الفاتورة لانه تم السداد")
    }

    function showData(data, code, client, account, amount, remaining, invId){

        client.empty();
        account.empty();
        code.value = "PYT " + data.count;
        invId.value =  data.PurchaseInvoices.id;
        $.each(data.Clients, function(key, value) {
            console.log(value.name);  // Log each client name to the console
            client.append(`<option value="${value.id}">${value.name}</option>`);
        });
        account.append(`<option value="">اختار الحساب</option>`);
        $.each(data.accounts, function(key, value) {
            console.log(value.name);  // Log each client name to the console
            account.append(`<option value="${value.id}">${value.name}</option>`);
        });
        amount.value = data.PurchaseInvoices.total;
        remaining.value = 0;
    }

    function check_data(id){
        var code = document.getElementById("code");
        var client = $('#id_customers');
        var account = $('#account');
        var amount = document.getElementById("Amount");
        var remaining = document.getElementById("total");
        var invId     = document.getElementById("invId");

        $(function() {

            var PaymentInvoice = "/dashboard/sales_invoices/payment/"+id;
            $.get(PaymentInvoice, function (data) {
                globalTotal = data.PurchaseInvoices.total;
                showData(data, code, client, account, amount, remaining, invId);

            });
        });
    }

    function calculator()
    {
        var Amount   = document.getElementById('Amount').value;
        var finaltotal = document.getElementById('total');
        var InputAmount = document.getElementById('Amount');
        if (InputAmount.value.trim() === '' )
        {
            alert("هذه الحقل مطلوب")
            // InputAmount.classList.add('error-border');
            InputAmount.value = globalTotal;


        } else {

            // InputAmount.classList.reomve('error-border');
            if (globalTotal - Amount >= 0) {

                finaltotal.value = globalTotal - Amount;
            } else {
                alert("range biger then the total")
            }

        }


    }
</script>
