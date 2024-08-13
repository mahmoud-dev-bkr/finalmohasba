@foreach ($childs as $parent)
    <tr>


        @if ($level == 2)
            <td class="padleftindex-2" colspan="8">{{ $parent->name }} </td>
        @elseif($level == 3)
            <td class="padleftindex-3" colspan="8">{{ $parent->name }} </td>
        @elseif($level == 4)
            <td class="padleftindex-4" colspan="8">{{ $parent->name }} </td>
        @elseif($level == 5)
            <td class="padleftindex-5" colspan="8">{{ $parent->name }} </td>
        @elseif($level == 6)
            <td class="padleftindex-6" colspan="8">{{ $parent->name }} </td>
        @elseif($level == 7)
            <td class="padleftindex-7" colspan="8">{{ $parent->name }} </td>
        @endif
        @if (count($sitesfilter) > 0)
            @foreach ($sitesfilter as $sfilter)
                @php
                    $dateFrom = Carbon\Carbon::parse($startquartertDate);
                    $dateTo   = Carbon\Carbon::parse($endquarterDate);
                    $amont_froms = DB::table('ccount_estrictions')
                        ->where('from_to', 0)
                        ->where('site_id', $sfilter->id)
                        ->where('account_id', $parent->id)
                        ->whereBetween('date', [$dateFrom, $dateTo])
                        ->sum('ammount_from');
                    $amont_to = DB::table('ccount_estrictions')
                        ->where('from_to', 1)
                        ->where('account_id', $parent->id)
                        ->where('site_id', $sfilter->id)
                        ->whereBetween('date', [$dateFrom, $dateTo])
                        ->sum('ammount_to');
                    $move = $amont_froms - $amont_to  ;
                    $sumAmontMove += $move;
                @endphp
                <td class="account-kind">
                    @if($move < 0)
                        {{ $move * -1}} 
                    @else
                        {{ $move  }}
                    @endif
                </td>
            @endforeach
        @else
            <td class="account-kind">
                {{ $parent->amountChildren + $item->amount }}
            </td>
        @endif



        @if (count($parent->children) > 0)
            @include('Reports.Report3.sub_account_list', [
                'childs' => $parent->children,
                'level' => $parent->level + 1,
                'parentAccount' => $parent,
                'sitesfilter' => $sitesfilter,
                'sumAmontMove' => 0,
                'startquartertDate'  => $startquartertDate,
                'endquarterDate'     => $endquarterDate,
                
            ])
        @endif

    </tr>
@endforeach
{{-- <tr class="dark-row ">

    @if ($parentAccount->level == 1)
        <td class="padleftindex-1 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 2)
        <td class="padleftindex-2 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 3)
        <td class="padleftindex-3 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 4)
        <td class="padleftindex-4 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 5)
        <td class="padleftindex-5 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 6)
        <td class="padleftindex-6 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 7)
        <td class="padleftindex-7 fw-bold" colspan="8">{{ $parentAccount->name }} </td>
    @endif

    @if (count($sitesfilter) > 0)
        @foreach ($sitesfilter as $sfilter)
            <td class="fw-bold">
                {{ $sumAmontMove }}
            </td>
        @endforeach
    @else
        <td class="fw-bold">
            {{ $parent->amountChildren + $item->amount }}
        </td>
    @endif
</tr> --}}
