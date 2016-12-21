@foreach($items as $item)
    <div class="col-md-3 text-center">
        {{ $item->name }} <br>
        <img src="{{ asset($item->image) }}" width="80%"
             height="80%">
        {{ $item->price }}$
    </div>
@endforeach
