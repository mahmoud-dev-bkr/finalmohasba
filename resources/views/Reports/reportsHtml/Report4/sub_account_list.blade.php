@foreach ($childs as $parent)
    @php
        $accountIsNull = DB::table('ccount_estrictions')
            ->where('account_id', $parent->id)
            ->get();
        $total_from = 0;
        $amont_froms = DB::table('ccount_estrictions')
            ->where('from_to', 0)
            ->where('account_id', $parent->id)
            ->sum('ammount_from');
        $amont_to = DB::table('ccount_estrictions')
            ->where('from_to', 1)
            ->where('account_id', $parent->id)
            ->sum('ammount_to');
        $sumAmontFrom   += $amont_froms;
        $sumAmontTo     += $amont_to;
        $move = $amont_froms - $amont_to;
    @endphp
    <tr >

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
        <td class="text-center"><span class="amount-popup underline " data-account-id="10">0 ر.س</span></td>
        <td class="text-center"><span class="amount-popup underline " data-account-id="10">0 ر.س</span></td>
        <td class="text-center"><span class="amount-popup underline " data-account-id="10">{{ $amont_froms }} ر.س</span></td>
        <td class="text-center"><span class="amount-popup underline " data-account-id="10">{{ $amont_to }} ر.س</span></td>
        <td class="text-center"><span class="amount-popup underline " data-account-id="10">0 ر.س</span></td>
        <td class="text-center"><span class="amount-popup underline " data-account-id="10">0 ر.س</span></td>
        <td class="text-center"><span class="amount-popup underline " data-account-id="10">0 ر.س</span></td>
        <td class="text-center"><span class="amount-popup underline " data-account-id="10">0 ر.س</span>
        </td>


        @if (count($parent->children) > 0)
            @include('Reports.reportsHtml.Report4.sub_account_list', [
                'childs' => $parent->children,
                'level' => $parent->level + 1,
                'parentAccount' => $parent,
                'sumAmontFroms' => 0,
                'sumAmontTo'    => 0
            ])
        @endif


    </tr>
@endforeach

<tr class="dark-row">

    @if ($parentAccount->level == 1)
        <td class="padleftindex-1" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 2)
        <td class="padleftindex-2" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 3)
        <td class="padleftindex-3" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 4)
        <td class="padleftindex-4" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 5)
        <td class="padleftindex-5" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 6)
        <td class="padleftindex-6" colspan="8">{{ $parentAccount->name }} </td>
    @elseif($parentAccount->level == 7)
        <td class="padleftindex-7" colspan="8">{{ $parentAccount->name }} </td>
    @endif
    <td class="text-center"><span class="amount-popup underline" data-account-id="10">0 ر.س</span></td>
    <td class="text-center"><span class="amount-popup underline" data-account-id="10">0 ر.س</span></td>
    <td class="text-center"><span class="amount-popup underline" data-account-id="10">{{ $parentAccount->SumFromChild() }} ر.س</span></td>
    <td class="text-center"><span class="amount-popup underline" data-account-id="10">{{ $parentAccount->SumToChild()  }} ر.س</span></td>
    <td class="text-center"><span class="amount-popup underline" data-account-id="10">0 ر.س</span></td>
    <td class="text-center"><span class="amount-popup underline" data-account-id="10">0 ر.س</span></td>
    <td class="text-center"><span class="amount-popup underline" data-account-id="10">0 ر.س</span></td>
    <td class="text-center"><span class="amount-popup underline" data-account-id="10">0 ر.س</span>
    </td>

</tr>
