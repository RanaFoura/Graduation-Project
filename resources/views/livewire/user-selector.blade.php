<div>
                            <!-- for error messages-->
                            @if(count($errors)>0)
                            <ul class="navbar-nav mr-auto">
                            @foreach ($errors->all() as $error)
                                <li class="nav-item active">
                                    {{$error}}
                                </li>
                            @endforeach
                            </ul>
                            <hr/>
                        @endif
                       <!--end error-->
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h3 class="text-primary"> General Information </h3>
        <hr />

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>



        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm"
                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <br />
        <h3 class="text-primary"> Register As </h3>
        <hr />
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" for="userType" type="radio" name="usertype" value="0" wire:model="usertype"
                    wire:click="openDiv" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Volunteer
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" for="userType" type="radio" name="usertype" wire:model="usertype"
                    wire:click="openDiv" value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Organization
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" for="userType" type="radio" name="usertype" wire:model="usertype"
                    wire:click="openDiv" value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Universirty
                </label>
            </div>
        </div>
        <br />
        <h3 class="text-primary"> Fill the following information </h3>
        <hr />


        @if ($showDiv == 0)
            <div>
                <div class="form-check">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone Volunteer">
                </div>
                <br />
                <div class="form-check">
                    <label for="address">ِAddress</label>
                    <input type="text"name="address" class="form-control" placeholder="Enter address Volunteer">
                </div>
                <br />
                <div class="form-check">
                    <label for="uni">University Name</label>
                    <input type="text" name="uni" class="form-control" placeholder="Enter University Name Volunteer">
                </div>
                <br />
                <div class="form-check">
                    <label for="student_id">Student ID</label>
                    <input type="text" name="student_id" class="form-control" placeholder="Enter address Volunteer">
                </div>
                <br />
                <div class="form-check">
                    <label for="dob">Date of Birth</label>
                    <input type="text" name="dob" class="form-control" placeholder="Enter Birthday Volunteer">
                </div>
            </div>
        @endif

        @if ($showDiv == 1)
            <div>
                <div class="form-check">
                    <label for="phone">Phone Number</label>
                    <input  type="text" name="phone" class="form-control" placeholder="Enter phone org">
                </div>
                <br />
                <div class="form-check">
                    <label for="address">ِAddress</label>
                    <input type="text" name="address"class="form-control" placeholder="Enter address org">
                </div>
                <br />
                <div class="form-check">
                    <label for="manager_name">Account Manager Name</label>
                    <input type="text" name="manager_name" class="form-control" placeholder="Enter account manager name org">
                </div>
                <br />
                <div class="form-check">
                    <label for="bio">About the Organization</label>
                    <textarea rows="4" name="bio" class="form-control" placeholder="Enter Bio org"></textarea>
                </div>
            </div>
        @endif

        @if ($showDiv == 2)
            <div>
                <div class="form-check">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone uni">
                </div>
                <br/>
                <div class="form-check">
                    <label for="address">ِAddress</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter address uni">
                </div>
                <br/>
                <div class="form-check">
                    <label for="manager_name">Account Manager Name</label>
                    <input type="text" name="manager_name" class="form-control" placeholder="Enter account manager name uni">
                </div>
                <br/>
                <div class="form-check">
                    <label for="bio">About the University</label>
                    <textarea rows="4" name="bio" class="form-control" placeholder="Enter Bio uni"></textarea>
                </div>
            </div>
        @endif

        <br /><br /><br /><br />

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>

</div>
