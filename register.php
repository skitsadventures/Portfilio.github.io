<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In</title>
<style>
  body { font-family: Arial; display:flex; justify-content:center; align-items:center; height:100vh; background:#f4f4f4; }
  .signin { background:white; padding:2rem; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.1); width:300px; }
  .signin h2 { text-align:center; margin-bottom:1.5rem; }
  input { width:100%; padding:.75rem; margin-bottom:1rem; border-radius:4px; border:1px solid #ccc; }
  button { width:100%; padding:.75rem; border:none; border-radius:4px; background:#4285F4; color:white; font-weight:bold; cursor:pointer; }
  button:hover { background:#357ae8; }
</style>
</head>
<body>
<div class="signin">
  <h2>Sign In</h2>
  <form action="#" method="POST" autocomplete="on">
    <input type="email" name="email" placeholder="Email" required autocomplete="username">
    <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
    <button type="submit">Sign In</button>
  </form>
</div>
</body>
</html>