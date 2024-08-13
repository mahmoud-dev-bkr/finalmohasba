@switch($type)
    @case('action')
        <div>
            <ul>
                   @can('show_client')
            <a href="{{ route('client.show',  $Client->id) }}"><li><i class="fa-solid fa-eye"></i></li></a>
            @endcan
            
               @can('update_client')
            <a href="{{ route('client.update', $Client->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
            @endcan
            
               @can('status_client')
           
            <form action="{{ route('client.status', $Client->id) }}" method="post">
                @csrf
                <button class="action-icon notdone btn  btn-sm text-white" type="submit">
                     <li><i class="fa-solid fa-power-off"></i></li></button>
            </form>
            @endcan
            
               @can('delete_client')
            <form action="{{ route('client.destroy', $Client->id) }}" method="post">
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
