<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

interface MemberDetailService
{
    public function create($data, $member);

    public function showByMember($member);

    public function update(Request $request, $id);
}
