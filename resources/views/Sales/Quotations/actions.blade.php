@switch($type)
    @case('action')
        <div>
            <ul>
                 @can('show_Quotation')
                <a href="{{ route('Quotation.show',  $Purchase_orders->id) }}"><li><i class="fa-solid fa-eye"></i></li></a>
              @endcan
              
                 @can('done_Quotation')
                @if($Purchase_orders->status == 4)
                    <a onclick="showErrorNotDone()" ><li><i class="fas fa-sync"></i></li></a>
                    
                @elseif($Purchase_orders->status == 3)
                    <a onclick="showErrorDelete()" ><li><i class="fas fa-sync"></i></li></a>
                    
                @else
                    <a href="{{ route('Quotation.done', $Purchase_orders->id) }}"><li><i class="fas fa-sync"></i></li></a>
                    
                
                @endif
                
              @endcan
                <!--<li><i class="fas fa-file-pdf"></i></li>-->
                <!--<a href="{{ route('Purchase_orders.copy', $Purchase_orders->id) }}"><li><i class="fas fa-copy"></i></li></a>-->
                <!--<li><i class="fas fa-envelope"></i></li>-->
    
                
                 @can('status_Quotation')
                 @if($Purchase_orders->status == 4)
                
                <form action="{{ route('Quotation.status', $Purchase_orders->id) }}" method="post">
                    @csrf
                    <button class="action-icon notdone btn  btn-sm text-white" type="submit">
                        <li><i class="material-icons">x</i></li></button>
                </form>
                @elseif($Purchase_orders->status == 3)
                   <button onclick="showerror()" class="action-icon  btn  btn-sm text-white" type="button">
                        <li><i class=""></i>X</li></button>
                @else
                <form action="{{ route('Quotation.status', $Purchase_orders->id) }}" method="post">
                    @csrf
                    <button class="action-icon notdone btn  btn-sm text-white" type="submit">
                        <li><i class="material-icons">x</i></li></button>
                </form>
                @endif
                
                  @endcan
                
                 @can('delete_Quotation')
                <form action="{{ route('Quotation.destroy', $Purchase_orders->id) }}" method="post">
                    
                    @csrf
    
                    <button class="action-icon delete btn  btn-sm text-white" type="submit">
                        <li><i class="fa-solid fa-trash"></i></li></button>
                </form>
                  @endcan
            </ul>
        </div>
    @break

    @default

@endswitch
<script>
    function showerror()
    {
        alert("لا يمكن الغاء هذه الفاتورة لانها تمت فوتره")
        
    }
    
    function showErrorDelete()
    {
             alert("لقد تمت الفوترة مسبقا")   
        
    }
    function showErrorNotDone ()
    {
        alert("لا يمكن فوترة هذه الفاتورة لقد تم  الالغاء")   
    }
</script>

