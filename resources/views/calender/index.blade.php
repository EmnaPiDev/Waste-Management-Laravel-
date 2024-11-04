@extends('Layouts.admin')

@section('title', 'Planning Calendar')

@section('content')
<div class="container py-4 my-4">

    <div id="calendar" ></div>
</div>


<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var events = @json($plannings->map(function($planning) {
            return [
                'title' => 'Planning ', 
                'start' => $planning->dateCollecte,
                'end' => $planning->dateCollecte 
            ];
        })->toArray()); // Ensure we convert it to an array

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: events,
        });

        calendar.render();
    });
</script>

<style>
    /* Optional: style for the calendar container */
    #calendar {
        max-width: 900px;
        margin: 40px auto; /* Center the calendar */
    }
</style>
@endsection
