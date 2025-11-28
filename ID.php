<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AMG ID CARD </title>
    <link rel="stylesheet" href="ID.css">
</head>
<body>
    <div class="container">
        <h1><center> ID CARD FORM</center></h1>
        <P>You make a new id card</P>
        <form method="POST" action="db.php" enctype="multipart/form-data">
            <div class="row">
                <div class="column">
                    <lable for="name">Name</lable>
                    <input type="text" id="name"name="Name" placeholder="Your name here"></input>
                </div>
                <div class="column">
                    <label for="address">Address</label> 
                    <input type="text" name="Address" id="address" placeholder="Your adress is here"></input>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="branch">Department(e.g., CSE, ECE, MECH, CIVIL, ENTC, AI_ML):</label> 
                    <input type="text" name="Branch" id="branch" placeholder="Enter your branch"></input>
                </div>
                <div class="column">
                    <label for="date of birth">Date of birth</label> 
                    <input type="date" name="DOB" id="date of birth" placeholder="Enter your Date of birth"></input>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <lable for="reg. no">Reg. no</lable>
                    <input type="text" name="Reg_No" id="reg.no" placeholder="Enter your Reg. no"></input>
                </div>
                <div class="column">
                    <lable for="mobile">Mobile</lable>
                    <input type="text" name="Mobile" id="mobile" placeholder="Enter your mobile no"></input>
                </div>
            </div>
            <div class="gender-details-box">
                
                <div class="row">
                    <div class="column">
                        <div class="gender-category">
                        <label>Gender: </label>
                        <input type="text" name="Gender" required>
                       
                            <!-- <span name="Gender" class="gender-title">Gender-</span>
                            <lable for="gender">Male</lable>
                            <input type="radio" name="Gender" id="male">
                            <lable for="gender">Female</lable>
                            <input type="radio" name="Gender" id="female">
                            <lable for="gender">Others</lable>
                            <input type="radio" name="Gender" id="other"> -->
                        </div>
                    </div>
                </div>
                <br><br>
                <label>Upload Photo:</label><br>
                 <input type="file" name="Photo" required><br><br>
            </div>
            <center><button name="submit">Submit</button></center>   
        </form>
    </div> 
</body>
</html>