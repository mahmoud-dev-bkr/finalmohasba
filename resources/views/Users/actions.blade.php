@switch($type)
    @case('action')
        <div>
            <ul>

                {{-- @if(canPerission('update_roles')) --}}


                  <a href="{{ route('user.update', $User->id) }}">
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </a>
                {{-- @endif --}}

                <!--<li><i class="fa-solid fa-box-archive"></i></li>-->
                {{-- @if(canPerission('delete_user')) --}}
                    <form action="{{ route('user.destroy', $User->id) }}" method="post">
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
