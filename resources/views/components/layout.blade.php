<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laracasts: {{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-full bg-black text-white/50">
<div class="w-full max-w-4xl mx-auto p-8 bg-zinc-900 rounded-md text-zinc-100">
  <h2 class="text-2xl font-semibold mb-6">{{$title}}</h2>

  {{ $slot }}

  </div>
</body>
</html>