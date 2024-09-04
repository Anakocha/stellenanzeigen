@extends("welcome")

@section("title", "Create Job")

@section("content")

    <div class="col-6">
        <form method="post" action="/jobs">
            @csrf
           <div class="form-group">
                <label for="title">Job-Title</label>
                <input type="text" class="form-control" id="title" name="title">
                @error("title") {{$message}} @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description">
                @error("description") {{$message}} @enderror
            </div>
            <input type="submit" value="Create Job">
        </form>

    </div>

@endsection