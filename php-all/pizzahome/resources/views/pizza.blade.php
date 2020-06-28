        @extends('layouts.layout')
        @section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Pizza List
                </div>
                {{-- blade sytax --}}
            {{-- <p>{{ $type}} Have price: {{$price}}$</p>
            @if($price > 100)
                <p>Price is expensive !</p>
            @elseif($price < 50)
                <p>Price is cheaper !</p>
            @else
                 <p>Price is accept !</p>
            @endif --}}
            {{-- If true it not display oposit if --}}
            {{-- @unless($price == 100)
                <p>Price is not 100 !</p>
            @endunless --}}
            
            {{-- @php
                $name = "chantha";
                echo $name;
            @endphp --}}
            {{-- @for($i = 0; $i < 7;$i++)
                 <p>This is i: {{$i}}</p>
            @endfor --}}
            {{-- get key from array --}}

            @foreach ($pizzas as $item)
                 <p>{{$loop->index}}  This is {{$item['type']}} - {{$item['price']}} - {{$item['ingredient']}} - {{$item['location']}}</p>
                 @if($loop->first)
                    <p>This is frist loop</p>
                 @endif
                 @if($loop->last)
                    <p>-This is last loop</p>
                 @endif
            @endforeach
     
        </div>
        </div>
        @endsection