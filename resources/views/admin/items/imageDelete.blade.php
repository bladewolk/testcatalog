{{  $item->name }} <br>
{{ $item->price }}
{{ link_to_route('items.show', $title = 'Show', $parameters = [$item->id], $attributes = ['class' => 'btn btn-primary']) }}
<button class="btn btn-danger DelItem" data-id="{{ $item->id }}">Delete</button>
{{ link_to_route('items.edit', $title = 'Edit', $parameters = [$item->id], $attributes = ['class' => 'btn btn-primary']) }}
<button class="btn btn-danger DelImg">Del img</button>
<img src="{{ asset('storage/'.$item->image)}}" widht="60" height="60">