@foreach($childs as $parent)
    @php
        $accountIsNull = DB::table('ccount_estrictions')->where('account_id', $parent->id)->get();
        $amont_froms = DB::table('ccount_estrictions')->where('from_to', 0)->where('account_id', $parent->id)->sum('ammount_from');
        $amont_to    = DB::table('ccount_estrictions')->where('from_to', 1)->where('account_id', $parent->id)->sum('ammount_to');
        $move        = $amont_froms  - $amont_to
    @endphp
    
    <tr>
        
        @if($level == 2)
            <td  class="padleftindex-2" colspan="8">{{ $parent->name }}  </td>
        @elseif($level == 3)
            <td  class="padleftindex-3" colspan="8">{{ $parent->name }} </td>
        @elseif($level == 4)
            <td  class="padleftindex-4" colspan="8">{{ $parent->name }} </td>
        @elseif($level == 5)
            <td  class="padleftindex-5" colspan="8">{{ $parent->name }} </td>
        @elseif($level == 6)
            <td  class="padleftindex-6" colspan="8">{{ $parent->name }} </td>
        @elseif($level == 7)
            <td  class="padleftindex-7" colspan="8">{{ $parent->name }} </td>
        @endif
        <td>{{ $amont_froms }}</td>
        <td>{{ $amont_to }}</td>
        <td>
            @if ($move < 0)
                {{ $move * -1 }}
            @elseif ($move == 0)
                0
            @else
                {{  $move }}
            @endif

        </td>
    

        @if(count($parent->children) > 0)
            @include('Reports.Report1_Tec.sub_account_list', [
                'childs' => $parent->children,
                'level'  => $parent->level + 1,
                'parentAccount' => $parent,
                'sumfrom'       => $parent->total_amount_from,
                'sumto'         => $parent->total_amount_to,
                'summove'       => $parent->total_amount_from - $parent->total_amount_to,
            ])
        @endif
        

    </tr>
@endforeach
@if ($parentAccount->level)
<tr class="dark-row ">
    
    @if($parentAccount->level == 1)
        <td  class="padleftindex-1 fw-bold" colspan="8">{{ $parentAccount->name }}  </td>
    @elseif($parentAccount->level == 2)
        <td  class="padleftindex-2 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 3)
        <td  class="padleftindex-3 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 4)
        <td  class="padleftindex-4 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 5)
        <td  class="padleftindex-5 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 6)
        <td  class="padleftindex-6 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 7)
        <td  class="padleftindex-7 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @endif
    <td>
        {{ $sumfrom }}
    </td>
    <td>
        {{ $sumto }}
    </td>
    <td>
        @if ($summove < 0)
                {{ $summove * -1 }}
        @elseif ($summove == 0)
            -
        @else
            {{  $summove }}
        @endif
          
    </td>

</tr>
@endif