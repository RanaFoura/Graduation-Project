<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Volunteer;
use App\Models\Organization;

class ProfileEdit extends Component
{
    public function render()
    {
        $user = auth()->user();
        $userRole;
        if ($user->hasRole('volunteer') ){
            $userRole="vol";
            $volun = Volunteer::where('user_id',$user->id)->first();
            return view('livewire.profile-edit')->with('user',$user)->with('volun',$volun)->with('userRole',$userRole);
        }
        if ($user->hasRole('organization') ){
            $userRole="org";
            $org = Organization::where('user_id',$user->id)->first();
            return view('livewire.profile-edit')->with('user',$user)->with('org',$org)->with('userRole',$userRole);
        }
        if ($user->hasRole('university') ){
            $userRole="uni";
            $uni = Organization::where('user_id',$user->id)->first();
            return view('livewire.profile-edit')->with('user',$user)->with('uni',$uni)->with('userRole',$userRole);
        }
       
        return "";

    }
}
