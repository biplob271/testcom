<li class="nav-item">
    <a href="{{route('dashboard')}}" class="nav-link {{ Request()->routeIs('dashboard') ? 'active' : ' ' }}">
        <i class="nav-icon fas fa-tachometer-alt text-sm"></i>
        <p> ড্যাশবোর্ড </p>
    </a>
</li>
 <li class="nav-item">
    <a href="{{route('slider')}}" class="nav-link {{ Request()->routeIs('slider') ? 'active' : ' ' }}">
        <i class="nav-icon far fa-image t text-sm"></i>
        <p> স্লাইডার  ম্যানেজমেন্ট </p>
    </a>
 </li>      
 <li class="nav-item has-treeview  {{ Request()->routeIs('landingShow','addLandingPage') ? 'menu-open' : ' ' }}">
<a href="" class="nav-link {{ Request()->routeIs('landingShow','addLandingPage') ? 'active' : ' ' }}">
    <i class="nav-icon far fa-file text-sm"></i>
    <p>
       ল্যান্ডিং পেজ
        <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">   
    <li class="nav-item">
        <a href="{{route('addLandingPage')}}" class="nav-link {{ Request()->routeIs('addLandingPage') ? 'active' : ' ' }}">
            <i class="nav-icon far fa-circle text-sm"></i>
            <p> ল্যান্ডিং পেজ যোগ করুন</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('landingShow')}}" class="nav-link {{ Request()->routeIs('landingShow') ? 'active' : ' ' }}">
            <i class="nav-icon far fa-circle text-sm"></i>
            <p>ল্যান্ডিং পেজ দেখুন </p>
        </a>
    </li>
    </ul>
</li>
 <li class="nav-item">
        <a href="{{route('category')}}" class="nav-link {{ Request()->routeIs('category') ? 'active' : ' ' }}">
            <i class="nav-icon fas fa-list text-sm"></i>
            <p> ক্যাটাগোরি </p>
        </a>
    </li>
    
<li class="nav-item">
    <a href="{{route('product')}}" class="nav-link {{ Request()->routeIs('product') ? 'active' : ' ' }}">
    <i class="nav-icon fas fa-sitemap text-sm"></i>
        <p> পোডাক্ট </p>
    </a>
</li>


<li class="nav-item has-treeview  {{ Request()->routeIs('order') ? 'menu-open' : ' ' }}">
    <a href="" class="nav-link {{ Request()->routeIs('order') ? 'active' : ' ' }}">
    <i class="nav-icon far fa-chart-bar text-sm"></i>
    <p>
       অর্ডার ম্যানেজমেন্ট
       <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">   
    <li class="nav-item">
        <a href="{{route('order', 'Pending')}}" class="nav-link {{ request()->is('cp/order/Pending') ? 'active' : '' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
        <p>পেন্ডিং অর্ডার</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('order', 'Processing')}}" class="nav-link {{ request()->is('cp/order/Processing') ? 'active' : '' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
        <p>প্রসেসিং  অর্ডার</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('order', 'success')}}" class="nav-link {{ request()->is('cp/order/success') ? 'active' : '' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
        <p>কম্প্লিট অর্ডার</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('order', 'delivered')}}" class="nav-link {{ request()->is('cp/order/delivered') ? 'active' : '' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
        <p>ডেলির্ভাড অর্ডার</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('order', 'canceled')}}" class="nav-link {{ request()->is('cp/order/canceled') ? 'active' : '' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
        <p>ক্যানসেলড অর্ডার</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('order', 'all')}}" class="nav-link {{ request()->is('cp/order/all') ? 'active' : '' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
        <p>সকল অর্ডার দেখুন</p>
        </a>
    </li>
    </ul>
</li>




<li class="nav-item has-treeview  {{ Request()->routeIs('viewUser','addUser') ? 'menu-open' : ' ' }}">
    <a href="" class="nav-link {{ Request()->routeIs('viewUser','addUser') ? 'active' : ' ' }}">
    <i class="nav-icon fa fa-user-tie text-sm"></i>
    <p>
        ষ্টাফ  ম্যানেজমেন্ট
        <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">   
 
    <li class="nav-item">
    <a href="{{route('viewUser')}}" class="nav-link {{ request()->routeIs('viewUser') ? 'active' : '' }}">
    <i class="nav-icon far fa-circle text-sm"></i>
        <p> সকল ষ্টাফ দেখুন </p>
    </a>
    </li>


    <li class="nav-item">
    <a href="{{route('addUser')}}" class="nav-link {{ request()->routeIs('addUser') ? 'active' : '' }}">
    <i class="nav-icon far fa-circle text-sm"></i>
        <p> ষ্টাফ যোগ করুন </p>
    </a>
    </li>
  
    </ul>
</li>

    <li class="nav-item">
        <a href="{{route('singleSms', 'single')}}" class="nav-link {{ request()->is('sms/single') ? 'active' : '' }}">
        <i class="nav-icon fas fa-envelope-open-text text-sm"></i>
        <p>বার্তা পাঠান</p>
        </a>
    </li>
{{-- 
<li class="nav-item">
    <a href="{{route('blogPost')}}" class="nav-link {{ Request()->routeIs('blogPost') ? 'active' : ' ' }}">
        <i class="nav-icon fa fa-blog text-sm"></i>
        <p>SUBMIT NEWS</p>
    </a>
</li> --}}


{{-- <li class="nav-item">
    <a href="/" class="nav-link {{ Request()->routeIs('admin_distributor', 'admin_distributor_outlet') ? 'active' : ' ' }}">
        <i class="nav-icon fas fa-th text-sm"></i>
        <p> Distributors </p>
    </a>
</li> --}}



<li class="nav-item has-treeview  {{ Request()->routeIs('setting','DeliveryCharge','theme') ? 'menu-open' : ' ' }}">
    <a href="" class="nav-link {{ Request()->routeIs('setting','DeliveryCharge','theme') ? 'active' : ' ' }}">
    <i class="nav-icon far fa-futbol text-sm"></i>
    <p>
    ওয়েবসাইট সেটাপ
        <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
   
   
    <li class="nav-item">
        <a href="{{route('setting')}}" class="nav-link {{ Request()->routeIs('setting') ? 'active' : ' ' }}">
            <i class="nav-icon  far fa-circle text-sm"></i>
            <p> জেনারেল সেটাপ</p>
        </a>
    </li>
	
    <li class="nav-item">
        <a href="{{route('DeliveryCharge')}}" class="nav-link {{ Request()->routeIs('DeliveryCharge') ? 'active' : ' ' }}">
            <i class="nav-icon far fa-circle text-sm"></i>
            <p>শিপিং চার্জ সেটাপ</p>
        </a>
    </li>
	
	
    </ul>
</li>


<li class="nav-item has-treeview  {{ Request()->routeIs('smsGty','paymentGty','licenseMgt','SysUpdate','steadFast') ? 'menu-open' : ' ' }}">
    <a href="" class="nav-link {{ Request()->routeIs('smsGty','paymentGty','licenseMgt','SysUpdate','steadFast') ? 'active' : ' ' }}">
    <i class="nav-icon fas fa-cogs text-sm"></i>
    <p>
       স্টিষ্টেম কনফিগারেশন
        <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview"> 
    <li class="nav-item">
        <a href="{{route('theme')}}" class="nav-link {{ Request()->routeIs('theme') ? 'active' : ' ' }}">
            <i class="nav-icon  far fa-circle text-sm"></i>
            <p>থীম আপলোড</p>
        </a>
    </li>  
    <li class="nav-item">
        <a href="{{route('paymentGty')}}" class="nav-link {{ Request()->routeIs('paymentGty') ? 'active' : ' ' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
        <p>পেমেন্ট গেটওয়ে সেটাপ</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('steadFast')}}" class="nav-link {{ Request()->routeIs('steadFast') ? 'active' : ' ' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
            <p>কুরিয়ার  সেটাপ</p>
        </a>
	</li>
    <li class="nav-item">
        <a href="{{route('smsGty')}}" class="nav-link {{ Request()->routeIs('smsGty') ? 'active' : ' ' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
        <p>বার্তা সেটাপ</p>
        </a>
    </li>
   
	<li class="nav-item">
    <a href="{{route('paymentMethod')}}" class="nav-link {{ request()->routeIs('paymentMethod') ? 'active' : '' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
        <p>ফিচার ম্যানেজমেন্ট  </p>
    </a>
	</li>
	
    <li class="nav-item">
        <a href="{{route('SysUpdate')}}" class="nav-link {{ Request()->routeIs('SysUpdate') ? 'active' : ' ' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
        <p> স্টিষ্টেম আপডেট</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('licenseMgt')}}" class="nav-link {{ Request()->routeIs('licenseMgt') ? 'active' : ' ' }}">
        <i class="nav-icon far fa-circle text-sm"></i>
            <p> লাইসেন্স ম্যানেজমেন্ট</p>
        </a>
    </li>
    </ul>
</li>














   
   

    
    