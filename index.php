<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Member</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center font-semibold" background="design.svg">
    <div class="bg-white p-8 rounded-lg shadow-lg shadow-slate-500  w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Add New Member</h2>
        <?php if (isset($_GET['error'])): ?>
            <div id="error-message" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline"><?php echo htmlspecialchars($_GET['error']); ?></span>
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById('error-message').style.display = 'none';
                }, 5000);
            </script>
        <?php endif; ?>

        <form action="insert.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm  font-medium">Student ID</label>
                <input type="text" name="student_id" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium">Name</label>
                <input type="text" name="name" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium">CGPA</label>
                <input type="text" name="cgpa" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium">Department</label>
                <input type="text" name="department" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-400 text-white px-6 py-2 rounded hover:bg-blue-700 gap-2">Add Member</button>
            </div>
        </form>

        <div class="text-center mt-4">
            <a href="view.php" class="text-blue-500 hover:underline">View All Members</a>
        </div>
    </div>


</body>

</html>
