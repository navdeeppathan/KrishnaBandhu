@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100" style="background: linear-gradient(135deg,#002B5B,#2563eb);">
    <div class="card shadow-lg p-4 rounded-4" style="width: 400px;">
        <h3 class="text-center mb-3">Login</h3>
        <form>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-main w-100 mt-2">Login</button>
        </form>
        <div class="text-center mt-3">
            <a href="#" class="text-decoration-none">Forgot password?</a>
        </div>
    </div>
</div>
@endsection
