<!DOCTYPE html>
﻿<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>USACE Survey</title>
    <meta charset="utf-8">
    <script src="JavaScript.js"></script>
</head>
<body onload="setSliderValues()">
    <form action="insert.php" method="post">
        <img src="usacelogo.png" width="30%" height="30%" class="center">

        <br>

        <p><label for="parks">Choose a park:</label></p>

        <select name="park" id="park" width="100px" height="25px" font-size="20px">
            <option value="Hop Brook Lake">Hop Brook Lake</option>
            <option value="Tully Lake">Tully Lake</option>
            <option value="Birch Hill Dam">Birch Hill Dam</option>
            <option value="Buffumville Lake">Buffumville Lake</option>
        </select>

        <br><br>

        <h1>Please rank the following categories</h1>
        <h3>1 = Very Poor, 5 = Very Good</h3>

        <br>

        <h1>Facilities</h1>

        <p>Suitability of park facilities for my recreational equipment and activities:<br><span id="span1">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider1" id="slider1" />
        </div>

        <p>Restroom cleanliness and availability of conveniences:<br><span id="span2">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider2" id="slider2" />
        </div>

        <p>Appearance of park grounds:<br><span id="span3">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider3" id="slider3" />
        </div>

        <p>Adequacy of signs providing directions and information:<br><span id="span4">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider4" id="slider4" />
        </div>

        <p>Parking space availability during this visit:<br><span id="span5">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider5" id="slider5" />
        </div>

        <p>Conditions of roads and parking areas in the park:<br><span id="span6">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider6" id="slider6" />
        </div>

        <br>

        <h1>Employees</h1>

        <p>Availability of park rangers and staff:<br><span id="span7">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider7" id="slider7" />
        </div>

        <p>Helpfulness of park rangers and staff:<br><span id="span8">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider8" id="slider8" />
        </div>

        <br>

        <h1>Environmental Setting</h1>

        <p>Attractiveness of surrounding scenery and landscape:<br><span id="span9">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider9" id="slider9" />
        </div>

        <p>Quality of land and water resources for my activities:<br><span id="span10">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider10" id="slider10" />
        </div>

        <br>

        <h1>Overall</h1>

        <p>Waiting times needed to access park facilities and services:<br><span id="span11">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider11" id="slider11" />
        </div>

        <p>Feeling of safety and security in the park:<br><span id="span12">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider12" id="slider12" />
        </div>

        <p>Value received for any visitor fees paid:<br><span id="span13">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider13" id="slider13" />
        </div>

        <p>Overall satisfaction with your visit to this area:<br><span id="span14">no comment</span></p>
        <div class="slidecontainer">
            <input type="range" min="0" max="5" value="0" class="slider" name="slider14" id="slider14" />
        </div>

        <br>

        <p><label for="comments">What could we do to improve visitors' experiences?</label></p><br>
        <textarea id="comments" name="comments" placeholder="Describe. Please do not provide PII (Personally Identifiable Information) in this field."></textarea>

        <br>

        <p><label for="complaints">Did you have any issues during your visit?</label></p><br>
        <textarea id="complaints" name="complaints" placeholder="Please describe your issue and submit a photo if applicable. Note: this is not for emergencies."></textarea>

        <br>

        <p><label for="img">Add an image (optional):</label></p>
        <input type="file" id="img" name="img" accept="image/*" onchange="loadFile(event)" /><br>
        <img id="output" width="400" /><br>

        <script>
            var loadFile = function(event) {
                var Image = document.getElementById('output');
                Image.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <p><label for="date">Date when you first noticed the issue (optional):</label></p>
        <input type="date" id="date" name="date" value="2020-01-01" min="2020-01-01" max="2100-01-01" /><br>

        <p><label for="contactInformation">Contact Information (optional):</label></p>
        <p><label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" placeholder="First" />
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" placeholder="Last"/> <br>
        <br>
        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" placeholder="###-###-####"/>
        <label for="emailAddress">Email Address:</label>
        <input type="text" id="emailAddress" name="emailAddress" placeholder="email@domain.com"/> <br>
        <br>
        <input type="submit" value="Submit Survey" width="300" height="30px">
      </p>
    </form>
</body>
</html>
