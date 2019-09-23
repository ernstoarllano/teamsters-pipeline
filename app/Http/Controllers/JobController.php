<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\State;

class JobController extends Controller
{
    /**
     * Get job
     *
     * @param string $stateSlug
     * @param string $jobSlug
     */
    public function getJob($stateSlug, $jobSlug) {
        return view('find-work/job', [
            'job'   => Job::where('slug', $jobSlug)->firstOrFail(),
            'state' => $stateSlug
        ]);
    }

    /**
     * Get jobs in a state
     *
     * @param string $stateSlug
     */
    public function getJobs($stateSlug) {
        $state = State::where('slug', $stateSlug)->firstOrFail();

        return view('find-work/state', [
            'jobs'  => Job::where('state_id', $state->id)->latest('start_date')->paginate(12),
            'state' => $state->slug,
            'count' => Job::all()->count()
        ]);
    }
}
