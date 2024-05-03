<?php

namespace App\Http\Services;

interface ExperienceService
{
    public function show();

    public function showByMember($member);

    public function create($request);

    public function update($request, $experience);
}
