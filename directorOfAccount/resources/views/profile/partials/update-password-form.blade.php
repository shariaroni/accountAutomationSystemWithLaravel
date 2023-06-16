<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('পাসওয়ার্ড আপডেট করুন') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('আপনার অ্যাকাউন্ট সুরক্ষিত থাকার জন্য একটি দীর্ঘ, র‍্যাণ্ডম পাসওয়ার্ড ব্যবহার করছে তা নিশ্চিত করুন।') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('বর্তমান পাসওয়ার্ড')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('নতুন পাসওয়ার্ড')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('নিশ্চিত পাসওয়ার্ড')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('আপডেট করুন') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
