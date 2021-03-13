<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/client_event.css">
    <title>Create Event</title>
</head>

<body>
@csrf

    <div class="header">
		
        <h1 class="head">Event Information</h1>
        
        <hr color="#BB8FCE">
    
    </div>

    <div class="box">

        <form method="post">
        @csrf
            
            <div class="inputbox">
                <input type="text" name="event_title" required="" >
                <span style="color:red"></span>
                <label>Event Title</label>				
            </div>
            
            <div class="inputbox">
                <input type="text" name="event_prize" required="" >
                <span style="color:red"></span>
                <label>Event Prize</label>				
            </div>

            <div class="inputbox">
                <select name="event_category">
                    <option>Category</option>
                    <option value="Web Development" >Web Development</option>
                    <option value="Graphics Design" >Graphics Design</option>
                    <option value="Photography" >Photography</option>
                    <option value="Writing & Translation" >Writing & Translation</option>
                </select>
            </div>                  

            <div class="inputbox">
                <input type="text" name="event_description" required="" >
                <span style="color:red"></span>
                <label>Event Description</label>				
            </div>

            <div class="inputbox" >
                <input type="text" name="event_start_datetime" onfocus="(this.type='datetime-local')" onfocusout="(this.type='text')" required="" >
                <span style="color:red"></span>
                <label>Event Start Date & Time</label>				
            </div>

            <div class="inputbox">
                <input type="text" name="event_stop_datetime" onfocus="(this.type='datetime-local')" onfocusout="(this.type='text')" required="" >
                <span style="color:red"></span>
                <label>Event Stop Date & Time</label>				
            </div>

            
            <input type="submit" name="submit" value="Create">

        </form>
                
    </div>

    <div class="back">
        <a href="/client_homepage">Back</a>
    </div>  

</body>

</html>