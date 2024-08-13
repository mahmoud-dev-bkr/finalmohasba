@switch($type)
    @case('action')
        <div>
            <ul>
                <li><i class="fa-solid fa-eye"></i></li>
                <a href="{{ route('Site.update', $Site->id) }}">
                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                </a>


            </ul>
        </div>
    @break

    {{-- if data > now == yellow  elseif data < now == red elseif data == now == green --}}
    @case('municipal_license')
        <div 
            style="background-color: {{ $color }}; color: {{ $color == 'yellow' ? 'black' : 'white' }}; margin:auto!important;  width:90%;">
            {{ $Site->Municipality_number_data }}
        </div>
    @break

    @case('Commercial_Record')
        <div 
            style="background-color: {{ $color }}; color: {{ $color == 'yellow' ? 'black' : 'white' }}; margin:auto!important; width:90%;">
            {{ $Site->Commercial_Record_data }}
        </div>
    @break
    @case('Human_Resources_License')
        <div 
            style="background-color: {{ $color }}; color: {{ $color == 'yellow' ? 'black' : 'white' }}; margin:auto!important; width:90%;">
            {{ $Site->Human_Resources_License_data }}
        </div>
    @break
    @case('Tex_Number')
        <div 
            style="background-color: {{ $color }}; color: {{ $color == 'yellow' ? 'black' : 'white' }}; margin:auto!important; width:90%;">
            {{ $Site->Tex_Number_data }}
        </div>
    @break
    @case('FDA_license')
        <div 
            style="background-color: {{ $color }}; color: {{ $color == 'yellow' ? 'black' : 'white' }}; margin:auto!important; width:90%;">
            {{ $Site->FDA_license_data }}
        </div>
    @break
    @case('Social_Insurance')
        <div 
            style="background-color: {{ $color }}; color: {{ $color == 'yellow' ? 'black' : 'white' }}; margin:auto!important; width:90%;">
            {{ $Site->Social_Insurance_data }}
        </div>
    @break
    @case('Chamber_Commerce')
        <div 
            style="background-color: {{ $color }}; color: {{ $color == 'yellow' ? 'black' : 'white' }}; margin:auto!important; width:90%;">
            {{ $Site->Chamber_Commerce_data }}
        </div>
    @break

    @default
@endswitch
