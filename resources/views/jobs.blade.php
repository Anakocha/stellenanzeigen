@extends("welcome")

@section("title","Job")

@section("content")
<a class="p-2 text-dark" href="/jobs/create">Create New Job</a>
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading"></h4>
    <p>{{session("msg")}}</p>
</div>
<h1> Jobs </h1>

@foreach($data as $job)
    <h3>{{$job->title}}</h3>
    <p>{{$job->created_at}}</p>
    <p>{{$job->description}}</p>
@endforeach

@endsection