<?php

namespace App\Domains\Students\Jobs;

use App\Data\Models\Student;
use App\Helpers\ImageSave;
use Lucid\Units\Job;

class StoreStudentJob extends Job
{
    public array $payload;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($payload)
    {
        $this->payload = $payload;
    }

    /**
     * Execute the job.
     *
     * @return object
     */
    public function handle(): object
    {
        //ImageSave::avatarSave($student->user , $this->payload['avatar']);
        return Student::create($this->payload);
    }
}
