<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eligibility form</title>
    <link rel="stylesheet" href="form1.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <h1 id="title" class="text-center">Eligibility Form</h1>
            <p id="description" class="description text-center">
                Thank you for applying in our University
            </p>
        </header>
      
        <form  class="container1"  id="university-form" action="con1.php" method="POST">
            <div class="form-group">
                <label id="name-label" for="name">Name</label>
                <input type="text" name="name1" id="name" class="form-control" placeholder="Enter your name" required />
            </div>
            <div class="form-group">
                <label id="father-label" for="Fname">Father name</label>
                <input type="text" name="Fname1" id="Fname" class="form-control" placeholder="Enter your father's name"
                    required />
            </div>
            <div class="form-group">
                <label id="email-label" for="email">Email</label>
                <input type="email" name="email1" id="email" class="form-control" placeholder="Enter your Email"
                    required />
            </div>
            <div class="form-group">
                <label id="Mobile-label" for="number">Moblie number</label>
                <input type="number" name="number1" id="number" class="form-control"
                    placeholder="Enter your mobile number" required />
            </div>
            <div class="form-group">
                <label id="number-label" for="number">Age</label>
                <input type="number" name="age1" id="number" min="14" max="35" class="form-control" placeholder="Age"
                    required />
            </div>

            <div class="form-group">
                <p>Gender</p>
                <label>
                    <input name="gender1" value="Male" type="radio" class="input-radio" />Male</label>
                <label>
                    <input name="gender1" value="Female" type="radio" class="input-radio" />Female</label>

                <label><input name="gender1" value="Other" type="radio" class="input-radio" />Other</label>
            </div>
            <div class="form-group">
                <label id="tenth-class" for="tenth">10th class percentage </label>
                <input type="text" name="tenth1" id="tenth" min="75" max="99"class="form-control" placeholder="Enter your class 10 percentage" required/>
            </div>

            <div class="form-group">
                <p>
                    From Which Board you completed your 12<sup>th</sup> class
                </p>
                <select id="Which" name="class1" class="form-control" required>
                    <option disabled selected value>Select an option</option>
                    <option value="CBSE">Centeral Board of Secendory Education</option>
                    <option value="State">State Board</option>
                    <option value="ICSE">The Indian Certificate of Secondary Education</option>
                    <option value="openSource">Open Source</option>
                </select>
            </div>
            <div class="form-group">
               
                <label id="twelth-class" for="twelfth">12th class percentage </label>
                <input type="text" name="twelfth1" id="twelfth" min="75" max="99" class="form-control" placeholder="Enter your class 12 percentage" required/>
            </div>

            <!-- <div class="form-group"> 
                <p>Any comments or suggestions?</p>
                <textarea id="comments" class="input-textarea" name="comment"
                    placeholder="Enter your comment here..."></textarea>
            </div>-->

            <div class="form-group">
                <button type="submit" id="submit" class="submit-button">
                    Submit
                </button>
            </div>
        </form>
  
    </div>
</body>

</html>