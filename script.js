console.log("hello script.js");
document.querySelector("form").addEventListener("click", remoReadOnlyMode);
function remoReadOnlyMode(event){
    let clickedElement = event.target;
    if(`${clickedElement}[type] === email` || `${clickedElement}[type] === password`) 
    clickedElement.removeAttribute('readonly');
}