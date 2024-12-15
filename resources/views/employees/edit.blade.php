<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $employee->name }}" required>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $employee->email }}" required>
        <label>Position:</label>
        <input type="text" name="position" value="{{ $employee->position }}" required>
        <label>Salary:</label>
        <input type="number" name="salary" value="{{ $employee->salary }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
