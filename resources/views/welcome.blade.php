<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fest Form</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="firstname"></td>
            </tr>
            <tr>
                <td>Middle Name:</td>
                <td><input type="text" name="middlename"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lastname"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                <select name="gender" id="genderSelect">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Location:</td>
                <td>
                <input type="checkbox" name="differentLocation" id="differentLocation"> Different Location
                    <div id="locations" style="display: none;">
                        <td>City:</td>
                        <td><input type="text" name="city"></td>
                        <td>State:</td>
                        <td><input type="text" name="state"></td>
                        <td>Country:</td>
                        <td>
                            <select name="country" id="countrySelect">
                                <option value="USA">United States</option>
                                <option value="Canada">Canada</option>
                                <option value="UK">United Kingdom</option>
                                <option value="Australia">Australia</option>
                                <option value="Germany">Germany</option>
                                <option value="France">France</option>
                                <option value="Japan">Japan</option>
                                <option value="China">China</option>
                                <option value="India">India</option>
                                <option value="Nepal">Nepal</option>
                            </select>
                        </td>
                        <td>Zipcode:</td>
                        <td><input type="number" name="zipcode"></td>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>


    <script>
        document.getElementById("differentLocation").addEventListener("change", function() {
            let locations = document.getElementById("locations");
            locations.style.display = this.checked ? "block" : "none";
        });
    </script>


</body>
</html>