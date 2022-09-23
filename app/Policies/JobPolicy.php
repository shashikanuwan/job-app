<?php

namespace App\Policies;

use App\Models\User;
use App\Models\job;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;

    public function edit(User $user, job $job)
    {
        return $this->jobManage($user, $job);
    }

    public function update(User $user, job $job)
    {
        return $this->jobManage($user, $job);
    }

    public function delete(User $user, job $job)
    {
        return $this->jobManage($user, $job);
    }

    private function jobManage(User $user, job $job)
    {
        return $job->user_id == $user->id;
    }
}
