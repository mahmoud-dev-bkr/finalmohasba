@switch($type)
    @case('action')
        <div>
                <ul>
         @can('print_Supplierbond')
               <a href="{{ route('Supplierbond.print',  $Supplierbond->id) }}" target="_blank"><li><i class="fas fa-print"></i></li></a>
               @endcan
               
         @can('show_Supplierbond')
                <a href="{{ route('Supplierbond.show',  $Supplierbond->id) }}"><li><i class="fa-solid fa-eye"></i></li></a>
               @endcan 
                @can('download_Supplierbond')
               <li><i class="fas fa-download"></i></li>
              @endcan
              @can('delete_Supplierbond')
            <form action="{{ route('Supplierbond.destroy', $Supplierbond->id) }}" method="post">
              
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
