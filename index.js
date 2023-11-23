const amountCells = document.querySelectorAll('.num');

for(let i=0; i < amountCells.length; i++) {
    if(amountCells[i].innerText[0] === '-') {
        amountCells[i].style.color = 'red';
    }
    else {
        amountCells[i].style.color = 'green';
    }
}