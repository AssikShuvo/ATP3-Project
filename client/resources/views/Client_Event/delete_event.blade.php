<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/client_job_details.css">
    <title>Job Details</title>
</head>

<body>

    <div class="header">
		
        <h1 class="head">Job Details</h1>
        
        <hr color="#BB8FCE">
    
    </div>

    <div class="back">

        <a href="/client_previous_posts">Back</a>

    </div>

    <div class="tbl-content">

        <table border="2" cellpadding="0" cellspacing="0">

            <tr>
                <td>Job Title: </td>
                <td>{{ $client_job_info['job_title'] }}</td>
            </tr>

            <tr>
                <td>Job Price: </td>
                <td>{{ $client_job_info['job_price'] }}</td>
            </tr>

            <tr>
                <td>Job Category: </td>
                <td>{{ $client_job_info['job_category'] }}</td>
            </tr>

            <tr>
                <td>Job Description: </td>
                <td>{{ $client_job_info['job_description'] }}</td>
            </tr>

            <tr>
                <td>Job Delivery Time: </td>
                <td>{{ $client_job_info['job_delivery_time'] }}</td>
            </tr>

            <tr>
                <td>Job Status: </td>
                <td>{{ $client_job_info['job_status'] }}</td>
            </tr>

            

        </table>

    </div>

    <div class="delete-msg">
        <h3>Are you sure?</h3>
    </div>

    <div class="delete-btn">

        <form method="post">
            @csrf
            <input type="submit" name="submit" value="Confirm">
        </form>

    </div>
    
</body>

</html>