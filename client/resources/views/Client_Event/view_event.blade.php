<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/client_event_view.css">
    <title>Previous Posts</title>
</head>
<body>
    
    <div class="back">
        <a href="/client_homepage">Back</a>
    </div>

    <div class="msg">

        @if(session()->has('message'))
            {{ session()->get('message') }}
        @endif

    </div>

    <div class="tbl-content">

        <table border="2" cellpadding="0" cellspacing="0">

            <tr>
                <th>Event Title</th>
                <th>Event Prize</th>
                <th>Event Category</th>
                <th>Event Description</th>
                <th>Event Start Date & Time</th>
                <th>Event Stop Date & Time</th>
            </tr>


            @for($i=0; $i < count($client_event_info); $i++)

            <tr>
                
                <td> {{ $client_event_info[$i]['event_title'] }} </td>
                <td> {{ $client_event_info[$i]['event_prize'] }} </td>
                <td> {{ $client_event_info[$i]['event_category'] }} </td>
                <td> {{ $client_event_info[$i]['event_description'] }} </td>
                <td> {{ $client_event_info[$i]['event_start_datetime'] }} </td>
                <td> {{ $client_event_info[$i]['event_stop_datetime'] }} </td>

                <td><a class="td-details" href="/client_event_details/{{ $client_event_info[$i]['id'] }}">Details</a></td>
                <td><a class="td-details" href="/client_event_edit/{{ $client_event_info[$i]['id'] }}">Edit</a></td>
                <td><a class="td-details" href="/client_event_delete/{{ $client_event_info[$i]['id'] }}">Delete</a></td> 
            </tr>

            @endfor            

        </table>

    </div>

</body>

</html>