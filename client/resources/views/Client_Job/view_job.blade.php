<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/client_job_view.css">
    <title>Job Views</title>
</head>
<body>
    
    <div class="back">
        <a href="/client_homepage">Back</a>
    </div>

    <div class="sort-by-date">
        <a href="/client_previous_posts_by_date">Sort By Delivery Time</a>
    </div>

    <div class="sort-by-price">
        <a href="/client_previous_posts_by_price">Sort By Job Price</a>
    </div>

    <div class="msg">

        @if(session()->has('message'))
            {{ session()->get('message') }}
        @endif

    </div>

    <div class="tbl-content">

        <table border="2" cellpadding="0" cellspacing="0">

            <tr>
                <th>Job Title</th>
                <th>Job Price</th>
                <th>Job Category</th>
                <th>Job Description</th>
                <th>Job Delivery Time</th>
            </tr>


            @for($i=0; $i < count($client_job_info); $i++)

            <tr>
                
                <td> {{ $client_job_info[$i]['job_title'] }} </td>
                <td> {{ $client_job_info[$i]['job_price'] }} </td>
                <td> {{ $client_job_info[$i]['job_category'] }} </td>
                <td> {{ $client_job_info[$i]['job_description'] }} </td>
                <td> {{ $client_job_info[$i]['job_delivery_time'] }} </td>

                <td><a class="td-details" href="/client_job_details/{{ $client_job_info[$i]['id'] }}">Details</a></td>
                <td><a class="td-details" href="/client_job_edit/{{ $client_job_info[$i]['id'] }}">Edit</a></td>
                <td><a class="td-details" href="/client_job_delete/{{ $client_job_info[$i]['id'] }}">Delete</a></td> 
            </tr>

            @endfor            

        </table>

    </div>

</body>

</html>