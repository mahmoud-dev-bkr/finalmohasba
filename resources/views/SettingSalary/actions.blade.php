@switch($type)
    @case('action')
        <div>
            <ul>
            <a href="{{ route('SettingSalary.update', $SettingSalary->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
        </ul>
        </div>
    @break

    @default
@endswitch
