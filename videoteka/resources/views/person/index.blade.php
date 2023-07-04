@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row mb-2">
                <div class="col-12">
                    <a href="{{ route('person.create') }}" class="btn btn-primary float-end">{{ __('Add') }}</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('People') }}</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Surname') }}</th>
                                <th scope="col">{{ __('Birth date') }}</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $g)
                                <tr>
                                    <td>{{ $g->id }}</td>
                                    <td>{{ $g->name }}</td>
                                    <td>{{ $g->surname }}</td>
                                    <td>{{ $g->b_date }}</td>
                                    <td>
                                        <a href="{{ route('person.edit', ['person'=>$g->id]) }}" class="btn btn-success btn-sm">{{ __('Edit') }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection