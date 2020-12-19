@extends('admin.layout.adminapp')
@section('admintitle','Documention')
@section('dashbordtitle','Complete Documention')
@section('admincontent')

    <!-- Activities and Quick Post Start -->

    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <h4 class="text-primary mb-4 text-center">Documentation For Admin</h4>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseOne">
                                <i class="fa fa-folder fa-2x mr-3 text-warning"></i>
                                Create New Category( ပစ္စည်းအမျိုးအစား ဂရုခွဲခြင်း )
                            </button>
                        </div>
                        <div class="collapse show" id="collapseOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တွင် <span class="text-primary">Category</span> စာ(ခလုတ်)အား နှိပ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary">Add New Category</span> ဟူသောခေါင်းစဉ်အောက်တွင် အသစ်ထည့်သွင်းနိုင်သော
                                    ပုံစံတွေ့မြင်ရမည်ဖြစ်ပါသည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပထမဆုံးအကွက် &nbsp;<span class="text-primary">Category Menu Name</span> ဟူသောနေရာတွင် Menu Bar (အပေါ်ဘားတန်းရှိ )Category ခေါင်းစဉ်အောက်တွင်
                                    ပေါ်လာစေချင်သော အမည်ထည့်ပါ(အမျိုးအစား ဂရုခွဲပါ)။ ဉပမာ-(1) Men Fashions(အမျိုးသားဖက်ရှင်နှင့်ဆက်စပ်သော ပစ္စည်းများ စုစည်းရောင်းချရန်)။ (2) Foods (အစားအသောက်နှင့်သက်ဆိုင်သော ပစ္စည်းများ စုစည်းရောင်းချရန်)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဒုတိယအကွက် &nbsp;<span class="text-primary">Category Title</span> ဟူသောနေရာတွင် Menu Bar (အပေါ်ဘားတန်းရှိ )Category ခေါင်းစဉ်အောက်တွင်
                                    ရှိသော သက်ဆိုင်ရာ Category Name(အမျိုးအစားဂရုစုစည်းခွဲခြားထားသောအမည်) နှင့်သက်ဆိုင်သော ခေါင်းစဉ်ပေးရမည်ဖြစ်သည်။ စာလုံးရေ(၃၀)ထက်မကျော်သင့်ပါ။
                                    ဉပမာ-(1) Men Fashions ဟူသော အမည်အတွက် Men Fashions 2019 Latest ဟု ခေါင်းစဉ်ပေးခြင်း။ (2) Foods ဟူသောအမည်အတွက် Delicious Foods(အရသာရှိသောစားသောက်ကုန်ပစ္စည်းများ) ဟု ခေါင်းစဉ်ပေးခြင်း။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    တတိယအကွက် &nbsp;<span class="text-primary">Category SubTitle</span> ဟူသောနေရာတွင် Menu Bar (အပေါ်ဘားတန်းရှိ )Category ခေါင်းစဉ်အောက်တွင်
                                    ရှိသော သက်ဆိုင်ရာ Category Name(အမျိုးအစားဂရုစုစည်းခွဲခြားထားသောအမည်) နှင့်သက်ဆိုင်သော ခေါင်းစဉ်ပေးရမည်ဖြစ်သည်။ စာလုံးရေ(၁၀၀)ထက်မကျော်သင့်ပါ။
                                    ဉပမာ-(1) Men Fashions ဟူသော အမည်အတွက် Best Quality and Low Price For Men Fashions(အကောင်းဆုံးအရည်အသွေးနှင့် ဈေးသက်သာသော အမျိုးသား ဖက်ရှင်များ) ဟု ခေါင်းစဉ်ပေးခြင်း။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Category Title နှင့် Category Subtitle သည် အတူတူထည့်သွင်းနိုင်ပါသည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    စတုတ္ထနေရာ &nbsp;<span class="text-primary">Category Slider Image Use(1900 x 900 )Size</span> ဟူသောနေရာတွင် Menu Bar (အပေါ်ဘားတန်းရှိ )Category ခေါင်းစဉ်အောက်တွင်
                                    ရှိသော သက်ဆိုင်ရာ Category Name(အမျိုးအစားဂရုစုစည်းခွဲခြားထားသောအမည်) နှင့်သက်ဆိုင်သော ဓါတ်ပုံထည့်သွင်းရမည်ဖြစ်သည်။ ဉပမာ-(1) Men Fashion(အမျိုးအစားဂရုစုစည်းခွဲခြားထားသောအမည်) အတွက် အဝတ်အစားနှင့်သက်ဆိုင်သော ဓါတ်ပုံများထည့်သွင်းခြင်း။
                                    ဉပမာ-(2)Food(အမျိုးအစားဂရုစုစည်းခွဲခြားထားသောအမည်) အတွက် အစားအသောက်ကုန်ပစ္စည်းများနှင့်သက်ဆိုင်သောဓါတ်ပုံများထည့်သွင်းခြင်း။
                                    ဓါတ်ပုံအရွယ်အစားသည် (အလျား 1900 x အနံ 900  )ရှိသောဓါတ်ပုံထည့်သွင်းသင့်ပါသည်။ အခြားဓါတ်ပုံထည့်သွင်းမည်ဆိုပါက အလျားရှည်ပြီး အနံ တိုရန်လိုအပါသည်။
                                    ၎င်းထည့်သွင်းလိုက်သောဓါတ်ပုံသည် ဈေးဝယ်သူများ မိမိတို့ Website ကို ဝင်ရောက်ကြည့်ရှု့ချိန်တွင် ထိပ်ဆုံးမှ ပေါ်နေမည်ဖြစ်ပြီး Slide ပြေးနေမည်ဖြစ်သည်။
                                    ဓါတ်ပုံအရွယ်အစားသည် အလျား x အနံ သေးငယ်လွန်းပါက မိမိတို့ Website ကြည့်ကောင်းနိုင်မည်မဟုတ်ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပဉ္စမနေရာ &nbsp;<span class="text-primary">Category Name Image Use(1200 x 800 )Size</span> ဟူသောနေရာတွင် ဈေးဝယ်သူမှ
                                    Category Name(အမျိုးအစားဂရုစုစည်းခွဲခြားထားသောအမည်) နှင့်သက်ဆိုင်သော ကုန်ပစ္စည်းများ ရွေးချယ်ကြည့်ရှု့ရန် နှိပ်သောအခါတွင် မြင်နေရမည့် ဓါတ်ပုံထည့်သွင်းရမည်ဖြစ်သည်။ ဉပမာ-(1) Men Fashion(အမျိုးအစားဂရုစုစည်းခွဲခြားထားသောအမည်) အတွက် အဝတ်အစားနှင့်သက်ဆိုင်သော ဓါတ်ပုံများထည့်သွင်းခြင်း။
                                    ဉပမာ-(2)Food(အမျိုးအစားဂရုစုစည်းခွဲခြားထားသောအမည်) အတွက် အစားအသောက်ကုန်ပစ္စည်းများနှင့်သက်ဆိုင်သောဓါတ်ပုံများထည့်သွင်းခြင်း။
                                    ဓါတ်ပုံအရွယ်အစားသည် (အလျား 1200 x အနံ ၈00  )ရှိသောဓါတ်ပုံထည့်သွင်းသင့်ပါသည်။
                                    ဓါတ်ပုံအရွယ်အစားသည် အလျား x အနံ သေးငယ်လွန်းပါက မိမိတို့ Website ကြည့်ကောင်းနိုင်မည်မဟုတ်ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    လိုအပ်သောအချက်လက်များ ရွေးချယ်ထည့်သွင်းပြီးပါက အောက်ဆုံးတွင်ရှိသော &nbsp;<span class="text-primary">Create </span> ဟူသော ခလုတ်ကိုနှိပ်လိုက်ပါက
                                    Category အသစ်တစ်ခုဖန်းတီးခြင်းအောင်မြင်ပါသည်။
                                </p>
                                <hr>
                                <h5 class="text-center">Category အား ပြုပြင်ခြင်း ၊ ဖျက်ခြင်းများ ပြုလုပ်ရန် </h5>
                                <hr>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Category အား ပြုပြင်လိုပါက <span class="text-primary">Add New Category</span> ဟူသော Category အသစ်ထည့်သွင်းနိုင်သည့်
                                    ပုံစံဘေးတွင် <span class="text-primary">Categories </span> ခေါင်းစဉ်အောက်တွင် မိမိတို့ထည့်သွင်းထားသော Category များအားလုံးကို
                                    မြင်တွေ့ရမည်ဖြစ်သည်။ မိမိတို့ ပြင်လိုသော Category အမည်နဲ့ကပ်လျက်တွင်ရှိသော ခဲတံပုံ အစိမ်းရောင်ခလုတ်အား နှိပ်ရပါသည်။
                                    ထို့နောက်တွင် Category အသစ်ထည့်သွင်းနိုင်သည့်ပုံစံအတိုင်း  လိုအပ်သောအချက်လက်များ ရွေးချယ်ထည့်သွင်းပြီးပါက
                                    အောက်ဆုံးတွင်ရှိသော &nbsp;<span class="text-primary">Update </span> ဟူသော ခလုတ်ကိုနှိပ်လိုက်ပါက
                                    Category အမည်အား ပြင်ဆင်ခြင်းအောင်မြင်ပါသည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Category အား ဖျက်လိုပါက <span class="text-primary">Add New Category</span> ဟူသော Category အသစ်ထည့်သွင်းနိုင်သည့်
                                    ပုံစံဘေးတွင် <span class="text-primary">Categories </span> ခေါင်းစဉ်အောက်တွင် မိမိတို့ထည့်သွင်းထားသော Category များအားလုံးကို
                                    မြင်တွေ့ရမည်ဖြစ်သည်။ မိမိတို့ ပြင်လိုသော Category အမည်နဲ့ကပ်လျက်တွင်ရှိသော &nbsp;<span class="text-danger"> <i class="fa fa-trash fa-2x"></i> </span>ခလုတ်အား နှိပ်ရပါသည်။
                                    <br>
                                    <span class="h5 text-danger">
                                        Category တစ်ခုအား ဖျက်လိုက်ပါ ၎င်း Category အား ရွေးချယ်ပီး ရောင်းချရန် ပြုလုပ်ထားသော Products များ၊  Itemsများ အား အလိုအလျောက်ဖျက်သွားမည်ဖြစ်သည်။
                                        ထို့ကြောင့် Category တစ်ခုအား ဖျက်မည်ဆိုလျှင် ၎င်း Category တွင် ကုန်ပစ္စည်းများ ရောင်းချရန် ပြုလုပ်ထားခြင်းရှိ ၊ မရှိ သေချာ ကြည့်ရှု့ပြီးမှ Category အား ဖျက်သင့်ပါသည်။
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseTwo">
                                <i class="fas fa-clipboard-check fa-2x mr-3 text-warning"></i>
                                Selections Options ( ရောင်းချမည့်ကုန်ပစ္စည်းများတွင် ရွေးချယ်စရာများထည့်သွင်းခြင်း )
                            </button>
                        </div>
                        <div class="collapse" id="collapseTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန်ပစ္စည်းတစ်ခု ရောင်းချရာတွင် ဈေးဝယ်သူများအား Size,Colors စသဖြင့် ရွေးချယ်နိုင်စေရန် ကြိုတင်သတ်မှတ်ထားနိုင်ပါသည်။ ထိုသို့မသတ်မှတ်မီ
                                    ရွေးစရာ အမည် နှင့် တန်ဖိုးအား ကြိုတင်ထည့်သွင်းထားရန်လိုအပ်သည်။
                                    ဉပမာ-(1) ရွေးချယ်စရာအမည် Size နှင့် ၎င်းအမည်ရဲ့တန်ဖိုးများကို Small,Medium,Large,Exttra Large(S,M,L,XL)ဟု ကြိုတင်ထည့်သွင်းထားမှသာ
                                    ရောင်းချရန်ကုပစ္စည်းတစ်ခု အသစ်ထည့်သွင်းချိန်တွင် ထိုကုန်ပစ္စည်းအတွက် ရွေးချယ်နိုင်သောအရာများကို ဖော်ပြပေးနိုင်မည်ဖြစ်သည်။


                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တွင် <span class="text-primary">Selection Options</span> စာ(ခလုတ်)အား နှိပ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ရွေးချယ်စရာအမည်ထည့်သွင်းရန်အတွက် &nbsp;<span class="text-danger">New Name</span> ဟူသောခလုတ်ကိုနှိပ်ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန်ပစ္စည်းတစ်ခုအတွက် ရွေးချယ်စရာအမည်ထည့်သွင်းပြီး &nbsp;<span class="text-danger">Create</span> ဟူသောခလုတ်ကိုနှိပ်ပါ။ ဒါဆိုရင်
                                    အမည်တစ်ခုထည့်သွင်းပြီးပါပြီ။ ဉပမာ-Size,Colors
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ရွေးချယ်စရာအမည်အတွက် တန်ဖိုး(Value)ထည့်သွင်းရန်အတွက် &nbsp;<span class="text-danger">New Value</span> ဟူသောခလုတ်ကိုနှိပ်ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ရွေးချယ်စရာအမည်အတွက် တန်ဖိုးတစ်ခု(Value)ထည့်သွင်းပြီး &nbsp;<span class="text-danger">Create</span> ဟူသောခလုတ်ကိုနှိပ်ပါ။ ဒါဆိုရင်
                                    အမည်တစ်ခုထည့်သွင်းပြီးပါပြီ။ ဉပမာ-Size-အတွက် Small,Medium,Large နှင့် Colors-အတွက် Yellow,White,Pink
                                </p>
                                <hr>
                                <h5>ရွေးချယ်စရာအမည်အား ပြင်ဆင်ခြင်း ဖျက်ခြင်း</h5>
                                <hr>
                                <p class="text-center">ရွေးချယ်စရာအမည်များအားလုံးကို <span class="text-primary">User Select Option Name</span> ခေါင်းစဉ်အောက်တွင်ဖော်ပြထားသည်</p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ရွေးချယ်စရာအမည်အား ပြင်ဆင်လိုပါက ခဲတံပုံနဲ့&nbsp;<span class="text-primary">
                                        <i class="fa fa-edit"></i>
                                    </span> ခလုတ်ကိုနှိပ်ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ရွေးချယ်စရာအမည်အား ဖျက်လိုပါက &nbsp;<span class="text-danger">
                                        <i class="fa fa-trash"></i>
                                    </span> ခလုတ်ကိုနှိပ်ပါ။
                                </p>
                                <p class="text-center">ရွေးချယ်စရာအမည်အတွက် တန်ဖိုးများကို <span class="text-primary">User Select Option Value</span> ခေါင်းစဉ်အောက်တွင်ဖော်ပြထားသည်</p>
                                <p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ရွေးချယ်စရာအမည် တန်ဖိုးအား ပြင်ဆင်လိုပါက ခဲတံပုံနဲ့&nbsp;<span class="text-primary">
                                        <i class="fa fa-edit"></i>
                                    </span> ခလုတ်ကိုနှိပ်ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ရွေးချယ်စရာအမည် တန်ဖိုးအား ဖျက်လိုပါက &nbsp;<span class="text-danger">
                                        <i class="fa fa-trash"></i>
                                    </span> ခလုတ်ကိုနှိပ်ပါ။
                                </p>
                                <hr>
                                <h5>ရွေးချယ်စရာအမည်နှင့် တန်ဖိုးများအား တွဲဆက်ပေးခြင်း</h5>
                                <hr>
                                <p class="text-center">ရွေးချယ်စရာအမည်များအားလုံးကို <span class="text-primary">User Select Option Name</span> ခေါင်းစဉ်အောက်တွင်ဖော်ပြထားသည်</p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ရွေးချယ်စရာအမည်(ဉပမာ-Size)ဘေးတွင် ရှိသော &nbsp;<span class="text-danger">Add Value</span> ဟူသောခလုတ်ကိုနှိပ်ပါ။
                                    ဖော်ပြထားသော တန်ဖိုများအားလုံးထဲမှ မိမိကြိုက်နှစ်သက်ရာတန်ဖိုးများ ရွေးချယ်သတ်မှတ်နိုင်ပါသည်။ (ဉပမာ-Size အတွက်ဆို Small,Medium,Large)တို့ကိုရွေးခြင်း။
                                    ရွေးခြယ်ပြီးပါက &nbsp;<span class="text-danger">Add Value</span> ဟူသောခလုတ်ကိုနှိပ်ပါ။
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseThree">
                                <i class="fa fa-shopping-cart fa-2x mr-3 text-warning"></i>
                                Create New Product( ရောင်းချရန်အတွက် ပစ္စည်းအမျိုးအသစ်တစ်ခုပြုလုပ်ခြင်း )
                            </button>
                        </div>
                        <div class="collapse" id="collapseThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တွင် <span class="text-primary">Products</span> စာ(ခလုတ်)အား နှိပ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ရောင်းချရန်ကုန်ပစ္စည်းအသစ်ပြုလုပ်ရန်အတွက် &nbsp;<span class="text-danger">Add New Product</span> ဟူသောခလုတ်ကိုနှိပ်ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပထမဆုံးနေရာတွင် ရောင်းချမည့် ကုန်ပစ္စည်းအတွက် Category အမျိုးအစားရွေးချယ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဒုတိယနေရာတွင် ရောင်းချမည့် ကုန်ပစ္စည်းအတွက် အမည်ပေးပါ(အတိုကောက်)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    တတိယနေရာတွင် ရောင်းချမည့် ကုန်ပစ္စည်းအတွက် ခေါင်းစဉ်ထည့်ပါ။ (ခေါင်းစဉ်သည် ကုန်ပစ္စည်းအတွက် အကျဉ်းချုံးဖော်ပြချက်ဖြစ်သောကြောင့်
                                    မိမိနှစ်သက်သလို အတိုချုံ့ဖော်ပြပါ)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဈေးနှုန်းနေရာတွင် ရောင်းချမည့် ကုန်ပစ္စည်းအတွက် ဈေးသတ်မှတ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပဉ္စမနေရာ <span class="text-primary">Product Image Use ( 1200 x 1420 )Size</span>နေရာတွင်
                                    ရောင်းချချင်သောပစ္စည်းအတွက် ဓါတ်ပုံထည့်ပေးရမည်။ အနည်းဓါတ်ပုံတစ်ပုံမှ အများဆုံး ၆ ပုံအထိထည့်သွင်းနိုင်ပါသည်။(ဓါတ်ပုံ ၆ပုံထက် ပို၍ထည့်သွင်းနိုင်သော်လည်း
                                    မိမိ Website ကြည့်ကောင်းနေရန်လိုအပ်ပါသည်။) မဖြစ်မနေ ဓါတ်ပုံ ၆ပုံထက် ပို၍လည်းထည့်သွင်းနိုင်ပါသည်။
                                    ထည့်သွင်းသော ဓါတ်ပုံသည် အလျား ၁၂၀၀ x အနံ(အမြင့်) ၁၄၀၀ ရှိသော ဓါတ်ပုံထည့်သွင်းသင့်ပါသည်။အခြားဓါတ်ပုံထည့်သွင်းမည်ဆိုပါက အလျားရှည်လွန်းပီး အနံ တိုနေရန်လိုအပ်ပါသည်။

                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary">Description of Product</span>နေရာတွင်
                                    ကုန်ပစ္စည်းအကြောင်းအသေးစိတ်ဖော်ပြနိုင်ပါသည်။
                                    စာပိုဒ် ၂/၃ ပိုဒ် မှအစ များစွာ ထည့်သွင်းရေးသားဖော်ပြနိုင်ပါသည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary">Select Options</span>နေရာတွင်
                                    ကုန်ပစ္စည်းဝယ်ယူရာတွင် ရွေးချယ်နိုင်သော အရာများရှိပါက ဈေးဝယ်သူအား ရွေးချယ်ဝယ်ယူနိုင်စေရန်
                                    သတ်မှတ်ပေးပါ။ ဉပမာ။ Size - Small,Meduim,Large စသဖြင့်
                                    <br>
                                    အကယ်၍ ကုန်ပစ္စည်းသည် ရွေးစရာများ(size,color)မရှိဟု ဆိုပါက ဘာမှာ ထည့်သွင်းရွေးချယ်ခြင်းမပြုလုပ်ဘဲ ကျော်သွားပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary">Select Order Type</span>နေရာတွင်
                                    ကုန်ပစ္စည်းသည် မိမိထံတွက် Instock ထားရှိပီး ရောင်းချခြင်းဆိုပါက Instock ကိုရွေးပေးပါ။
                                    ကုန်ပစ္စည်းသည် မိမိထံတွက် Instock ထားရှိပီး ရောင်းချခြင်းဟုတ်ပါက Preorder ကိုရွေးပေးပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary">Select Product Price Type</span>နေရာတွင်
                                    ကုန်ပစ္စည်းသည်ဈေးနှုန်းသည် လက်လီရောင်းချခြင်းဆိုပါက Retail ကို ရွေးပါ။
                                    ကုန်ပစ္စည်းသည်ဈေးနှုန်းသည် လက်လကား‌ရောင်းချခြင်းဆိုပါက Whole Sale ကို ရွေးပါ။(WS)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    လိုအပ်သောအချက်များ ထည့်သွင်းပြီးပါက
                                    <span class="text-primary">Create</span> ခလုတ်ကိုနှိပ်လိုက်ပါက ရောင်းချရန် ကုန်ပစ္စည်းအသစ်တစ်ခု ဖန်တီပြီးသွားပြီဖြစ်သည်။
                                </p>
                                <hr>
                                <h5 class="text-center">ရောင်းချရန်ထည့်သွင်းထားသော ကုန်ပစ္စည်းများအား ကြည့်ရှု့ခြင်း ၊ ပြင်ဆင်ခြင်း</h5>
                                <hr>
                                <p class="text-center">ရကုန်ပစ္စည်းများအား ကြည့်ရှု့ရန်အတွက် <span class="text-primary">View All Product</span> စာ(ခလုတ်)ကိုနှိပ်ပါ</p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပြင်ဆင်လိုပါက
                                    <span class="bg-success text-white">Edit</span> ခလုတ်ကိုနှိပ်လိုက်ပါ ကုန်ပစ္စည်းအသစ်တစ်ခု ဖန်တီးသည့်ပုံအတိုင်း တွေ့ရမည်ဖြစ်ပြီး
                                    မိမိစိတ်ကြိုက်ပြင်ဆင်နိုင်မည်ဖြစ်သည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဖျက်လိုပါက
                                    <span class="text-danger">
                                        <i class="fa fa-trash"></i>
                                    </span> ခလုတ်ကိုနှိပ်လိုက်ပါ ၎င်းကုန်ပစ္စည်းကို အပြီးတိုင်ဖျက်လိုက်မည်ဖြစ်သည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန်ပစ္စည်းတစ်ခုကို ရောင်းအားအကောင်းဆုံးဟု Recommon ပေးဖော်ပြလိုပါက
                                    Best Selling ခေါင်းစဉ်အောက်တွင်ရှိသော
                                    <span class="text-warning">Add</span> ခလုတ်ကိုနှိပ်လိုက်ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန်ပစ္စည်းတစ်ခုကို ရောင်းအားအကောင်းဆုံး စာရင်းမှ ပြန်ဖြုတ်လိုပါက
                                    Best Selling ခေါင်းစဉ်အောက်တွင်ရှိသော
                                    <span class="text-danger">Remove</span> ခလုတ်ကိုနှိပ်လိုက်ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန်ပစ္စည်းတစ်ခုကို ပေါ်ပျူလာအဖြစ်ဆုံး လူကြည့်အများဆုံးဟု Recommon ပေးဖော်ပြလိုပါက
                                    Popular ခေါင်းစဉ်အောက်တွင်ရှိသော
                                    <span class="text-warning">Add</span> ခလုတ်ကိုနှိပ်လိုက်ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန်ပစ္စည်းတစ်ခုကို ပေါ်ပျူလာအဖြစ်ဆုံး လူကြည့်အများဆုံးစာရင်းမှ ပြန်ဖြုတ်လိုပါက
                                    Popular ခေါင်းစဉ်အောက်တွင်ရှိသော
                                    <span class="text-danger">Remove</span> ခလုတ်ကိုနှိပ်လိုက်ပါ။
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseFour">
                                <i class="fa fa-table fa-2x mr-3 text-warning"></i>
                                Create New Coustomer Review( ဈေးဝယ်သူများမှ Feedback ပြန်ပေးသော Review ထည့်သွင်းခြင်း)
                            </button>
                        </div>
                        <div class="collapse" id="collapseFour" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တွင် <span class="text-primary">Review</span> စာ(ခလုတ်)အား နှိပ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Review ထည့်သွင်းခြင်းအတွက် &nbsp;<span class="text-danger">Add New Review</span> ဟူသောပုံစံအောက်တွင်ပြုလုပ်ရပါမည်
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပထမအကွက်တွင် Review ပေးသော ဈေးဝယ်သူအမည်ထည့်သွင်းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဒုတိယအကွက်တွင် Review ပေးသော ဈေးဝယ်သူ အလုပ်အကိုင်ကို ထည့်သွင်းပါ(ထည့်သွင်းရန်မရှိပါက မထည့်ဘဲကျော်ထားခဲ့လိုရပါသည်)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    တတိယအကွက်တွင် Review ပေးသော ဈေးဝယ်သူ အလုပ်လုပ်နေသော ကုမ္ပဏီအမည်အား ထည့်သွင်းပါ(ထည့်သွင်းရန်မရှိပါက မထည့်ဘဲကျော်ထားခဲ့လိုရပါသည်)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    စတုတ္ထနေရာတွင် Review ပေးသော ဈေးဝယ်သူ ဓါတ်ပုံကို ထည့်သွင်းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Review Message နေရာတွင် ဈေးဝယ်သူ ပြောသောအကြောင်းအရာ ၊ စားသား ၊ Message  ထည့်သွင်းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    လိုအပ်သောအချက်များထည့်သွင်းပြီးပါက &nbsp;<span class="text-primary">Create</span> ခလုတ်ကို နှိပ်လိုက်ပါ
                                </p>
                                <hr>
                                <h5 class="text-center">ထည့်သွင်းထားသော Review များအား ကြည့်ရှု့ခြင်း ၊ ပြင်ဆင်ခြင်း</h5>
                                <hr>
                                <p class="text-center">Review များအား ကြည့်ရှု့ရန်အတွက် <span class="text-primary">Reviews::</span>ခေါင်းစဉ်အောက်တွင် အားလုံးဖော်ပြထားပါသည်</p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပြင်ဆင်လိုပါက
                                    <span class="bg-success text-white">Edit</span> ခလုတ်ကိုနှိပ်လိုက်ပါ Review အသစ်တစ်ခု ဖန်တီးသည့်ပုံအတိုင်း တွေ့ရမည်ဖြစ်ပြီး
                                    မိမိစိတ်ကြိုက်ပြင်ဆင်နိုင်မည်ဖြစ်သည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဖျက်လိုပါက
                                    <span class="text-danger">
                                        <i class="fa fa-trash"></i>
                                    </span> ခလုတ်ကိုနှိပ်လိုက်ပါ ၎င်း Review ကို အပြီးတိုင်ဖျက်လိုက်မည်ဖြစ်သည်။
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseFive">
                                <i class="fab fa-blogger fa-2x mr-3 text-warning"></i>
                                Create New Blog Post
                            </button>
                        </div>
                        <div class="collapse" id="collapseFive" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တွင် <span class="text-primary">Blog</span> စာ(ခလုတ်)အား နှိပ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Blog ထည့်သွင်းခြင်းအတွက် &nbsp;<span class="text-danger">Add New Blog</span> ဟူသောပုံစံအောက်တွင်ပြုလုပ်ရပါမည်
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပထမအကွက်တွင် Post အတွက် ခေါင်းစဉ်ထည့်သွင်းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဒုတိယအကွက်တွင် Post အတွက် အကြောင်းအရာထည့်သွင်းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    တတိယနေရာတွင် Post အတွက် ဓါတ်ပုံထည့်သွင်းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    လိုအပ်သောအချက်လက်များထည့်သွင်းပြီးပါက &nbsp;<span class="text-danger">Create</span> ဟူသော ခလုတ်ကိုနှိပ်ပါ
                                </p>
                                <hr>
                                <h5 class="text-center">ထည့်သွင်းထားသော Blog Post များအား ကြည့်ရှု့ခြင်း ၊ ပြင်ဆင်ခြင်း</h5>
                                <hr>
                                <p class="text-center">Blog Post များအား ကြည့်ရှု့ရန်အတွက် <span class="text-primary">Blog Posts::</span>ခေါင်းစဉ်အောက်တွင် အားလုံးဖော်ပြထားပါသည်</p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပြင်ဆင်လိုပါက
                                    <span class="bg-success text-white">Edit</span> ခလုတ်ကိုနှိပ်လိုက်ပါ Blog Post အသစ်တစ်ခု ဖန်တီးသည့်ပုံအတိုင်း တွေ့ရမည်ဖြစ်ပြီး
                                    မိမိစိတ်ကြိုက်ပြင်ဆင်နိုင်မည်ဖြစ်သည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဖျက်လိုပါက
                                    <span class="text-danger">
                                        <i class="fa fa-trash"></i>
                                    </span> ခလုတ်ကိုနှိပ်လိုက်ပါ ၎င်း Blog Post ကို အပြီးတိုင်ဖျက်လိုက်မည်ဖြစ်သည်။
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseSix">
                                <i class="fa fa-users fa-2x mr-3 text-warning"></i>
                                Manage Register Users(အကောင့်ပြုလုပ်ထားသော အသုံးပြုသူများအားစီမံခြင်း)
                            </button>
                        </div>
                        <div class="collapse" id="collapseSix" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တွင် <span class="text-primary">Users</span> စာ(ခလုတ်)အား နှိပ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိဝန်ထမ်း(သို့)အသုံးပြုသူတစ်ယောက်ကို Admin အဖြစ်ခန့်အပ်လိုပါက &nbsp;<span class="text-primary">Admin</span> ခေါင်းစဉ်အောက်မှ
                                    <span class="bg-danger text-white">Make Admin</span>နှိပ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိဝန်ထမ်း(သို့)အသုံးပြုသူတစ်ယောက်ကို Admin  အဖြစ်မှ ပြန်ဖြုတ်လိုပါက &nbsp;<span class="text-primary">Admin</span> ခေါင်းစဉ်အောက်မှ
                                    <span class="bg-success text-white">Admin</span>နှိပ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိဝန်ထမ်း(သို့)အသုံးပြုသူတစ်ယောက်ကို  စာရင်းမှဖျက်လိုပါက &nbsp;<span class="text-primary">Delete</span> ခေါင်းစဉ်အောက်မှ
                                    <span class="text-danger">
                                        <i class="fa fa-trash fa-2x"></i>
                                    </span>နှိပ်ပါ
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseSeven">
                                <i class="fa fa-sync fa-2x mr-3 text-warning"></i>
                                Order များကိုစီမံခြင်း
                            </button>
                        </div>
                        <div class="collapse" id="collapseSeven" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တွင် <span class="text-primary">Dashbord</span> စာ(ခလုတ်)အား နှိပ်ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    အော်ဒါအသစ်များကို New Orders ဟူသော ဇယားတွင်ကြည့်ရှု့နိုင်ပါသည်။
                                    <br>
                                    Delivery ပေးပို့ပြီးသော အော်ဒါများကို Complete Orders ဟူသော ဇယားတွင်ကြည့်ရှု့နိုင်ပါသည်။

                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    အော်ဒါတစ်ခုအား Delivery ပေးပို့ပြီးပါက New Orders ဟူသော ဇယားရှိ  &nbsp;<span class="text-danger">Complete</span>  ခလုတ်ကိုနှိပါက
                                    အော်ဒါပြီးမြောက်သွားပြီဖြစ်ပြီး ၎င်းအော်ဒါစာရင်းသည် Complete Orders ဟူသော ဇယားတွင်ရောက်ရှိလာမည်ဖြစ်သည်။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Complete Order အား ဖျက်လိုပါက Complete Orders ဇယားရှိ &nbsp;<span class="text-danger">Action</span>  ခေါင်းစဉ်အောက်မှ
                                    <i class="fa fa-trash fa-2x text-danger"></i> ခလုတ်ကို နှိပ်လိုက်ပါက ၎င်းအော်ဒါအား အပြီးတိုက် ဖျက်လိုက်မည်ဖြစ်သည်
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary h6">အော်ဒါအတွက် Payment Proof များကို Latest Payment Proofs ဟူသော ဇယားတွင်ကြည့်ရှု့နိုင်ပါသည်။</span>
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    အော်ဒါတစ်ခုအား Delivery ပေးပို့ပြီးပါက Latest Payment Proofs ဟူသော ဇယားရှိ  &nbsp;<span class="text-white bg-success">Make Complete</span>  ခလုတ်ကိုနှိပါက
                                    အော်ဒါပြီးမြောက်သွားပြီဖြစ်ပြီး ၎င်း Payment Proofs သည် Complete ဖြစ်သွားမည်ဖြစ်သည်။
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row py-2">
            <div class="col">
                <h4 class="text-info mb-4 text-center">Documentation For User</h4>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#usercollapseOne">
                                <i class="fa fa-folder fa-2x mr-3 text-warning"></i>
                                View Product(ဝယ်ယူရရှိနိုင်သော ကုန်ပစ္စည်းများအားကြည့်ရှု့ခြင်း)
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
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#usercollapseTwo">
                                <i class="fa fa-cart-arrow-down fa-2x mr-3 text-warning"></i>
                                Order Product( ကုန်ပစ္စည်းမှာယူခြင်း)
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
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#usercollapseThree">
                                <i class="fas fa-search-plus fa-2x mr-3 text-warning"></i>
                                Track Order & Find Products( အော်ဒါများအား ပြန်လည်ကြည့်ရှု့ခြင်း နှင့် ကုန်ပစ္စည်းများ ရှာဖွေကြည့်ရှု့ခြင်း)
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
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#usercollapseFour">
                                <i class="fas fa-address-card fa-2x mr-3 text-warning"></i>
                                Contact Us & Payment Proof( ဆက်သွယ်ခြင်း နှင့် ငွေပေးချေမှု့သက်သေများပေးပို့ခြင်း )
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
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#usercollapseFive">
                                <i class="fas fa-user fa-2x mr-3 text-warning"></i>
                                Make Account & View Account( အကောင့်သစ်ပြုလုပ်ခြင်း နှင့် ပြင်ဆင်ခြင်း )
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

    <!-- Activities and Quick Post Start -->

@endsection