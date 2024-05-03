<?php

namespace App\Http\Implementations;

use App\Http\Requests\MemberRequest;
use App\Http\Services\MemberService;
use App\Models\Member;

Class MemberServiceImpl implements MemberService
{
    public function show()
    {
        $members = Member::all();

        return response()->json([
            'success' => true,
            'message' => 'successfully fetched all members',
            'data' => $members
        ]);
    }

    public function create(MemberRequest $request)
    {
        $member = Member::create($request->only('domain'));

        if (!$member) {
            return response()->json([
                'success' => false,
                'message' => 'invalid domain'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'successfully created member',
            'data' => $member
        ]);
    }

    public function update(MemberRequest $request, $id)
    {
        $member = Member::find($id);
        
        if(!$member){
            return response()->json([
                'success' => false,
                'message' => 'member not found'
            ]);
        }

        $member->update($request->only('domain'));

        return response()->json([
            'success' => true,
            'message' =>  'successfully updated member domain',
            'data' => $member
        ]);
    }
}
