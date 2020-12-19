@extends('layouts.app')
@section('title','FAQ')
@section('content')


    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				FAQ
			</span>
        </div>
    </div>

    <div class="container">
        <div class="row py-2">
            <div class="col">
                <h4 class="text-info mb-4 text-center">Documentation For User</h4>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-center" data-toggle="collapse" data-target="#usercollapseOne">
                                <i class="fa fa-folder fa-2x mr-1 text-warning"></i>
                                View Product
                                <br>
                                (ဝယ္ယူရရွိနိုင္ေသာ ကုန္ပစၥည္းမ်ားအားၾကည့္ရွဳ႕ျခင္း)
                            </button>
                        </div>
                        <div class="collapse show" id="usercollapseOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary h4">NEW ARRIVALS</span>&nbsp;ေခါင္းစဥ္ေအာက္ တြင္ အသစ္ေရာက္ရွိလာေသာ ပစၥည္းမ်ားအား ၾကည့္ရွဳ႕ ဝယ္ယူနိုင္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary h4">BESTSELLING PRODUCTS</span>&nbsp;ေခါင္းစဥ္ေအာက္တြင္ အ ေရာင္းရဆုံးထိန္တန္းမွ ပစၥည္းမ်ားအား ၾကည့္ရႈ႔ဝယ္ယူနိုင္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary h4">POPULAR PRODUCTS</span>&nbsp;ေခါင္းစဥ္ေအာက္တြင္ လူၾကည့္မ်ားေသာ/ေပၚပ်ဴလာျဖစ္ေသာ ပစၥည္းမ်ားအား ၾကည့္ရႈ႔ဝယ္ယူနိုင္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Menu Bar(အ ေပၚဘားတန္း)ရွိ <span class="text-primary h4">Categories</span>&nbsp;ေခါင္းစဥ္ေအာက္တြင္ ရွိေသာ Category Name အမ်ိဳးအစားဂ႐ုတစ္ခုျခင္းအလိုက္
                                    ပစၥည္းမ်ားအား ၾကည့္ရႈ႔ဝယ္ယူနိုင္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Product(ကုန္ပစၥည္း)တစ္ခုကို အေသးစိတ္ၾကည့္နိုင္ရန္အတြက္ ၎ အ ေပၚတြင္ရွိေသာ<span class="text-primary h4">Quick View</span>&nbsp;ခလုတ္ကိုႏွိပ္၍ ၾကည့္ရႈ႔နိုင္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Product(ကုန္ပစၥည္း)တစ္ခုကို အ ေသးစိတ္ၾကည့္နိုင္ရန္ေနရာတြင္
                                    <br>
                                    -> Product အတြက္ ဓါတ္ပုံမ်ားအား ေရြးခ်ယ္ၾကည့္နိုင္ျခင္း
                                    <br>
                                    -> Product အတြက္ ေဈးႏႈန္း/အမည္/ကုတ္နံပါတ္ မ်ားၾကည့္ရႈ႔နိုင္ပါသည္
                                    <br>
                                    -> Product အတြက္ အ ေသးစိတ္ၾကည့္ရႈ႔ရာတြင္ လက္လီေဈး/လက္ကားေဈး ေဖာ္ျပထားျခင္း
                                    <br>
                                    -> Product အတြက္ အ ေသးစိတ္ၾကည့္ရႈ႔ရာတြင္ Instock/PreOrder ေဖာ္ျပထားျခင္း
                                    <br>
                                    -> Product ဓါတ္ပုံေအာက္တြင္ အ ေသးစိတ္ေဖာ္ျပခ်က္(Description)နဲ႔အတူ Product ေရြးခ်ယ္ဝယ္ယူနိုင္ေသာ (Additional information)မ်ားအား
                                    ၾကည့္ရႈ႔နိုင္ပါသည္။ ထို႔အျပင္ Review ေနရာတြင္ မိမိတို႔ရဲ့ Feedback မ်ားအား Comment အျဖစ္ခ်န္ထားခဲ့နိုင္ပါသည္။
                                    <br>
                                    -> ယခု Product နဲ႔ဆက္စပ္ေနေသာ ပစၥည္းမ်ားအား ေအာက္ဆုံးတြင္ အ ေသးစိတ္ၾကည့္ရႈ႔နိုင္ပါသည္
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-center" data-toggle="collapse" data-target="#usercollapseTwo">
                                <i class="fa fa-cart-arrow-down fa-2x mr-1 text-warning"></i>
                                Order Product
                                <br>
                                ( ကုန္ပစၥည္းမွာယူျခင္း)
                            </button>
                        </div>
                        <div class="collapse" id="usercollapseTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Product(ကုန္ပစၥည္း)တစ္ခုကို အ ေသးစိတ္ၾကည့္နိုင္ေသာေနရာမွ <span class="text-primary h5">Add To Cart</span>&nbsp;ခလုတ္ကိုႏွိပ္၍ ေဈးဝယ္ျခင္းထဲသို႔ထည့္နိုင္ပါသည္။ေဈးျခင္းထဲသို႔ထည့္ၿပီးပါက
                                    ထိပ္ဆုံးဘားတန္း(Menu Bar) ေပၚရွိ ေဈးဝယ္ျခင္းေတာင္းေဘးတြင္ မိမိထည့္ထားေသာ အ ေရအတြက္ကို ျပထားမည္ျဖစ္သည္။
                                    ထို႔ေနာက္ အျခားပစၥည္းမ်ားၾကည့္ရႈ႔ျခင္း ၊ ေဈးျခင္းထဲသို႔ထည့္ျခင္း ထပ္ကာထပ္ကာ လုပ္ေဆာင္နိုင္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိစိတ္ႀကိဳက္ပစၥည္းမ်ား ေဈးျခင္းထဲသို႔ထည့္ၿပီးပါက Order မွာယူရန္အတြက္ ထိပ္ဆုံးဘားတန္း(Menu Bar) ေပၚရွိ ေဈးဝယ္ျခင္းေတာင္းပုံ <i class="fa fa-shopping-cart text-primary"></i> အား ႏွိပ္လိုက္ပါက
                                    ေဈးျခင္းထဲသို႔ ထည့္သြင္းထားေသာ ကုန္ပစၥည္းမ်ားအားလုံး ေတြ႕ရမည္ျဖစ္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    အ ေရအတြက္ေလ်ာ့လိုပါက <span class="text-primary">QUANTITY</span> ေခါင္းစဥ္ေအာက္မွ အ ႏႈတ္(-)ကိုႏွိပ္ရမွာျဖစ္ၿပီး
                                    <br>
                                    အ ေရအတြက္တိုးလိုပါက <span class="text-primary">QUANTITY</span> ေခါင္းစဥ္ေအာက္မွ အ ေပါင္း(+)ကိုႏွိပ္ရမွာျဖစ္ပါသည္
                                    <br>
                                    ပစၥည္းအား ေဈးျခင္းထဲမွ လုံးဝ ဖယ္ရွားလိုပါက  <span class="text-primary">PRODUCT</span> ေခါင္းစဥ္ေအာက္မွ ဓါတ္ပုံေပၚတြင္ <span class="text-danger bg-warning h4">X</span>ကိုႏွိပ္ရမွာျဖစ္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    လိုအပ္ေသာအခ်က္လက္ ႏွင့္ အမည္ ၊ ဖုန္းနံပါတ္ ၊ ေပးပို႔ရမည့္ လိပ္စာတို႔ကို ထည့္သြင္းၿပီး <span class="text-success">Order Now</span> အား ႏွိပ္လိုက္ပါက
                                    ေဈးျခင္းထဲသို႔ ထည့္သြင္းထားေသာ ကုန္ပစၥည္းမ်ားအားလုံး ေအာ္ဒါမွာယူျခင္းေအာင္ျမင္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    အေကာင့္ျပဳလုပ္ၿပီး ေအာ္ဒါမွာျခင္းမဟုတ္ပါက  <span class="text-success">Order Now</span> အား ႏွိပ္လိုက္ၿပီး
                                    <span class="text-warning">Order Id ဟူေသာ ေအာ္ဒါနံပါတ္ေဖာ္ျပထားမည္ျဖစ္ၿပီး </span> ၄င္း ေအာ္ဒါနံပါတ္ကို မွတ္သားထားရန္လိုအပ္ပါသည္
                                    <br>
                                    ၄င္းေအာ္ဒါနံပါတ္အား မွတ္ထားမွသာ မွာယူထားေသာ ပစၥည္းမ်ားအား ၾကည့္ရႈ႔ျခင္း ၊ Delivery အေျခေနၾကည့္ျခင္းမ်ား ျပဳလုပ္နိုင္မည္ျဖစ္သည္။
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-center" data-toggle="collapse" data-target="#usercollapseThree">
                                <i class="fas fa-search-plus fa-2x mr-1 text-warning"></i>
                                Track Order & Find Products
                                <br>
                                ( ေအာ္ဒါမ်ားၾကည့္ရႈ႔ျခင္း ႏွင့္ ကုန္ပစၥည္း ရွာေဖြျခင္း)
                            </button>
                        </div>
                        <div class="collapse" id="usercollapseThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Product(ကုန္ပစၥည္း)တစ္ခုကို ကုတ္နံပါတ္ျဖင့္ရွာေဖြရန္အတြက္ Website ေအာက္ဆုံးတြင္ ရွိေသာ
                                    <span class="text-primary h5">HELP</span>&nbsp;ေခါင္းစဥ္ေအာက္တြင္ ရွိေသာ
                                    <span class="text-primary h6">Find Product Code</span> အား ႏွိပ္ပါ
                                    <br>
                                    ထို႔ေနာက္ Product တစ္ခု၏ Product Code အား ထည့္သြင္းၿပီး ရွာေဖြနိုင္မည္ျဖစ္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မွာယူထားေသာ ေအာ္ဒါအား ရွာေဖြရန္အတြက္ Website ေအာက္ဆုံးတြင္ ရွိေသာ
                                    <span class="text-primary h5">HELP</span>&nbsp;ေခါင္းစဥ္ေအာက္တြင္ ရွိေသာ
                                    <span class="text-primary h6">Track Order</span> အား ႏွိပ္ပါ
                                    <br>
                                    ထို႔ေနာက္ ေအာ္ဒါ တစ္ခု၏ ေအာ္ဒါနံပါတ္ အား ထည့္သြင္းၿပီး ရွာေဖြနိုင္မည္ျဖစ္ပါသည္
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-center" data-toggle="collapse" data-target="#usercollapseFour">
                                <i class="fas fa-address-card fa-2x mr-1 text-warning"></i>
                                Contact Us & Payment Proof
                                <br>
                                ( ဆက္သြယ္ျခင္း ႏွင့္ ေငြေပးေခ်မႈ႔သက္ေသမ်ား )
                            </button>
                        </div>
                        <div class="collapse" id="usercollapseFour" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကၽြန္ုပ္တို႔အားဆက္သြယ္ရန္အတြက္ Webstie ၏ အေပၚဆုံးဘား(Menu Bar)တြင္ရွိေသာ
                                    <span class="text-primary h5">Contact</span>&nbsp;ခလုတ္အားႏွိပ္ၿပီး ဆက္သြယ္နိုင္ပါသည္။
                                    <br>
                                    Website တြင္ ေဖာ္ျပထားေသာ Phone,Email,Facebook ႏွင့္ Messenger ပုံမ်ားအား ႏွိပ္ၿပီး တိုက္ရိုက္ဆက္သြယ္နိုင္ပါသည္
                                    <br>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Webstie ၏ ေအာက္ဆုံးရွိညာဘက္ေထာင့္တြင္ရွိေသာ <span class="text-primary h3">Messenger</span>ပုံအား
                                    ႏွိပ္ၿပီး လ်င္ျမန္စြာ ဆက္သြယ္ နိုင္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Payment Proof(ေငြေပးေခ်မႈ႔သက္ေသမ်ား)ေပးပို႔ရန္အတြက္ Webstie ၏ အေပၚဆုံးဘား(Menu Bar)တြင္ရွိေသာ
                                    <span class="text-primary h5">Send Proof</span>&nbsp;ခလုတ္အားႏွိပ္ၿပီး ႏွိပ္ပါ
                                    <br>
                                    ပထမဆုံးအကြက္တြင္ ေအာ္ဒါနံပါတ္အားထည့္သြင္းပါ
                                    <br>
                                    ဒုတိယအကြက္တြင္ သင္၏အမည္အားထည့္သြင္းပါ
                                    <br>
                                    တတိယအကြက္တြင္ သင့္အားဆက္သြယ္ရမည့္ ဖုန္းနံပါတ္အား ထည့္သြင္းပါ
                                    <br>
                                    စတုတၳအကြက္တြင္ သင့္အားဆက္သြယ္ရမည့္ လိပ္စာအား ထည့္သြင္းပါ
                                    <br>
                                    ပဥၥမေနရာတြင္ ေငြလႊဲပီးေၾကာင္း သက္ေသ ScreenShoot ဓါတ္ပုံထည့္သြင္းပါ
                                    <br>
                                    ေနာက္ဆုံးအကြက္တြင္ အျခားေျပာၾကားလိုေသာ အေၾကာင္းအရာမ်ားအား ထည့္သြင္းပါ

                                    လိုအပ္ေသာ အခ်က္လက္မ်ားထည့္သြင္းၿပီးပါက <span class="text-primary h3">Send</span> ခလုတ္အားႏွိပ္ၿပီး ေပးပို႔ နိုင္ပါသည္။
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-center" data-toggle="collapse" data-target="#usercollapseFive">
                                <i class="fas fa-user fa-2x mr-1 text-warning"></i>
                                Make Account & View Account
                                <br>
                                ( အေကာင့္သစ္ျပဳလုပ္ျခင္း ႏွင့္ ျပင္ဆင္ျခင္း )
                            </button>
                        </div>
                        <div class="collapse" id="usercollapseFive" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    အေကာင့္သစ္ျပဳလုပ္ရန္ Website ထိပ္ဆုံး (Menu Bar)အေပၚ မွ
                                    <span class="text-primary h5">Login</span>&nbsp;သို႔မဟုတ္ <span class="text-primary h5">Register</span> ကိုႏွိပ္ပါ
                                    <br>
                                    Website တြင္ Email,Facebook တို႔ကို သုံးၿပီး အေကာင့္သစ္ျပဳလုပ္နိုင္ပါသည္။
                                    <br>
                                    Facebook ကို သုံးၿပီး အေကာင့္သစ္ျပဳလုပ္ရေသာ္လည္း မိမိတို႔၏ Facebook Name ႏွင့္ Eamil ကိုသာ အသုံးျပဳမည္ျဖစ္ၿပီး Password အား
                                    အသုံးျပဳမည္မဟုတ္ပါ။ Facebook မွလည္ အသုံးျပဳခြင့္လုံး၀ေပးမထားပါ။ ထို႔ေၾကာင့္ မိမိတို႔ Password သည္ မိမိတို႔ကိုယ္တိုင္မွလြဲ၍ မည္သူတစ္ဉီးတစ္ေယာက္မွ
                                    သိရွိနိုင္မည္မဟုတ္ပါ။ Website ပိုင္ရွင္ႏွင့္ Website ဖန္းတီး Programmer ကိုယ္တိုင္ပင္လၽွင္ လူႀကီးမင္းတို႔၏ Password ၾကည့္ရႈ႔နိုင္ျခင္း ၊ သိရွိနိုင္ျခင္း
                                    လုံး၀(လုံးဝ)မရွိပါ။ ယုံၾကည္စိတ္ခ်စြာ အေကာင့္အသစ္ဖြင့္ အသုံးျပဳနိုင္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိအေကာင့္အခ်က္လက္မ်ားအား ၾကည့္ရန္အတြက္ Website ထိပ္ဆုံး (Menu Bar)အေပၚ မွ
                                    <span class="text-primary h5">သင့္၏အမည္</span> ကိုႏွိပ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိအေကာင့္အခ်က္လက္မ်ားအား ျပင္ဆင္လိုပါက
                                    <span class="text-primary h5">Edit Profile</span> ေနရာတြင္
                                    အမည္ ၊ အီးေမး ၊ ဖုန္းနံပါတ္ ၊ လိပ္စာ ၊ ဖရိုဖိုင္ဓါတ္ပုံတို႔ကို ထည့္သြင္းျပင္ဆင္နိုင္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိအေကာင့္ Password ျပင္ဆင္လိုပါက
                                    <span class="text-primary h5">Change Password</span> ေနရာတြင္
                                    ပထမဆုံးအကြက္တြင္ Password အေဟာင္းထည့္ ၿပီး ဒုတိယႏွင့္တတိယအကြက္မ်ားတြင္ Password အသစ္ထည့္သြင္းၿပီး ေျပာင္းလဲနိုင္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိမွာယူထားေသာ ေအာ္ဒါမ်ားအား ၾကည့္ရန္အတြက္
                                    <span class="text-success h5">View My Order</span> ကိုႏွိပ္ပါ
                                    <br>
                                    ေအာ္ဒါ နံပါတ္ႏွင့္တကြ ေဖာ္ျပထားပါသည္
                                    <br>
                                    ေအာ္ဒါတစ္ခုခ်င္း အေသးစိတ္ျပန္လည္ၾကည့္လိုပါက ေနာက္ဆုံးတြင္ရွိေသာ
                                    <span class="text-success h5">View</span>  ေခါင္းစဥ္ေအာက္မွ
                                    <span class="text-success h5">View Details</span> ခလုတ္အား ႏွိပ္၍ ၾကည့္နိုင္ပါသည္။
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection