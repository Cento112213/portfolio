<?php
namespace App\Http\Controllers;

use App\Http\Services\MemberDetailService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberDetailController extends Controller
{
    public function __construct(public MemberDetailService $memberdetailService){
       
    }

    public function showByMember($member){
        return $this->memberdetailService->showByMember($member);
    }

    public function update(Request $request, $id){
        return $this->memberdetailService->update($request, $id);
    }
}
