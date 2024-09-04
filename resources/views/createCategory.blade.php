@extends("welcome")

@section("title", "Create Job-Category")

@section("content")

    <div class="card mt-5">
        <div class="card-header">
            Add a Category
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
            <form method="post" action="{{ route('categories.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Category Name:</label>
                    <input type="text" class="form-control" name="name" />
                </div>
                <div class="form-group">
                    <label for="description">Category Description:</label>
                    <textarea rows="6" columns="6" class="form-control" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary">Add a new Category</button>
            </form>
        </div>
    </div>
    

@endsection