@switch($type)
    @case('action')
        <div>
            <ul>
                @can('show_product')
            <li><i class="fa-solid fa-eye"></i></li>
            @endcan
            @can('update_product')
            <a href="{{ route('Product.update',  $Product->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
              @endcan
              @can('copy_product')
            <a href="{{ route('Product.copy'  ,  $Product->id) }}">   <li><i class="fas fa-copy"></i></li></a>
              @endcan
           <!--<li><i class="fa-solid fa-box-archive"></i></li>-->
           @can('delete_product')
            <form action="{{ route('Product.destroy', $Product->id) }}" method="post">
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
