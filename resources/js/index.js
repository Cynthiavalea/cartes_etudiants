import jspdf from "jspdf";
let carte = document.getElementById("printCard");
let buttonPrint = document.getElementById("button-print");
function imprimerCarte() {
    // alert("")
    let doc = new jspdf("l", "px", "a3");
    doc.html(carte, {
        callback: function(doc) {
            doc.print("carte.pdf");
        }
    })
}
buttonPrint.addEventListener("click", imprimerCarte);