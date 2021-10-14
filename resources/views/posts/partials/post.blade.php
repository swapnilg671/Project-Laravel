@if($loop->even)
<div>{{$key}}.{{$post['title']}}</div>
@else
<div style="background-color:silver">{{$key}}.{{$post['title']}}</div>
{{-- else has to be renamed as empty --}}
@endif
