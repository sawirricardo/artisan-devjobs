<div>
    <div class="space-y-1">
        @foreach ($jobs as $job)
            <div>
                <h4 class="bg-blue-700 px-1"> <a href="{{ $job['url'] }}">{{ $loop->iteration }}. {{ $job['title'] }}</a></h4>
                <br />
                @php
                    if (is_array($job['published_at'])) {
                        $publishedAt = $job['published_at']['date'];
                        $publishedAtForHumans = $job['published_at']['for_humans'];
                    } elseif (is_string($job['published_at'])) {
                        $publishedAt = \Carbon\Carbon::parse($job['published_at'])->timezone($timezone);
                        $publishedAtForHumans = $publishedAt->diffForHumans();
                        $publishedAt = $publishedAt->format('Y-m-d H:i:s e');
                    }
                    $organization = $job['organization'] ?? $job['company']['name'];
                    $salary = data_get($job, 'salary');
                @endphp
                <span>{{ $job['location'] }} | {{ $organization }} | {{ $publishedAtForHumans }} | {{ $publishedAt }} | {{ $job['type'] }} |
                    {{ $salary }}</span>
                <br />
                @if (data_get($job, 'tags'))
                    <span>{{ collect($job['tags'])->map(fn($tag) => $tag['name'])->join(', ') }}</span>
                @endif
            </div>
        @endforeach
    </div>
    <div class="flex text-right text-blue-500">
        Showing [{{ $jobs->count() }}] jobs
    </div>
</div>
