@if($errors->any())
<div class="alert alert-danger" data-bs-dismiss="alert" >
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>

        @endforeach
</div>
@endif