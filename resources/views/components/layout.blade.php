<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible"  content="ie=edge">
  <title>Pixel Position</title>
  @Vite(['resources/css/app.css',"resources/js/app.js"])
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head> 
<body class="bg-black text-white font-hanken-grotesk pb-10">
  <div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
      <div>
        <a href="/">
          <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
        </a>
      </div>
      <div class="space-x-6 font-bold flex">
        <a href="">Jobs</a>
        <a href="">Careers</a>
        <a href="">Salaries</a>
        <a href="">Companies</a>
      </div>
      @auth
        <div>
            <a href="/jobs/create">Post a job</a>
        </div>
        <form action="/logout" method="POST">
          @csrf
          @method("DELETE")
          <button>Log out</button>
        </form>
      @endauth
      @guest
      <div class="space-x-6 font-bold">
        <a href="/register">Sing Up</a>
        <a href="/login">Log in</a>

      </div>
      @endguest
      
    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
      {{$slot}}
    </main>

  </div>
  
</body>
</html>