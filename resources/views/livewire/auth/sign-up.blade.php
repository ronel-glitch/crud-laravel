<div>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Student   Account</h3></div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputFullname" wire:model.lazy="user.name" type="text" placeholder="Fullname" />
                                            <label for="inputFullname">Fullname</label>
                                            @error('user.name') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" wire:model.lazy="user.email" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                            @error('user.email') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" wire:model.lazy="password" type="password" placeholder="Create a password" />
                                                    <label for="inputPassword">Password</label>
                                                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm" wire:model.lazy="confirm_password" type="password" placeholder="Confirm password" />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                    @error('confirm_password') <small class="text-danger">{{ $message }}</small> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><a class="btn btn-primary btn-block" onclick="save()">Create Account</a></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        </div>
        <script>
            function save() {
                swal({
                    title: 'Create Account?',
                    text: '',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: false,
                    buttons: ['Cancel', 'Create'],
                }).then((agree) => {
                        if (agree) {
                            @this.save();
                        }
                    });
            }
        </script>
</div>
