// Ask the user for a number
const n = parseInt(prompt("Enter a number: "), 10);

// Check if the input is valid
if (!isNaN(n) && n > 0) {
    for (let i = 1; i <= n; i++) {
        let line = "";
        for (let j = 1; j <= i; j++) {
            line += " *";
        }
        console.log(line); // Output each line to the console
    }
} else {
    console.log("Please enter a valid positive number.");
}
