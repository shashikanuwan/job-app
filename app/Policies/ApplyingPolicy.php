<?php

namespace App\Policies;

use App\Models\Applying;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ApplyingPolicy
{
    use HandlesAuthorization;

    public function accept(User $user, Applying $applying)
    {
        return $this->applyingManage($user, $applying);
    }

    public function download(User $user, Applying $applying)
    {
        return $this->applyingManage($user, $applying);
    }

    private function applyingManage(User $user, Applying $applying)
    {
        return $applying->job->user_id == $user->id;
    }
}
