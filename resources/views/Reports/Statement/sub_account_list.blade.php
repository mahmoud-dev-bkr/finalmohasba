@foreach($childs as $parent)
<div class="row">
    <table class="table text-center site-table">
        <thead class="table-head site-head">
            <tr>

                <th scope="col"> اسم الحساب </th>
                <th scope="col"> من </th>
                <th scope="col"> الي </th>
                <th scope="col">صافي الحركة </th>
                <th scope="col">التفاصيل</th>

            </tr>
        </thead>
    <tbody class="w-100">

        <tr>
            @php
                $total_from = 0;
                $amont_froms = DB::table('ccount_estrictions')->where('from_to', 1)->where('account_id', $parent->id)->sum('ammount_from');
                $amont_to = DB::table('ccount_estrictions')->where('from_to', 0)->where('account_id', $parent->id)->sum('ammount_to');
                $move     = $amont_froms - $amont_to;
            @endphp

            <td>{{ $parent->name }}</td>
            <td>{{ $amont_froms }}</td>
            <td>{{ $amont_to }}</td>
            <td>
                @if ($move < 0)
                    {{ $move * -1 }}
                @elseif ($move == 0)
                    -
                @else
                    {{  $move }}
                @endif

            </td>
            <td> <a href="#">التفاصيل</a> </td>


        </tr>



    </tbody>
    </table>


    </div>
    <br>
    @if(count($parent->children) > 0)
        @include('Reports.Statement.sub_account_list', [
        'childs' => $parent->children
        ])
    @endif
    <br>
@endforeach

