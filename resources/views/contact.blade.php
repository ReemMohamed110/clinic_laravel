@extends('layouts.app')
@section('tittle', 'contact')
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">contact</li>
        </ol>
    </nav>
    @if (session('success'))
        <div>
            <div class="alert alert-success" role="alert">
                <strong>{{ session('success') }}</strong>
            </div>
        </div>
        
    @endif
    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        <form class="form" action="{{ route('contact_logic')}}" method='POST'>
            @csrf
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label " for="name">Name</label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="mb-3">
                    <label class="form-label " for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" >
                </div>
                <div class="mb-3">
                    <label class="form-label " for="email">Email</label>
                    <input type="text" class="form-control" name="email" >
                </div>
                <div class="mb-3">
                    <label class="form-label " for="subject">subject</label>
                    <input type="text" class="form-control" name="subject" >
                </div>
                <div class="mb-3">
                    <label class="form-label " for="message">message</label>
                    <textarea class="form-control" name="message" ></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

</div>
</div>

@endsection