<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class StateController extends Controller
{
    /**
     * Get jobs in a state
     *
     * @param string $state
     */
    public function stateJobs($state) {
        return view('find-work/state', [
            'jobs'  => Jobs::where('state', $state)->get()->toArray(),
            'state' => $state
        ]);
    }
}
