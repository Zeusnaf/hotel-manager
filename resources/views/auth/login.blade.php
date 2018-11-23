@extends('layout')

@section('content')

<div class="items-center">
    <div class="w-1/3">
        <div class="bg-white shadow rounded overflow-hidden">
            <div class=" border-b border-grey-light p-2">
                <p class="text-lg font-bold text-grey-dark">Login</p>
            </div>
            <div class="py-2 px-4">
                <form method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="mb-4 mt-2">
                        <label for="email" class="font-bold font-black text-sm">email</label>

                        <div class="control">
                            <input id="email"
                                type="email" class="mt-2 w-full border rounded shadow border-grey-lighter py-2 pl-1" name="email" value="{{ old('email') }}" required  autofocus>
                            @if ($errors->has('email'))
                                <small class="text-red-light italic mt-2">
                                    {{ $errors->first('email') }}
                                </small>
                            @endif
                        </div> <!-- email .control -->
                    </div> <!-- email .field -->

                    <div class="mb-4">
                        <label for="password" class="font-bold font-black text-sm">Password</label>

                        <div class="control">
                            <input id="password" type="password" class="mt-2 w-full border rounded shadow border-grey-lighter py-2 pl-1" name="password" required>
                            @if ($errors->has('password'))
                                <small class="text-red-light italic mt-2">
                                    {{ $errors->first('password') }}
                                </small>
                            @endif
                        </div> <!-- password .control -->
                    </div> <!-- password .field -->

                    <div class="field">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div> <!-- remember me .control -->
                    </div> <!-- remember me .field -->

                    <div class="field is-grouped">
                        <div class="border-blue-lighter border-t my-2">
                        </div>
                            <button type="submit" class="bg-blue-dark rounded py-3 w-full text-blue-lightest px-2">Login</button>

                    </div>
                </form> <!-- login form -->
            </div> <!-- .card-content -->
        </div> <!-- .card -->
    </div>
</div><!-- .columns -->
@endsection
