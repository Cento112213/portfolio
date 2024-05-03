<?php

namespace App\Http\Services;

use App\Http\Requests\MemberRequest;

interface MemberService
{
    public function show();

    public function create(MemberRequest $request);

    public function update(MemberRequest $request, $id);

}
