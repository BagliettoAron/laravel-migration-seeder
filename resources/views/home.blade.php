<h1>Trains</h1>

@foreach ($trains as $train)
    <h3> Train Number: {{$train->train_number}}</h3>
    @if ($train->cancelled === 0)
    <h4>On Service</h4>
    @else
    <h4>Cancelled</h4>
    @endif
    
    <ul>
        <li>Departure Station {{$train->departure_station}} At {{$train->departure_time}}</li>
        <li>Arrival Station {{$train->arrival_station}} At {{$train->arrival_time}}</li>
    </ul>
    
@endforeach