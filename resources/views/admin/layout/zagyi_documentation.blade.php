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
                                Create New Category( ပစၥည္းအမ်ိဳးအစား ဂ႐ုခြဲျခင္း )
                            </button>
                        </div>
                        <div class="collapse show" id="collapseOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တြင္ <span class="text-primary">Category</span> စာ(ခလုတ္)အား ႏွိပ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary">Add New Category</span> ဟူေသာေခါင္းစဥ္ေအာက္တြင္ အသစ္ထည့္သြင္းနိုင္ေသာ
                                    ပုံစံေတြ႕ျမင္ရမည္ျဖစ္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပထမဆုံးအကြက္ &nbsp;<span class="text-primary">Category Menu Name</span> ဟူေသာေနရာတြင္ Menu Bar (အေပၚဘားတန္းရွိ )Category ေခါင္းစဥ္ေအာက္တြင္
                                    ေပၚလာေစခ်င္ေသာ အမည္ထည့္ပါ(အမ်ိဳးအစား ဂ႐ုခြဲပါ)။ ဉပမာ-(1) Men Fashions(အမ်ိဳးသားဖက္ရွင္ႏွင့္ဆက္စပ္ေသာ ပစၥည္းမ်ား စုစည္းေရာင္းခ်ရန္)။ (2) Foods (အစားအေသာက္ႏွင့္သက္ဆိုင္ေသာ ပစၥည္းမ်ား စုစည္းေရာင္းခ်ရန္)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဒုတိယအကြက္ &nbsp;<span class="text-primary">Category Title</span> ဟူေသာေနရာတြင္ Menu Bar (အေပၚဘားတန္းရွိ )Category ေခါင္းစဥ္ေအာက္တြင္
                                    ရွိေသာ သက္ဆိုင္ရာ Category Name(အမ်ိဳးအစားဂ႐ုစုစည္းခြဲျခားထားေသာအမည္) ႏွင့္သက္ဆိုင္ေသာ ေခါင္းစဥ္ေပးရမည္ျဖစ္သည္။ စာလုံးေရ(၃၀)ထက္မေက်ာ္သင့္ပါ။
                                    ဉပမာ-(1) Men Fashions ဟူေသာ အမည္အတြက္ Men Fashions 2019 Latest ဟု ေခါင္းစဥ္ေပးျခင္း။ (2) Foods ဟူေသာအမည္အတြက္ Delicious Foods(အရသာရွိေသာစားေသာက္ကုန္ပစၥည္းမ်ား) ဟု ေခါင္းစဥ္ေပးျခင္း။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    တတိယအကြက္ &nbsp;<span class="text-primary">Category SubTitle</span> ဟူေသာေနရာတြင္ Menu Bar (အေပၚဘားတန္းရွိ )Category ေခါင္းစဥ္ေအာက္တြင္
                                    ရွိေသာ သက္ဆိုင္ရာ Category Name(အမ်ိဳးအစားဂ႐ုစုစည္းခြဲျခားထားေသာအမည္) ႏွင့္သက္ဆိုင္ေသာ ေခါင္းစဥ္ေပးရမည္ျဖစ္သည္။ စာလုံးေရ(၁၀၀)ထက္မေက်ာ္သင့္ပါ။
                                    ဉပမာ-(1) Men Fashions ဟူေသာ အမည္အတြက္ Best Quality and Low Price For Men Fashions(အေကာင္းဆုံးအရည္အေသြးႏွင့္ ေဈးသက္သာေသာ အမ်ိဳးသား ဖက္ရွင္မ်ား) ဟု ေခါင္းစဥ္ေပးျခင္း။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Category Title ႏွင့္ Category Subtitle သည္ အတူတူထည့္သြင္းနိုင္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    စတုတၳေနရာ &nbsp;<span class="text-primary">Category Slider Image Use(1900 x 900 )Size</span> ဟူေသာေနရာတြင္ Menu Bar (အေပၚဘားတန္းရွိ )Category ေခါင္းစဥ္ေအာက္တြင္
                                    ရွိေသာ သက္ဆိုင္ရာ Category Name(အမ်ိဳးအစားဂ႐ုစုစည္းခြဲျခားထားေသာအမည္) ႏွင့္သက္ဆိုင္ေသာ ဓါတ္ပုံထည့္သြင္းရမည္ျဖစ္သည္။ ဉပမာ-(1) Men Fashion(အမ်ိဳးအစားဂ႐ုစုစည္းခြဲျခားထားေသာအမည္) အတြက္ အဝတ္အစားႏွင့္သက္ဆိုင္ေသာ ဓါတ္ပုံမ်ားထည့္သြင္းျခင္း။
                                    ဉပမာ-(2)Food(အမ်ိဳးအစားဂ႐ုစုစည္းခြဲျခားထားေသာအမည္) အတြက္ အစားအေသာက္ကုန္ပစၥည္းမ်ားႏွင့္သက္ဆိုင္ေသာဓါတ္ပုံမ်ားထည့္သြင္းျခင္း။
                                    ဓါတ္ပုံအရြယ္အစားသည္ (အလ်ား 1900 x အနံ 900  )ရွိေသာဓါတ္ပုံထည့္သြင္းသင့္ပါသည္။ အျခားဓါတ္ပုံထည့္သြင္းမည္ဆိုပါက အလ်ားရွည္ၿပီး အနံ တိုရန္လိုအပါသည္။
                                    ၎ထည့္သြင္းလိုက္ေသာဓါတ္ပုံသည္ ေဈးဝယ္သူမ်ား မိမိတို႔ Website ကို ဝင္ေရာက္ၾကည့္ရႈ႔ခ်ိန္တြင္ ထိပ္ဆုံးမွ ေပၚေနမည္ျဖစ္ၿပီး Slide ေျပးေနမည္ျဖစ္သည္။
                                    ဓါတ္ပုံအရြယ္အစားသည္ အလ်ား x အနံ ေသးငယ္လြန္းပါက မိမိတို႔ Website ၾကည့္ေကာင္းနိုင္မည္မဟုတ္ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပဥၥမေနရာ &nbsp;<span class="text-primary">Category Name Image Use(1200 x 800 )Size</span> ဟူေသာေနရာတြင္ ေဈးဝယ္သူမွ
                                    Category Name(အမ်ိဳးအစားဂ႐ုစုစည္းခြဲျခားထားေသာအမည္) ႏွင့္သက္ဆိုင္ေသာ ကုန္ပစၥည္းမ်ား ေရြးခ်ယ္ၾကည့္ရႈ႔ရန္ ႏွိပ္ေသာအခါတြင္ ျမင္ေနရမည့္ ဓါတ္ပုံထည့္သြင္းရမည္ျဖစ္သည္။ ဉပမာ-(1) Men Fashion(အမ်ိဳးအစားဂ႐ုစုစည္းခြဲျခားထားေသာအမည္) အတြက္ အဝတ္အစားႏွင့္သက္ဆိုင္ေသာ ဓါတ္ပုံမ်ားထည့္သြင္းျခင္း။
                                    ဉပမာ-(2)Food(အမ်ိဳးအစားဂ႐ုစုစည္းခြဲျခားထားေသာအမည္) အတြက္ အစားအေသာက္ကုန္ပစၥည္းမ်ားႏွင့္သက္ဆိုင္ေသာဓါတ္ပုံမ်ားထည့္သြင္းျခင္း။
                                    ဓါတ္ပုံအရြယ္အစားသည္ (အလ်ား 1200 x အနံ ၈00  )ရွိေသာဓါတ္ပုံထည့္သြင္းသင့္ပါသည္။
                                    ဓါတ္ပုံအရြယ္အစားသည္ အလ်ား x အနံ ေသးငယ္လြန္းပါက မိမိတို႔ Website ၾကည့္ေကာင္းနိုင္မည္မဟုတ္ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    လိုအပ္ေသာအခ်က္လက္မ်ား ေရြးခ်ယ္ထည့္သြင္းၿပီးပါက ေအာက္ဆုံးတြင္ရွိေသာ &nbsp;<span class="text-primary">Create </span> ဟူေသာ ခလုတ္ကိုႏွိပ္လိုက္ပါက
                                    Category အသစ္တစ္ခုဖန္းတီးျခင္းေအာင္ျမင္ပါသည္။
                                </p>
                                <hr>
                                <h5 class="text-center">Category အား ျပဳျပင္ျခင္း ၊ ဖ်က္ျခင္းမ်ား ျပဳလုပ္ရန္ </h5>
                                <hr>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Category အား ျပဳျပင္လိုပါက <span class="text-primary">Add New Category</span> ဟူေသာ Category အသစ္ထည့္သြင္းနိုင္သည့္
                                    ပုံစံေဘးတြင္ <span class="text-primary">Categories </span> ေခါင္းစဥ္ေအာက္တြင္ မိမိတို႔ထည့္သြင္းထားေသာ Category မ်ားအားလုံးကို
                                    ျမင္ေတြ႕ရမည္ျဖစ္သည္။ မိမိတို႔ ျပင္လိုေသာ Category အမည္နဲ႔ကပ္လ်က္တြင္ရွိေသာ ခဲတံပုံ အစိမ္းေရာင္ခလုတ္အား ႏွိပ္ရပါသည္။
                                    ထို႔ေနာက္တြင္ Category အသစ္ထည့္သြင္းနိုင္သည့္ပုံစံအတိုင္း  လိုအပ္ေသာအခ်က္လက္မ်ား ေရြးခ်ယ္ထည့္သြင္းၿပီးပါက
                                    ေအာက္ဆုံးတြင္ရွိေသာ &nbsp;<span class="text-primary">Update </span> ဟူေသာ ခလုတ္ကိုႏွိပ္လိုက္ပါက
                                    Category အမည္အား ျပင္ဆင္ျခင္းေအာင္ျမင္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Category အား ဖ်က္လိုပါက <span class="text-primary">Add New Category</span> ဟူေသာ Category အသစ္ထည့္သြင္းနိုင္သည့္
                                    ပုံစံေဘးတြင္ <span class="text-primary">Categories </span> ေခါင္းစဥ္ေအာက္တြင္ မိမိတို႔ထည့္သြင္းထားေသာ Category မ်ားအားလုံးကို
                                    ျမင္ေတြ႕ရမည္ျဖစ္သည္။ မိမိတို႔ ျပင္လိုေသာ Category အမည္နဲ႔ကပ္လ်က္တြင္ရွိေသာ &nbsp;<span class="text-danger"> <i class="fa fa-trash fa-2x"></i> </span>ခလုတ္အား ႏွိပ္ရပါသည္။
                                    <br>
                                    <span class="h5 text-danger">
                                        Category တစ္ခုအား ဖ်က္လိုက္ပါ ၎ Category အား ေရြးခ်ယ္ပီး ေရာင္းခ်ရန္ ျပဳလုပ္ထားေသာ Products မ်ား၊  Itemsမ်ား အား အလိုအေလ်ာက္ဖ်က္သြားမည္ျဖစ္သည္။
                                        ထို႔ေၾကာင့္ Category တစ္ခုအား ဖ်က္မည္ဆိုလၽွင္ ၎ Category တြင္ ကုန္ပစၥည္းမ်ား ေရာင္းခ်ရန္ ျပဳလုပ္ထားျခင္းရွိ ၊ မရွိ ေသခ်ာ ၾကည့္ရႈ႔ၿပီးမွ Category အား ဖ်က္သင့္ပါသည္။
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseTwo">
                                <i class="fas fa-clipboard-check fa-2x mr-3 text-warning"></i>
                                Selections Options ( ေရာင္းခ်မည့္ကုန္ပစၥည္းမ်ားတြင္ ေရြးခ်ယ္စရာမ်ားထည့္သြင္းျခင္း )
                            </button>
                        </div>
                        <div class="collapse" id="collapseTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန္ပစၥည္းတစ္ခု ေရာင္းခ်ရာတြင္ ေဈးဝယ္သူမ်ားအား Size,Colors စသျဖင့္ ေရြးခ်ယ္နိုင္ေစရန္ ႀကိဳတင္သတ္မွတ္ထားနိုင္ပါသည္။ ထိုသို႔မသတ္မွတ္မီ
                                    ေရြးစရာ အမည္ ႏွင့္ တန္ဖိုးအား ႀကိဳတင္ထည့္သြင္းထားရန္လိုအပ္သည္။
                                    ဉပမာ-(1) ေရြးခ်ယ္စရာအမည္ Size ႏွင့္ ၎အမည္ရဲ့တန္ဖိုးမ်ားကို Small,Medium,Large,Exttra Large(S,M,L,XL)ဟု ႀကိဳတင္ထည့္သြင္းထားမွသာ
                                    ေရာင္းခ်ရန္ကုပစၥည္းတစ္ခု အသစ္ထည့္သြင္းခ်ိန္တြင္ ထိုကုန္ပစၥည္းအတြက္ ေရြးခ်ယ္နိုင္ေသာအရာမ်ားကို ေဖာ္ျပေပးနိုင္မည္ျဖစ္သည္။


                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တြင္ <span class="text-primary">Selection Options</span> စာ(ခလုတ္)အား ႏွိပ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေရြးခ်ယ္စရာအမည္ထည့္သြင္းရန္အတြက္ &nbsp;<span class="text-danger">New Name</span> ဟူေသာခလုတ္ကိုႏွိပ္ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန္ပစၥည္းတစ္ခုအတြက္ ေရြးခ်ယ္စရာအမည္ထည့္သြင္းၿပီး &nbsp;<span class="text-danger">Create</span> ဟူေသာခလုတ္ကိုႏွိပ္ပါ။ ဒါဆိုရင္
                                    အမည္တစ္ခုထည့္သြင္းၿပီးပါၿပီ။ ဉပမာ-Size,Colors
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေရြးခ်ယ္စရာအမည္အတြက္ တန္ဖိုး(Value)ထည့္သြင္းရန္အတြက္ &nbsp;<span class="text-danger">New Value</span> ဟူေသာခလုတ္ကိုႏွိပ္ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေရြးခ်ယ္စရာအမည္အတြက္ တန္ဖိုးတစ္ခု(Value)ထည့္သြင္းၿပီး &nbsp;<span class="text-danger">Create</span> ဟူေသာခလုတ္ကိုႏွိပ္ပါ။ ဒါဆိုရင္
                                    အမည္တစ္ခုထည့္သြင္းၿပီးပါၿပီ။ ဉပမာ-Size-အတြက္ Small,Medium,Large ႏွင့္ Colors-အတြက္ Yellow,White,Pink
                                </p>
                                <hr>
                                <h5>ေရြးခ်ယ္စရာအမည္အား ျပင္ဆင္ျခင္း ဖ်က္ျခင္း</h5>
                                <hr>
                                <p class="text-center">ေရြးခ်ယ္စရာအမည္မ်ားအားလုံးကို <span class="text-primary">User Select Option Name</span> ေခါင္းစဥ္ေအာက္တြင္ေဖာ္ျပထားသည္</p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေရြးခ်ယ္စရာအမည္အား ျပင္ဆင္လိုပါက ခဲတံပုံနဲ႔&nbsp;<span class="text-primary">
                                        <i class="fa fa-edit"></i>
                                    </span> ခလုတ္ကိုႏွိပ္ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေရြးခ်ယ္စရာအမည္အား ဖ်က္လိုပါက &nbsp;<span class="text-danger">
                                        <i class="fa fa-trash"></i>
                                    </span> ခလုတ္ကိုႏွိပ္ပါ။
                                </p>
                                <p class="text-center">ေရြးခ်ယ္စရာအမည္အတြက္ တန္ဖိုးမ်ားကို <span class="text-primary">User Select Option Value</span> ေခါင္းစဥ္ေအာက္တြင္ေဖာ္ျပထားသည္</p>
                                <p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေရြးခ်ယ္စရာအမည္ တန္ဖိုးအား ျပင္ဆင္လိုပါက ခဲတံပုံနဲ႔&nbsp;<span class="text-primary">
                                        <i class="fa fa-edit"></i>
                                    </span> ခလုတ္ကိုႏွိပ္ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေရြးခ်ယ္စရာအမည္ တန္ဖိုးအား ဖ်က္လိုပါက &nbsp;<span class="text-danger">
                                        <i class="fa fa-trash"></i>
                                    </span> ခလုတ္ကိုႏွိပ္ပါ။
                                </p>
                                <hr>
                                <h5>ေရြးခ်ယ္စရာအမည္ႏွင့္ တန္ဖိုးမ်ားအား တြဲဆက္ေပးျခင္း</h5>
                                <hr>
                                <p class="text-center">ေရြးခ်ယ္စရာအမည္မ်ားအားလုံးကို <span class="text-primary">User Select Option Name</span> ေခါင္းစဥ္ေအာက္တြင္ေဖာ္ျပထားသည္</p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေရြးခ်ယ္စရာအမည္(ဉပမာ-Size)ေဘးတြင္ ရွိေသာ &nbsp;<span class="text-danger">Add Value</span> ဟူေသာခလုတ္ကိုႏွိပ္ပါ။
                                    ေဖာ္ျပထားေသာ တန္ဖိုမ်ားအားလုံးထဲမွ မိမိႀကိဳက္ႏွစ္သက္ရာတန္ဖိုးမ်ား ေရြးခ်ယ္သတ္မွတ္နိုင္ပါသည္။ (ဉပမာ-Size အတြက္ဆို Small,Medium,Large)တို႔ကိုေရြးျခင္း။
                                    ေရြးျခယ္ၿပီးပါက &nbsp;<span class="text-danger">Add Value</span> ဟူေသာခလုတ္ကိုႏွိပ္ပါ။
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseThree">
                                <i class="fa fa-shopping-cart fa-2x mr-3 text-warning"></i>
                                Create New Product( ေရာင္းခ်ရန္အတြက္ ပစၥည္းအမ်ိဳးအသစ္တစ္ခုျပဳလုပ္ျခင္း )
                            </button>
                        </div>
                        <div class="collapse" id="collapseThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တြင္ <span class="text-primary">Products</span> စာ(ခလုတ္)အား ႏွိပ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေရာင္းခ်ရန္ကုန္ပစၥည္းအသစ္ျပဳလုပ္ရန္အတြက္ &nbsp;<span class="text-danger">Add New Product</span> ဟူေသာခလုတ္ကိုႏွိပ္ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပထမဆုံးေနရာတြင္ ေရာင္းခ်မည့္ ကုန္ပစၥည္းအတြက္ Category အမ်ိဳးအစားေရြးခ်ယ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဒုတိယေနရာတြင္ ေရာင္းခ်မည့္ ကုန္ပစၥည္းအတြက္ အမည္ေပးပါ(အတိုေကာက္)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    တတိယေနရာတြင္ ေရာင္းခ်မည့္ ကုန္ပစၥည္းအတြက္ ေခါင္းစဥ္ထည့္ပါ။ (ေခါင္းစဥ္သည္ ကုန္ပစၥည္းအတြက္ အက်ဥ္းခ်ဳံးေဖာ္ျပခ်က္ျဖစ္ေသာေၾကာင့္
                                    မိမိႏွစ္သက္သလို အတိုခ်ဳံ႕ေဖာ္ျပပါ)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေဈးႏႈန္းေနရာတြင္ ေရာင္းခ်မည့္ ကုန္ပစၥည္းအတြက္ ေဈးသတ္မွတ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပဥၥမေနရာ <span class="text-primary">Product Image Use ( 1200 x 1420 )Size</span>ေနရာတြင္
                                    ေရာင္းခ်ခ်င္ေသာပစၥည္းအတြက္ ဓါတ္ပုံထည့္ေပးရမည္။ အနည္းဓါတ္ပုံတစ္ပုံမွ အမ်ားဆုံး ၆ ပုံအထိထည့္သြင္းနိုင္ပါသည္။(ဓါတ္ပုံ ၆ပုံထက္ ပို၍ထည့္သြင္းနိုင္ေသာ္လည္း
                                    မိမိ Website ၾကည့္ေကာင္းေနရန္လိုအပ္ပါသည္။) မျဖစ္မေန ဓါတ္ပုံ ၆ပုံထက္ ပို၍လည္းထည့္သြင္းနိုင္ပါသည္။
                                    ထည့္သြင္းေသာ ဓါတ္ပုံသည္ အလ်ား ၁၂၀၀ x အနံ(အျမင့္) ၁၄၀၀ ရွိေသာ ဓါတ္ပုံထည့္သြင္းသင့္ပါသည္။အျခားဓါတ္ပုံထည့္သြင္းမည္ဆိုပါက အလ်ားရွည္လြန္းပီး အနံ တိုေနရန္လိုအပ္ပါသည္။

                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary">Description of Product</span>ေနရာတြင္
                                    ကုန္ပစၥည္းအေၾကာင္းအေသးစိတ္ေဖာ္ျပနိုင္ပါသည္။
                                    စာပိုဒ္ ၂/၃ ပိုဒ္ မွအစ မ်ားစြာ ထည့္သြင္းေရးသားေဖာ္ျပနိုင္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary">Select Options</span>ေနရာတြင္
                                    ကုန္ပစၥည္းဝယ္ယူရာတြင္ ေရြးခ်ယ္နိုင္ေသာ အရာမ်ားရွိပါက ေဈးဝယ္သူအား ေရြးခ်ယ္ဝယ္ယူနိုင္ေစရန္
                                    သတ္မွတ္ေပးပါ။ ဉပမာ။ Size - Small,Meduim,Large စသျဖင့္
                                    <br>
                                    အကယ္၍ ကုန္ပစၥည္းသည္ ေရြးစရာမ်ား(size,color)မရွိဟု ဆိုပါက ဘာမွာ ထည့္သြင္းေရြးခ်ယ္ျခင္းမျပဳလုပ္ဘဲ ေက်ာ္သြားပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary">Select Order Type</span>ေနရာတြင္
                                    ကုန္ပစၥည္းသည္ မိမိထံတြက္ Instock ထားရွိပီး ေရာင္းခ်ျခင္းဆိုပါက Instock ကိုေရြးေပးပါ။
                                    ကုန္ပစၥည္းသည္ မိမိထံတြက္ Instock ထားရွိပီး ေရာင္းခ်ျခင္းဟုတ္ပါက Preorder ကိုေရြးေပးပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary">Select Product Price Type</span>ေနရာတြင္
                                    ကုန္ပစၥည္းသည္ေဈးႏႈန္းသည္ လက္လီေရာင္းခ်ျခင္းဆိုပါက Retail ကို ေရြးပါ။
                                    ကုန္ပစၥည္းသည္ေဈးႏႈန္းသည္ လက္လကား‌ေရာင္းခ်ျခင္းဆိုပါက Whole Sale ကို ေရြးပါ။(WS)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    လိုအပ္ေသာအခ်က္မ်ား ထည့္သြင္းၿပီးပါက
                                    <span class="text-primary">Create</span> ခလုတ္ကိုႏွိပ္လိုက္ပါက ေရာင္းခ်ရန္ ကုန္ပစၥည္းအသစ္တစ္ခု ဖန္တီၿပီးသြားၿပီျဖစ္သည္။
                                </p>
                                <hr>
                                <h5 class="text-center">ေရာင္းခ်ရန္ထည့္သြင္းထားေသာ ကုန္ပစၥည္းမ်ားအား ၾကည့္ရႈ႔ျခင္း ၊ ျပင္ဆင္ျခင္း</h5>
                                <hr>
                                <p class="text-center">ရကုန္ပစၥည္းမ်ားအား ၾကည့္ရႈ႔ရန္အတြက္ <span class="text-primary">View All Product</span> စာ(ခလုတ္)ကိုႏွိပ္ပါ</p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ျပင္ဆင္လိုပါက
                                    <span class="bg-success text-white">Edit</span> ခလုတ္ကိုႏွိပ္လိုက္ပါ ကုန္ပစၥည္းအသစ္တစ္ခု ဖန္တီးသည့္ပုံအတိုင္း ေတြ႕ရမည္ျဖစ္ၿပီး
                                    မိမိစိတ္ႀကိဳက္ျပင္ဆင္နိုင္မည္ျဖစ္သည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဖ်က္လိုပါက
                                    <span class="text-danger">
                                        <i class="fa fa-trash"></i>
                                    </span> ခလုတ္ကိုႏွိပ္လိုက္ပါ ၎ကုန္ပစၥည္းကို အၿပီးတိုင္ဖ်က္လိုက္မည္ျဖစ္သည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန္ပစၥည္းတစ္ခုကို ေရာင္းအားအေကာင္းဆုံးဟု Recommon ေပးေဖာ္ျပလိုပါက
                                    Best Selling ေခါင္းစဥ္ေအာက္တြင္ရွိေသာ
                                    <span class="text-warning">Add</span> ခလုတ္ကိုႏွိပ္လိုက္ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန္ပစၥည္းတစ္ခုကို ေရာင္းအားအေကာင္းဆုံး စာရင္းမွ ျပန္ျဖဳတ္လိုပါက
                                    Best Selling ေခါင္းစဥ္ေအာက္တြင္ရွိေသာ
                                    <span class="text-danger">Remove</span> ခလုတ္ကိုႏွိပ္လိုက္ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန္ပစၥည္းတစ္ခုကို ေပၚပ်ဴလာအျဖစ္ဆုံး လူၾကည့္အမ်ားဆုံးဟု Recommon ေပးေဖာ္ျပလိုပါက
                                    Popular ေခါင္းစဥ္ေအာက္တြင္ရွိေသာ
                                    <span class="text-warning">Add</span> ခလုတ္ကိုႏွိပ္လိုက္ပါ။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ကုန္ပစၥည္းတစ္ခုကို ေပၚပ်ဴလာအျဖစ္ဆုံး လူၾကည့္အမ်ားဆုံးစာရင္းမွ ျပန္ျဖဳတ္လိုပါက
                                    Popular ေခါင္းစဥ္ေအာက္တြင္ရွိေသာ
                                    <span class="text-danger">Remove</span> ခလုတ္ကိုႏွိပ္လိုက္ပါ။
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseFour">
                                <i class="fa fa-table fa-2x mr-3 text-warning"></i>
                                Create New Coustomer Review( ေဈးဝယ္သူမ်ားမွ Feedback ျပန္ေပးေသာ Review ထည့္သြင္းျခင္း)
                            </button>
                        </div>
                        <div class="collapse" id="collapseFour" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တြင္ <span class="text-primary">Review</span> စာ(ခလုတ္)အား ႏွိပ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Review ထည့္သြင္းျခင္းအတြက္ &nbsp;<span class="text-danger">Add New Review</span> ဟူေသာပုံစံေအာက္တြင္ျပဳလုပ္ရပါမည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပထမအကြက္တြင္ Review ေပးေသာ ေဈးဝယ္သူအမည္ထည့္သြင္းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဒုတိယအကြက္တြင္ Review ေပးေသာ ေဈးဝယ္သူ အလုပ္အကိုင္ကို ထည့္သြင္းပါ(ထည့္သြင္းရန္မရွိပါက မထည့္ဘဲေက်ာ္ထားခဲ့လိုရပါသည္)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    တတိယအကြက္တြင္ Review ေပးေသာ ေဈးဝယ္သူ အလုပ္လုပ္ေနေသာ ကုမၸဏီအမည္အား ထည့္သြင္းပါ(ထည့္သြင္းရန္မရွိပါက မထည့္ဘဲေက်ာ္ထားခဲ့လိုရပါသည္)
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    စတုတၳေနရာတြင္ Review ေပးေသာ ေဈးဝယ္သူ ဓါတ္ပုံကို ထည့္သြင္းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Review Message ေနရာတြင္ ေဈးဝယ္သူ ေျပာေသာအေၾကာင္းအရာ ၊ စားသား ၊ Message  ထည့္သြင္းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    လိုအပ္ေသာအခ်က္မ်ားထည့္သြင္းၿပီးပါက &nbsp;<span class="text-primary">Create</span> ခလုတ္ကို ႏွိပ္လိုက္ပါ
                                </p>
                                <hr>
                                <h5 class="text-center">ထည့္သြင္းထားေသာ Review မ်ားအား ၾကည့္ရႈ႔ျခင္း ၊ ျပင္ဆင္ျခင္း</h5>
                                <hr>
                                <p class="text-center">Review မ်ားအား ၾကည့္ရႈ႔ရန္အတြက္ <span class="text-primary">Reviews::</span>ေခါင္းစဥ္ေအာက္တြင္ အားလုံးေဖာ္ျပထားပါသည္</p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ျပင္ဆင္လိုပါက
                                    <span class="bg-success text-white">Edit</span> ခလုတ္ကိုႏွိပ္လိုက္ပါ Review အသစ္တစ္ခု ဖန္တီးသည့္ပုံအတိုင္း ေတြ႕ရမည္ျဖစ္ၿပီး
                                    မိမိစိတ္ႀကိဳက္ျပင္ဆင္နိုင္မည္ျဖစ္သည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဖ်က္လိုပါက
                                    <span class="text-danger">
                                        <i class="fa fa-trash"></i>
                                    </span> ခလုတ္ကိုႏွိပ္လိုက္ပါ ၎ Review ကို အၿပီးတိုင္ဖ်က္လိုက္မည္ျဖစ္သည္။
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
                                    Admin Home Page တြင္ <span class="text-primary">Blog</span> စာ(ခလုတ္)အား ႏွိပ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Blog ထည့္သြင္းျခင္းအတြက္ &nbsp;<span class="text-danger">Add New Blog</span> ဟူေသာပုံစံေအာက္တြင္ျပဳလုပ္ရပါမည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ပထမအကြက္တြင္ Post အတြက္ ေခါင္းစဥ္ထည့္သြင္းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဒုတိယအကြက္တြင္ Post အတြက္ အေၾကာင္းအရာထည့္သြင္းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    တတိယေနရာတြင္ Post အတြက္ ဓါတ္ပုံထည့္သြင္းပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    လိုအပ္ေသာအခ်က္လက္မ်ားထည့္သြင္းၿပီးပါက &nbsp;<span class="text-danger">Create</span> ဟူေသာ ခလုတ္ကိုႏွိပ္ပါ
                                </p>
                                <hr>
                                <h5 class="text-center">ထည့္သြင္းထားေသာ Blog Post မ်ားအား ၾကည့္ရႈ႔ျခင္း ၊ ျပင္ဆင္ျခင္း</h5>
                                <hr>
                                <p class="text-center">Blog Post မ်ားအား ၾကည့္ရႈ႔ရန္အတြက္ <span class="text-primary">Blog Posts::</span>ေခါင္းစဥ္ေအာက္တြင္ အားလုံးေဖာ္ျပထားပါသည္</p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ျပင္ဆင္လိုပါက
                                    <span class="bg-success text-white">Edit</span> ခလုတ္ကိုႏွိပ္လိုက္ပါ Blog Post အသစ္တစ္ခု ဖန္တီးသည့္ပုံအတိုင္း ေတြ႕ရမည္ျဖစ္ၿပီး
                                    မိမိစိတ္ႀကိဳက္ျပင္ဆင္နိုင္မည္ျဖစ္သည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ဖ်က္လိုပါက
                                    <span class="text-danger">
                                        <i class="fa fa-trash"></i>
                                    </span> ခလုတ္ကိုႏွိပ္လိုက္ပါ ၎ Blog Post ကို အၿပီးတိုင္ဖ်က္လိုက္မည္ျဖစ္သည္။
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseSix">
                                <i class="fa fa-users fa-2x mr-3 text-warning"></i>
                                Manage Register Users(အေကာင့္ျပဳလုပ္ထားေသာ အသုံးျပဳသူမ်ားအားစီမံျခင္း)
                            </button>
                        </div>
                        <div class="collapse" id="collapseSix" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တြင္ <span class="text-primary">Users</span> စာ(ခလုတ္)အား ႏွိပ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိဝန္ထမ္း(သို႔)အသုံးျပဳသူတစ္ေယာက္ကို Admin အျဖစ္ခန႔္အပ္လိုပါက &nbsp;<span class="text-primary">Admin</span> ေခါင္းစဥ္ေအာက္မွ
                                    <span class="bg-danger text-white">Make Admin</span>ႏွိပ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိဝန္ထမ္း(သို႔)အသုံးျပဳသူတစ္ေယာက္ကို Admin  အျဖစ္မွ ျပန္ျဖဳတ္လိုပါက &nbsp;<span class="text-primary">Admin</span> ေခါင္းစဥ္ေအာက္မွ
                                    <span class="bg-success text-white">Admin</span>ႏွိပ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိဝန္ထမ္း(သို႔)အသုံးျပဳသူတစ္ေယာက္ကို  စာရင္းမွဖ်က္လိုပါက &nbsp;<span class="text-primary">Delete</span> ေခါင္းစဥ္ေအာက္မွ
                                    <span class="text-danger">
                                        <i class="fa fa-trash fa-2x"></i>
                                    </span>ႏွိပ္ပါ
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#collapseSeven">
                                <i class="fa fa-sync fa-2x mr-3 text-warning"></i>
                                Order မ်ားကိုစီမံျခင္း
                            </button>
                        </div>
                        <div class="collapse" id="collapseSeven" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Admin Home Page တြင္ <span class="text-primary">Dashbord</span> စာ(ခလုတ္)အား ႏွိပ္ပါ
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေအာ္ဒါအသစ္မ်ားကို New Orders ဟူေသာ ဇယားတြင္ၾကည့္ရႈ႔နိုင္ပါသည္။
                                    <br>
                                    Delivery ေပးပို႔ၿပီးေသာ ေအာ္ဒါမ်ားကို Complete Orders ဟူေသာ ဇယားတြင္ၾကည့္ရႈ႔နိုင္ပါသည္။

                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေအာ္ဒါတစ္ခုအား Delivery ေပးပို႔ၿပီးပါက New Orders ဟူေသာ ဇယားရွိ  &nbsp;<span class="text-danger">Complete</span>  ခလုတ္ကိုႏွိပါက
                                    ေအာ္ဒါၿပီးေျမာက္သြားၿပီျဖစ္ၿပီး ၎ေအာ္ဒါစာရင္းသည္ Complete Orders ဟူေသာ ဇယားတြင္ေရာက္ရွိလာမည္ျဖစ္သည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Complete Order အား ဖ်က္လိုပါက Complete Orders ဇယားရွိ &nbsp;<span class="text-danger">Action</span>  ေခါင္းစဥ္ေအာက္မွ
                                    <i class="fa fa-trash fa-2x text-danger"></i> ခလုတ္ကို ႏွိပ္လိုက္ပါက ၎ေအာ္ဒါအား အၿပီးတိုက္ ဖ်က္လိုက္မည္ျဖစ္သည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary h6">ေအာ္ဒါအတြက္ Payment Proof မ်ားကို Latest Payment Proofs ဟူေသာ ဇယားတြင္ၾကည့္ရႈ႔နိုင္ပါသည္။</span>
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    ေအာ္ဒါတစ္ခုအား Delivery ေပးပို႔ၿပီးပါက Latest Payment Proofs ဟူေသာ ဇယားရွိ  &nbsp;<span class="text-white bg-success">Make Complete</span>  ခလုတ္ကိုႏွိပါက
                                    ေအာ္ဒါၿပီးေျမာက္သြားၿပီျဖစ္ၿပီး ၎ Payment Proofs သည္ Complete ျဖစ္သြားမည္ျဖစ္သည္။
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
                                View Product(ဝယ္ယူရရွိနိုင္ေသာ ကုန္ပစၥည္းမ်ားအားၾကည့္ရႈ႔ျခင္း)
                            </button>
                        </div>
                        <div class="collapse show" id="usercollapseOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary h4">NEW ARRIVALS</span>&nbsp;ေခါင္းစဥ္ေအာက္တြင္ အသစ္ေရာက္ရွိလာေသာ ပစၥည္းမ်ားအား ၾကည့္ရႈ႔ဝယ္ယူနိုင္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary h4">BESTSELLING PRODUCTS</span>&nbsp;ေခါင္းစဥ္ေအာက္တြင္ အေရာင္းရဆုံးထိန္တန္းမွ ပစၥည္းမ်ားအား ၾကည့္ရႈ႔ဝယ္ယူနိုင္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    <span class="text-primary h4">POPULAR PRODUCTS</span>&nbsp;ေခါင္းစဥ္ေအာက္တြင္ လူၾကည့္မ်ားေသာ/ေပၚပ်ဴလာျဖစ္ေသာ ပစၥည္းမ်ားအား ၾကည့္ရႈ႔ဝယ္ယူနိုင္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Menu Bar(အေပၚဘားတန္း)ရွိ <span class="text-primary h4">Categories</span>&nbsp;ေခါင္းစဥ္ေအာက္တြင္ ရွိေသာ Category Name အမ်ိဳးအစားဂ႐ုတစ္ခုျခင္းအလိုက္
                                    ပစၥည္းမ်ားအား ၾကည့္ရႈ႔ဝယ္ယူနိုင္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Product(ကုန္ပစၥည္း)တစ္ခုကို အေသးစိတ္ၾကည့္နိုင္ရန္အတြက္ ၎အေပၚတြင္ရွိေသာ<span class="text-primary h4">Quick View</span>&nbsp;ခလုတ္ကိုႏွိပ္၍ ၾကည့္ရႈ႔နိုင္ပါသည္
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Product(ကုန္ပစၥည္း)တစ္ခုကို အေသးစိတ္ၾကည့္နိုင္ရန္ေနရာတြင္
                                    <br>
                                    -> Product အတြက္ ဓါတ္ပုံမ်ားအား ေရြးခ်ယ္ၾကည့္နိုင္ျခင္း
                                    <br>
                                    -> Product အတြက္ ေဈးႏႈန္း/အမည္/ကုတ္နံပါတ္ မ်ားၾကည့္ရႈ႔နိုင္ပါသည္
                                    <br>
                                    -> Product အတြက္ အေသးစိတ္ၾကည့္ရႈ႔ရာတြင္ လက္လီေဈး/လက္ကားေဈး ေဖာ္ျပထားျခင္း
                                    <br>
                                    -> Product အတြက္ အေသးစိတ္ၾကည့္ရႈ႔ရာတြင္ Instock/PreOrder ေဖာ္ျပထားျခင္း
                                    <br>
                                    -> Product ဓါတ္ပုံေအာက္တြင္ အေသးစိတ္ေဖာ္ျပခ်က္(Description)နဲ႔အတူ Product ေရြးခ်ယ္ဝယ္ယူနိုင္ေသာ (Additional information)မ်ားအား
                                    ၾကည့္ရႈ႔နိုင္ပါသည္။ ထို႔အျပင္ Review ေနရာတြင္ မိမိတို႔ရဲ့ Feedback မ်ားအား Comment အျဖစ္ခ်န္ထားခဲ့နိုင္ပါသည္။
                                    <br>
                                    -> ယခု Product နဲ႔ဆက္စပ္ေနေသာ ပစၥည္းမ်ားအား ေအာက္ဆုံးတြင္ အေသးစိတ္ၾကည့္ရႈ႔နိုင္ပါသည္
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#usercollapseTwo">
                                <i class="fa fa-cart-arrow-down fa-2x mr-3 text-warning"></i>
                                Order Product( ကုန္ပစၥည္းမွာယူျခင္း)
                            </button>
                        </div>
                        <div class="collapse" id="usercollapseTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    Product(ကုန္ပစၥည္း)တစ္ခုကို အေသးစိတ္ၾကည့္နိုင္ေသာေနရာမွ <span class="text-primary h5">Add To Cart</span>&nbsp;ခလုတ္ကိုႏွိပ္၍ ေဈးဝယ္ျခင္းထဲသို႔ထည့္နိုင္ပါသည္။ေဈးျခင္းထဲသို႔ထည့္ၿပီးပါက
                                    ထိပ္ဆုံးဘားတန္း(Menu Bar) ေပၚရွိ ေဈးဝယ္ျခင္းေတာင္းေဘးတြင္ မိမိထည့္ထားေသာ အေရအတြက္ကို ျပထားမည္ျဖစ္သည္။
                                    ထို႔ေနာက္ အျခားပစၥည္းမ်ားၾကည့္ရႈ႔ျခင္း ၊ ေဈးျခင္းထဲသို႔ထည့္ျခင္း ထပ္ကာထပ္ကာ လုပ္ေဆာင္နိုင္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    မိမိစိတ္ႀကိဳက္ပစၥည္းမ်ား ေဈးျခင္းထဲသို႔ထည့္ၿပီးပါက Order မွာယူရန္အတြက္ ထိပ္ဆုံးဘားတန္း(Menu Bar) ေပၚရွိ ေဈးဝယ္ျခင္းေတာင္းပုံ <i class="fa fa-shopping-cart text-primary"></i> အား ႏွိပ္လိုက္ပါက
                                    ေဈးျခင္းထဲသို႔ ထည့္သြင္းထားေသာ ကုန္ပစၥည္းမ်ားအားလုံး ေတြ႕ရမည္ျဖစ္ပါသည္။
                                </p>
                                <p>
                                    <i class="fa fa-arrow-circle-right text-danger"></i>
                                    အေရအတြက္ေလ်ာ့လိုပါက <span class="text-primary">QUANTITY</span> ေခါင္းစဥ္ေအာက္မွ အႏႈတ္(-)ကိုႏွိပ္ရမွာျဖစ္ၿပီး
                                    <br>
                                    အေရအတြက္တိုးလိုပါက <span class="text-primary">QUANTITY</span> ေခါင္းစဥ္ေအာက္မွ အေပါင္း(+)ကိုႏွိပ္ရမွာျဖစ္ပါသည္
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
                                    <span class="text-warning">Order Id ဟူေသာ ေအာ္ဒါနံပါတ္ေဖာ္ျပထားမည္ျဖစ္ၿပီး </span> ၎ေအာ္ဒါနံပါတ္ကို မွတ္သားထားရန္လိုအပ္ပါသည္
                                    <br>
                                    ၎ေအာ္ဒါနံပါတ္အား မွားထားမွသာ မွာယူထားေသာ ပစၥည္းမ်ားအား ၾကည့္ရႈ႔ျခင္း ၊ Delivery အေျခေနၾကည့္ျခင္းမ်ား ျပဳလုပ္နိုင္မည္ျဖစ္သည္။
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#usercollapseThree">
                                <i class="fas fa-search-plus fa-2x mr-3 text-warning"></i>
                                Track Order & Find Products( ေအာ္ဒါမ်ားအား ျပန္လည္ၾကည့္ရႈ႔ျခင္း ႏွင့္ ကုန္ပစၥည္းမ်ား ရွာေဖြၾကည့္ရႈ႔ျခင္း)
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
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#usercollapseFour">
                                <i class="fas fa-address-card fa-2x mr-3 text-warning"></i>
                                Contact Us & Payment Proof( ဆက္သြယ္ျခင္း ႏွင့္ ေငြေပးေခ်မႈ႔သက္ေသမ်ားေပးပို႔ျခင္း )
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
                            <button class="btn btn-secondary btn-block text-light text-left" data-toggle="collapse" data-target="#usercollapseFive">
                                <i class="fas fa-user fa-2x mr-3 text-warning"></i>
                                Make Account & View Account( အေကာင့္သစ္ျပဳလုပ္ျခင္း ႏွင့္ ျပင္ဆင္ျခင္း )
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

    <!-- Activities and Quick Post Start -->

@endsection