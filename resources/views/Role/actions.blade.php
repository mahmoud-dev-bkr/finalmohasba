@switch($type)
    @case('action')
        <div>
            <ul>

                {{-- @if(canPerission('update_roles')) --}}


                  <a href="{{ route('roles.update', $role->id) }}">
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </a>
                {{-- @endif --}}

                <!--<li><i class="fa-solid fa-box-archive"></i></li>-->
                {{-- @if(canPerission('delete_roles')) --}}
                    <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                        @csrf

                        <button class="action-icon delete btn  btn-sm text-white" type="submit">
                            <li><i class="fa-solid fa-trash"></i></li>
                        </button>
                    </form>
                {{-- @endif --}}

            </ul>
        </div>
    @break

    @default
@endswitch
