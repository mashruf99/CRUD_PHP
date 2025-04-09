<?php 
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Info</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-white min-h-screen flex items-center justify-center" background= "design.svg"  >
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Edit Info</h2>
        <form action="update.php" method="POST" class="space-y-4">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div>
                <label class="block text-sm font-medium">First Name</label>
                <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium">Last Name</label>
                <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium">Phone</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700" >Update</button>
            </div>
            
        </form>
        <div class="text-center mt-4">
            <a href="view.php" class="text-blue-500 hover:underline">Back to List</a>
        </div>
    </div>
</body>


</html>
