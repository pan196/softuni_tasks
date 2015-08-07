<!DOCTYPE html>
<html>
<head>
    <title>CV Generator</title>
    <script>
        var z = 1;
        var compZ = 1;
        function addLang(){
            var newDiv = document.createElement("div");
            newDiv.setAttribute("id", "lang" + z);
            newDiv.innerHTML = "<input type='text' name='language[]' />" +
                "<select name='comprehension[]'>" +
                "<option disabled='disabled' selected='selected' hidden='hidden'>-Comprehension-</option>" +
                "<optgroup label='-Comprehension-'>" +
                "<option>beginner</option>" +
                "<option>intermediate</option>" +
                "<option>advanced</option>" +
                "</optgroup>" +
                "</select>" +
                "<select name='reading[]'>" +
                "<option disabled='disabled' selected='selected' hidden='hidden'>-Reading-</option>" +
                "<optgroup label='-Reading-'>" +
                "<option>beginner</option>" +
                "<option>intermediate</option>" +
                "<option>advanced</option>" +
                "</optgroup>" +
                "</select>" +
                "<select name='writing[]'>" +
                "<option disabled='disabled' selected='selected' hidden='hidden'>-Writing-</option>" +
                "<optgroup label='-Writing-'>" +
                "<option>beginner</option>" +
                "<option>intermediate</option>" +
                "<option>advanced</option>" +
                "</optgroup>" +
                "</select>";
            document.getElementById("langParent").appendChild(newDiv);
            z++;
        }
        function removeLang(){
            var lastDiv = document.getElementById("lang" + (z - 1));
            document.getElementById('langParent').removeChild(lastDiv);
            z--;
        }
        function addCompLang(){
            var newCompDiv = document.createElement("div");
            newCompDiv.setAttribute("id", "compLang" + compZ);
            newCompDiv.innerHTML = "<input type='text' name='clang[]' />" +
                "<select name='levelCompLang[]'>" +
                "<option>Beginner</option>" +
                "<option>Programmer</option>" +
                "<option>Ninja</option>" +
                "</select>" +
                "<br/>";
            document.getElementById("compLangParent").appendChild(newCompDiv);
            compZ++;
        }
        function removeCompLang(){
            var lastCompDiv = document.getElementById("compLang" + (compZ - 1));
            document.getElementById('compLangParent').removeChild(lastCompDiv);
            compZ--;
        }
    </script>
</head>
<body>
    <form action="CV.php" method="get">
        <fieldset>
<!--            pattern=".{2, 20}" required title="2 to 20 characters"-->
            <legend>Personal Information</legend>
            <input type="text" value="First Name" name="fname"  />
            <br/>
            <input type="text" value="Last Name" name="lname"  />
            <br/>
            <input type="text" value="Email" name="email" />
            <br/>
            <input type="text" value="Phone Number" name="number" />
            <br/>

            <label for="female">Female</label>
            <input type="radio" name="sex" value="Female" id="female" />
            <label for="male">Male</label>
            <input type="radio" name="sex" value="Male" id="male" />
            <br/>

            <label for="date">Birth Date</label>
            <br/>
            <input type="date" id="date" name="bday" />
            <br/>
            <label for="nationality">Nationality</label>
            <br/>
            <select id="nationality" name="nationality">
                <option>Bulgarian</option>
                <option>English</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Last Work Position</legend>
            <label for="company">Company Name</label>
            <input type="text" id="company" name="company" />
            <br/>
            <label for="from">From</label>
            <input type="date" id="from" name="from"/>
            <br/>
            <label for="to">To</label>
            <input type="date" id="to" name="to"/>
        </fieldset>

        <fieldset>
            <legend>Computer Skills</legend>
            Programming Languages
            <br/>
            <div id="compLangParent">
                <script>addCompLang();</script>
            </div>
            <input type="button" value="Remove Language" onclick="removeCompLang()" />
            <input type="button" value="Add Language" onclick="addCompLang()" />
        </fieldset>

        <fieldset>
            <legend>Other Skills</legend>
            Languages
            <br/>
            <div id="langParent">
                <script>addLang();</script>
            </div>
            <input type="button" value="Remove Language" onclick="removeLang()" />
            <input type="button" value="Add Language" onclick="addLang()" />
            <br/>
            Driver's License
            <br/>
            <label for="b">B</label>
            <input type="checkbox" name="license[]" id="b" value="B"/>
            <label for="a">A</label>
            <input type="checkbox" name="license[]" id="a" value="A"/>
            <label for="c">C</label>
            <input type="checkbox" name="license[]" id="c" value="C"/>
        </fieldset>
        <input type="submit" value="Generate CV" />
    </form>
</body>
</html>