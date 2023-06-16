<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<x-app-layout>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>বাজেট আবেদন</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        
    </head>
<body>
    <div class="container">
        <form action="descriptionOfDemand.php" method="POST" name="cart">
            <div class="container" style="max-width: 1000px;">
                <div style="margin-top: 20px;" class="row">
                    <div class="col-6">
                            <h4 class="text-center">
                                <strong> বাজেটের বিভাগ বাছাই করুন</strong> 
                            </h4>
                        <div style="max-width: 200px; margin: 0 auto">
                            <div class="form-check mt-3 d-block">
                                <input class="form-check-input" id="revenue" name="budget_type" type="radio" value="revenue">
                                <label class="form-check-label" for="revenue">রাজস্ব</label>
                            </div>
                            <div class="form-check mt-2 d-block">
                                <input class="form-check-input" id="development" name="budget_type" type="radio" value="development">
                                <label class="form-check-label" for="development">উন্নায়ন</label>
                            </div>
                            <div class="form-check mt-2 d-block">
                                <input class="form-check-input" id="others" name="budget_type" type="radio" value="others">
                                <label class="form-check-label" for="others">অন্যান্য</label>    
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="h4 text-center">
                            <strong> সুপারিশের আবেদন করুন </strong> 
                        </div>
                        <div style="max-width: 400px; margin: 0 auto">
                            <select class="form-select mt-3" name="recommending">
                                <option class="dropdown-menu" value="recommending null">সুপারিশকারী কর্মকর্তা বাছাই করুন</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <h4 class="text-center">
                            <strong> বাজেটের প্রকৃতি বাছাই করুন </strong> 
                        </h4>
                        <div style="max-width: 200px; margin: 0 auto">
                            <div class="form-check mt-3 d-block">
                                <input class="form-check-input" id="work" name="budgetType" type="radio" value="work">
                                <label for="work">কাজ</label>
                            </div>
                            <div class="form-check mt-2 d-block">
                                <input class="form-check-input" id="service" name="budgetType" type="radio" value="service">
                                <label for="service">সেবা</label>
                            </div>
                            <div class="form-check mt-2 d-block">
                                <input class="form-check-input" id="buying" name="budgetType" type="radio" value="buyingProduct">
                                <label for="buying">মালামাল ক্রয়</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h4 class="text-center">
                            <strong> বাজেটের প্রয়োজনীয়তা বর্ননা করুন </strong> 
                        </h4>
                        <div style="max-width: 400px; margin: 0 auto" class="form-group mt-3">
                            <textarea class="form-control" name="comment" cols="70" rows="4" placeholder="লিখুন..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <table class="table table-striped table-bordered table-hover" name="cart">
                <tr class="table-success text-center">
                    <th>কাজ/সেবা/মালামালের বিবারণ</th>
                    <th>পরিমাণ(একক)</th>
                    <th>একক মূল্য(প্রযোজ্য হারে আয়কর ও ভ্যাটসহ)</th>
                    <th>মোট মূল্য(প্রযোজ্য হারে আয়কর ও ভ্যাটসহ)</th>
                    <th></th>
                </tr>
                
                <tr name="line_items">
                    <td><input type="text" name="item" class="input form-control"></td>
                    <td><input type="number" name="qty" class="input form-control" value="1"></td>
                    <td><input type="text" name="price" class="input form-control" value="0.00"></td>
                    <td><input type="text" name="item_total" class="input form-control" value="" jAutoCalc="{qty} * {price}"></td>
                    <td><i name="remove" class="bi bi-x-circle-fill"></i></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td style="text-align: right"> সর্বমোট প্রাক্কলিত মূল্য </td>
                    <td><input type="text" name="total" class="input form-control" value="" jAutoCalc="SUM({item_total})"></td>
                </tr>
                <tr>
                    <td class="text-start" colspan="99"><i name="add" class="bi bi-plus-circle"></i></td>
                </tr>
            </table> -->
            <div class="box mt-5"> 
                <div class="box-body">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="well col-md-12">
                        <div class="item col-md-12">
                            <div class="h4 text-center mt-1 mb-1">
                                <strong> চাহিদার বিবারণী ছক </strong> 
                            </div>
                            <hr>
                            <div class="col-md-3">কাজ/সেবা/মালামালের বিবারণ</div>
                            <div class="col-md-2">পরিমাণ(একক)</div>
                            <div class="col-md-2">একক মূল্য(প্রযোজ্য হারে আয়কর ও ভ্যাটসহ)</div>
                            <div class="col-md-3">মোট মূল্য(প্রযোজ্য হারে আয়কর ও ভ্যাটসহ)</div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="post_item col-md-12">
                            <div class="col-md-3"><input placeholder="Title" type="text" required="" name="item_name[]" class="form-control"></div>
                            <div class="col-md-2"><input placeholder="qty" type="number" id="qty_1" required="" onkeyup="return qty(1)" name="qty[]" class="form-control"></div>
                            <div class="col-md-2"><input placeholder="Price" type="number" id="price_1" required="" onkeyup="return price(1)"  name="price[]" class="form-control"></div>
                            <div class="col-md-3"><input placeholder="subtotal"  type="number" id="subtotal_1" readonly   name="subtotal[]" class="form-control subtotal"></div>
                            
                        </div>
                        <div id="showItem"></div>
                        <div class="col-md-12">
                        <hr>
                        <div class="mx-4" style="text-align:left;"><span class="btn btn-success addrow"><i class="fa fa-plus" aria-hidden="true"></i></span></div>
                        </div>
                        <div id="totalamount">
                            <div class="form-group">
                            <div class="col-md-offset-3 col-md-4 text-right">সর্বমোট প্রাক্কলিত মূল্য
                                </div>
                                <div class="col-md-3">
                                <input type="text" readonly="" id="totalamounval" name="total" class="form-control"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div> 
            </div>
            <div class="text-center mt-5">
                <strong> অগ্রীম টাকার প্রয়োজনীয়তা </strong>
            </div>
            <div style="max-width: 400px; margin: 0 auto">
                <div class="input-group input-group-sm">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" id="money_yes" name="need" type="radio" value="yes" aria-label="Radio button for following text input">
                        <label class="form-check-label m-1" for="money_yes">আছে</label>
                    </div>
                    <input name="advanceAmount" type="text" class="form-control" aria-label="Text input with radio button" placeholder="পরিমাণ">
                    <div class="input-group-text mx-1">
                        <input class="form-check-input mt-0" id="money_no" name="need" type="radio" value="no" aria-label="Radio button for following text input">
                        <label class="form-check-label m-1" for="money_no">নেই</label>
                    </div>
                </div>
            </div> </div>

            <div class="text-center mt-3 mb-5">
                <input type="submit" class="btn btn-primary" name="submit" value="নিশ্চিত করুন">
            </div>
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- page script -->
    <script src="custom.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#disable").on("contextmenu",function(e){
                return false;
            }); 
        }); 
        $(document).keypress("u",function(e) {
        if(e.ctrlKey){return false;}else{return true;}
        });
    </script>
</body>
</x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>