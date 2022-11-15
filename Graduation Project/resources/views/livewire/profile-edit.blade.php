<div>

    <div>
        @role('volunteer')
            @if ($userRole == 'vol')
                <div class="container">
                    <div class="row">
                        <div class="col-md-auto">
                            <div class="container  justify-content-right">
                                <div class="card p-4">
                                    <div class=" image d-flex flex-column justify-content-right align-items-right">
                                        <button class="btn btn-secondary">
                                            <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png"
                                                height="300" width="300" />
                                        </button>
                                        <br />
                                        <span class="text-primary"> Name : {{ $user->name }} </span>
                                        <span class=""> Email : {{ $user->email }} </span>
                                        <span class=""> Phone : {{ $user->phone }} </span>
                                        <span class=""> Address : {{ $user->address }}</span>
                                        <span class=""> Joined At :{{ $user->created_at }}</span>
                                        <span class=""> University : {{ $volun->university }}</span>
                                        <span class=""> Student ID : {{ $volun->student_id }}</span>
                                        <span class=""> DOB : {{ $volun->dob }}</span>
                                        <span class=""> Volunteers Points : {{ $volun->vol_points }}</span>
                                        <br />
                                        <button class="btn1 btn-dark">Edit Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container  justify-content-left">
                                <div class="card p-4">
                                    <form action="{{ route('profile.update', $user) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                    <div class=" image d-flex flex-column justify-content-right align-items-right">

                                        <div class="form-group">
                                            <label for="name">Name <span class="required text-danger small">*</span></label>
                                            <input type="text" name="name"class="form-control" value="{{ $user->name }}"  required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email <span class="required text-danger small">*</span></label>
                                            <input type="text" name="email" class="form-control" value="{{ $user->email }}"  required>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Phone <span class="required text-danger small">*</span></label>
                                            <input type="text" name="phone" class="form-control" value="{{ $user->phone }}"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address <span class="required text-danger small">*</span></label>
                                            <input type="text" name="address" class="form-control" value="{{ $user->address }}"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="university">University <span class="required text-danger small">*</span></label>
                                            <input type="text" name="university" class="form-control" value="{{ $volun->university }}"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="student_id">Student ID <span class="required text-danger small">*</span></label>
                                            <input type="text" name="student_id"  class="form-control" value="{{ $volun->student_id }}"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="dob">DOB <span class="required text-danger small">*</span></label>
                                            <input type="text" name="dob"  class="form-control" value="{{ $volun->dob }}" required>
                                        </div>
                                        <br/> <br/>
                                        <div class="text-right">
                                            <a href="{{ route('profile') }}" class="btn btn-secondary"><em class="fa fa-times"></em> Cancel</a>
                                            <button class="btn btn-primary" type="submit"><em class="fa fa-save"></em> Save</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endrole
    
        @role('organization')
            @if ($userRole == 'org')
                <div class="container">
                    <div class="row">
                        <div class="col-md-auto">
                            <div class="container  justify-content-right">
                                <div class="card p-4">
                                    <form action="{{ route('profile.update', $user) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                    <div class=" image d-flex flex-column justify-content-right align-items-right">
                                        <button class="btn btn-secondary">
                                            <img src="https://arab.org/wp-content/uploads/2016/02/shoman.jpg" height="300"
                                                width="300" />
                                        </button>
                                        <br />
                                        <span class="text-primary"> Name : {{ $user->name }} </span>
                                        <span class=""> Email : {{ $user->email }} </span>
                                        <span class=""> Phone : {{ $user->phone }} </span>
                                        <span class=""> Address : {{ $user->address }}</span>
                                        <span class=""> Joined At :{{ $user->created_at }}</span>
                                        <span class=""> Account Manager : {{ $org->account_manager }}</span>
                                        <span class=""> Bio : {{ $org->bio }}</span>
    
                                        <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container  justify-content-left">
                                <div class="card p-4">
                                    <div class=" image d-flex flex-column justify-content-right align-items-right">
    
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Index</th>
                                                    <th scope="col">Value</th>
                                                    <th scope="col">Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Name</th>
                                                    <td>{{ $user->name }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email</th>
                                                    <td>{{ $user->email }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Phone</th>
                                                    <td>{{ $user->phone }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address</th>
                                                    <td>{{ $user->address }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Bio</th>
                                                    <td>{{ $org->bio }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Account Manager</th>
                                                    <td>{{ $org->account_manager }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br />
                                        <div class="form-group">
                                            <label for="name">Name <span class="required text-danger small">*</span></label>
                                            <input type="text" name="name"class="form-control" value="{{ $user->name }}"  required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email <span class="required text-danger small">*</span></label>
                                            <input type="text" name="email" class="form-control" value="{{ $user->email }}"  required>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Phone <span class="required text-danger small">*</span></label>
                                            <input type="text" name="phone" class="form-control" value="{{ $user->phone }}"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address <span class="required text-danger small">*</span></label>
                                            <input type="text" name="address" class="form-control" value="{{ $user->address }}"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bio">Bio <span class="required text-danger small">*</span></label>
                                            <input type="text" name="bio" class="form-control" value="{{ $org->bio }}"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="account_manager">Account Manager <span class="required text-danger small">*</span></label>
                                            <input type="text" name="account_manager"  class="form-control" value="{{ $org->account_manager }}"  required>
                                        </div>
                                        <br/> <br/>
                                        <div class="text-right">
                                            <a href="{{ route('profile') }}" class="btn btn-secondary"><em class="fa fa-times"></em> Cancel</a>
                                            <button class="btn btn-primary" type="submit"><em class="fa fa-save"></em> Save</button>
                                        </div>
                                    </form>
                                        <br /> <br /> <br /><br />
    
                                        <br /> <br /> <br /><br />
                                        <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endrole
    
    
        @role('university')
            @if ($userRole == 'uni')
                <div class="container">
                    <div class="row">
                        <div class="col-md-auto">
                            <div class="container  justify-content-right">
                                <div class="card p-4">
                                    <form action="{{ route('profile.update', $user) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                    <div class=" image d-flex flex-column justify-content-right align-items-right">
                                        <button class="btn btn-secondary">
                                            <img src="https://upload.wikimedia.org/wikipedia/ar/0/0f/%D8%B4%D8%B9%D8%A7%D8%B1_%D8%AC%D8%A7%D9%85%D8%B9%D8%A9_%D8%A7%D9%84%D8%B2%D8%B1%D9%82%D8%A7%D8%A1.png"
                                                height="300" width="300" />
                                        </button>
                                        <br />
                                        <span class="text-primary"> Name : {{ $user->name }} </span>
                                        <span class=""> Email : {{ $user->email }} </span>
                                        <span class=""> Phone : {{ $user->phone }} </span>
                                        <span class=""> Address : {{ $user->address }}</span>
                                        <span class=""> Joined At :{{ $user->created_at }}</span>
                                        <span class=""> Account Manager : {{ $uni->account_manager }}</span>
                                        <span class=""> Bio : {{ $uni->bio }}</span>
    
                                        <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container  justify-content-left">
                                <div class="card p-4">
                                    <div class=" image d-flex flex-column justify-content-right align-items-right">
    
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Index</th>
                                                    <th scope="col">Value</th>
                                                    <th scope="col">Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Name</th>
                                                    <td>{{ $user->name }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email</th>
                                                    <td>{{ $user->email }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Phone</th>
                                                    <td>{{ $user->phone }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address</th>
                                                    <td>{{ $user->address }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Bio</th>
                                                    <td>{{ $uni->bio }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Account Manager</th>
                                                    <td>{{ $uni->account_manager }}</td>
                                                    <td><a href="#">Edit</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br />

                                        <div class="form-group">
                                            <label for="name">Name <span class="required text-danger small">*</span></label>
                                            <input type="text" name="name"class="form-control" value="{{ $user->name }}"  required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email <span class="required text-danger small">*</span></label>
                                            <input type="text" name="email" class="form-control" value="{{ $user->email }}"  required>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Phone <span class="required text-danger small">*</span></label>
                                            <input type="text" name="phone" class="form-control" value="{{ $user->phone }}"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address <span class="required text-danger small">*</span></label>
                                            <input type="text" name="address" class="form-control" value="{{ $user->address }}"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bio">Bio <span class="required text-danger small">*</span></label>
                                            <input type="text" name="bio" class="form-control" value="{{ $uni->bio }}"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="account_manager">Account Manager <span class="required text-danger small">*</span></label>
                                            <input type="text" name="account_manager"  class="form-control" value="{{ $uni->account_manager }}"  required>
                                        </div>


                                        <br/> <br/>
                                        <div class="text-right">
                                            <a href="{{ route('profile') }}" class="btn btn-secondary"><em class="fa fa-times"></em> Cancel</a>
                                            <button class="btn btn-primary" type="submit"><em class="fa fa-save"></em> Save</button>
                                        </div>
                                    </form>
                                        <br /> <br /> <br /><br />
    
                                        <br /> <br /> <br /><br />
                                        <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endrole
    </div>
    
</div>
