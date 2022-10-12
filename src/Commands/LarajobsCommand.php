<?php

namespace Sawirricardo\ArtisanDevjobs\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use function Termwind\render;

class LarajobsCommand extends Command
{
    protected $signature = 'devjobs:larajobs {tags?*} {--T|timezone=default}';

    protected $description = 'List Larajobs postings';

    public function handle()
    {
        $jobs = Http::get('https://larajobs.com/api/jobs')
            ->collect()
            ->sortByDesc('published_at');
        render(view('artisan-devjobs::devjobs', [
            'jobs' => collect($jobs)
                ->when(! empty($this->argument('tags')), function ($jobs) {
                    return $jobs->filter(fn ($job) => collect($job['tags'])->whereIn('name', $this->argument('tags'))->isNotEmpty()
                        || collect($job['tags'])->whereIn('slug', $this->argument('tags'))->isNotEmpty());
                }),
            'timezone' => $this->option('timezone') == 'default'
                ? config('app.timezone')
                : $this->option('timezone'),
        ])->render());

        return Command::SUCCESS;
    }
}
