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
    protected $signature = 'devjobs:vuejobs {tags?*} {--T|timezone=default} {--D|desc}';

    protected $description = 'List Vuejobs postings';

    public function handle()
    {
        $jobs = Http::get('https://vuejobs.com/api/jobs')
            ->collect()
            ->sortBy('published_at.date', SORT_REGULAR, $this->option('desc'));

        render(view('artisan-devjobs::devjobs', [
            'jobs' => collect($jobs),
            'timezone' => $this->option('timezone') == 'default'
                ? config('app.timezone')
                : $this->option('timezone'),
        ])->render());

        return Command::SUCCESS;
    }
}
