<?php

use App\Models\Survey;
use App\Models\User;

function canAccessStep(Survey $survey)
{
    if (Auth::user()->profile != config('profile.patient') && Auth::id() != $survey->professional_id) {
        return false;
    }

    if (Auth::user()->profile == config('profile.patient') && Auth::id() != $survey->patient_id) {
        return false;
    }

    return true;
}

function canAccess(User $user)
{
    if (Auth::user()->profile != config('profile.patient') && Auth::id() != $user->professional_id) {
        return false;
    }

    if (Auth::user()->profile == config('profile.patient') && Auth::id() != $user->id) {
        return false;
    }

    return true;
}
