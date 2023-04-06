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
                    {{dump(auth()->user()->name)}}

                    {{-- chack guest --}}
                    @guest('admin')
                      i am a good guest.
                    @endguest
                    @guest('web')
                        i am bed guest.
                    @endguest

                    {{-- chack auth user --}}
                    @auth('admin')
                    well done bro.
                    @endauth
                    @auth('web')
                            not good bro.
                    @endauth
                    
                    {{-- chack auth user --}}
                    {{dump(Auth::guard('admin')->check())}}
                    {{dump(Auth::guard('web')->check())}}
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection