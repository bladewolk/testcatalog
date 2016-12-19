@foreach($subcategories as $subcategory)
    <li class="list-group-item">
        <input type="radio" name="subcategory_id" value="{{ $subcategory->id }}">{{ $subcategory->name }}<br>
    </li>
@endforeach


