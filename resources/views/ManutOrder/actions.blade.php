@switch($type)
    @case('action')
        <div>
            <ul>
            <li><i class="fa-solid fa-eye"></i></li>
            <a href="{{ route('ManutOrder.update', $ManutOrder->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
            

            
        </ul>
        </div>
    @break

    @default

@endswitch
