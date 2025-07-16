<?php
include 'db.php';
$search = isset($_GET['search']) ? $_GET['search'] : '';
$sql = "SELECT * FROM users";

if (!empty($search)) {
    $sql .= " WHERE name LIKE '%$search%' OR 
              student_id LIKE '%$search%' OR 
              email LIKE '%$search%' OR 
              department LIKE '%$search%'";
}

$sql .= " ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Members</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8 shadow-lg shadow-slate-500 min-h-screen ">

    <nav class="fixed top-0 left-0 w-full bg-white shadow z-50 py-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-4">

            <div class="flex items-center space-x-8">
                <div class="flex-shrink-0">
                    <img class="h-6 w-6 text-indigo-600" src="OIP.jpg" alt="Logo">
                </div>

                <div class="hidden md:flex space-x-6 text-sm font-medium">
                    <a href="index.php" class="text-indigo-600 border-b-2 border-indigo-600 pb-1">ADD</a>
                    <a href="https://www.calendar-12.com/" class="text-gray-500 hover:text-indigo-600">Calendar</a>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <form method="GET" action="" class="relative">
                    <input type="text" name="search" placeholder="Search" 
                           value="<?php echo htmlspecialchars($search); ?>" 
                           class="pl-10 pr-4 py-1.5 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103 10.5a7.5 7.5 0 0013.15 6.15z" />
                        </svg>
                    </div>
                    <button type="submit" class="hidden">Search</button>
                </form>

                <img class="h-8 w-8 rounded-full object-cover" src="https://i.pravatar.cc/40?img=3" alt="Profile">
            </div>

        </div>
    </nav>

    <div class="max-w-5xl mx-auto bg-white p-6 pt-10 mt-20 px-5 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">All Members</h2>
            <div class="flex items-center space-x-4">
                <?php if (!empty($search)): ?>
                    <a href="view.php" class="text-gray-500 hover:text-indigo-600 text-sm">Clear search</a>
                <?php endif; ?>
                <a href="add.php" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">+ Add Member</a>
            </div>
        </div>

        <table class="w-full border border-gray-300">
            <thead class="bg-gray-300">
                <tr>
                    <th class="p-2 border">Student ID</th>
                    <th class="p-2 border">Name</th>
                    <th class="p-2 border">CGPA</th>
                    <th class="p-2 border">Email</th>
                    <th class="p-2 border">Department</th>
                    <th class="p-2 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):
                ?>
                        <tr class="text-center odd:bg-zinc-50 even:bg-sky-50 border-t hover:bg-sky-100">
                            <td class="p-2"><?php echo $row['student_id']; ?></td>
                            <td class="p-2"><?php echo $row['name']; ?></td>
                            <td class="p-2"><?php echo $row['cgpa']; ?></td>
                            <td class="p-2"><?php echo $row['email']; ?></td>
                            <td class="p-2"><?php echo $row['department']; ?></td>
                            <td class="p-2 space-x-2">
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="text-blue-500 hover:underline">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')" class="text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                        
                <?php
                    endwhile;
                else:
                    echo "<tr><td colspan='7' class='p-4 text-center'>No members found" . (!empty($search) ? " matching your search." : ".") . "</td></tr>";
                endif;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
