<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100">

  @include('layouts.navbar')

  <div class="flex items-center justify-center w-full h-screen bg-gray-100">
    <div class="flex flex-col items-center p-6 bg-white rounded-2xl shadow-md w-[400px]">
      <h1 class="text-2xl font-bold text-gray-700 mb-6">Login</h1>
      <form action="{{ route('login.submit') }}" method="POST" class="w-full">
        @csrf
        <div class="mb-4">
          <label for="username" class="block text-sm font-medium text-gray-600 mb-2">Username</label>
          <input 
            type="text" 
            id="username" 
            name="username" 
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#13C296] focus:outline-none"
            placeholder="Enter your username"
            required
          />
        </div>

        <div class="mb-6">
          <label for="password" class="block text-sm font-medium text-gray-600 mb-2">Password</label>
          <input 
            type="password" 
            id="password" 
            name="password" 
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#13C296] focus:outline-none"
            placeholder="Enter your password"
            required
          />
        </div>

        <button 
          type="submit" 
          class="w-full px-4 py-2 bg-[#13C296] text-white font-semibold rounded-md hover:bg-[#12ab88] focus:outline-none"
        >
          Submit
        </button>
      </form>
    </div>
  </div>

</body>
</html>
