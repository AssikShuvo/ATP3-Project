<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/client_job.css">
    <title>Edit Job</title>
</head>

<body>
@csrf

    <div class="header">
		
        <h1 class="head">Edit Job Information</h1>
        
        <hr color="#BB8FCE">
    
    </div>

    
    

    <div class="box">

        <form method="post">
        @csrf
            
            <div class="inputbox">
                <input type="text" name="job_title" value="{{ $client_job_info['job_title'] }}" required="" >
                <span style="color:red"></span>
                <label>Job Title</label>				
            </div>
            
            <div class="inputbox">
                <input type="text" name="job_price" value="{{ $client_job_info['job_price'] }}" required="" >
                <span style="color:red"></span>
                <label>Price</label>				
            </div>

            <div class="inputbox">
                <select name="job_category" value="{{ $client_job_info['job_category'] }}">
                    <option>Category</option>
                    <option value="Development & IT" @if( $client_job_info["job_category"] == "Development & IT" ) selected @endif>Development & IT</option>
                    <option value="Design & Creative" @if( $client_job_info["job_category"] == "Design & Creative" ) selected @endif>Design & Creative</option>
                    <option value="Finance & Accounting" @if( $client_job_info["job_category"] == "Finance & Accounting" ) selected @endif>Finance & Accounting</option>
                    <option value="Admin & Customer Support" @if( $client_job_info["job_category"] == "Admin & Customer Support" ) selected @endif>Admin & Customer Support</option>
                    <option value="Engineering & Architecture" @if( $client_job_info["job_category"] == "Engineering & Architecture" ) selected @endif>Engineering & Architecture</option>
                    <option value="Legal" @if( $client_job_info["job_category"] == "Legal" ) selected @endif>Legal</option>
                    <option value="Sales & Marketing" @if( $client_job_info["job_category"] == "Sales & Marketing" ) selected @endif>Sales & Marketing</option>
                    <option value="Writing & Translation" @if( $client_job_info["job_category"] == "Writing & Translation" ) selected @endif>Writing & Translation</option>
                </select>
            </div>                  

            <div class="inputbox">
                <input type="text" name="job_description" value="{{ $client_job_info['job_description'] }}" required="" >
                <span style="color:red"></span>
                <label>Job Description</label>				
            </div>

            <div class="inputbox" >
                <input type="text" name="job_delivery_time" value="{{ $client_job_info['job_delivery_time'] }}" id="datePickerId" onfocus="(this.type='date')" onfocusout="(this.type='text')" required="" >
                <span style="color:red"></span>
                <label>Time of Delivery</label>				
            </div>
            
            <input type="submit" name="submit" value="Update">

        </form>
                
    </div>

    <div class="back">
        <a href="/client_previous_posts">Back</a>
    </div>    


    <script>

        datePickerId.min = new Date().toISOString().split("T")[0];

    </script>    

</body>

</html>