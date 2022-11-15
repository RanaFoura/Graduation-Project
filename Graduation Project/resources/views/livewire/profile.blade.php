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
                                <div class=" image d-flex flex-column justify-content-right align-items-right">

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Index</th>
                                                <th scope="col">Value</th>
                                                {{-- <th scope="col">Edit</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Name</th>
                                                <td>{{ $user->name }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Email</th>
                                                <td>{{ $user->email }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone</th>
                                                <td>{{ $user->phone }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>{{ $user->address }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">University</th>
                                                <td>{{ $volun->university }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Student ID</th>
                                                <td>{{ $volun->student_id }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">DOB</th>
                                                <td>{{ $volun->dob }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
                                    <div class="text-right">
                                        <a href="{{ route('profile.edit') }}" class="btn btn-primary"><em class="fa fa-plus"></em> EDIT </a>
                                    </div>
                                    <br /> <br />
                                    My name is {{ $user->name }} I live in {{ $user->address }} I Joined This website
                                    in {{ $user->created_at }}
                                    <br />
                                    I was born in {{ $volun->dob }} and i applied in {{ $volun->university }} with
                                    Student ID {{ $volun->student_id }}.

                                    <br />I Finish {{ $volun->vol_points }}
                                    volunteerin points with website help.
                                    <br />
                                    you can contact me on my email {{ $user->email }} or my number {{ $user->phone }}
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

    @role('organization')
        @if ($userRole == 'org')
            <div class="container">
                <div class="row">
                    <div class="col-md-auto">
                        <div class="container  justify-content-right">
                            <div class="card p-4">
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
                                                {{-- <th scope="col">Edit</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Name</th>
                                                <td>{{ $user->name }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Email</th>
                                                <td>{{ $user->email }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone</th>
                                                <td>{{ $user->phone }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>{{ $user->address }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Bio</th>
                                                <td>{{ $org->bio }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Account Manager</th>
                                                <td>{{ $org->account_manager }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
                                    <div class="text-right">
                                        <a href="{{ route('profile.edit') }}" class="btn btn-primary"><em class="fa fa-plus"></em> EDIT </a>
                                    </div>
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
                                                {{-- <th scope="col">Edit</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Name</th>
                                                <td>{{ $user->name }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Email</th>
                                                <td>{{ $user->email }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone</th>
                                                <td>{{ $user->phone }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>{{ $user->address }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Bio</th>
                                                <td>{{ $uni->bio }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">Account Manager</th>
                                                <td>{{ $uni->account_manager }}</td>
                                                {{-- <td><a href="#">Edit</a></td> --}}
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
                                    <div class="text-right">
                                        <a href="{{ route('profile.edit') }}" class="btn btn-primary"><em class="fa fa-plus"></em> EDIT </a>
                                    </div>
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
