function setSliderValues() {
    //display the Suitability slider value and update as changed
    var slider1 = document.getElementById("slider1");
    var span1 = document.getElementById("span1");
    //update the value as slider moves
    slider1.oninput = function () {
        if (this.value > 0)
            span1.innerHTML = "( " + this.value + " )";
        else
            span1.innerHTML = "no comment";
        if (this.value == 3)
          span1.style.color = "orange";
        if (this.value == 4 || this.value == 5)
          span1.style.color = "green";
        if (this.value == 1 || this.value == 2)
          span1.style.color = "red";
        if (this.value == 0)
        span1.style.color = "black";
    }
    //display the Restroom Adequacy slider value and update as changed
    var slider2 = document.getElementById("slider2");
    var span2 = document.getElementById("span2");
    //update the value as slider moves
    slider2.oninput = function () {
        if (this.value > 0)
            span2.innerHTML = "( " + this.value + " )";
        else
            span2.innerHTML = "no comment";
        if (this.value == 3)
            span2.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span2.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span2.style.color = "red";
        if (this.value == 0)
            span2.style.color = "black";
    }
    //display the Park Appearance slider value and update as changed
    var slider3 = document.getElementById("slider3");
    var span3 = document.getElementById("span3");
    //update the value as slider moves
    slider3.oninput = function () {
        if (this.value > 0)
            span3.innerHTML = "( " + this.value + " )";
        else
            span3.innerHTML = "no comment";
        if (this.value == 3)
            span3.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span3.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span3.style.color = "red";
        if (this.value == 0)
            span3.style.color = "black";
    }
    //display the Signage Adequacy slider value and update as changed
    var slider4 = document.getElementById("slider4");
    var span4 = document.getElementById("span4");
    //update the value as slider moves
    slider4.oninput = function () {
        if (this.value > 0)
            span4.innerHTML = "( " + this.value + " )";
        else
            span4.innerHTML = "no comment";
        if (this.value == 3)
            span4.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span4.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span4.style.color = "red";
        if (this.value == 0)
            span4.style.color = "black";
    }
    //display the Parking Availability slider value and update as changed
    var slider5 = document.getElementById("slider5");
    var span5 = document.getElementById("span5");
    //update the value as slider moves
    slider5.oninput = function () {
        if (this.value > 0)
            span5.innerHTML = "( " + this.value + " )";
        else
            span5.innerHTML = "no comment";
        if (this.value == 3)
            span5.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span5.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span5.style.color = "red";
        if (this.value == 0)
            span5.style.color = "black";
    }
    //display the Parking Conditions slider value and update as changed
    var slider6 = document.getElementById("slider6");
    var span6 = document.getElementById("span6");
    //update the value as slider moves
    slider6.oninput = function () {
        if (this.value > 0)
            span6.innerHTML = "( " + this.value + " )";
        else
            span6.innerHTML = "no comment";
        if (this.value == 3)
            span6.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span6.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span6.style.color = "red";
        if (this.value == 0)
            span6.style.color = "black";
    }
    //display the Staff Availability slider value and update as changed
    var slider7 = document.getElementById("slider7");
    var span7 = document.getElementById("span7");
    //update the value as slider moves
    slider7.oninput = function () {
        if (this.value > 0)
            span7.innerHTML = "( " + this.value + " )";
        else
            span7.innerHTML = "no comment";
        if (this.value == 3)
            span7.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span7.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span7.style.color = "red";
        if (this.value == 0)
            span7.style.color = "black";
    }
    //display the Staff Helpfulness slider value and update as changed
    var slider8 = document.getElementById("slider8");
    var span8 = document.getElementById("span8");
    //update the value as slider moves
    slider8.oninput = function () {
        if (this.value > 0)
            span8.innerHTML = "( " + this.value + " )";
        else
            span8.innerHTML = "no comment";
        if (this.value == 3)
            span8.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span8.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span8.style.color = "red";
        if (this.value == 0)
            span8.style.color = "black";
    }
    //display the Landscape slider value and update as changed
    var slider9 = document.getElementById("slider9");
    var span9 = document.getElementById("span9");
    //update the value as slider moves
    slider9.oninput = function () {
        if (this.value > 0)
            span9.innerHTML = "( " + this.value + " )";
        else
            span9.innerHTML = "no comment";
        if (this.value == 3)
            span9.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span9.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span9.style.color = "red";
        if (this.value == 0)
            span9.style.color = "black";
    }
    //display the Land Quality slider value and update as changed
    var slider10 = document.getElementById("slider10");
    var span10 = document.getElementById("span10");
    //update the value as slider moves
    slider10.oninput = function () {
        if (this.value > 0)
            span10.innerHTML = "( " + this.value + " )";
        else
            span10.innerHTML = "no comment";
        if (this.value == 3)
            span10.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span10.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span10.style.color = "red";
        if (this.value == 0)
            span10.style.color = "black";
    }
    //display the Wait Time slider value and update as changed
    var slider11 = document.getElementById("slider11");
    var span11 = document.getElementById("span11");
    //update the value as slider moves
    slider11.oninput = function () {
        if (this.value > 0)
            span11.innerHTML = "( " + this.value + " )";
        else
            span11.innerHTML = "no comment";
        if (this.value == 3)
            span11.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span11.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span11.style.color = "red";
        if (this.value == 0)
            span11.style.color = "black";
    }
    //display the Safety slider value and update as changed
    var slider12 = document.getElementById("slider12");
    var span12 = document.getElementById("span12");
    //update the value as slider moves
    slider12.oninput = function () {
        if (this.value > 0)
            span12.innerHTML = "( " + this.value + " )";
        else
            span12.innerHTML = "no comment";
        if (this.value == 3)
            span12.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span12.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span12.style.color = "red";
        if (this.value == 0)
            span12.style.color = "black";
    }
    //display the Value slider value and update as changed
    var slider13 = document.getElementById("slider13");
    var span13 = document.getElementById("span13");
    //update the value as slider moves
    slider13.oninput = function () {
        if (this.value > 0)
            span13.innerHTML = "( " + this.value + " )";
        else
            span13.innerHTML = "no comment";
        if (this.value == 3)
            span13.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span13.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span13.style.color = "red";
        if (this.value == 0)
            span13.style.color = "black";
    }
    //display the Overall slider value and update as changed
    var slider14 = document.getElementById("slider14");
    var span14 = document.getElementById("span14");
    //update the value as slider moves
    slider14.oninput = function () {
        if (this.value > 0)
            span14.innerHTML = "( " + this.value + " )";
        else
            span14.innerHTML = "no comment";
        if (this.value == 3)
            span14.style.color = "orange";
        if (this.value == 4 || this.value == 5)
            span14.style.color = "green";
        if (this.value == 1 || this.value == 2)
            span14.style.color = "red";
        if (this.value == 0)
            span14.style.color = "black";
    }
}
