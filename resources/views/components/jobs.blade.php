@foreach ($jobs as $job)
    <div style="display: flex; justify-content: center; align-items: center;" class="border px-5 py-2">
        <div class="container">
            <div class="row">
                <h2>{{ $job->title }}</h2>
                <p>Description: {{ $job->description }}</p>
                <p>Benefits: {{ $job->benefits }}</p>
                <p>Location: {{ $job->location }}</p>
                <p>Deadline: {{ $job->deadline }}</p>
                <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-primary">View Job</a>
            </div>
        </div>
    </div>
@endforeach
