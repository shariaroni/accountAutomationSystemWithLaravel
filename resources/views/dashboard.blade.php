<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ব্যবহারকারীর তথ্য') }}
        </h2>
    </x-slot>

    <div class="panel panel-default">
        <div class="card mb-3" style="max-width: 700px; margin: 0 auto">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="images/man.png" class="img-fluid rounded-start p-2">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="pull-right">
                                <strong>
                                    
                                </strong>
                            </span>
                        </h5>
                        <p class="card-text">
                        <div style="max-width: 450px; margin: 0 auto">
                            <div class="btn-group dropend dropdown mb-3">
                                <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    আবেদনকারী 
                                </button>
                            </div>
                        </div>
                        </p>
                        <a class="btn btn-warning" href="descriptionOfDemand.php">
                        বাজেট আবেদন করুন</a>&nbsp;
                        <a class="btn btn-secondary" href="oldBudgetList.php">পূর্বের বাজেট আবেদন</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
