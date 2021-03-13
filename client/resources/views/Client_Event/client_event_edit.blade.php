<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/client_event.css">
    <title>Edit Event</title>
</head>

<body>
@csrf

    <div class="header">
		
        <h1 class="head">Edit Event Information</h1>
        
        <hr color="#BB8FCE">
    
    </div>

    
    

    <div class="box">

        <form method="post">
        @csrf
            
            <div class="inputbox">
                <input type="text" name="event_title" value="{{ $client_event_info['event_title'] }}" required="" >
                <span style="color:red"></span>
                <label>Event Title</label>				
            </div>
            
            <div class="inputbox">
                <input type="text" name="event_prize" value="{{ $client_event_info['event_prize'] }}" required="" >
                <span style="color:red"></span>
                <label>Event Prize</label>				
            </div>

            <div class="inputbox">
                <select name="event_category" value="{{ $client_event_info['event_category'] }}">
                    <option>Category</option>
                    <option value="Web Development" @if( $client_event_info["event_category"] == "Web Development" ) selected @endif>Web Development</option>
                    <option value="Graphics Design" @if( $client_event_info["event_category"] == "Graphics Design" ) selected @endif>Graphics Design</option>
                    <option value="Photography" @if( $client_event_info["event_category"] == "Photography" ) selected @endif>Photography</option>
                    <option value="Writing & Translation" @if( $client_event_info["event_category"] == "Writing & Translation" ) selected @endif>Writing & Translation</option>
                </select>
            </div>                  

            <div class="inputbox">
                <input type="text" name="event_description" value="{{ $client_event_info['event_description'] }}" required="" >
                <span style="color:red"></span>
                <label>Event Description</label>				
            </div>

            <div class="inputbox" >
                <input type="text" name="event_start_datetime" value="{{ $client_event_info['event_start_datetime'] }}" onfocus="(this.type='date')" onfocusout="(this.type='text')" required="" >
                <span style="color:red"></span>
                <label>Event Start Date & Time</label>				
            </div>

            <div class="inputbox" >
                <input type="text" name="event_stop_datetime" value="{{ $client_event_info['event_stop_datetime'] }}" onfocus="(this.type='date')" onfocusout="(this.type='text')" required="" >
                <span style="color:red"></span>
                <label>Event Stop Date & Time</label>				
            </div>
            
            <input type="submit" name="submit" value="Update">

        </form>
                
    </div>

    <div class="back">
        <a href="/client_upcoming_events">Back</a>
    </div>    
  

</body>

</html>