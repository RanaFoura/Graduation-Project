<div>
   @role('volunteer')
   @if ($userRole=='vol')
   <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-right align-items-right">
                <button class="btn btn-secondary">
                    <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png" height="300"
                        width="300" />
                </button>
                <br/>
                <span class="text-primary"> Name : {{$user->name}} </span>
                <span class=""> Email : {{$user->email}} </span>
                <span class=""> Phone : {{$user->phone}} </span>
                <span class=""> Address : {{$user->address}}</span>
                <span class=""> Joined At :{{$user->created_at}}</span>
                <span class=""> University : {{$volun->university }}</span>
                <span class=""> Student ID : {{$volun->student_id }}</span>
                <span class="">     DOB : {{$volun->dob }}</span>
                <span class=""> Volunteers Points : {{$volun->vol_points }}</span>
                <br />
                <button class="btn1 btn-dark">Edit Profile</button>
                {{-- <div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital
                        artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i
                            class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i
                            class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div> --}}
            </div>
        </div>
    </div>
    @endif
   @endrole

   @role('organization')
   @if ($userRole=='org')
   <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-right align-items-right">
                <button class="btn btn-secondary">
                    <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png" height="300"
                        width="300" />
                </button>
                <br/>
                <span class="text-primary"> Name : {{$user->name}} </span>
                <span class=""> Email : {{$user->email}} </span>
                <span class=""> Phone : {{$user->phone}} </span>
                <span class=""> Address : {{$user->address}}</span>
                <span class=""> Joined At :{{$user->created_at}}</span>
                <span class=""> Account Manager : {{$org->account_manager }}</span>
                <span class=""> Bio : {{$org->bio }}</span>

                <br />
                <button class="btn1 btn-dark">Edit Profile</button>
                {{-- <div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital
                        artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i
                            class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i
                            class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div> --}}
            </div>
        </div>
    </div>
    @endif
    @endrole


    @role('university')
    @if ($userRole=='uni')
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
         <div class="card p-4">
             <div class=" image d-flex flex-column justify-content-right align-items-right">
                 <button class="btn btn-secondary">
                     <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png" height="300"
                         width="300" />
                 </button>
                 <br/>
                 <span class="text-primary"> Name : {{$user->name}} </span>
                 <span class=""> Email : {{$user->email}} </span>
                 <span class=""> Phone : {{$user->phone}} </span>
                 <span class=""> Address : {{$user->address}}</span>
                 <span class=""> Joined At :{{$user->created_at}}</span>
                 <span class=""> Account Manager : {{$uni->account_manager }}</span>
                 <span class=""> Bio : {{$uni->bio }}</span>
 
                 <br />
                 <button class="btn1 btn-dark">Edit Profile</button>
                 {{-- <div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital
                         artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                 <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i
                             class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i
                             class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                 <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div> --}}
             </div>
         </div>
     </div>
     @endif
     @endrole
</div>
