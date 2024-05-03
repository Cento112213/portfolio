<?php

namespace App\Http\Implementations;


use App\Http\Services\MemberDetailService;
use App\Models\MemberDetail;
use Illuminate\Http\Request;

Class MemberDetailServiceImpl implements MemberDetailService
{
    public function showByMember($member)
    {
        $member_detail = MemberDetail::where('member_id', $member)
            ->first();

        
        return response()->json([
            'success' => true,
            'message' => 'successfully fetched member details',
            'data' => $member_detail
        ]);
    }

    public function create($data, $member)
    {
        $profile_photo_path = $this->profile_photo($data->file('profile_photo'));

        if ($profile_photo_path) {

            $detail = MemberDetail::create([
                'member_id' => $member,
                'first_name' => $data->first_name,
                'last_name' => $data->last_name,
                'address' => $data->address,
                'email' => $data->email,
                'linkedin' => $data->linkedin,
                'contact_number' => $data->contact_number,
                'profile_photo' => $profile_photo_path
            ]);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'invalid insertion of photo'
            ]);
        } 

        return response()->json([
            'success' => true,
            'message' => 'successfully created member details',
            'data' => $detail
        ]);
    }

    public function update(Request $request, $id)
    {
        $payload = $request->only([
            'first_name',
            'last_name',
            'address',
            'email',
            'linkedin',
            'contact_number',
            'profile_photo'
        ]);

        $detail = MemberDetail::find($id);

        if (!$detail) {
            return response()->json([
                'success' => false,
                'message' => 'Member Details not found'
            ]);
        }

        $detail->update($payload);

        return response()->json([
            'success' => true,
            'message' => 'successfully updated member details',
            'data' => $detail
        ]);
    }

    private function profile_photo($profile)
    {
        return $profile->store('profile_photos', 'public');
    }
}
