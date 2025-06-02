<div class="max-w-xl mx-auto p-6 bg-gray-800 rounded-lg text-white">
    <h2 class="text-xl font-bold mb-4">Account Instellingen</h2>

    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 mb-4 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="updateAccount">
        <div class="mb-4">
            <label for="name" class="block mb-1">Naam</label>
            <input type="text" id="name" wire:model="name" class="w-full p-2 rounded text-black">
            @error('name') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-1">E-mailadres</label>
            <input type="email" id="email" wire:model="email" class="w-full p-2 rounded text-black">
            @error('email') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block mb-1">Nieuw wachtwoord</label>
            <input type="password" id="password" wire:model="password" class="w-full p-2 rounded text-black">
            @error('password') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Bijwerken</button>
    </form>
</div>
