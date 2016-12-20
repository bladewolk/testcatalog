@extends('layouts.app')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center">Create category</h1>
        <form id="category-form" action="{{ route('categories.store') }}" method="POST">
            {{ csrf_field() }}
            <ul class="list-groups ">
                <li class="list-group-item">
                    <input type="text" name="name" class="form-control" placeholder="Enter category name"
                           autocomplete="off">
                </li>
            </ul>
            <h2 class="text-center">Subcategories</h2>
            <ul class="list-groups custom-fields">
                <li class="list-group-item subcategory">
                    <input type="text" name="subcategory[]" class="form-control" autocomplete="off">
                </li>
            </ul>
            <button class="btn btn-default add-field">Add field</button>
            <button class="btn btn-default remove-field">Remove field</button>
            <input type="submit" value="Create" class="btn btn-primary">
        </form>
    </div>
    @include('layouts.errors')
@endsection
@section('scripts')
    <script>
        $(function () {
            var form = $('#category-form');
            var customFields = form.find('.custom-fields');
            var subcategoryInputs = customFields.find('.subcategory');
            var elementsCount = 1;

            form.find('.add-field').click(function (e) {
                e.preventDefault();

                var newSubcategory = subcategoryInputs.last().clone();
                newSubcategory.find('input').val('');
                customFields.append(newSubcategory);

                elementsCount++;
            });

            form.find('.remove-field').click(function (e) {
                e.preventDefault();

                if (elementsCount > 1) {
                    $(".subcategory").last().remove();
                    elementsCount--;
                }
            });
        });
    </script>
@endsection
