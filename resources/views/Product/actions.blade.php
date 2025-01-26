@switch($type)
    @case('action')
        <div>
            <ul>
                @if(canPerission('show_product'))
                    <li><i class="fa-solid fa-eye"></i></li>
                @endif
                @if(canPerission('update_product'))
                    <a href="{{ route('Product.update', $Product->id) }}">
                        <li><i class="fa-solid fa-pen-to-square"></i></li>
                    </a>
                @endif
                @if(canPerission('copy_product'))
                    <a href="{{ route('Product.copy', $Product->id) }}">
                        <li><i class="fas fa-copy"></i></li>
                    </a>
                @endif
                <!--<li><i class="fa-solid fa-box-archive"></i></li>-->
                @if(canPerission('delete_product'))
                    <form action="{{ route('Product.destroy', $Product->id) }}" method="post">
                        @csrf

                        <button class="action-icon delete btn  btn-sm text-white" type="submit">
                            <li><i class="fa-solid fa-trash"></i></li>
                        </button>
                    </form>
                @endif

            </ul>
        </div>
    @break

    @default
@endswitch
