@extends("welcome")

@section("title", "Edit Job-Category")

@section("content")

    <div class="card mt-5">
        <div class="card-header">
            Edit a Category
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('categories.update', $category->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Category Name:</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}"/>
                </div>
                <div class="form-group">
                    <label for="description">Category Description:</label>
                    <textarea rows="6" columns="6" class="form-control" name="description" value="{{$category->description}}"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary">Update Category</button>
            </form>
        </div>
    </div>
    

@endsection