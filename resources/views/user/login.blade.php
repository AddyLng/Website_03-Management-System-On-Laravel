@include('partials.__header') 
    <header class="max-w-lg max- mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Student Login</h1>
        </a>
    </header>
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Welcome to Student System</h3>
            <p class="text-gray-600 pt-2">
                Sign up to your account
                <a href="/register" class="text-purple-300 font-bold">here</a>
            </p>
        </section>
        <section class="mt-10">
            <form action="/login/process" method="POST" class="flex flex-col">
                @csrf
                @error('email')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                @enderror
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <div class="label block text-gray-700 text-sm font-bold mb-2 ml-3">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                        <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                    </div>
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <div class="label block text-gray-700 text-sm font-bold mb-2 ml-3">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                        <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                    </div>
                </div>
                <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In</button>
            </form>
        </section>
    </main>
@include('partials.__footer')