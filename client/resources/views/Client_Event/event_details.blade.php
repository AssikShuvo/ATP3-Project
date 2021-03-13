<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/client_event_details.css">
    <title>Event Details</title>
</head>

<body>

    <div class="header">
		
        <h1 class="head">Event Details</h1>
        
        <hr color="#BB8FCE">
    
    </div>

    <div class="back">

        <a href="/client_homepage">Home</a>

    </div>

    <div class="tbl-content">

        <table border="2" cellpadding="0" cellspacing="0">

            <tr>
                <td>Event Title: </td>
                <td>{{ $client_event_info['event_title'] }}</td>
            </tr>

            <tr>
                <td>Event Prize: </td>
                <td>{{ $client_event_info['event_prize'] }}</td>
            </tr>

            <tr>
                <td>Event Category: </td>
                <td>{{ $client_event_info['event_category'] }}</td>
            </tr>

            <tr>
                <td>Event Description: </td>
                <td>{{ $client_event_info['event_description'] }}</td>
            </tr>

            <tr>
                <td>Event Start Date & Time: </td>
                <td>{{ $client_event_info['event_start_datetime'] }}</td>
            </tr>

            <tr>
                <td>Event Stop Date & Time: </td>
                <td>{{ $client_event_info['event_stop_datetime'] }}</td>
            </tr>

            <tr>
                <td>Event Status: </td>
                <td>{{ $client_event_info['event_status'] }}</td>
            </tr>

        </table>

    </div>

</body>

</html>