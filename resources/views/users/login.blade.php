<x-layout>
    <section
    class="flex justify-center h-full gradient-form bg-gray-200 md:h-screen"
  >
    <div class="container py-12 px-6 h-full">
      <div
        class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800"
      >
        <div class="xl:w-10/12">
          <div class="block bg-white shadow-lg rounded-lg">
            <div
              class="flex justify-center items-center lg:flex lg:flex-wrap g-0"
            >
              <div class="lg:w-6/12 px-4 md:px-0">
                <div class="md:p-12 md:mx-6">
                  <div class="text-center">
                    <img
                      class="mx-auto w-48 pb-7"
                      src="/images/logo.png"
                      alt="logo"
                    />
                  </div>
                  <form method="POST" action="/users/authenticate">
                    @csrf
                    <p class="mb-4">Please login to your account</p>
                    <div class="mb-4">
                      <input
                        name="email"
                        type="email"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="email"
                        value="{{old('email')}}"
                        placeholder="Email"
                      />
                      @error('email')
                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="mb-4">
                      <input
                        name="password"
                        type="password"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="password"
                        placeholder="Password"
                      /> 
                       @error('password')
                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                     @enderror
                    </div>
                    <div class="text-center pt-1 mb-12 pb-1">
                      <button
                        class="bg-amber-400 inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-cyan-800 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                        type="submit"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                      >
                        Log in
                      </button>
                      <a class="text-gray-500" href="#!">Forgot password?</a>
                    </div>
                    <div class="flex items-center justify-between pb-6">
                      <p class="mb-0 mr-2">Don't have an account?</p>
                      <button
                        type="button"
                        class="inline-block px-6 py-2 border-2 border-amber-400 text-amber-400 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                      >
                        <a href="/register"> Register </a>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>