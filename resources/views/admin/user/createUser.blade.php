@extends('admin.master')

@section('title')
    New User
@endsection

@section('main')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                    <div class="card-body">
                        <form class="form">
                            <div class="my-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="my-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="my-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">
                            </div>
                            <div class="my-3">
                                <label for="password_confirmation">Password Confirmation</label>
                                <input type="password" name="password_confirmation" id="password_confirmation">
                            </div>
                            <div class="mt-4 mb-0">
                                <button>Create User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection