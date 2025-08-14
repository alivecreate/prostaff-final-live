@extends('front.layout.main-layout')
@section('content')
    <!-- header end -->
    


    <section class="section-b-space">
        <div class="container">
        <h1>RSS Feed Items</h1>
        
    @foreach ($rssData as $item)
        <div class="rss-item">
            <h2>{{ $item['title'] }}</h2>
            <p><strong>Published:</strong> {{ $item['pubDate'] }}</p>
            <p><a href="{{ $item['link'] }}" target="_blank">Read More</a></p>
            <p>{!! $item['description'] !!}</p>
            <div>{!! $item['contentEncoded'] !!}</div>
            @if ($item['image'])
                <img src="{{ $item['image'] }}" alt="Image">
            @endif
        </div>
    @endforeach    
        
        </div>
    </section>

@endsection