@switch($type)
    @case('action')
        <div>
            <ul>
            <li><i class="fa-solid fa-eye"></i></li>
            <a href="{{ route('advance.update', $advance->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
            <li><i class="fa-solid fa-power-off"></i></li>

            <form action="{{ route('advance.destroy', $advance->id) }}" method="post">
                @csrf

                <button class="action-icon delete btn  btn-sm text-white" type="submit">
                    <li><i class="fa-solid fa-trash"></i></li></button>
            </form>
        </ul>
        </div>
    @break

    @default

@endswitch
