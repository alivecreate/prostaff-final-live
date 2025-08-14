
@section('notify')
    @if(Session::get('success'))
            <script>
                successNotify("{{Session::get('success')}}");
            </script>
        

        @elseif(Session::get('fail'))

        <script>
            dangerNotify("{{Session::get('fail')}}");
        </script>

    @endif
@endsection