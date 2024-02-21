<?php
 namespace App\Http\Controllers\Admin; use App\Http\Controllers\Controller; use Illuminate\Http\Request; use App\Models\Category; use App\Models\Order; use App\Models\Product; use App\Models\About; use App\Models\OrderItem; use App\Models\SMS; use App\Models\Post; use App\Models\Setting; use App\Models\License; use App\Models\Slider; use App\Models\LandingPage; use App\Models\SmsHistory; use App\Models\PaymentGateway; use App\Models\User; use Session; class AdminController extends Controller { public function addUser() { return view("\x61\144\155\x69\x6e\56\x73\164\141\146\146\x2e\x61\144\x64\x2d\163\x74\141\146\146"); } public function viewUser() { $status = array("\101\143\164\x69\166\145", "\x49\156\x2d\101\143\164\151\166\x65"); $getData = User::where("\x72\157\x6c\145\137\x69\144", 2)->orderBy("\151\144")->get(); return view("\x61\144\155\151\156\56\163\164\x61\x66\146\56\x76\151\x65\167\55\x73\x74\x61\x66\146", compact("\147\x65\164\x44\141\164\141")); } public function userDestroy($id) { $User = User::find($id); $User->delete(); return redirect()->back()->with("\x64\145\154\145\164\x65", "\x55\x73\x65\x72\x20\104\145\154\x65\x74\145\x64\40\123\x75\x63\x63\x65\163\x73\146\165\154\x6c\171"); } public function AddLicense(Request $request) { $data = License::find(1); $data->api_key = $request->apiKey; $data->save(); Session()->flush(); return redirect()->route("\154\x6f\147\151\x6e"); } public static function index() { if (Session::has("\163\x74\141\164\165\163")) { return LicenseController::index(); } else { return LicenseController::sessionApi(); } } public function slider() { $getData = Slider::orderBy("\151\x64", "\144\145\x73\143")->get(); return view("\141\144\155\x69\x6e\56\x61\144\x64\55\163\154\151\144\145\162", compact("\147\x65\x74\104\141\164\x61")); } public function sliderDestroy($id) { $slider = Slider::find($id); $slider->delete(); return redirect()->back()->with("\144\145\x6c\145\x74\145", "\x44\x65\154\x65\x74\145\x64\40\x53\165\x63\x63\x65\x73\x73\146\x75\154\154\171"); } public function sliderAdd(Request $request) { if ($request["\x69\155\x61\x67\x65"]) { $image = pathinfo($request["\151\155\141\x67\145"]->getClientOriginalName(), PATHINFO_FILENAME) . "\x2d" . time() . "\56" . $request["\x69\155\x61\x67\145"]->getClientOriginalExtension(); $request["\151\155\x61\147\145"]->move("\x75\x70\x6c\x6f\x61\x64\x73\x2f\151\155\x61\x67\x65\x73\57", $image); } else { $image = $request->image; } $Slider = new Slider(); $Slider->name = $request->name; $Slider->image = "\151\x6d\141\x67\145\x73\57" . $image; $Slider->save(); return redirect()->back()->with("\x73\165\x63\143\145\163\x73", "\x53\x6c\151\x64\x65\162\40\101\x64\x64\x65\144\40\x53\x75\143\x63\x65\163\x73\146\165\x6c\x6c\x79"); } public function smsGty() { $SMS = SMS::get()->first(); return view("\x61\144\x6d\151\156\56\163\x6d\163\55\147\x74\171", compact("\123\115\123")); } public function smsGtyUpdate(Request $request) { $data = SMS::find($request->id); $data->gateway_url = $request->url; $data->api_key = $request->apiKey; $data->sms_type = $request->sms_type; $data->sender_id = $request->sender_id; $data->save(); return redirect()->back()->with("\x73\165\143\x63\145\163\x73", "\114\151\143\145\156\163\x65\40\123\165\x63\x63\x65\163\163\x66\165\154\154\x79\x20\125\x70\144\141\164\x65\x64"); } public function paymentGty() { $PaymentGateway = PaymentGateway::get()->first(); return view("\141\144\155\x69\x6e\x2e\163\145\x74\164\151\x6e\147\56\160\x61\171\155\145\156\164\55\x67\x61\164\x65\167\x61\x79", compact("\x50\x61\x79\x6d\x65\156\x74\107\141\164\145\x77\x61\x79")); } public function paymentGtyUpdate(Request $request) { if (!empty($request->bkash)) { $data = PaymentGateway::find($request->id); $data->bkash_app_key = $request->bkash_app_key; $data->bkash_app_secret = $request->bkash_app_secret; $data->bkash_user_name = $request->bkash_user_name; $data->bkash_user_password = $request->bkash_user_password; $data->bkash_curl = $request->bkash_curl; $data->bkash_test_mode = $request->bkash_test_mode; $data->save(); return redirect()->back()->with("\163\x75\143\x63\x65\163\x73", "\120\141\x79\x6d\x65\156\x74\40\107\141\x74\145\x77\141\171\x20\x53\165\x63\x63\x65\x73\x73\x66\165\x6c\x6c\x79\40\125\160\144\141\x74\145\x64"); } else { $data = PaymentGateway::find($request->id); $data->store_id = $request->store_id; $data->store_password = $request->store_password; $data->test_mode = $request->test_mode; $data->save(); return redirect()->back()->with("\163\x75\143\143\145\163\163", "\120\x61\171\x6d\x65\x6e\164\x20\x47\141\164\145\x77\141\171\x20\123\x75\143\143\x65\x73\x73\146\165\154\x6c\x79\40\x55\x70\x64\141\164\x65\x64"); } } public function licenseMgt() { $license_key = License::get()->first(); return view("\141\144\155\x69\156\x2e\154\x69\143\x65\x6e\163\x65", compact("\x6c\151\143\145\x6e\163\x65\137\x6b\145\x79")); } public function licenseUpdate(Request $request) { $data = License::find(1); $data->api_key = $request->apiKey; $data->save(); return redirect()->back()->with("\163\x75\143\x63\x65\x73\x73", "\114\x69\x63\145\156\x73\145\x20\x53\x75\x63\x63\145\163\x73\x66\165\x6c\x6c\x79\x20\125\160\x64\x61\x74\145\144"); } public function homeSetting() { $getData = About::all(); return view("\x61\x64\x6d\x69\x6e\56\x68\x6f\x6d\x65\160\x61\x67\145\x2d\x73\x65\x74\165\x70", compact("\147\x65\x74\104\141\x74\141")); } public function homeSettingEdit($id) { $getData = About::where("\x69\144", $id)->first(); return view("\x61\x64\x6d\151\x6e\x2e\150\157\155\145\160\141\147\145\x2d\x73\x65\x74\x75\160\55\145\144\151\x74", compact("\x67\145\x74\x44\141\x74\141")); } public function homeSettingUpdate(Request $request) { if ($request["\x69\x6d\141\147\145"]) { $image = "\x2f\x69\x6d\x61\x67\145\x73\x2f" . pathinfo($request["\151\155\141\147\x65"]->getClientOriginalName(), PATHINFO_FILENAME) . "\55" . time() . "\x2e" . $request["\151\155\141\147\145"]->getClientOriginalExtension(); $request["\151\x6d\x61\x67\145"]->move("\165\160\x6c\157\x61\144\163\57\151\x6d\141\147\145\x73\57", $image); } else { $image = $request->oldimage; } if ($request["\144\x65\x73\143\x72\151\x70\164\x69\x6f\x6e"]) { $des = $request->description; } else { $des = $request->olddescription; } $data = About::find($request->id); $data->image = $image; $data->description = $des; $data->save(); return redirect()->route("\150\x6f\x6d\x65\123\x65\x74\164\151\x6e\147"); } public function setting() { $Setting = Setting::get()->first(); return view("\x61\x64\155\x69\156\56\x73\145\x74\164\x69\156\x67", compact("\x53\145\x74\x74\x69\x6e\x67")); } public function settingUpdate(Request $request) { if ($request["\x69\155\x61\x67\x65"]) { $image = pathinfo($request["\151\155\141\x67\x65"]->getClientOriginalName(), PATHINFO_FILENAME) . "\55" . time() . "\x2e" . $request["\151\x6d\x61\x67\145"]->getClientOriginalExtension(); $request["\151\155\141\x67\145"]->move("\x75\160\154\x6f\x61\144\x73\x2f\151\x6d\x61\x67\145\x73\57", $image); } else { $image = $request->image; } $data = Setting::find($request->id); $data->site_name = $request->site_name; $data->fb_pixel = $request->fb_pixel; $data->image = "\151\155\x61\x67\145\x73\57" . $image; $data->address = $request->address; $data->phone = $request->phone; $data->email = $request->email; $data->web = $request->web; $data->save(); return redirect()->back()->with("\163\x75\143\143\x65\x73\163", "\x57\145\x62\40\123\x69\x74\145\x20\103\157\x6e\x66\151\147\165\162\x61\164\151\x6f\156\40\x55\160\144\x61\164\x65\144\x20\x53\x75\143\143\145\x73\x73\x66\165\x6c\154\171"); } public function category() { $getData = Category::orderBy("\x69\x64", "\144\x65\x73\143")->get(); return view("\x61\144\x6d\151\x6e\x2e\160\162\157\144\165\143\164\x2e\143\141\164\x65\147\157\x72\x79", compact("\x67\145\x74\104\x61\x74\141")); } public function IdCard() { $getData = Category::orderBy("\x69\144", "\144\145\x73\x63")->get(); return view("\141\x64\x6d\x69\x6e\x2e\x73\x74\x75\x64\x65\156\x74\x2e\151\x64\55\143\141\162\x64", compact("\x67\145\x74\x44\x61\164\141")); } public function generateIdCard() { $class = Category::all(); $getData = Student::orderBy("\x69\144", "\144\145\x73\x63")->get(); return view("\x61\x64\155\x69\156\56\163\164\x75\144\145\156\x74\56\x67\145\156\x65\162\141\x74\x65\x2d\x69\144\55\x63\x61\x72\x64", compact("\x63\154\x61\163\163", "\147\145\164\x44\141\x74\x61")); } public function generateIdCardSubmit(Request $request) { $class = Category::where("\151\x64", $request->class)->get(); $getData = Student::where("\x63\x6c\141\163\163", $request->class)->orderBy("\x69\144", "\x64\145\x73\x63")->get(); $info = Setting::get()->first(); return view("\141\144\155\x69\156\56\x73\164\x75\144\x65\x6e\x74\56\x76\x69\145\167\x2d\143\141\x72\144", compact("\x63\154\x61\x73\x73", "\x67\145\x74\104\141\x74\141", "\151\156\x66\x6f")); } public function categoryAdd(Request $request) { if ($request["\151\x6d\x61\x67\145"]) { $image = pathinfo($request["\151\x6d\141\147\145"]->getClientOriginalName(), PATHINFO_FILENAME) . "\55" . time() . "\56" . $request["\151\155\x61\147\145"]->getClientOriginalExtension(); $request["\x69\155\141\147\145"]->move("\165\160\154\x6f\141\144\163\x2f\x69\155\x61\x67\145\163\57", $image); } else { $image = $request->image; } $Category = new Category(); $Category->name = $request->category_name; $Category->slug = $request->category_slug; $Category->image = "\151\155\x61\x67\145\x73\57" . $image; $Category->save(); return redirect()->back()->with("\163\x75\143\x63\x65\163\x73", "\x43\x61\164\145\147\x6f\162\171\40\x41\144\144\x65\144\x20\x53\165\x63\143\x65\163\x73\x66\x75\x6c\x6c\x79"); } public function categoryEdit($id) { $cat = Category::where("\x69\x64", $id)->get()->first(); return view("\141\144\x6d\x69\156\x2e\x70\x72\157\x64\x75\143\x74\x2e\x65\x64\151\164\55\143\x61\x74\145\x67\157\x72\171", compact("\143\x61\x74")); } public function categoryUpdate(Request $request) { if ($request["\x69\155\x61\147\145"]) { $image = "\x69\155\141\147\145\163\57" . pathinfo($request["\151\x6d\141\x67\x65"]->getClientOriginalName(), PATHINFO_FILENAME) . "\x2d" . time() . "\x2e" . $request["\x69\x6d\141\x67\145"]->getClientOriginalExtension(); $request["\151\155\141\147\x65"]->move("\x75\x70\x6c\x6f\x61\144\163\x2f\x69\x6d\x61\147\x65\x73\x2f", $image); } else { $image = $request->oldimage; } $Category = Category::find($request->id); $Category->name = $request->category_name; $Category->slug = $request->category_slug; $Category->image = $image; $Category->save(); return redirect()->back()->with("\x73\165\143\143\145\163\163", "\x43\x61\x74\145\x67\x6f\162\x79\x20\x41\144\x64\x65\144\x20\123\165\x63\143\x65\x73\x73\x66\165\x6c\x6c\x79"); } public function categoryDestroy($id) { $catgory = Category::find($id); $catgory->delete(); return redirect()->back()->with("\x64\145\x6c\145\x74\145", "\x44\x65\x6c\x65\164\x65\x64\x20\123\165\x63\143\145\x73\163\x66\165\154\x6c\x79"); } public function product() { $getData = Product::orderBy("\x69\144", "\144\145\x73\143")->get(); $categories = Category::all(); return view("\141\144\155\x69\156\56\160\162\157\x64\165\143\164", compact("\x67\x65\164\x44\141\x74\141", "\x63\x61\164\145\147\x6f\x72\x69\145\x73")); } public function productDestroy($id) { $product = Product::find($id); $product->delete(); return redirect()->back()->with("\x64\x65\x6c\x65\x74\145", "\120\x72\157\x64\x75\143\164\40\104\145\x6c\145\x74\x65\144\x20\x53\x75\143\x63\145\163\x73\146\x75\154\154\x79"); } public function productAdd(Request $request) { if ($request["\151\x6d\141\x67\145"]) { $image = pathinfo($request["\x69\155\141\147\x65"]->getClientOriginalName(), PATHINFO_FILENAME) . "\x2d" . time() . "\56" . $request["\151\155\141\x67\x65"]->getClientOriginalExtension(); $request["\x69\155\141\x67\x65"]->move("\165\160\x6c\157\x61\144\163\57\151\155\x61\147\x65\163\57", $image); } else { $image = $request->image; } $Product = new Product(); $Product->name = $request->name; $Product->category_id = $request->category_id; $Product->rp = $request->rp; $Product->dp = $request->dp; $Product->pp = $request->pp; $Product->description = $request->description; $Product->stock = $request->stock; $Product->status = $request->status; $Product->image = "\151\x6d\141\147\145\163\57" . $image; $Product->save(); return redirect()->back()->with("\163\x75\x63\143\145\x73\x73", "\x50\162\157\144\165\143\164\x20\101\x64\144\145\144\40\x53\165\x63\143\x65\163\x73\x66\x75\x6c\154\x79"); } public function productEdit($id) { $getData = Product::where("\x69\x64", $id)->first(); $data = Category::where("\151\x64", $getData->category_id)->first(); $categories = Category::all(); return view("\141\144\x6d\151\x6e\56\x70\162\x6f\144\x75\x63\x74\x2d\x65\144\x69\164", compact("\x67\145\x74\x44\x61\x74\141", "\x63\x61\164\x65\x67\x6f\x72\x69\145\x73", "\144\141\164\141")); } public function productUpdate(Request $request) { if ($request["\151\155\141\147\145"]) { $image = "\57\x69\155\x61\147\145\163\x2f" . pathinfo($request["\x69\155\x61\147\145"]->getClientOriginalName(), PATHINFO_FILENAME) . "\55" . time() . "\56" . $request["\151\x6d\x61\147\145"]->getClientOriginalExtension(); $request["\x69\x6d\141\147\x65"]->move("\165\160\154\157\141\x64\x73\57\151\x6d\x61\x67\x65\163\x2f", $image); } else { $image = $request->oldimage; } $Product = Product::find($request->id); $Product->name = $request->name; $Product->category_id = $request->category_id; $Product->rp = $request->rp; $Product->dp = $request->dp; $Product->pp = $request->pp; $Product->stock = $request->stock; $Product->status = $request->status; $Product->image = $image; $Product->save(); return redirect()->back()->with("\163\x75\x63\143\145\x73\x73", "\120\x72\x6f\x64\x75\x63\x74\x20\101\x64\144\x65\x64\x20\123\165\143\143\x65\x73\163\146\x75\154\154\x79"); } public function landingShow() { $getData = LandingPage::orderBy("\151\144", "\144\x65\163\x63")->get(); return view("\x61\144\155\151\x6e\x2e\x6c\141\x6e\x64\x69\156\x67\x2e\166\x69\x65\167\55\160\x61\147\145", compact("\x67\145\x74\x44\141\164\141")); } public function addLandingPage() { return view("\x61\x64\155\x69\156\56\x6c\x61\156\144\151\x6e\147\x2e\141\x64\144\x2d\x70\x61\147\145"); } public function productSearch(Request $request) { Session::flash("\141\154\x65\162\x74\55\144\141\x6e\147\145\x72", "\144\141\x6e\x67\145\x72"); $data = Product::where("\x69\144", $request->id)->get()->first(); session()->put("\144\x61\164\x61", $data); return redirect()->back()->with("\x73\165\x63\x63\x65\163\x73", "\120\154\x65\x61\163\145\x20\141\x64\144\40\122\145\x71\165\x69\162\x65\144\x20\111\156\146\x6f"); } public function submitLanding(Request $request) { if ($request["\x69\155\141\147\x65\61"]) { $image1 = "\57\151\x6d\141\x67\145\x73\x2f" . pathinfo($request["\151\x6d\x61\x67\145\x31"]->getClientOriginalName(), PATHINFO_FILENAME) . "\55" . time() . "\x2e" . $request["\151\155\x61\147\145\61"]->getClientOriginalExtension(); $request["\151\x6d\x61\x67\145\x31"]->move("\x75\160\x6c\x6f\141\144\x73\57\x69\155\141\147\145\x73\x2f", $image1); } else { $image1 = $request->oldimage1; } if ($request["\x69\x6d\141\x67\x65\62"]) { $image2 = "\x2f\151\155\x61\x67\x65\163\57" . pathinfo($request["\x69\x6d\x61\147\x65\x32"]->getClientOriginalName(), PATHINFO_FILENAME) . "\55" . time() . "\56" . $request["\151\155\x61\x67\145\62"]->getClientOriginalExtension(); $request["\151\x6d\x61\147\145\62"]->move("\x75\160\154\157\x61\x64\163\x2f\x69\x6d\x61\x67\x65\163\x2f", $image2); } else { $image2 = $request->oldimage2; } if ($request["\x69\155\141\147\x65\x33"]) { $image3 = "\57\x69\155\141\147\x65\163\57" . pathinfo($request["\x69\155\x61\147\x65\x33"]->getClientOriginalName(), PATHINFO_FILENAME) . "\x2d" . time() . "\56" . $request["\151\x6d\x61\147\145\63"]->getClientOriginalExtension(); $request["\151\x6d\141\147\145\63"]->move("\x75\160\154\x6f\141\144\x73\57\151\x6d\x61\x67\x65\x73\x2f", $image3); } else { $image3 = $request->oldimage3; } $LandingPage = new LandingPage(); $LandingPage->product_id = $request->product_id; $LandingPage->title = $request->title; $LandingPage->sub_title = $request->sub_title; $LandingPage->video_url = $request->video_url; $LandingPage->feature = $request->feature; $LandingPage->descrip = $request->descrip; $LandingPage->img_head = $request->img_head; $LandingPage->image1 = $image1; $LandingPage->image2 = $image2; $LandingPage->image3 = $image3; $LandingPage->save(); Session::flash("\144\141\164\x61"); return redirect()->route("\x6c\141\156\x64\151\156\x67\123\150\x6f\x77")->with("\x73\165\143\x63\145\x73\x73", "\101\144\155\x69\x73\163\x69\x6f\156\x20\x53\x75\143\143\x65\x73\163\146\165\x6c\154\171\40\103\x6f\x6d\160\154\145\x74\x65\x64"); } public function landingDestroy($id) { $LandingPage = LandingPage::find($id); $LandingPage->delete(); return redirect()->back()->with("\144\145\154\145\164\x65", "\x4c\x61\156\x64\x69\156\x67\120\x61\147\145\x20\x44\x65\x6c\145\164\x65\144\40\x53\165\143\x63\x65\x73\x73\x66\x75\x6c\x6c\171"); } public function upload() { $getData = Doc::orderBy("\151\144", "\144\145\163\x63")->get(); return view("\x61\x64\x6d\x69\x6e\56\x66\151\x6c\145\55\x75\160\x6c\x6f\141\x64", compact("\147\145\164\x44\x61\164\141")); } public function fileAdd(Request $request) { if ($request["\146\151\154\145"]) { $file = "\146\151\x6c\x65\163\x2f" . pathinfo($request["\146\x69\154\x65"]->getClientOriginalName(), PATHINFO_FILENAME) . "\x2d" . time() . "\56" . $request["\x66\x69\x6c\145"]->getClientOriginalExtension(); $request["\146\x69\154\145"]->move("\165\160\154\157\141\x64\x73\x2f\146\151\x6c\145\163\57", $file); } else { $file = $request->oldimage; } $Doc = new Doc(); $Doc->name = $request->name; $Doc->category = $request->category; $Doc->file = $file; $Doc->save(); return redirect()->back()->with("\x73\x75\143\x63\145\x73\x73", "\104\x6f\143\165\x6d\145\x6e\164\x20\x55\160\x6c\x6f\x61\144\x65\144\40\x53\165\143\x63\x65\x73\x73\x66\165\x6c\x6c\171"); } public function fileDestroy($id) { $file = Doc::find($id); $file->delete(); return redirect()->back()->with("\144\145\154\145\x74\145", "\x46\151\154\145\40\x44\x65\x6c\145\x74\145\144\x20\x53\165\143\x63\x65\x73\x73\x66\x75\154\154\x79"); } public function blogPost() { $getData = Post::orderBy("\x69\144", "\x64\145\x73\x63")->get(); $NewsCat = Category::all(); return view("\141\x64\155\151\x6e\56\x62\x6c\x6f\x67", compact("\x67\x65\164\x44\141\x74\141", "\x4e\x65\167\x73\x43\141\164")); } public function blogPostAdd(Request $request) { if ($request["\151\155\141\x67\145"]) { $image = "\x2f\151\155\x61\147\145\163\57" . pathinfo($request["\x69\x6d\141\x67\145"]->getClientOriginalName(), PATHINFO_FILENAME) . "\x2d" . time() . "\56" . $request["\x69\x6d\141\147\x65"]->getClientOriginalExtension(); $request["\151\155\x61\x67\x65"]->move("\165\160\x6c\157\141\144\163\x2f\151\x6d\141\147\145\163\57", $image); } else { $image = $request->oldimage; } $Post = new Post(); $Post->title = $request->title; $Post->category = $request->category; $Post->description = $request->description; $Post->image = $image; $Post->save(); return redirect()->back()->with("\x73\x75\x63\143\145\163\x73", "\x50\157\x73\x74\40\125\160\x64\141\x74\145\x64\40\x53\165\143\x63\x65\163\163\146\x75\154\x6c\171"); } public function blogPostDestroy($id) { $Post = Post::find($id); $Post->delete(); return redirect()->back()->with("\144\145\x6c\145\164\x65", "\x50\157\163\164\40\104\145\x6c\x65\164\x65\x64\40\x53\x75\143\x63\145\x73\163\146\165\154\x6c\x79"); } public function notice() { $getData = Notice::orderBy("\151\144", "\x64\x65\x73\x63")->get(); return view("\x61\144\x6d\151\x6e\x2e\x6e\x6f\x74\x69\143\145", compact("\147\145\164\104\x61\164\141")); } public function noticeAdd(Request $request) { $Notice = new Notice(); $Notice->title = $request->title; $Notice->description = $request->description; $Notice->save(); return redirect()->back()->with("\x73\165\x63\x63\x65\x73\x73", "\x4e\157\x74\151\143\x65\40\125\x70\144\x61\164\145\x64\40\123\x75\143\143\145\x73\x73\x66\x75\154\154\171"); } public function noticeDestroy($id) { $Notice = Notice::find($id); $Notice->delete(); return redirect()->back()->with("\144\x65\x6c\x65\164\145", "\x4e\x6f\x74\x69\x63\x65\x20\104\x65\154\x65\x74\x65\144\x20\123\165\143\143\x65\x73\x73\x66\165\154\154\x79"); } public function staff() { $getData = Teacher::orderBy("\151\x64", "\144\145\x73\143")->get(); return view("\141\144\155\151\x6e\56\163\x74\141\x66\146", compact("\x67\145\x74\104\141\164\141")); } public function staffType($id) { $getData = Teacher::where("\x63\141\164\x65\x67\157\x72\x79", $id)->orderBy("\151\x64", "\144\x65\x73\x63")->get(); return view("\x61\x64\155\151\156\56\163\x74\141\146\x66", compact("\147\x65\x74\104\141\x74\141")); } public function staffAdd(Request $request) { if ($request["\x69\x6d\x61\x67\145"]) { $image = "\x2f\151\x6d\x61\x67\145\163\x2f" . pathinfo($request["\151\x6d\141\147\145"]->getClientOriginalName(), PATHINFO_FILENAME) . "\x2d" . time() . "\x2e" . $request["\151\x6d\x61\147\x65"]->getClientOriginalExtension(); $request["\151\155\141\x67\x65"]->move("\165\160\154\157\x61\x64\163\57\x69\x6d\x61\x67\145\x73\57", $image); } else { $image = $request->oldimage; } $Teacher = new Teacher(); $Teacher->name = $request->name; $Teacher->category = $request->category; $Teacher->qualification = $request->qualification; $Teacher->designation = $request->designation; $Teacher->mobile = $request->mobile; $Teacher->image = $image; $Teacher->save(); return redirect()->back()->with("\x73\x75\143\x63\145\163\x73", "\x45\x6d\160\x6c\157\171\x65\x65\x20\101\x64\x64\145\x64\40\x53\165\143\143\145\x73\163\146\x75\x6c\x6c\171"); } public function staffEdit($id) { $getData = Teacher::where("\151\144", $id)->first(); return view("\141\x64\155\x69\156\x2e\163\164\141\146\146\55\145\x64\151\164", compact("\147\145\164\104\x61\x74\x61")); } public function staffDestroy($id) { $Teacher = Teacher::find($id); $Teacher->delete(); return redirect()->back()->with("\144\145\x6c\x65\164\x65", "\x45\155\x70\154\x6f\171\x65\x65\40\x44\x65\154\x65\x74\x65\144\40\123\x75\x63\143\145\163\x73\x66\165\x6c\x6c\x79"); } public function staffUpdate(Request $request) { if ($request["\x69\155\141\147\x65"]) { $image = "\x2f\151\155\141\147\x65\163\x2f" . pathinfo($request["\x69\155\x61\x67\145"]->getClientOriginalName(), PATHINFO_FILENAME) . "\55" . time() . "\56" . $request["\x69\155\141\x67\x65"]->getClientOriginalExtension(); $request["\151\155\141\147\x65"]->move("\165\x70\154\x6f\141\144\x73\x2f\x69\x6d\x61\x67\x65\163\x2f", $image); } else { $image = $request->oldimage; } $Teacher = Teacher::find($request->id); $Teacher->name = $request->name; $Teacher->qualification = $request->qualification; $Teacher->designation = $request->designation; $Teacher->mobile = $request->mobile; $Teacher->image = $image; $Teacher->save(); return redirect()->back()->with("\x73\x75\x63\x63\x65\x73\163", "\124\x65\x61\143\150\145\162\x20\x55\x70\144\x61\x74\x65\x64\40\123\x75\x63\x63\x65\x73\163\146\x75\154\x6c\x79"); } public function student() { $class = Category::all(); $getData = Student::orderBy("\151\144", "\144\145\163\143")->get(); return view("\141\x64\155\x69\x6e\56\x73\164\x75\144\x65\x6e\x74", compact("\147\145\x74\x44\141\164\141", "\143\154\141\x73\163")); } public function classWisestudent($id) { $class = Category::all(); $getData = Student::where("\143\x6c\141\x73\x73", $id)->orderBy("\151\144", "\x64\x65\163\x63")->get(); return view("\141\144\x6d\151\156\56\x73\x74\x75\x64\145\156\164", compact("\147\x65\164\x44\x61\x74\141", "\x63\x6c\141\163\163")); } public function studentDestroy($id) { $Student = Student::find($id); $Student->delete(); return redirect()->back()->with("\144\145\154\x65\164\x65", "\123\x74\165\x64\145\156\x74\x20\x44\145\154\145\164\145\144\40\x53\165\x63\x63\x65\x73\x73\x66\165\x6c\154\171"); } public function studentAdd(Request $request) { if ($request["\151\155\x61\147\x65"]) { $image = "\x2f\x69\155\x61\147\x65\x73\x2f" . pathinfo($request["\151\155\x61\x67\145"]->getClientOriginalName(), PATHINFO_FILENAME) . "\55" . time() . "\x2e" . $request["\x69\155\x61\147\x65"]->getClientOriginalExtension(); $request["\151\x6d\x61\147\145"]->move("\165\x70\x6c\x6f\141\144\x73\57\x69\155\x61\x67\145\x73\x2f", $image); } else { $image = $request->oldimage; } $Student = new Student(); $Student->name = $request->name; $Student->class = $request->class; $Student->gender = $request->gender; $Student->religion = $request->religion; $Student->present_address = $request->present_address; $Student->permanent_address = $request->permanent_address; $Student->guardian_name = $request->guardian_name; $Student->guardian_relation = $request->guardian_relation; $Student->guardian_mobile = $request->guardian_mobile; $Student->status = $request->status; $Student->image = $image; $Student->save(); return redirect()->back()->with("\x73\165\x63\x63\x65\x73\163", "\123\x74\x75\144\145\156\x74\40\101\144\144\x65\x64\x20\123\165\x63\x63\145\x73\163\x66\x75\154\154\x79"); } public function studentEdit($id) { $class = Category::all(); $getData = Student::where("\x69\144", $id)->first(); return view("\141\144\155\x69\x6e\x2e\x73\x74\x75\144\x65\x6e\x74\x2d\145\x64\x69\164", compact("\147\x65\164\x44\x61\164\141", "\143\x6c\x61\163\x73")); } public function studentUpdate(Request $request) { if ($request["\151\155\141\147\145"]) { $image = "\x2f\151\155\141\147\x65\x73\x2f" . pathinfo($request["\x69\155\x61\147\x65"]->getClientOriginalName(), PATHINFO_FILENAME) . "\x2d" . time() . "\x2e" . $request["\x69\155\141\147\x65"]->getClientOriginalExtension(); $request["\x69\155\x61\x67\145"]->move("\x75\160\x6c\x6f\x61\144\x73\x2f\x69\155\x61\147\145\x73\57", $image); } else { $image = $request->oldimage; } $Student = Student::find($request->id); $Student->name = $request->name; $Student->class = $request->class; $Student->gender = $request->gender; $Student->religion = $request->religion; $Student->present_address = $request->present_address; $Student->permanent_address = $request->permanent_address; $Student->guardian_name = $request->guardian_name; $Student->guardian_relation = $request->guardian_relation; $Student->guardian_mobile = $request->guardian_mobile; $Student->status = $request->status; $Student->image = $image; $Student->save(); return redirect()->back()->with("\163\x75\143\x63\x65\163\163", "\123\164\x75\144\x65\x6e\164\40\125\160\144\141\x74\145\x64\x20\x53\x75\x63\x63\x65\x73\163\x66\165\x6c\154\x79"); } public function order($id) { if ($id == "\141\x6c\154") { $getData = Order::orderBy("\x69\144", "\x64\x65\163\x63")->get(); } else { $getData = Order::where("\x6f\x72\x64\x65\x72\137\163\x74\141\x74\x75\163", $id)->orderBy("\x69\144", "\x64\145\x73\x63")->get(); } return view("\x61\x64\x6d\x69\x6e\56\x6f\162\144\x65\162", compact("\x67\145\164\x44\141\x74\141")); } public function orderDestroy($id) { $order = Order::find($id); $order->delete(); return redirect()->back()->with("\x64\145\x6c\x65\164\145", "\104\x65\154\x65\164\x65\144\x20\123\165\143\143\x65\x73\163\x66\165\x6c\154\171"); } public function orderDetails($id) { $order = Order::where("\157\x72\x64\145\162\137\x6e\x75\x6d\x62\x65\162", $id)->first(); $items = OrderItem::where("\157\162\x64\x65\162\137\151\x64", $id)->get(); return view("\141\144\x6d\x69\x6e\56\x6f\162\x64\x65\162\x2d\144\x65\x74\x61\x69\x6c\x73", compact("\x6f\x72\144\145\162", "\151\164\x65\155\163", "\x69\x64")); } public function orderEdit($id) { $getData = Order::where("\157\162\144\145\x72\x5f\156\165\155\142\145\162", $id)->first(); $order = Order::where("\157\162\x64\x65\x72\137\x6e\x75\x6d\142\x65\x72", $id)->first(); $items = OrderItem::where("\157\x72\144\145\162\137\151\x64", $id)->get(); return view("\141\144\x6d\151\156\56\x6f\x72\x64\145\162\56\x6f\162\144\x65\x72\55\x65\144\x69\164", compact("\x67\x65\x74\104\141\164\141", "\x6f\162\144\x65\x72", "\151\164\x65\x6d\x73", "\x69\144")); } public function orderUpdate(Request $request) { $order_id = $request->order_number; $Order = Order::find($request->id); $Order->payment_status = $request->payment_status; $Order->order_status = $request->order_status; $Order->save(); $host = request()->getHost(); $body = "\104\145\x61\x72\x20{$request->name}\x20\131\x6f\x75\162\x20\117\162\144\x65\162\x3a\x20{$order_id}\40\x53\164\x61\164\165\163\40\103\x68\141\x6e\x67\x65\x64\40\x61\x74\x20{$request->order_status}\56\40\x46\x6f\x72\40\115\x6f\162\145\x20\111\156\146\157\40\x50\x6c\145\141\x73\145\x20\x56\x69\163\151\164\72\40\x68\x74\164\160\x73\72\57\57{$host}\57\151\x6e\x76\157\151\143\145\x2f{$order_id}"; return $this->sendSms($request->mobile, $body); } public function singleSms($id) { if ($id == "\163\151\156\x67\x6c\145") { $getData = SmsHistory::orderBy("\151\144", "\144\145\x73\x63")->get(); return view("\x61\144\155\151\x6e\56\x73\155\163\x2e\163\151\156\147\154\x65", compact("\147\145\x74\104\x61\x74\141")); } elseif ($id == "\x67\165\x61\162\144\x69\x61\156") { $getData = SmsHistory::where("\x72\x65\x63\x65\x69\x76\x65\162", "\x47\165\x61\162\x64\151\x61\x6e")->orderBy("\151\x64", "\144\145\x73\143")->get(); return view("\141\144\x6d\x69\x6e\56\163\x6d\x73\x2e\147\165\x61\x72\144\x69\141\156", compact("\147\x65\x74\x44\141\x74\x61")); } else { $getData = SmsHistory::where("\162\x65\x63\x65\x69\x76\145\x72", "\124\145\x61\143\150\x65\162")->orderBy("\151\144", "\144\x65\163\143")->get(); return view("\141\144\155\x69\x6e\56\x73\x6d\x73\56\x74\145\x61\143\150\x65\162", compact("\x67\x65\164\x44\141\x74\141")); } } public function SmsData(Request $request) { if ($request["\163\x69\x6e\x67\154\x65"]) { $to = $request->number; $SmsHistory = new SmsHistory(); $SmsHistory->message = $request->message; $SmsHistory->receiver = $to; $SmsHistory->save(); } elseif ($request["\x67\x75\141\162\144\151\141\x6e"]) { $mobile = Student::pluck("\x67\165\141\162\144\151\x61\x6e\137\x6d\157\x62\151\154\145")->all(); $unique = array_unique($mobile); $to = implode("\54", $unique); $SmsHistory = new SmsHistory(); $SmsHistory->message = $request->message; $SmsHistory->receiver = "\107\165\x61\162\144\x69\x61\156"; $SmsHistory->save(); } else { $mobile = Teacher::pluck("\155\x6f\x62\151\154\145")->all(); $unique = array_unique($mobile); $to = implode("\54", $unique); $SmsHistory = new SmsHistory(); $SmsHistory->message = $request->message; $SmsHistory->receiver = "\x54\x65\x61\143\x68\145\x72"; $SmsHistory->save(); } return $this->SendSms($to, $SmsHistory->message); } public function SendSms($to, $body) { $smsGty = SMS::get()->first(); $url = $smsGty->gateway_url; $parameters = array("\x61\x70\151\137\x6b\x65\171" => $smsGty->api_key, "\x66\162\x6f\155\137\164\x79\x70\x65" => $smsGty->sms_type, "\x74\x6f\137\x6e\165\x6d\x62\145\x72\x73" => $to, "\x73\x65\x6e\x64\x65\162\x69\x64" => $smsGty->sender_id, "\142\157\x64\x79" => $body); $parameters = http_build_query($parameters); $gateway_url = $url . "\77" . $parameters; $client = new \GuzzleHttp\Client(array("\x76\145\x72\x69\146\171" => false)); $response = $client->get($gateway_url); return redirect()->back()->with("\163\165\x63\143\x65\163\163", "\x53\115\x53\40\123\145\x6e\144\40\x53\165\143\x63\145\163\x73\146\165\x6c\x6c\171"); } }