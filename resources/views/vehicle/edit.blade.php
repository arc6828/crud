<h1>Edit Vehicle #{{ $vehicle->id }}</h1>

<a href="{{ url('/') }}/vehicle" >Back</a>

<form method="POST"
      action="{{ url('/') }}/vehicle/{{$vehicle->id}}" >
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    @include ('vehicle.form')

    <input type="submit" value="Save">
</form>
