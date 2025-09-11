<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-50 to-gray-100">
  <div class="bg-white rounded-2xl shadow-xl w-full max-w-sm p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Daftar</h2>
    <form class="space-y-5">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
        <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Atha"/>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="gacor@gmail.com"/>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
        <input type="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="gacor123"/>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Kata Sandi</label>
        <input type="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="gacor123"/>
      </div>
      <button type="submit" class="w-full bg-indigo-600 text-white py-2.5 rounded-lg hover:bg-indigo-700 transition font-medium">Daftar</button>
    </form>
    <p class="text-center text-sm text-gray-600 mt-6">Sudah punya akun? <a href="login" class="text-indigo-600 hover:underline font-medium">Masuk</a></p>
  </div>
</body>
</html>