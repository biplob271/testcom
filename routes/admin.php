<?php
 use App\Http\Controllers\Admin\AdminController; use App\Http\Controllers\Admin\AdditionalController; use App\Http\Controllers\Admin\AcademicController; Route::group(array("\x70\x72\x65\146\x69\x78" => "\143\160", "\155\x69\x64\x64\x6c\x65\167\141\x72\145" => "\141\165\164\150"), function () { Route::get("\x2f\141\144\x64\55\165\x73\145\162", array(AdminController::class, "\141\x64\144\x55\163\x65\162"))->name("\141\144\144\x55\163\x65\x72"); Route::get("\x2f\166\151\145\167\x2d\165\x73\145\162", array(AdminController::class, "\x76\151\145\x77\125\x73\x65\x72"))->name("\166\x69\x65\167\125\163\145\x72"); Route::post("\x2f\141\144\144\x2d\x75\x73\145\x72", array(AdminController::class, "\x73\x75\142\155\151\x74\125\x73\x65\162"))->name("\x73\165\142\x6d\x69\x74\125\163\x65\162"); Route::get("\57\165\163\145\x72\57\x64\x65\x6c\145\164\x65\57\173\151\x64\x7d", array(AdminController::class, "\x75\163\145\162\x44\145\163\x74\x72\157\171"))->name("\165\163\145\x72\104\x65\163\164\x72\x6f\171"); Route::get("\x2f\x70\162\157\x66\151\154\145", array(ProfileController::class, "\145\x64\151\164"))->name("\160\x72\157\146\x69\x6c\145\x2e\145\144\151\164"); Route::patch("\57\160\162\157\x66\x69\x6c\145", array(ProfileController::class, "\x75\160\x64\141\x74\x65"))->name("\x70\x72\157\146\x69\154\x65\x2e\165\x70\144\x61\x74\145"); Route::delete("\57\x70\162\x6f\x66\151\x6c\x65", array(ProfileController::class, "\144\x65\163\x74\162\x6f\x79"))->name("\x70\x72\157\x66\151\x6c\145\x2e\144\x65\163\164\x72\x6f\x79"); Route::get("\57\x64\x61\163\150\142\x6f\x61\162\x64", array(AdminController::class, "\x69\156\x64\x65\170"))->name("\144\141\x73\150\x62\157\141\x72\144"); Route::get("\x2f\x73\154\151\x64\145\162", array(AdminController::class, "\163\x6c\151\x64\x65\x72"))->name("\163\x6c\151\x64\x65\x72"); Route::get("\57\163\154\x69\144\145\x72\x2f\144\x65\154\145\164\145\x2f\x7b\x69\x64\x7d", array(AdminController::class, "\163\x6c\151\x64\x65\162\x44\145\163\164\x72\x6f\171"))->name("\163\154\151\144\145\162\x44\145\x73\x74\x72\x6f\x79"); Route::get("\x2f\163\x6c\x69\144\x65\x72\x2d\145\x64\x69\x74\57\173\x69\x64\x7d", array(AdminController::class, "\x73\x6c\151\144\x65\x72\x45\x64\151\164"))->name("\163\154\151\144\x65\162\105\x64\x69\164"); Route::post("\x2f\x73\x6c\151\144\x65\162\55\x75\160\x64\141\164\145", array(AdminController::class, "\x73\154\151\x64\x65\x72\x55\x70\144\141\164\145"))->name("\x73\x6c\x69\x64\x65\162\x55\x70\x64\141\164\145"); Route::post("\x2f\x73\x6c\151\144\145\x72\x2d\141\144\144", array(AdminController::class, "\x73\154\151\x64\x65\x72\x41\x64\144"))->name("\163\x6c\151\144\x65\162\x41\x64\144"); Route::get("\57\163\155\163\55\147\164\167\141\171", array(AdminController::class, "\163\x6d\163\x47\x74\x79"))->name("\x73\x6d\163\x47\164\171"); Route::post("\57\163\x6d\163\55\147\x74\167\x61\x79\x2d\165\160\144\141\x74\x65", array(AdminController::class, "\163\155\x73\x47\164\x79\x55\x70\144\141\164\145"))->name("\163\x6d\x73\x47\164\x79\x55\x70\x64\141\x74\x65"); Route::get("\57\160\141\x79\155\x65\156\x74\55\x67\x74\x77\x61\x79", array(AdminController::class, "\160\141\171\155\x65\x6e\164\107\x74\171"))->name("\x70\141\x79\155\x65\156\164\107\x74\171"); Route::post("\x2f\x70\141\x79\x6d\x65\x6e\x74\55\x67\164\167\141\x79\55\x75\160\144\x61\x74\145", array(AdminController::class, "\x70\x61\x79\x6d\145\x6e\x74\107\164\171\x55\x70\x64\141\x74\x65"))->name("\x70\141\x79\155\x65\156\x74\x47\164\x79\125\160\144\141\x74\x65"); Route::get("\x2f\154\x69\x63\x65\x6e\x73\145\55\155\x61\156\141\147\x65\x6d\145\156\164", array(AdminController::class, "\x6c\x69\x63\145\156\x73\145\x4d\x67\164"))->name("\154\151\x63\x65\x6e\163\x65\115\x67\164"); Route::post("\57\x6c\x69\143\x65\156\x73\145\x2d\165\x70\144\x61\164\x65", array(AdminController::class, "\154\151\143\x65\x6e\x73\145\x55\x70\x64\141\x74\145"))->name("\x6c\151\143\x65\156\x73\x65\125\x70\144\141\164\145"); Route::post("\57\154\x69\x63\x65\156\163\x65\55\101\x64\x64", array(AdminController::class, "\x41\x64\144\114\151\x63\x65\x6e\163\145"))->name("\x41\144\144\x4c\x69\143\x65\x6e\163\x65"); Route::get("\x2f\x73\x65\x74\x74\x69\x6e\147", array(AdminController::class, "\x73\x65\x74\164\151\x6e\x67"))->name("\x73\145\164\164\x69\156\x67"); Route::post("\x2f\x73\145\164\164\x69\x6e\x67\x2d\165\160\144\141\164\145", array(AdminController::class, "\163\x65\x74\x74\x69\156\147\x55\160\x64\141\x74\x65"))->name("\163\145\x74\x74\x69\x6e\x67\x55\160\144\141\164\x65"); Route::get("\x2f\150\x6f\x6d\145\160\141\147\145\x2d\163\145\164\x75\160", array(AdminController::class, "\150\157\155\145\123\x65\x74\164\x69\x6e\x67"))->name("\150\x6f\155\x65\123\145\x74\x74\151\156\147"); Route::get("\57\x68\157\155\x65\160\x61\147\145\55\x65\144\x69\x74\57\x7b\x69\x64\x7d", array(AdminController::class, "\150\x6f\155\145\x53\145\x74\164\151\156\147\x45\144\151\x74"))->name("\150\157\155\x65\123\x65\164\164\x69\x6e\x67\x45\x64\x69\x74"); Route::post("\57\150\x6f\155\145\160\x61\x67\x65\x2d\x73\145\x74\165\x70\55\165\x70\x64\141\x74\x65", array(AdminController::class, "\150\x6f\x6d\145\123\x65\164\164\x69\156\147\x55\160\x64\x61\x74\x65"))->name("\x68\x6f\x6d\145\123\x65\164\x74\x69\156\147\125\x70\x64\141\x74\x65"); Route::post("\57\x73\145\x61\x72\143\x68", array(AcademicController::class, "\x73\x69\146\x53\145\x61\x72\x63\x68"))->name("\163\x69\x66\x53\x65\141\162\143\x68"); Route::post("\57\x73\x74\x75\144\x65\x6e\164\x2d\163\x65\141\162\143\150", array(AcademicController::class, "\163\164\165\144\145\x6e\x74\123\145\x61\x72\143\150"))->name("\x73\x74\x75\x64\145\156\164\123\145\141\x72\143\150"); Route::get("\x2f\x63\x61\x74\x65\x67\157\162\171", array(AdminController::class, "\x63\141\164\145\x67\x6f\162\x79"))->name("\143\141\164\145\147\157\162\171"); Route::post("\57\143\141\x74\145\147\157\162\171\x2d\141\x64\144", array(AdminController::class, "\143\141\164\x65\147\x6f\162\171\101\x64\144"))->name("\x63\x61\x74\x65\147\x6f\162\x79\x41\x64\144"); Route::get("\57\x63\x61\x74\145\147\157\x72\x79\x2d\145\144\x69\164\57\x7b\x69\144\x7d", array(AdminController::class, "\143\x61\x74\145\x67\x6f\x72\171\105\x64\x69\164"))->name("\x63\x61\164\x65\x67\x6f\162\x79\105\x64\151\164"); Route::get("\57\143\141\164\x65\147\157\162\171\57\144\x65\154\x65\164\145\57\173\x69\144\175", array(AdminController::class, "\143\x61\164\x65\147\157\162\171\104\145\163\164\x72\x6f\171"))->name("\143\x61\164\x65\x67\157\162\x79\x44\x65\x73\x74\162\157\x79"); Route::post("\x2f\x63\141\164\145\147\x6f\162\x79\x2d\165\160\144\141\164\x65", array(AdminController::class, "\x63\141\x74\145\147\157\162\x79\x55\x70\144\x61\164\x65"))->name("\143\141\x74\x65\147\157\x72\x79\x55\x70\144\141\164\145"); Route::get("\x2f\x62\162\141\156\x64", array(AdditionalController::class, "\x62\162\x61\156\x64"))->name("\142\x72\x61\x6e\x64"); Route::post("\57\142\162\141\x6e\x64\55\141\144\144", array(AdditionalController::class, "\142\x72\x61\x6e\144\101\x64\144"))->name("\142\x72\141\156\144\101\144\x64"); Route::get("\57\x62\x72\141\x6e\144\55\x65\144\151\164\x2f\x7b\151\x64\x7d", array(AdditionalController::class, "\x62\162\x61\156\x64\x45\144\x69\164"))->name("\x62\x72\141\x6e\144\x45\144\x69\164"); Route::get("\57\x62\162\x61\156\144\x2f\144\x65\x6c\x65\164\145\57\173\151\x64\x7d", array(AdditionalController::class, "\142\x72\x61\x6e\x64\x44\x65\163\164\162\157\x79"))->name("\x62\162\141\x6e\144\104\x65\x73\x74\x72\x6f\171"); Route::post("\x2f\142\x72\141\x6e\x64\x2d\165\160\144\x61\x74\x65", array(AdditionalController::class, "\142\162\x61\x6e\x64\x55\x70\144\x61\164\x65"))->name("\x62\162\141\x6e\x64\x55\x70\x64\x61\164\x65"); Route::get("\57\160\162\x6f\x64\x75\143\164", array(AdminController::class, "\x70\x72\x6f\x64\x75\x63\164"))->name("\x70\x72\x6f\x64\165\143\164"); Route::get("\x2f\160\162\x6f\x64\x75\x63\164\57\144\145\x6c\145\164\145\57\x7b\151\x64\175", array(AdminController::class, "\x70\162\157\144\x75\x63\x74\x44\x65\x73\x74\162\x6f\x79"))->name("\160\x72\157\144\x75\143\164\104\145\163\x74\x72\157\171"); Route::get("\57\x70\x72\x6f\144\x75\143\x74\x2d\x65\144\151\x74\x2f\173\x69\144\x7d", array(AdminController::class, "\160\162\157\x64\165\143\164\105\144\x69\164"))->name("\160\162\157\144\165\x63\x74\x45\x64\151\164"); Route::post("\x2f\160\x72\157\x64\x75\143\x74\55\x75\160\x64\x61\x74\145", array(AdminController::class, "\160\162\157\144\x75\143\x74\125\x70\144\141\x74\145"))->name("\x70\x72\x6f\x64\165\143\164\x55\160\144\x61\164\x65"); Route::post("\x2f\x70\x72\157\144\165\x63\164\x2d\x61\144\x64", array(AdminController::class, "\160\x72\x6f\x64\x75\143\x74\x41\144\x64"))->name("\160\162\x6f\x64\x75\143\164\101\x64\x64"); Route::get("\57\154\141\x6e\144\151\156\147\55\x76\151\145\167", array(AdminController::class, "\154\x61\156\x64\151\x6e\147\123\150\157\167"))->name("\x6c\x61\x6e\x64\x69\156\x67\x53\150\157\x77"); Route::get("\x2f\x6c\x61\x6e\144\151\x6e\x67\x2d\141\144\144", array(AdminController::class, "\141\x64\x64\114\141\156\144\x69\156\147\120\x61\x67\145"))->name("\x61\144\144\114\x61\156\x64\x69\x6e\147\x50\141\x67\145"); Route::get("\57\x6c\141\156\144\x69\x6e\x67\x2d\x65\144\x69\164\x2f\173\151\144\x7d", array(AdminController::class, "\145\144\151\164\x4c\141\x6e\144\151\x6e\147\x50\x61\x67\145"))->name("\x65\144\151\164\x4c\x61\x6e\144\x69\x6e\x67\120\141\147\x65"); Route::post("\57\x6c\141\156\144\x69\x6e\x67\55\x73\x75\142\155\x69\164", array(AdminController::class, "\163\x75\142\155\151\x74\114\x61\156\144\x69\156\x67"))->name("\x73\x75\x62\155\x69\164\114\141\x6e\144\x69\156\147"); Route::post("\57\163\145\141\x72\143\x68", array(AdminController::class, "\x70\162\x6f\x64\x75\x63\x74\x53\x65\x61\x72\x63\150"))->name("\x70\x72\x6f\144\x75\x63\x74\123\145\x61\x72\x63\150"); Route::get("\57\x6c\141\x6e\x64\151\x6e\147\x2f\144\145\154\145\164\x65\57\x7b\151\x64\x7d", array(AdminController::class, "\x6c\141\x6e\x64\151\156\x67\104\145\163\164\x72\x6f\171"))->name("\x6c\141\156\144\151\x6e\x67\104\x65\163\x74\x72\x6f\171"); Route::get("\57\x61\x6c\154\x2d\145\x6d\160\x6c\157\x79\145\145", array(AdminController::class, "\x73\x74\141\x66\146"))->name("\163\x74\x61\x66\x66"); Route::get("\57\x65\155\160\x6c\x6f\x79\x65\x65\55\x74\x79\160\x65\x2f\x7b\151\144\175", array(AdminController::class, "\x73\x74\141\146\146\124\171\160\145"))->name("\x73\164\x61\146\x66\x54\x79\x70\145"); Route::get("\57\145\155\160\x6c\x6f\x79\x65\x65\x2d\x65\x64\151\164\57\173\151\144\x7d", array(AdminController::class, "\163\x74\141\x66\146\x45\x64\x69\164"))->name("\163\x74\141\x66\146\x45\x64\x69\164"); Route::post("\x2f\x65\x6d\160\154\x6f\x79\x65\145\x2d\x75\x70\x64\x61\164\x65", array(AdminController::class, "\163\164\x61\x66\x66\125\x70\x64\141\164\145"))->name("\163\164\141\x66\x66\x55\160\144\x61\164\145"); Route::get("\x2f\x65\155\x70\154\157\x79\145\x65\57\x64\x65\154\x65\x74\145\x2f\173\x69\x64\175", array(AdminController::class, "\x73\x74\141\x66\146\x44\145\163\164\x72\157\x79"))->name("\x73\164\x61\x66\146\x44\x65\x73\164\x72\157\171"); Route::post("\x2f\145\155\160\x6c\x6f\171\145\x65\x2d\141\x64\144", array(AdminController::class, "\163\164\x61\x66\x66\x41\x64\144"))->name("\x73\164\x61\x66\146\x41\x64\x64"); Route::get("\x2f\x61\154\x6c\55\165\x70\x6c\x6f\141\x64\x73", array(AdminController::class, "\165\160\154\x6f\x61\x64"))->name("\x75\x70\154\157\x61\x64"); Route::post("\57\146\151\x6c\145\55\141\144\144", array(AdminController::class, "\146\151\154\145\101\x64\144"))->name("\146\151\154\x65\x41\144\x64"); Route::get("\57\x66\151\154\x65\57\144\145\154\145\164\145\57\x7b\x69\144\175", array(AdminController::class, "\x66\x69\x6c\x65\x44\x65\163\x74\162\x6f\x79"))->name("\146\x69\154\x65\x44\145\x73\x74\x72\157\x79"); Route::get("\x2f\x61\154\x6c\55\x6e\157\x74\x69\143\x65", array(AdminController::class, "\156\157\x74\151\x63\x65"))->name("\156\157\164\151\x63\x65"); Route::post("\x2f\156\157\x74\x69\143\145\x2d\141\144\144", array(AdminController::class, "\156\x6f\x74\151\143\145\x41\x64\x64"))->name("\x6e\x6f\164\x69\x63\145\101\144\x64"); Route::get("\x2f\x6e\x6f\164\x69\x63\x65\57\144\x65\154\x65\x74\x65\x2f\173\151\144\175", array(AdminController::class, "\x6e\x6f\x74\x69\x63\145\104\145\163\164\162\x6f\171"))->name("\x6e\x6f\164\x69\x63\145\x44\145\x73\x74\162\x6f\x79"); Route::get("\x2f\x6f\162\x64\x65\162\57\x7b\151\x64\x7d", array(AdminController::class, "\x6f\x72\x64\x65\162"))->name("\x6f\x72\x64\x65\162"); Route::get("\57\157\162\144\x65\x72\55\145\x64\x69\164\57\173\151\144\x7d", array(AdminController::class, "\x6f\x72\144\x65\x72\105\144\151\x74"))->name("\157\162\x64\x65\162\x45\144\x69\164"); Route::get("\57\157\162\144\x65\x72\57\144\145\154\145\x74\x65\57\x7b\151\x64\x7d", array(AdminController::class, "\x6f\x72\x64\x65\162\104\145\x73\164\x72\x6f\x79"))->name("\x6f\x72\x64\145\162\x44\145\x73\x74\162\x6f\171"); Route::get("\x2f\157\162\x64\x65\x72\55\x64\x65\164\x61\151\x6c\163\x2f\x7b\x69\144\175", array(AdminController::class, "\157\162\144\145\x72\x44\145\x74\x61\x69\x6c\x73"))->name("\x6f\162\x64\x65\x72\x44\x65\x74\141\x69\154\x73"); Route::post("\57\157\162\144\145\162\x2d\x75\x70\144\141\x74\145", array(AdminController::class, "\157\162\144\x65\x72\125\160\x64\x61\x74\145"))->name("\157\162\144\x65\162\125\x70\144\x61\164\145"); Route::get("\x2f\x73\x6d\x73\x2f\173\151\144\x7d", array(AdminController::class, "\x73\151\156\147\154\x65\x53\155\163"))->name("\163\151\x6e\x67\154\145\x53\155\163"); Route::post("\57\x73\x6d\163\55\x73\145\x6e\144", array(AdminController::class, "\123\x6d\x73\104\141\164\141"))->name("\123\x6d\x73\104\141\x74\x61"); });