@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="{{route('post.show')}}" >only user can show post</a> <br/>
                    <a href="{{route('post.edit')}}" >only admin can show post</a> <br/>
                    @auth('admin')
                        admin are login.
                    @endauth
                    @auth('web')
                        <br>user are login.
                    @endauth
                    {{-- @dd(Auth::guard('admin')->user())
                    @dd(Auth::guard('web')->user())
                    @dump(Auth::guard('admin')) --}}
                     {{-- chack auth user --}}
                     {{-- {{dump(Auth::guard('admin')->check())}} --}}
                     {{-- {{dump(Auth::guard('web')->check())}} --}}
                    {{-- {{dump(auth()->user())}} --}}
                    
                    @can('admin')
                        admin can do this.
                    @endcan
                    @can('user')
                        user can do this.
                    @endcan
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection