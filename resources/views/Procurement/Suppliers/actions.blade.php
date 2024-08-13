@switch($type)
    @case('action')
        <div>
            <ul>
                   @can('show_supplier')
            <a href="{{ route('Supplier.show',  $Supplier->id) }}"><li><i class="fa-solid fa-eye"></i></li></a>
             @endcan
            
               @can('update_supplier')
            <a href="{{ route('Supplier.update', $Supplier->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
             @endcan
             
            <li><i class="fa-solid fa-power-off"></i></li>
          @can('delete_supplier')
            <form action="{{ route('Supplier.destroy', $Supplier->id) }}" method="post">
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
