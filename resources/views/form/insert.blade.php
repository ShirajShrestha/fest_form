<div class="hiddenForm" style="display: none">
    <form id="validate" action="{{route('child.store')}} " method="post">
        @csrf
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
                <input type="checkbox" name="openLocation" id="openLocation"> Different Location
                </td>
                <td>
                    <div id="location" style="display: none">
                            <div>
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
                        </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Save" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let openLocationCheckbox = document.getElementById('openLocation');
            let locationDiv = document.getElementById('location');
    
            openLocationCheckbox.addEventListener('change', function() {
                locationDiv.style.display = this.checked ? 'block' : 'none';
            });
        });

        document.getElementById('validate').addEventListener('submit', function(event) {
            let firstName = document.getElementById('firstName').value;
            let lastName = document.getElementById('lastName').value;
            let age = document.getElementById('age').value;
            let gender = document.querySelector('input[name="gender"]:checked');

            let ageIsValid = !isNaN(age) && age !== '';

            if (!firstName || !lastName || !ageIsValid || !gender) {
                event.preventDefault();
                alert('Please fill in all required fields and ensure age is a valid number.');
            }
        });

    </script>


</div>