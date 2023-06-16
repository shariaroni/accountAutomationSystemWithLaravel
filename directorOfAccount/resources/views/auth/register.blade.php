<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>নিবন্ধন</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>

<x-guest-layout>
    <h4 class="display-6 text-center my-4">নিবন্ধন করুন</h4>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('নাম')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Mobile -->
        <div class="form-group mt-4">
            <x-input-label for="mobile" :value="__('মোবাইল')" />
            <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required autocomplete="mobile" />
            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="form-group mt-4">
            <x-input-label for="email" :value="__('ইমেইল')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group mt-4">
            <x-input-label for="password" :value="__('পাসওয়ার্ড')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group mt-4">
            <x-input-label for="password_confirmation" :value="__('পুনরায় পাসওয়ার্ড')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Post -->
        <div class="form-group mt-4">
            <x-input-label for="type" :value="__('পদবী')" />
            <select class="form-select mul-select" name="type" style="border-radius: 5px; border: 2px solid #d6d6d6;">
                <option class="dropdown-menu" value="type">পদবী বাছাই করুন</option>
                <option value="general">আবেদনকারী</option>
                <option value="recommendingOfficer">সুপারিশকারী কর্মকর্তা</option>
                <option value="accountOfficer">কর্মকর্তা (হিসাব দপ্তর)</option>
                <option value="deputyDirector">উপ পরিচালক (হিসাব দপ্তর)</option>
                <option value="director">পরিচালক (হিসাব দপ্তর)</option>
                <option value="treasure">ট্রেজারার</option>
                <option value="vc">ভাইস-চ্যান্সেলর</option>
            </select>
         </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('ইতিমধ্যে নিবন্ধিত?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('নিবন্ধন করুন') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
