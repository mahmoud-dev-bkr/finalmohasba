@switch($type)
    @case('action')
        <div>
            <ul>
             @can('print_Clientbond')
               <a href="{{ route('Clientbond.print',  $Clientbond->id) }}" target="_blank"><li><i class="fas fa-print"></i></li></a>
                @endcan
               
                 @can('show_Clientbond')
                <a href="{{ route('Clientbond.show',  $Clientbond->id) }}"><li><i class="fa-solid fa-eye"></i></li></a>
                 @endcan
                
                @can('download_Clientbond')
               <li><i class="fas fa-download"></i></li>
          @endcan
                @can('delete_Clientbond')
            <form action="{{ route('Clientbond.destroy', $Clientbond->id) }}" method="post">
              
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
