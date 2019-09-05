<h1>Vehicle {{ $vehicle->id }}</h1>

<a href="{{ url('/') }}/vehicle"><button  >Back</button></a>
<a href="{{ url('/') }}/{{ $vehicle->id }}/edit"><button> Edit</button></a>

<form method="POST"
    action="{{ url('/') }}/vehicle/{{ $vehicle->id }}"
    style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit"
            onclick="return confirm(&quot;Confirm delete?&quot;)">
      Delete
    </button>
</form>

<table border="1">
    <tbody>
        <tr><th>ID</th><td>{{ $vehicle->id }}</td></tr>
        <tr><th>Brand</th><td> {{ $vehicle->brand }} </td></tr>
        <tr><th>Series</th><td> {{ $vehicle->series }} </td></tr>
        <tr><th>Colour</th><td> {{ $vehicle->colour }} </td></tr>
        <tr><th>Mileage</th><td> {{ $vehicle->mileage }} </td></tr>
    </tbody>
</table>
