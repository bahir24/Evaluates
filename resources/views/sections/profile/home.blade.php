@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Предмет</th>
                <th scope="col">Оценка</th>
                <th scope="col">Дата</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evaluates as $index => $evaluate)
            <tr>
                <th scope="row">{{ $index }}</th>
                <td>{{ $evaluate->science }}</td>
                <td>{{ $evaluate->point }}</td>
                <td>{{ $evaluate->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

{{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('You are logged in!') }}
</div>
</div>
</div>
</div> --}}
