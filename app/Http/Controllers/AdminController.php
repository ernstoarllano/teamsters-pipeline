<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the admin dashboard.
     *
     */
    public function index() {
        return view('/admin/dashboard');
    }

    /**
     * Get members
     *
     */
    public function getMembers() {
        return view('/admin/members', [
            'members'   => User::orderBy('name', 'asc')->paginate(10),
            'count'     => User::all()->count()
        ]);
    }

    /**
     * Get jobs
     *
     */
    public function getJobs() {
        return view('/admin/jobs', [
            'jobs' => Job::orderBy('contractor', 'asc')->paginate(10)
        ]);
    }

    /**
     * Get specified job
     *
     * @param string $jobSlug
     */
    public function getJob($jobSlug) {
        $job = Job::where('slug', $jobSlug)->firstOrFail();

        return view('/admin/job', [
            'job'       => Job::where('slug', $jobSlug)->firstOrFail(),
            'members'   => User::where('job_id', $job->id)->get(),
            'count'     => User::where('job_id', $job->id)->count()
        ]);
    }
}
