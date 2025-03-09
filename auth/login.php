<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <title>Bahujan Scholars - Sign In</title>
</head>

<body>

  <section class="bg-white">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
        <div class="flex justify-center items-center h-full w-full">
          <img alt="" src="../assets/web/logo.png" class="h-[75%] w-[75%] object-contain" />
        </div>
      </aside>

      <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
        <div class="max-w-xl lg:max-w-3xl">

          <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
            Welcome back to Bahujan Scholars
          </h1>



          <form action="authenticate.php" class="mt-8 grid grid-cols-6 gap-6" method="post">


            <div class="col-span-6">
              <label for="Email" class="block text-sm font-medium text-gray-700"> Email </label>

              <input type="email" id="Email" name="email"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-lg text-gray-700 shadow-sm" />
            </div>

            <div class="col-span-6">
              <label for="Password" class="block text-sm font-medium text-gray-700"> Password </label>

              <input type="password" id="Password" name="password"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-lg text-gray-700 shadow-sm" />
            </div>





            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
              <button
                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500">
                Sign In
              </button>

              <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                Don't have an account?
                <a href="signup.php" class="text-gray-700 underline">Sign Up</a>.
              </p>
            </div>

          </form>
          <div class="flex mt-4">
            <button
              class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500">
              <a href="../">Go Back</a>
            </button>
          </div>
        </div>
      </main>
    </div>
  </section>

</body>

</html>