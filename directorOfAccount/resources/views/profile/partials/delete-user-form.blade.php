<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('অ্যাকাউন্ট ডিলিট করুন') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('একবার আপনার অ্যাকাউন্ট ডিলিট হলে, এর সমস্ত রিসোর্স এবং ডেটা স্থায়ীভাবে মুছে যাবে। আপনার অ্যাকাউন্ট ডিলিট করার আগে, আপনার গুরুত্বপূর্ন রিসোর্স বা ডেটা ডাউনলোড করুন।') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('ডিলিট করুন') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('আপনি আপনার অ্যাকাউন্ট ডিলিট করতে চান, আপনি কি নিশ্চিত?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('একবার আপনার অ্যাকাউন্ট ডিলিট করে ফেলা হলে, এর সমস্ত রিসোর্স এবং ডেটা স্থায়ীভাবে মুছে যাবে। আপনি স্থায়ীভাবে আপনার অ্যাকাউন্ট মুছে ফেলতে চান তা নিশ্চিত করতে দয়া করে আপনার পাসওয়ার্ড লিখুন।') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('পাসওয়ার্ড') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('বাতিল করুন') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('ডিলিট করুন') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
