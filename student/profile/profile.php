<?php
// Simulated user data (in a real application, this would come from a database)
$user = [
    'name' => 'Joy Kujur',
    'username' => 'pega',
    'email' => 'pegakuntab@gmail.com',
    'job_role' => 'Software Developer',
    'bio' => 'Passionate about creating intuitive and efficient software solutions.',
    'profile_pic' => 'https://via.placeholder.com/150',
    'social_media' => [
        'twitter' => 'https://twitter.com/joykujur',
        'linkedin' => 'https://linkedin.com/in/joykujur',
        'github' => 'https://github.com/joykujur'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $user['name']; ?>'s Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .profile-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="profile-header text-white p-6 text-center">
                <img src="<?php echo $user['profile_pic']; ?>" alt="<?php echo $user['name']; ?>" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-white">
                <h1 class="text-3xl font-bold"><?php echo $user['name']; ?></h1>
                <p class="text-xl">@<?php echo $user['username']; ?></p>
            </div>
            
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-4">Personal Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-gray-600">Email</p>
                        <p class="font-medium"><?php echo $user['email']; ?></p>
                    </div>
                    <div>
                        <p class="text-gray-600">Job Role</p>
                        <p class="font-medium"><?php echo $user['job_role']; ?></p>
                    </div>
                </div>
                
                <h2 class="text-2xl font-semibold mt-8 mb-4">Bio</h2>
                <p class="text-gray-700"><?php echo $user['bio']; ?></p>
                
                <h2 class="text-2xl font-semibold mt-8 mb-4">Social Media</h2>
                <div class="flex space-x-4">
                    <?php foreach ($user['social_media'] as $platform => $url): ?>
                        <a href="<?php echo $url; ?>" target="_blank" class="text-blue-500 hover:text-blue-700">
                            <img src="https://simpleicons.org/icons/<?php echo $platform; ?>.svg" alt="<?php echo $platform; ?>" class="w-8 h-8">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>