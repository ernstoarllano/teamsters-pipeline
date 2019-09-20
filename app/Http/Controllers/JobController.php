<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

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
}
