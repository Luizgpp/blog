
@extends('main')

@section('title', '| Homepage')

@section('paralax')
  @include('partials._paralax')
@endsection


@section('content')

  <div class="row">
    <div class="col l8">
      <!--Post -->
      <div class="post">
        <h5>Post Title</h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <button class="btn waves-effect waves-light">Ready More
          <i class="material-icons right">send</i>
        </button>
      </div>
      <!-- End Post-->
      <p class="divider"></p>

      <!--Post -->
      <div class="post">
        <h5>Post Title</h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <button class="btn waves-effect waves-light">Ready More
          <i class="material-icons right">send</i>
        </button>
      </div>
      <!-- End Post-->
      <p class="divider"></p>
      <!--Post -->
      <div class="post">
        <h5>Post Title</h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <button class="btn waves-effect waves-light">Ready More
          <i class="material-icons right">send</i>
        </button>
      </div>
      <!-- End Post-->
      <p class="divider"></p>
    </div>
    <div class="col l3 offset-l1">
      SideBar
    </div>
  </div>
@endsection
