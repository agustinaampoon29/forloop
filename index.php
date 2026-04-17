<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nested For Loop</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>

    <form id="form">
        <label>Enter a number:</label>
        <input type="number" id="num" required>
        <button type="submit">Submit</button>
    </form>

    <div id="result"></div>

    <script>
        document.getElementById('form').onsubmit = function(e) {
            e.preventDefault();
            let n = document.getElementById("num").value; 
            result.innerHTML = ""; // clear previous contents inside the 'result' div

            for (let i = 1; i <= n; i++) {
                for (let w = 1; w <= i; w++) {
                result.innerHTML += " * ";
                }
                result.innerHTML += "<br>";
            }
        }
    </script>

</body>
</html>