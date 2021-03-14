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

    <div class="filter-box">

        <form method="post">
        @csrf
        
            <select name="job_category" id="job_category" class="filter-control" data-dependent="job_category">

                <option value="">Category</option>
            
                <option value="Development & IT" >Development & IT</option>
                <option value="Design & Creative" >Design & Creative</option>
                <option value="Finance & Accounting" >Finance & Accounting</option>
                <option value="Admin & Customer Support" >Admin & Customer Support</option>
                <option value="Engineering & Architecture" >Engineering & Architecture</option>
                <option value="Legal" >Legal</option>
                <option value="Sales & Marketing" >Sales & Marketing</option>
                <option value="Writing & Translation" >Writing & Translation</option>

            </select>

            <input type="submit" name="submit" value="Search">
        
        </form>    
        
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

                <td><a class="td-details" href="/client_ongoing_job_details/{{ $client_job_info[$i]['id'] }}">Details</a></td>

            </tr>

            @endfor            

        </table>

    </div>

</body>

</html>