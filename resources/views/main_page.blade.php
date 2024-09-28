@extends('layouts.base')
@section('content')
    <div>
        <div>
            <div>
                <h1>Города России</h1>
                <div>
                    <div class="region-block">
                        @foreach($capitals as $capital)
                            <a
                                data-slug="{{ $capital->slug }}"
                                href="{{ asset($capital->slug) }}"
                                @if(isset($current_city) && $capital->slug == $current_city['slug'])
                                    {!! 'style="font-weight: bold;"' !!}
                                @endif
                            >
                                {{ $capital->name }}
                            </a>
                        @endforeach
                    </div>
                    @foreach($regions as $region)
                        <div class="region-block">
                            <h2>{{ $region->name }}</h2>
                            @if($region->regionCities->count())
                                <div>
                                    @foreach($region->regionCities as $city)
                                        <a
                                            data-slug="{{ $city->slug }}"
                                            href="{{ asset($city->slug) }}"
                                            @if(isset($current_city) && $city->slug == $current_city['slug'])
                                                {!! 'style="font-weight: bold;"' !!}
                                            @endif
                                        >
                                            {{ $city->name }}
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

