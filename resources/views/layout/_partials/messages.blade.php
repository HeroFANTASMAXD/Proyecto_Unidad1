@if ($message = Session::get('succes'))
<div style="pading: 15px; background-color:green; color: white;">
    <p>{{ $message }}</p>

</div>
@endif
@if ($message = Session::get('danger'))
<div style="pading: 15px; background-color:red; color: white;">
    <p>{{ $message }}</p>

</div>
@endif