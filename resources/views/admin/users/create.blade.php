@extends('admin.layouts.app', ['page'=>'Users'])
@section('content')


    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col" style="margin-bottom: 2%">
                            <h3 class="mb-0">Tambah User Baru</
                            <h3>
                        </div>
                        <!--                 <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                              </div> -->

                    </div>
                    <!-- COntent -->
                    <form action="/admin/users/store" method="POST" enctype="multipart/form-data"
                          style="margin-left: 1.3%">
                        {{csrf_field() }}
                        <div class="row">
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="label">Name</label>
                                            <input type="text" name="name" class="form-control form-control-sm"
                                                   id="formGroupExampleInput"
                                                   required placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="label">Username</label>
                                            <input type="text" name="username" class="form-control form-control-sm"
                                                   id="formGroupExampleInput"
                                                   required placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="label">Email</label>
                                            <input type="email" name="email" class="form-control form-control-sm"
                                                   id="formGroupExampleInput"
                                                   required placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="label">Password</label>
                                            <input type="password" name="password" class="form-control form-control-sm"
                                                   id="formGroupExampleInput" required placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="label">Address</label>
                                            <textarea name="address" class="form-control form-control-sm"
                                                      id="formGroupExampleInput" required
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="label">About Me</label>
                                            <textarea name="about_me" class="form-control form-control-sm"
                                                      id="formGroupExampleInput" required
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 2%;">
                                        <label for="formGroupExampleInput" class="label">Image Profile</label><br>
                                        <img id="preview_gambar" src="{{ asset('asset') }}/placeholder.jpg"
                                             class="rounded float-left border"
                                             style="margin-bottom: 2%;max-width: 200px;width: 200;">

                                        <input type="file" class="uploads form-control" name="img_profile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="label">Title</label>
                                    <input type="text" name="title" class="form-control form-control-sm"
                                           id="formGroupExampleInput" required
                                           placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="label">Position</label>
                                    <input type="text" name="position" class="form-control form-control-sm"
                                           id="formGroupExampleInput"
                                           required placeholder="">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="label">Instragram</label>
                                    <input type="text" name="instagram" class="form-control form-control-sm"
                                           id="formGroupExampleInput"
                                           required placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="label">Twitter</label>
                                    <input type="text" name="twitter" class="form-control form-control-sm"
                                           id="formGroupExampleInput"
                                           required placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="label">Github</label>
                                    <input type="text" name="github" class="form-control form-control-sm"
                                           id="formGroupExampleInput"
                                           required placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary float-right" id="formGroupExampleInput">
                                    <a href="{{route('users')}}" class="btn btn-secondary float-right mr-3">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection
