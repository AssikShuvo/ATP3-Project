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

<div class="header">
		
        <h1 class="head">Job Information</h1>
        
        <hr color="#BB8FCE">
    
    </div>



<div class="box">
        
            <div class="inputbox">
                <input type="text" name="job_title" required="" >
                <span style="color:red"></span>
                <label>Job Title</label>				
            </div>
            
            <div class="inputbox">
                <input type="text" name="price" required="" >
                <span style="color:red"></span>
                <label>Price</label>				
            </div>

            <div class="inputbox">
                <select name="category">
                    <option>Category</option>
                    <option value="it_development" >Development & IT</option>
                    <option value="design_and_creative" >Design & Creative</option>
                    <option value="finance_and_accounting" >Finance & Accounting</option>
                    <option value="admin_and_customer_support" >Admin & Customer Support</option>
                    <option value="engineering_and_architecture" >Engineering & Architecture</option>
                    <option value="legal" >Legal</option>
                    <option value="sales_and_marketing" >Sales & Marketing</option>
                    <option value="writing_and_translation" >Writing & Translation</option>
                    </select>

            </div>
                			
           

            <div class="inputbox">
                <input type="text" name="job_description" required="" >
                <span style="color:red"></span>
                <label>Job Description</label>				
            </div>

            <div class="inputbox" >
                <input type="text" name="delivery_time" id="datePickerId" onfocus="(this.type='date')" onfocusout="(this.type='text')" required="" >
                <span style="color:red"></span>
                <label>Time of Delivery</label>				
            </div>
            
            <input type="submit" name="submit" value="Create">
            
    </div>


    <script>
        datePickerId.min = new Date().toISOString().split("T")[0];
    </script>

    

</body>
</html>