// the currentDate function prints out the current date in a "YYYY-MM-DD" format.

const date = new Date();
const currentDate = `${date.getFullYear()} - ${date.getMonth() + 1} - ${date.getDate()}`;

document.body.querySelector(".current-date").innerHTML = `Today's date: ${currentDate}`;
