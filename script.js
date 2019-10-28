const date = new Date();
const currentDate = `${date.getFullYear()} - ${date.getMonth() + 1} - ${date.getDate()}`;

document.body.querySelector(".current-date").innerHTML = `Today's date: ${currentDate}`;
