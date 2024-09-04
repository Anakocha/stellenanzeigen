@extends("welcome")

@section("title","Companies")

@section("content")
<a class="p-2 text-dark" href="/companies/create">Create New Company</a>

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
            <td>Company</td>
            <td>Description</td>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->description}}</td>
                <td><a href="{{ route('companies.edit', $company->id )}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('companies.destroy', $company->id )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>


@endsection