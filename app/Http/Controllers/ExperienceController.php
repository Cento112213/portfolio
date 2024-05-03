<?php
namespace App\Http\Controllers;

use App\Http\Services\ExperienceService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function __construct(public ExperienceService $experienceService){
       
    }

    public function show(){
        return $this->experienceService->show();
    }

    public function showByMember($member){
        return $this->experienceService->showByMember($member);
    }

    public function create(ExperienceRequest $request){
        return $this->experienceService->create($request->validated());
    }

    public function update(ExperienceRequest $request, Experience $experience)
    {
        return $this->experienceService->update($request->validated(), $experience);
    }
}
