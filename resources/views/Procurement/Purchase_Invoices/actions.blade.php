@switch($type)
    @case('action')
        <div>
            <ul>
        @can('show_PurchaseInvoices')
            <a href="{{ route('Purchase_Invoices.show',  $PurchaseInvoices->id) }}"><li><i class="fa-solid fa-eye"></i></li></a>
        @endcan
         @can('download_PurchaseInvoices')
            <a href="{{ route('Purchase_Invoices.print',  $PurchaseInvoices->id) }}" target="_blank"><li><i class="fas fa-print"></i></li></a>
            <a href="{{ route('Purchase_Invoices.pdf',    $PurchaseInvoices->id) }}" target="_blank"><li><li><i class="fas fa-download"></i></li></li></a>
        @endcan
         @can('copy_PurchaseInvoices')     
            <a href="{{ route('Purchase_Invoices.copy', $PurchaseInvoices->id) }}" ><li><i class="fas fa-copy"></i></li></a>
                <li><i class="fas fa-envelope"></i></li>
        @endcan
        @can('pay_PurchaseInvoices')      
            @if($is_done == "ok" && $PurchaseInvoices->done == 1)
                <a href="{{ route('Purchase_Invoices.payment', $PurchaseInvoices->id) }}"><li><i class="fa fa-credit-card"></i></li></a>
            @elseif($PurchaseInvoices->done == 0)
                <a  onclick="showErrorNotDone()" id="edit-action_{{ $PurchaseInvoices->id }}"><li><i class="fa fa-credit-card canupdate"></i></li></a>
            @else
                <a  onclick="showErrorDelete()" id="edit-action_{{ $PurchaseInvoices->id }}"><li><i class="fa fa-credit-card canupdate"></i></li></a>
            @endif
        @endcan
            
            
        @can('update_PurchaseInvoices')
            @if($premation == "ok" || $PurchaseInvoices->done == 0)
                <a href="{{ route('Purchase_Invoices.update', $PurchaseInvoices->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
            @else
                <a  onclick="showerror()" id="edit-action_{{ $PurchaseInvoices->id }}"><li><i id="" class="fa-solid fa-pen-to-square"></i></li></a>
            @endif
        @endcan
        
         @can('delete_PurchaseInvoices')
            @if($is_done == "ok" && $premation == "ok")
                <form action="{{ route('Purchase_Invoices.destroy', $PurchaseInvoices->id) }}" method="post">
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
             alert("لا يمكن الدفع علي الفاتورة لانها مسوده")   
        
    }
    function showErrorNotDone ()
    {
        alert("لا يمكن الدفع علي الفاتورة لانها مسوده")   
    }
</script>

