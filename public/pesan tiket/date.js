var today = new Date().toISOString().split('T')[0];
var dateInput = document.getElementById("exampleInputDate1");
dateInput.addEventListener("focus", function () {
    this.setAttribute("min", today);
    this.removeEventListener("focus", arguments.callee);
});
dateInput.addEventListener("input", function () {
    if (this.value < today)
        this.value = today;
});
