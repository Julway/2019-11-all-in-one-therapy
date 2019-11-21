@extends('base')
@section('title', 'Login')
@section('main')
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('authenticate') }}">
                        @csrf
                        {{-- if any errors by authentication   --}}
                        @if( $errors->any() )
                            <p class="alert alert-danger">Nice try! Try one more time!</p>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">User</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="Password">
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
