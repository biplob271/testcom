<?php
 namespace App\Http\Controllers\Setting; use App\Http\Controllers\Controller; use App\Http\Controllers\Admin\FunctionController; use Illuminate\Http\Request; use Illuminate\Support\Facades\Artisan; use Session; use ZipArchive; use App\Models\Product; use App\Models\DeliveryCharge; use Illuminate\Support\Facades\Process; use App\Models\Order; use App\Models\SteadFast; use App\Models\PaymentGty; use Http; class SettingController extends Controller { public function paymentMethod() { $getData = PaymentGty::get()->first(); return view("\141\144\x6d\151\156\56\x73\145\x74\x74\151\x6e\147\x2e\160\x61\x79\x6d\x65\156\x74\55\155\145\164\150\157\x64", compact("\x67\x65\164\x44\141\164\141")); } public function paymentMethodUpdate(Request $request) { if (!empty($request->id)) { $data = PaymentGty::find($request->id); } else { $data = new PaymentGty(); } $data->bkash_status = $request->bkash_status; $data->sslc_status = $request->sslc_status; $data->nagad_status = "\151\x6e\x2d\x61\x63\x74\x69\x76\x65"; $data->aamarpay_status = "\x69\x6e\55\141\143\164\151\x76\x65"; $data->save(); return redirect()->back()->with("\x73\x75\143\x63\x65\163\163", "\x47\x61\x74\x65\x77\141\171\40\x53\x74\x61\x74\x75\163\40\x55\x70\x64\x61\164\x65\144\x20\123\x75\x63\x63\145\x73\163\146\165\x6c\x6c\x79"); } public function SysUpdate() { return view("\141\144\155\151\x6e\x2e\163\x65\x74\x74\151\156\x67\56\163\x79\163\164\145\155\55\165\160\144\x61\x74\x65"); } public function SysUpdateExe() { return $this->GIT(); } public static function GIT() { $result = Process::run("\x67\151\164\40\x70\x75\x6c\154"); $msg = $result->output(); return redirect()->route("\x61\162\164\151\x73\x61\x6e\x43\x61\154\x6c", "\155\151\x67\x72\141\164\145"); } public function __invoke(Request $request, $command) { $params = $request->all(); Artisan::call($command, $params); $output = Artisan::output(); return redirect()->back()->with("\163\x75\143\x63\145\163\163", "\40\x53\x75\143\143\145\163\x73\146\165\154\154\x79\40\x55\160\x64\141\x74\145\144"); } public function theme() { return view("\x61\144\155\x69\156\x2e\143\157\156\146\x69\147\165\x72\x61\x74\x69\157\156\56\164\x68\145\x6d\145"); } public function themeUpload(Request $request) { $zip = new ZipArchive(); $storageDestinationPath = base_path("\162\145\x73\x6f\165\162\x63\145\163\57\x76\x69\x65\x77\x73"); if ($zip->open($request->zipfile) == TRUE) { $zip->extractTo($storageDestinationPath); $zip->close(); return redirect()->route("\141\162\x74\151\163\x61\x6e\x43\141\154\x6c", "\x76\x69\145\x77\x3a\x63\x6c\x65\x61\162"); return back()->with("\x73\x75\143\x63\x65\x73\163", "\x59\157\x75\40\x4e\145\167\40\x54\150\x65\155\145\x20\125\160\x6c\157\x61\144\x65\x64\40\46\x20\141\143\164\151\x76\141\x74\x65\144\x20\x53\165\x63\x63\145\x73\x73\146\165\154\154\x79\56"); } else { return back()->with("\106\x61\x69\x6c\145\x64", "\116\157\x20\106\x69\x6c\x65\40\125\x70\154\x6f\141\145\144\56"); } } public function search() { if (request("\x73\x65\141\162\143\150")) { $products = Product::where("\x6e\x61\155\x65", "\x6c\151\x6b\145", "\45" . request("\x73\145\x61\162\143\x68") . "\x25")->get(); } else { $products = Product::all(); } return view("\146\162\x6f\x6e\164\x65\x6e\x64\56\160\141\147\x65\163\x2e\163\145\141\162\143\150")->with("\160\x72\x6f\x64\165\x63\x74\163", $products); } public function DeliveryCharge() { $getData = DeliveryCharge::get()->first(); return view("\141\144\155\x69\156\56\163\145\164\x74\151\156\x67\x2e\144\145\154\x69\x76\145\x72\171\55\x63\150\141\162\147\x65", compact("\147\145\x74\104\x61\164\x61")); } public function deliveryCrgUpdate(Request $request) { $data = DeliveryCharge::find($request->id); $data->inside_dhaka = $request->inside_dhaka; $data->all_bangladesh = $request->all_bangladesh; $data->save(); return redirect()->back()->with("\163\x75\x63\143\145\x73\x73", "\x44\x65\x6c\151\166\x65\x72\171\40\x43\x68\141\162\147\x65\x20\x20\125\160\x64\x61\164\x65\144\x20\x53\x75\143\143\x65\x73\163\x66\165\x6c\154\171"); } public function steadFast() { $getData = SteadFast::get()->first(); return view("\x61\144\155\151\156\x2e\163\145\164\x74\151\156\147\56\x73\x74\145\141\x64\146\141\163\164", compact("\147\x65\164\104\x61\164\141")); } public function steadFastUpdate(Request $request) { $data = SteadFast::find($request->id); $data->api_key = $request->api_key; $data->api_secret = $request->api_secret; $data->status = $request->status; $data->save(); return redirect()->back()->with("\x73\165\143\143\145\x73\163", "\x53\x74\x65\141\x64\106\141\x73\164\x20\x55\x70\144\x61\164\145\144\40\x53\x75\143\x63\145\x73\x73\146\165\154\x6c\171"); } public function sendSteadfast($id) { $getData = SteadFast::get()->first(); $order = Order::where("\157\162\x64\145\x72\x5f\x73\164\x61\x74\x75\x73", "\x50\162\157\x63\145\163\163\151\x6e\x67")->get()->first(); $base_url = "\x68\x74\164\160\163\72\57\57\x70\157\x72\x74\141\154\56\163\164\145\x61\x64\x66\x61\x73\164\x2e\x63\157\155\56\142\144\57\x61\160\x69\57\x76\x31"; $api_key = $getData->api_key; $secret_key = $getData->api_secret; $response = Http::withHeaders(array("\x41\x70\151\x2d\113\x65\x79" => $api_key, "\123\145\x63\x72\x65\164\x2d\113\x65\x79" => $secret_key, "\103\157\156\164\145\156\164\x2d\x54\x79\x70\145" => "\141\160\x70\154\x69\x63\141\164\151\157\156\x2f\152\x73\157\x6e"))->post($base_url . "\57\x63\x72\x65\141\164\145\x5f\157\162\x64\145\x72", array("\151\156\x76\157\151\143\145" => $order->order_number, "\162\x65\x63\151\160\151\x65\156\164\137\x6e\141\x6d\x65" => $order->name ? $order->name : "\x4e\57\x41", "\162\145\x63\x69\160\x69\145\x6e\x74\x5f\x61\144\x64\x72\145\x73\x73" => $order->address1 ? $order->address1 : "\116\x2f\101", "\162\145\x63\151\160\x69\145\156\164\x5f\160\150\157\156\x65" => $order->phone ? $order->phone : '', "\x63\157\144\x5f\x61\155\x6f\x75\156\x74" => $order->total_amount, "\156\x6f\164\145" => $order->note)); $msg = $response->getBody()->getContents(); return redirect()->back()->with("\x73\165\143\143\x65\163\x73", $msg); } }