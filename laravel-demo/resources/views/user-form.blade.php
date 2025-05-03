<div>
    <h1>Login Form</h1>
    
    <form action="/adduser" method="POST">
        @csrf

        <label for="name">User Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter the user name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter the email" required><br><br>

        <button type="submit">Submit</button>
    </form>
</div>
