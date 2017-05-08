@if(!empty($errors->all()) || Session::has('success'))
<div class="messages">
    @if(!empty($errors->all()))
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            @foreach($errors->all() as $error)
                <div>{!! $error !!}</div>
            @endforeach
        </div>
    @endif

    @if(Session::has('success'))
        @foreach(Session::get('success') as $success)
            <div class="alert alert-success">
                {!! $success !!}
            </div>
        @endforeach
    @endif
</div>
@endif