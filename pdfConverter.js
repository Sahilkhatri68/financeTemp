function generatePdf() {
    const element=document.getElementById("divReturnAddress");
    
    html2pdf()
    .from(element)
    .save();
}