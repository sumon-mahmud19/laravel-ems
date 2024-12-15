<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Employee</title>
</head>
<body>
    <h1>Add Employee</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Position:</label>
        <input type="text" name="position" required>
        <label>Salary:</label>
        <input type="number" name="salary" required>
        <button type="submit">Add</button>
    </form>
</body>
</html>
