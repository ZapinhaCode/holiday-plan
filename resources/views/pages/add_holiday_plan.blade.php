@extends('layouts.app')

@section('content')
    <div class="container-md">
        <h1 class="title-screen"><b>Register Holiday Plan  <i class="fa-solid fa-calendar-plus"></i></b></h1>

        @if(session('error'))
            <div class="alert alert-danger">
                <b>{{ session('error') }}</b>
            </div>
        @endif

        <div class="container-fluid">
            <form action="{{ route('holiday.save') }}" method="POST">
                @csrf
                @include('partials.form_holiday_plan')
            </form>
        </div>
    </div>
@endsection