<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ব্যবহারকারীর তথ্য') }}
        </h2>
    </x-slot>

    <div class="panel panel-default">
        <div class="card mt-5 p-3" style="max-width: 700px; margin: 0 auto">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="images/man.png" class="img-fluid rounded-start p-2">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="pull-right">
                                <div class="h2">{{ Auth::user()->name }}</div>
                            </span>
                        </h5>
                        <p class="card-text">
                            <div style="max-width: 450px; margin: 0 auto">
                                <div class="btn-group dropend dropdown mb-3">
                                    <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">আবেদনকারী</button>
                                </div>
                            </div>
                        </p>
                        <a class="btn btn-warning" href="{{ route('home') }}">বাজেট আবেদন করুন</a>&nbsp;
                        <a class="btn btn-secondary" href="oldBudgetList.php">পূর্বের বাজেট আবেদন</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>