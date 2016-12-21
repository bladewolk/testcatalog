@for ($i = 0; $i < count($items); $i+=4)
    @if(isset($items[$i]))
        <div style="float: left">
            @for ($j = $i; $j < $i+4; $j++)
                @if (isset($items[$j]))
                    <div class="col-md-3 text-center">
                        {{ $items[$j]->name }} <br>
                        {{--                        <img src="{{ asset('storage/'.$item->image)}}" width="80%"--}}
                        <img src="{{ $items[$j]->image }}" width="80%"
                             height="80%">
                        {{ $items[$j]->price }}$
                    </div>
                @endif
            @endfor
        </div>
    @endif
@endfor