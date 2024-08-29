<div>
  <livewire:header />
  <div class="w-full flex flex-wrap">
    <!-- Login Section -->
    <div class="w-1/2 m-auto flex flex-col pt-48">
      <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
        <p class="text-center text-3xl">Log In</p>
        <form class="flex flex-col pt-3 md:pt-8" wire:submit.prevent="submit">
          <div class="flex flex-col pt-4">
            <label for="email" class="text-lg">Email</label>
            <input type="email" id="email" wire:model="form.email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
            @error('form.email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>

          <div class="flex flex-col pt-4">
            <label for="password" class="text-lg">Password</label>
            <input type="password" id="password" wire:model="form.password" placeholder="Password" class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
            @error('form.password')
            <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>

          <input type="submit" value="Login" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
        </form>
        <div class="text-center pt-12 pb-12">
          <p>Don't have an account? <a href="/register" class="underline font-semibold">Sign up</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
