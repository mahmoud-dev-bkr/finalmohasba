@switch($type)
    @case('action')
        <div>
            <ul>
                @can('show_ReturnsPurchaseInvoices')
            <a href="{{ route('ReturnsPurchase_Invoices.show', $PurchaseInvoices->id) }}"><li><i class="fa-solid fa-eye"></i></li></a>
             @endcan
            
             @can('print_ReturnsPurchaseInvoices')
            <a href="{{ route('ReturnsPurchase_Invoices.print', $PurchaseInvoices->id) }}" target="_blank"><li><i class="fas fa-print"></i></li></a>
             @endcan
            
             @can('download_ReturnsPurchaseInvoices')
            <a href="" target="_blank"><li><li><i class="fas fa-download"></i></li></li></a>
            
             @endcan
            
             @can('pay_ReturnsPurchaseInvoices')
            @if($is_done == "ok" && $PurchaseInvoices->done == 1)
                <a href="{{ route('ReturnsPurchase_Invoices.payment', $PurchaseInvoices->id) }}"><li><i class="fa fa-credit-card"></i></li></a>
            @elseif($PurchaseInvoices->done == 0)
                <a  onclick="showErrorNotDone()" id="edit-action_{{ $PurchaseInvoices->id }}"><li><i class="fa fa-credit-card canupdate"></i></li></a>
            @else
                <a  onclick="showErrorDelete()" id="edit-action_{{ $PurchaseInvoices->id }}"><li><i class="fa fa-credit-card canupdate"></i></li></a>
            @endif
             @endcan



            @can('update_ReturnsPurchaseInvoices')
            @if($premation == "ok" || $PurchaseInvoices->done == 0)
                <a href="{{ route('ReturnsPurchase_Invoices.update', $PurchaseInvoices->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
            @else
                <a  onclick="showerror()" id="edit-action_{{ $PurchaseInvoices->id }}"><li><i id="" class="fa-solid fa-pen-to-square"></i></li></a>
            @endif
             @endcan
            
            
             @can('delete_ReturnsPurchaseInvoices')
            @if($is_done == "ok" && $premation == "ok")
                <form action="{{ route('ReturnsPurchase_Invoices.destroy', $PurchaseInvoices->id) }}" method="post">
                    @csrf
                    <button class="action-icon delete btn  btn-sm text-white" type="submit">
                        <li><i class="fa-solid fa-trash"></i></li></button>
                </form>
            @else
                
                <button onclick="showErrorDelete()" class="action-icon  btn  btn-sm text-white" type="button">
                    <li><i class="fa-solid fa-trash"></i></li></button>
            @endif
            
            @endcan
        </ul>
        </div>
    @break

    @default

@endswitch
<script>
    function showerror()
    {
        alert("لا يمكن التعديل علي هذه الفاتورة لانها مستعمله")
        
    }
    
    function showErrorDelete()
    {
        alert("  المستند مدفوع بالكامل مسبقا   ")
        
    }
    function showErrorNotDone ()
    {
        alert("لا يمكن الدفع علي الفاتورة لانها مسوده")   
    }
    
</script>

