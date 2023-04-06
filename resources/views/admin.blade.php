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
                    @can('admin')
                        admin can do this.
                    @endcan
                    @can('user')
                    {{-- {{dump(Auth::guard('admin')->user())}} --}}
                        user can do this.
                    @endcan

                          {{-- {{dump(auth()->user()->name)}} --}}
                          @guest
                             Hello guest
                            @endguest
                            @guest('admin')
                              i am a good guest.
                            @endguest
                            @if (Auth::guard('web')->check())
                            i am bed guest.
                            @endif
                            @guest('web')
                                i am bed guest.
                            @endguest
                            @auth('admin')
                            well done bro.
                            @endauth
                            @auth('web')
                                    not good bro.
                            @endauth

                          {{dump(Auth::guard('admin')->check())}}
                          {{dump(Auth::guard('web')->check())}}
                        

                    
                    @auth('admin')   
                    Hello Admin!
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection