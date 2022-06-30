const limit = 10;

let tableCounter = document.getElementById("journal");
let rows = tableCounter.rows.length;
let table  = document.getElementsByClassName('journal');
let next = document.getElementsByClassName('next');
let prev = document.getElementsByClassName('prev');
let tbody = table[0].children[1]
let currentFirst = 0;
let last = getLast();
console.log(currentFirst)
pagenation();
next[0].addEventListener("click", increaseCurrentFirst);
prev[0].addEventListener("click", decreaseCurrentFirst);

function addHidenClass(className) {
    className.classList.add("hideTR");
}

function removeHidenClass(className) {
    className.classList.remove("hideTR");
}

function increaseCurrentFirst() {
    last += 10;
    pagenation()
}

function decreaseCurrentFirst() {
    last -= 10;
    pagenation()
}

function getLast() {
    return currentFirst + limit;
}

function pagenation() {
    for (let i = 0; i < rows - 1; i++) {
        let currentRow = tbody.getElementsByClassName(i.toString())
        addHidenClass(currentRow[0]);
        if (last - currentRow[0].children[0].innerHTML * 1 >= 0 && last - currentRow[0].children[0].innerHTML * 1 <= 10) {
            let overLimited = tbody.getElementsByClassName(i.toString());
            removeHidenClass(overLimited[0]);
        }
    }
    pageLimits()
}

function pageLimits() {
    if (last >= rows) {
        next[0].removeEventListener("click", increaseCurrentFirst);
    }
}
