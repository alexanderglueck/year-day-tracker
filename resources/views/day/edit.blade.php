@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Day</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('days.update', $day->id) }}" method="post">
                            @method('PUT')
                            @csrf

                            @include('day.partials.edit')

                            <button type="submit" class="btn btn-primary">
                                Edit
                            </button>
                        </form>
                        <br>
                        <form action="{{ route('days.destroy', $day->id) }}" method="post">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection