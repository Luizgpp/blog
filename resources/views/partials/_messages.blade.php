@if (Session::has('success'))
  <script type="text/javascript">
  window.onload = function(){
    Materialize.toast('{{ Session::get('success') }}', 4000,'green darken-4');
  }
  </script>
@endif

@if (count($errors) > 0)
  @foreach ($errors->all() as $error)
    <script>
      $(function(){
        toastError('{{$error}}');
      });
    </script>
  @endforeach
@endif

@section('scripts')
  <script>
   function toastError(error) {
    Materialize.toast(error, 6000,'red darken-4');
  };
  </script>
@endsection
