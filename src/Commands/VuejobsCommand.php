<?php

namespace Sawirricardo\ArtisanDevjobs\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use function Termwind\render;

class VuejobsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'devjobs:vuejobs {tags?*} {--T|timezone=default}';

    protected $description = 'List Vuejobs postings';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $jobs = Http::get('https://vuejobs.com/api/jobs')
            ->collect()
            ->sortByDesc('published_at.date');

        render(view('artisan-devjobs::devjobs', [
            'jobs' => collect($jobs),
            'timezone' => $this->option('timezone') == 'default'
                ? config('app.timezone')
                : $this->option('timezone'),
        ])->render());

        return Command::SUCCESS;
    }
}
