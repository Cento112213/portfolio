<?php
namespace App\Http\Controllers;

use App\Http\Services\MemberService;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;

class MemberController extends Controller
{
    public function __construct(public MemberService $memberService){
       
    }

    public function show(){
        return $this->memberService->show();
    }

    public function create(MemberRequest $request){
        return $this->memberService->create($request);
    }

    public function update(MemberRequest $request, $id){
        return $this->memberService->update($request, $id);
    }
}
