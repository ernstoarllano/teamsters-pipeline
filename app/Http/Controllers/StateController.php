<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\State;

class StateController extends Controller
{
    /**
     * Get jobs in a state
     *
     * @param string $stateSlug
     */
    public function getJobs($stateSlug) {
        $state = State::where('slug', $stateSlug)->firstOrFail();

        return view('find-work/state', [
            'jobs'  => Jobs::where('state_id', $state->id)->get()->toArray(),
            'state' => $state->slug
        ]);
    }
}
