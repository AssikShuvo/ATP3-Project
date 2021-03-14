<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/client_home.css">
    <title>Client Homepage</title>


</head>

<body>
@csrf

    <div class="header">
		
        <h1 class="head">Welcome To Our Site</h1>
        <h2 class="head2">Hire the best freelancers</h2>
        
        <hr color="#BB8FCE">
    
    </div>

    <div class="container">

        <div class="item1" >
            <a href="/client_previous_posts">Your Previous Job Posts</a>
        </div>

        <div class="item2" >
            <a href="/client_create_job" >Hire Bidder For Your Project</a>
        </div>

        <div class="item3">
            <a href="/client_create_event" >Create Event</a>
        </div>

        <div class="item4" >
            <a href="/client_completed_projects" >Completed Projects</a>
        </div>

        <div class="item5">
            <a href="/client_ongoing_projects" >Ongoing Projects</a>
        </div>

        <div class="item6">
            <a href="/client_upcoming_events" >Upcoming Events</a>
        </div>

        <div class="item7">
            <a href="/client_ongoing_events" >Ongoing Events</a>
        </div>

        <div class="item8">
            <a href="/client_finished_events" >Finished Events</a>
        </div>
    
    </div>
    
</body>

</html>