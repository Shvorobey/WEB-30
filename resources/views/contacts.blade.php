@extends('layout')

@section('title', 'CONTACTS')

@section('content')
    <!-- Blog Entries Column -->
    <div class="col-md-8">
        <h1 class="my-4">Наши контакты:</h1>
        <ul>
            @foreach($contacts as $contact)
            <li>{{$contact->title}}: {{$contact->value}}</li>
            @endforeach
        </ul>
        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                    var setting = {"height":750,"width":750,"zoom":17,"queryString":"улица Дерибасовская, 19, Одесса, Одесская область, Украина","place_id":"EmjRg9C70LjRhtCwINCU0LXRgNC40LHQsNGB0L7QstGB0LrQsNGPLCAxOSwg0J7QtNC10YHRgdCwLCDQntC00LXRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCDQo9C60YDQsNC40L3QsCJQEk4KNAoyCfVE8_KXMcZAEeMuCZ9MJE-_Gh4LEO7B7qEBGhQKEgl9HLUUMDLGQBGZDF7sMEAAwQwQEyoUChIJYbz8HZgxxkARcM1dPuGX4w4","satellite":false,"centerCoord":[46.483995516724974,30.737946400000013],"cid":"0xd17aecbbadec3d0f","lang":"ru","cityUrl":"/ukraine/odessa","cityAnchorText":"Карта [CITY1], Черноморское побережье Украины, Украина","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"510886"};
                    var d = document;
                    var s = d.createElement('script');
                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=510886';
                    s.async = true;
                    s.onload = function (e) {
                        window.OneMap.initMap(setting)
                    };
                    var to = d.getElementsByTagName('script')[0];
                    to.parentNode.insertBefore(s, to);
                })();</script><a href="https://1map.com/ru/map-embed">1 Map</a></div>
    </div>

@endsection
