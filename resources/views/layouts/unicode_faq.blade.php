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
                                (ဝယ်ယူရရှိနိုင်သော ကုန်ပစ္စည်းများအားကြည့်ရှု့ခြင်း)
                            </button>
                        </div>
                        <div class="collapse show" id="usercollapseOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary h4">NEW ARRIVALS</span>&nbsp;ခေါင်းစဉ်အောက်တွင် အသစ်ရောက်ရှိလာသော ပစ္စည်းများအား ကြည့်ရှု့ဝယ်ယူနိုင်ပါသည်
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary h4">BESTSELLING PRODUCTS</span>&nbsp;ခေါင်းစဉ်အောက်တွင် အရောင်းရဆုံးထိန်တန်းမှ ပစ္စည်းများအား ကြည့်ရှု့ဝယ်ယူနိုင်ပါသည်
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary h4">POPULAR PRODUCTS</span>&nbsp;ခေါင်းစဉ်အောက်တွင် လူကြည့်များသော/ပေါ်ပျူလာဖြစ်သော ပစ္စည်းများအား ကြည့်ရှု့ဝယ်ယူနိုင်ပါသည်
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Menu Bar(အပေါ်ဘားတန်း)ရှိ <span class="text-primary h4">Categories</span>&nbsp;ခေါင်းစဉ်အောက်တွင် ရှိသော Category Name အမျိုးအစားဂရုတစ်ခုခြင်းအလိုက်
                                    ပစ္စည်းများအား ကြည့်ရှု့ဝယ်ယူနိုင်ပါသည်
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Product(ကုန်ပစ္စည်း)တစ်ခုကို အသေးစိတ်ကြည့်နိုင်ရန်အတွက် ၎င်းအပေါ်တွင်ရှိသော<span class="text-primary h4">Quick View</span>&nbsp;ခလုတ်ကိုနှိပ်၍ ကြည့်ရှု့နိုင်ပါသည်
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Product(ကုန်ပစ္စည်း)တစ်ခုကို အသေးစိတ်ကြည့်နိုင်ရန်နေရာတွင်
                                    <br>
                                    -> Product အတွက် ဓါတ်ပုံများအား ရွေးချယ်ကြည့်နိုင်ခြင်း
                                    <br>
                                    -> Product အတွက် ဈေးနှုန်း/အမည်/ကုတ်နံပါတ် များကြည့်ရှု့နိုင်ပါသည်
                                    <br>
                                    -> Product အတွက် အသေးစိတ်ကြည့်ရှု့ရာတွင် လက်လီဈေး/လက်ကားဈေး ဖော်ပြထားခြင်း
                                    <br>
                                    -> Product အတွက် အသေးစိတ်ကြည့်ရှု့ရာတွင် Instock/PreOrder ဖော်ပြထားခြင်း
                                    <br>
                                    -> Product ဓါတ်ပုံအောက်တွင် အသေးစိတ်ဖော်ပြချက်(Description)နဲ့အတူ Product ရွေးချယ်ဝယ်ယူနိုင်သော (Additional information)များအား
                                    ကြည့်ရှု့နိုင်ပါသည်။ ထို့အပြင် Review နေရာတွင် မိမိတို့ရဲ့ Feedback များအား Comment အဖြစ်ချန်ထားခဲ့နိုင်ပါသည်။
                                    <br>
                                    -> ယခု Product နဲ့ဆက်စပ်နေသော ပစ္စည်းများအား အောက်ဆုံးတွင် အသေးစိတ်ကြည့်ရှု့နိုင်ပါသည်
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
                                ( ကုန်ပစ္စည်းမှာယူခြင်း)
                            </button>
                        </div>
                        <div class="collapse" id="usercollapseTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Product(ကုန်ပစ္စည်း)တစ်ခုကို အသေးစိတ်ကြည့်နိုင်သောနေရာမှ <span class="text-primary h5">Add To Cart</span>&nbsp;ခလုတ်ကိုနှိပ်၍ ဈေးဝယ်ခြင်းထဲသို့ထည့်နိုင်ပါသည်။ဈေးခြင်းထဲသို့ထည့်ပြီးပါက
                                    ထိပ်ဆုံးဘားတန်း(Menu Bar) ပေါ်ရှိ ဈေးဝယ်ခြင်းတောင်းဘေးတွင် မိမိထည့်ထားသော အရေအတွက်ကို ပြထားမည်ဖြစ်သည်။
                                    ထို့နောက် အခြားပစ္စည်းများကြည့်ရှု့ခြင်း ၊ ဈေးခြင်းထဲသို့ထည့်ခြင်း ထပ်ကာထပ်ကာ လုပ်ဆောင်နိုင်ပါသည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိစိတ်ကြိုက်ပစ္စည်းများ ဈေးခြင်းထဲသို့ထည့်ပြီးပါက Order မှာယူရန်အတွက် ထိပ်ဆုံးဘားတန်း(Menu Bar) ပေါ်ရှိ ဈေးဝယ်ခြင်းတောင်းပုံ <i class="fa fa-shopping-cart text-primary"></i> အား နှိပ်လိုက်ပါက
                                    ဈေးခြင်းထဲသို့ ထည့်သွင်းထားသော ကုန်ပစ္စည်းများအားလုံး တွေ့ရမည်ဖြစ်ပါသည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    အရေအတွက်လျော့လိုပါက <span class="text-primary">QUANTITY</span> ခေါင်းစဉ်အောက်မှ အနှုတ်(-)ကိုနှိပ်ရမှာဖြစ်ပြီး
                                    <br>
                                    အရေအတွက်တိုးလိုပါက <span class="text-primary">QUANTITY</span> ခေါင်းစဉ်အောက်မှ အပေါင်း(+)ကိုနှိပ်ရမှာဖြစ်ပါသည်
                                    <br>
                                    ပစ္စည်းအား ဈေးခြင်းထဲမှ လုံးဝ ဖယ်ရှားလိုပါက  <span class="text-primary">PRODUCT</span> ခေါင်းစဉ်အောက်မှ ဓါတ်ပုံပေါ်တွင် <span class="text-danger bg-warning h4">X</span>ကိုနှိပ်ရမှာဖြစ်ပါသည်
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    လိုအပ်သောအချက်လက် နှင့် အမည် ၊ ဖုန်းနံပါတ် ၊ ပေးပို့ရမည့် လိပ်စာတို့ကို ထည့်သွင်းပြီး <span class="text-success">Order Now</span> အား နှိပ်လိုက်ပါက
                                    ဈေးခြင်းထဲသို့ ထည့်သွင်းထားသော ကုန်ပစ္စည်းများအားလုံး အော်ဒါမှာယူခြင်းအောင်မြင်ပါသည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    အကောင့်ပြုလုပ်ပြီး အော်ဒါမှာခြင်းမဟုတ်ပါက  <span class="text-success">Order Now</span> အား နှိပ်လိုက်ပြီး
                                    <span class="text-warning">Order Id ဟူသော အော်ဒါနံပါတ်ဖော်ပြထားမည်ဖြစ်ပြီး </span> ၎င်းအော်ဒါနံပါတ်ကို မှတ်သားထားရန်လိုအပ်ပါသည်
                                    <br>
                                    ၎င်းအော်ဒါနံပါတ်အား မှားထားမှသာ မှာယူထားသော ပစ္စည်းများအား ကြည့်ရှု့ခြင်း ၊ Delivery အခြေနေကြည့်ခြင်းများ ပြုလုပ်နိုင်မည်ဖြစ်သည်။
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
                                ( အော်ဒါများကြည့်ရှု့ခြင်း နှင့် ကုန်ပစ္စည်း ရှာဖွေခြင်း)
                            </button>
                        </div>
                        <div class="collapse" id="usercollapseThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Product(ကုန်ပစ္စည်း)တစ်ခုကို ကုတ်နံပါတ်ဖြင့်ရှာဖွေရန်အတွက် Website အောက်ဆုံးတွင် ရှိသော
                                    <span class="text-primary h5">HELP</span>&nbsp;ခေါင်းစဉ်အောက်တွင် ရှိသော
                                    <span class="text-primary h6">Find Product Code</span> အား နှိပ်ပါ
                                    <br>
                                    ထို့နောက် Product တစ်ခု၏ Product Code အား ထည့်သွင်းပြီး ရှာဖွေနိုင်မည်ဖြစ်ပါသည်
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မှာယူထားသော အော်ဒါအား ရှာဖွေရန်အတွက် Website အောက်ဆုံးတွင် ရှိသော
                                    <span class="text-primary h5">HELP</span>&nbsp;ခေါင်းစဉ်အောက်တွင် ရှိသော
                                    <span class="text-primary h6">Track Order</span> အား နှိပ်ပါ
                                    <br>
                                    ထို့နောက် အော်ဒါ တစ်ခု၏ အော်ဒါနံပါတ် အား ထည့်သွင်းပြီး ရှာဖွေနိုင်မည်ဖြစ်ပါသည်
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
                                ( ဆက်သွယ်ခြင်း နှင့် ငွေပေးချေမှု့သက်သေများ )
                            </button>
                        </div>
                        <div class="collapse" id="usercollapseFour" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကျွန်ုပ်တို့အားဆက်သွယ်ရန်အတွက် Webstie ၏ အပေါ်ဆုံးဘား(Menu Bar)တွင်ရှိသော
                                    <span class="text-primary h5">Contact</span>&nbsp;ခလုတ်အားနှိပ်ပြီး ဆက်သွယ်နိုင်ပါသည်။
                                    <br>
                                    Website တွင် ဖော်ပြထားသော Phone,Email,Facebook နှင့် Messenger ပုံများအား နှိပ်ပြီး တိုက်ရိုက်ဆက်သွယ်နိုင်ပါသည်
                                    <br>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Webstie ၏ အောက်ဆုံးရှိညာဘက်ထောင့်တွင်ရှိသော <span class="text-primary h3">Messenger</span>ပုံအား
                                    နှိပ်ပြီး လျင်မြန်စွာ ဆက်သွယ် နိုင်ပါသည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Payment Proof(ငွေပေးချေမှု့သက်သေများ)ပေးပို့ရန်အတွက် Webstie ၏ အပေါ်ဆုံးဘား(Menu Bar)တွင်ရှိသော
                                    <span class="text-primary h5">Send Proof</span>&nbsp;ခလုတ်အားနှိပ်ပြီး နှိပ်ပါ
                                    <br>
                                    ပထမဆုံးအကွက်တွင် အော်ဒါနံပါတ်အားထည့်သွင်းပါ
                                    <br>
                                    ဒုတိယအကွက်တွင် သင်၏အမည်အားထည့်သွင်းပါ
                                    <br>
                                    တတိယအကွက်တွင် သင့်အားဆက်သွယ်ရမည့် ဖုန်းနံပါတ်အား ထည့်သွင်းပါ
                                    <br>
                                    စတုတ္ထအကွက်တွင် သင့်အားဆက်သွယ်ရမည့် လိပ်စာအား ထည့်သွင်းပါ
                                    <br>
                                    ပဉ္စမနေရာတွင် ငွေလွှဲပီးကြောင်း သက်သေ ScreenShoot ဓါတ်ပုံထည့်သွင်းပါ
                                    <br>
                                    နောက်ဆုံးအကွက်တွင် အခြားပြောကြားလိုသော အကြောင်းအရာများအား ထည့်သွင်းပါ

                                    လိုအပ်သော အချက်လက်များထည့်သွင်းပြီးပါက <span class="text-primary h3">Send</span> ခလုတ်အားနှိပ်ပြီး ပေးပို့ နိုင်ပါသည်။
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
                                ( အကောင့်သစ်ပြုလုပ်ခြင်း နှင့် ပြင်ဆင်ခြင်း )
                            </button>
                        </div>
                        <div class="collapse" id="usercollapseFive" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    အကောင့်သစ်ပြုလုပ်ရန် Website ထိပ်ဆုံး (Menu Bar)အပေါ် မှ
                                    <span class="text-primary h5">Login</span>&nbsp;သို့မဟုတ် <span class="text-primary h5">Register</span> ကိုနှိပ်ပါ
                                    <br>
                                    Website တွင် Email,Facebook တို့ကို သုံးပြီး အကောင့်သစ်ပြုလုပ်နိုင်ပါသည်။
                                    <br>
                                    Facebook ကို သုံးပြီး အကောင့်သစ်ပြုလုပ်ရသော်လည်း မိမိတို့၏ Facebook Name နှင့် Eamil ကိုသာ အသုံးပြုမည်ဖြစ်ပြီး Password အား
                                    အသုံးပြုမည်မဟုတ်ပါ။ Facebook မှလည် အသုံးပြုခွင့်လုံး၀ပေးမထားပါ။ ထို့ကြောင့် မိမိတို့ Password သည် မိမိတို့ကိုယ်တိုင်မှလွဲ၍ မည်သူတစ်ဉီးတစ်ယောက်မှ
                                    သိရှိနိုင်မည်မဟုတ်ပါ။ Website ပိုင်ရှင်နှင့် Website ဖန်းတီး Programmer ကိုယ်တိုင်ပင်လျှင် လူကြီးမင်းတို့၏ Password ကြည့်ရှု့နိုင်ခြင်း ၊ သိရှိနိုင်ခြင်း
                                    လုံး၀(လုံးဝ)မရှိပါ။ ယုံကြည်စိတ်ချစွာ အကောင့်အသစ်ဖွင့် အသုံးပြုနိုင်ပါသည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိအကောင့်အချက်လက်များအား ကြည့်ရန်အတွက် Website ထိပ်ဆုံး (Menu Bar)အပေါ် မှ
                                    <span class="text-primary h5">သင့်၏အမည်</span> ကိုနှိပ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိအကောင့်အချက်လက်များအား ပြင်ဆင်လိုပါက
                                    <span class="text-primary h5">Edit Profile</span> နေရာတွင်
                                    အမည် ၊ အီးမေး ၊ ဖုန်းနံပါတ် ၊ လိပ်စာ ၊ ဖရိုဖိုင်ဓါတ်ပုံတို့ကို ထည့်သွင်းပြင်ဆင်နိုင်ပါသည်
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိအကောင့် Password ပြင်ဆင်လိုပါက
                                    <span class="text-primary h5">Change Password</span> နေရာတွင်
                                    ပထမဆုံးအကွက်တွင် Password အဟောင်းထည့် ပြီး ဒုတိယနှင့်တတိယအကွက်များတွင် Password အသစ်ထည့်သွင်းပြီး ပြောင်းလဲနိုင်ပါသည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိမှာယူထားသော အော်ဒါများအား ကြည့်ရန်အတွက်
                                    <span class="text-success h5">View My Order</span> ကိုနှိပ်ပါ
                                    <br>
                                    အော်ဒါ နံပါတ်နှင့်တကွ ဖော်ပြထားပါသည်
                                    <br>
                                    အော်ဒါတစ်ခုချင်း အသေးစိတ်ပြန်လည်ကြည့်လိုပါက နောက်ဆုံးတွင်ရှိသော
                                    <span class="text-success h5">View</span>  ခေါင်းစဉ်အောက်မှ
                                    <span class="text-success h5">View Details</span> ခလုတ်အား နှိပ်၍ ကြည့်နိုင်ပါသည်။
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection