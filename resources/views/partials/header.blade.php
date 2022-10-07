
@php
    $links = [
        [
        'text' => 'CHARACTERS'
    ],
    [
        'text' => 'COMICS'
],
[
        'text' => 'MOVIES'
    ],
    [
        'text' => 'TV'
    ],[
        'text' => 'GAMES'
    ],[
        'text' => 'COLLECTIBLES'
    ],[
        'text' => 'VIDEOS'
    ],[
        'text' => 'FANS'
    ],[
        'text' => 'NEWS'
    ],[
        'text' => 'SHOP'
    ],
        ]
@endphp


<header>
        <div class="header_container">
        <img src="{{asset('img/dc-logo.png')}}" alt="logo">
        <ul>
            @foreach ($links as $link)
                <li><a href="">{{$link['text']}}</a></li>
            @endforeach     
        </ul>

    </div>
    
</header>


