@extends('Layouts.admin')

@section('title', 'Planning Calendar')

@section('content')
<div class="container">
    <h1>Planning Calendar</h1>

    <div id="calendar"></div>
</div>

<!-- Include FullCalendar CSS and JS -->
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        // Create an array of events from the planning data
        var events = @json($plannings->map(function($planning) {
            return [
                'title' => $planning->title, // Adjust the field names as necessary
                'start' => $planning->start_date, // Adjust the field names as necessary
                'end' => $planning->end_date // Adjust the field names as necessary
            ];
        }));

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: events,
        });

        calendar.render();
    });
</script>
@endsection
