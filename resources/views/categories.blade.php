@extends("welcome")

@section("title","Categories")

@section("content")
<a class="p-2 text-dark" href="/categories/create">Create New Job-Category</a>

<div class="mt-5">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()-get('success') }}
        </div>
    @endif
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <td>Category</td>
            <td>Description</td>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td><a href="{{ route('categories.edit', $category->id )}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('categories.destroy', $category->id )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>


@endsection