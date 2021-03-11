function setSliderValues() {
    //display the Suitability slider value and update as changed
    var suitability = document.getElementById("Suitability");
    var suit = document.getElementById("suit");
    suit.innerHTML = "(" + suitability.value + ")";
    //update the value as slider moves
    suitability.oninput = function () {
        if (this.value > 0)
            suit.innerHTML = "( " + this.value + " )";
        else
            suit.innerHTML = "No Comment";
    }
    //display the Restroom slider value and update as changed

    var slider = document.getElementById("Restroom");
    var rest = document.getElementById("rest");
    rest.innerHTML = "(" + slider.value + ")";
    //update the value as slider moves
    slider.oninput = function () {
        if (this.value > 0)
            rest.innerHTML = "( " + this.value + " )";
        else
            rest.innerHTML = "No Comment";
    }
    //display the Park Appearance slider value and update as changed
    var appearance = document.getElementById("Park Appearance");
    var appear = document.getElementById("appear");
    appear.innerHTML = "(" + appearance.value + ")";
    //update the value as slider moves
    appearance.oninput = function () {
        if (this.value > 0)
            appear.innerHTML = "( " + this.value + " )";
        else
            appear.innerHTML = "No Comment";
    }
    //display the Signage slider value and update as changed
    var signage = document.getElementById("Signage");
    var sign = document.getElementById("sign");
    sign.innerHTML = "(" + signage.value + ")";
    //update the value as slider moves
    signage.oninput = function () {
        if (this.value > 0)
            sign.innerHTML = "( " + this.value + " )";
        else
            sign.innerHTML = "No Comment";
    }
}