@extends('layouts.main')

@section('contact')
    @include('components.nav')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $job->title }}</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Description:</strong> {{ $job->description }}</p>
                        <p><strong>Benefits:</strong> {{ $job->benefits }}</p>
                        <p><strong>Location:</strong> {{ $job->location }}</p>
                        <p><strong>Deadline:</strong> {{ $job->deadline }}</p>
                        <div class="mt-3">
                            <form action="{{ route('applies.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="job_id" value="{{ $job->id }}">
                                <button type="submit" class="btn btn-primary">Apply</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
