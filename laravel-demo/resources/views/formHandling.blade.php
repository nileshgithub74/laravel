<div>
    <h1>Forms Handling</h1>

    <form action="{{ url('userAdd') }}" method="post">
        @csrf

        <div>
            <h3>Skills</h3>
            <input type="checkbox" name="skill[]" value="Php" id="php">
            <label for="php">PHP</label><br><br>

            <input type="checkbox" name="skill[]" value="Java" id="java">
            <label for="java">Java</label><br><br>

            <input type="checkbox" name="skill[]" value="DSA" id="dsa">
            <label for="dsa">DSA</label><br><br>
        </div>

        <div>
            <h2>Gender</h2>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label><br><br>

            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label><br><br>
        </div>

        <div>
            <h3>City</h3>
            <select name="city">
                <option value="Muz">Muz</option>
                <option value="Patna">Patna</option>
                <option value="Agra">Agra</option>
            </select><br><br>
        </div>

        <button type="submit">Add New User</button>
    </form>
</div>
