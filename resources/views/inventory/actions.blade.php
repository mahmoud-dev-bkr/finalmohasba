@switch($type)
    @case('action')
        <div>
            <ul>
            
                <a href="{{ route('Inventory.update', $Inventory->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
            
                <form action="{{ route('Inventory.destroy', $Inventory->id) }}" method="post">
                
                    @csrf

                    <button class="action-icon delete btn  btn-sm text-white" type="submit">
                        <li><i class="fa-solid fa-trash"></i></li></button>
                </form>
            </ul>
        </div>
    @break

    @default

@endswitch
