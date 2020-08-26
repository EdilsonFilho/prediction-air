<?php

use App\Models\Survey;

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
