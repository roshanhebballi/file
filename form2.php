<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

<h3>Iron Tablet Quantity Taken</h3>

<div>
  <form action="/action_page.php">
    <label for="fname">Scanning 1st Date</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter Date">

    <label for="lname">Scanning 2nd Date</label>
    <input type="text" id="lname" name="lastname" placeholder="Enter Date">

        <label for="fname">3rd Month</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter the Value">

    <label for="fname">4th Month</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter the Value">

   <label for="fname">5th Month</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter the Value">

  <label for="fname">Injection Taken</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter the Value">

  <label for="fname">Injection 1st Date</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter the Date">

  <label for="fname">Injection 2nd Date</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter the Date">

  <label for="fname">Booster Dose</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter the Value">





  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
