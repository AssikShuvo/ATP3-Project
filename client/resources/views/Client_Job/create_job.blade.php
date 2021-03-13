<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/client_job.css">
    <title>Create Job</title>
</head>

<body>
@csrf

    <div class="header">
		
        <h1 class="head">Job Information</h1>
        
        <hr color="#BB8FCE">
    
    </div>

    <div class="box">

        <form method="post">
        @csrf
            
            <div class="inputbox">
                <input type="text" name="job_title" required="" >
                <span style="color:red"></span>
                <label>Job Title</label>				
            </div>
            
            <div class="inputbox">
                <input type="text" name="job_price" required="" >
                <span style="color:red"></span>
                <label>Price</label>				
            </div>

            <div class="inputbox">
                <select name="job_category">
                    <option>Category</option>
                    <option value="Development & IT" >Development & IT</option>
                    <option value="Design & Creative" >Design & Creative</option>
                    <option value="Finance & Accounting" >Finance & Accounting</option>
                    <option value="Admin & Customer Support" >Admin & Customer Support</option>
                    <option value="Engineering & Architecture" >Engineering & Architecture</option>
                    <option value="Legal" >Legal</option>
                    <option value="Sales & Marketing" >Sales & Marketing</option>
                    <option value="Writing & Translation" >Writing & Translation</option>
                </select>
            </div>                  

            <div class="inputbox">
                <input type="text" name="job_description" required="" >
                <span style="color:red"></span>
                <label>Job Description</label>				
            </div>

            <div class="inputbox" >
                <input type="text" name="job_delivery_time" id="datePickerId" onfocus="(this.type='date')" onfocusout="(this.type='text')" required="" >
                <span style="color:red"></span>
                <label>Time of Delivery</label>				
            </div>
            
            <input type="submit" name="submit" value="Create">

        </form>
                
    </div>

    <div class="back">
        <a href="/client_homepage">Back</a>
    </div>

    


    <script>

        datePickerId.min = new Date().toISOString().split("T")[0];

    </script>    

</body>

</html>