<?php

namespace App\Http\Implementations;

use App\Http\Requests\ExperienceRequest;
use App\Http\Services\ExperienceService;
use App\Models\Experience;

Class ExperienceServiceImpl implements ExperienceService
{
    public function show()
    {
        $experience = Experience::all();

        return response()->json([
            'success' => true,
            'message' => 'successfully fetched all experience',
            'data' => $experience
        ]);
    }

    public function showByMember($member)
    {
        $experience = Experience::where('member_id', $member)->first();

        if (!$experience) {
            return response()->json([
                'success' => false,
                'message' => 'no experience found',
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'successfully fetched all experience',
            'data' => $experience
        ]);
    }

    public function create($request)
    {
        
        $experience = Experience::create($request);

        return response()->json([
            'success' => true,
            'message' => 'Experience created successfully',
            'data' => $experience
        ]);
    }

    public function update($request, $experience)
    {
        $experience->update($request);

        return response()->json([
            'success' => true,
            'message' => 'Experience updated successfully',
            'data' => $experience
        ]);
    }
}
