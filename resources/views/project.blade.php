<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>Document</title>
    {{--    <script src="https://cdn.tailwindcss.com"></script>--}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{--    <link href="dist/style.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- <script src="re.js"></script> -->
    <!-- <script>
      let btn = document.querySelector("button");
let div = document.getElementById("re");
btn.addEventListener("click", () => {
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
});
    </script> -->
</head>
<body>
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('database') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">تم تسجيل الدخول</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
</div>
    @endif
<div >
<div class="bg-gray-50 w-full">
<div class="  bg-blue-950 p-1  ">
    <header class=" container mx-auto  ">
        <div class="  text-xs space-x-2  text-start mt-3 lg:-mr-2 ">
            <a href="#" class=" ml-3 mr-3 text-white hover:bg-slate-500 border rounded-full w-10 p-1">MyQU </a>
            <a href="#" class=" text-white hover:text-slate-500"> معلومات </a>
            <a href="#" class=" text-white  hover:text-slate-500"> التقويم </a>
            <a href="#" class=" text-white  hover:text-slate-500"> الاخبار </a>
        </div>

        <div class=" text-xs text-slate-50 flex justify-end ml-7 -mt-5  ">
            <div class="border rounded-full p-1.5 h-7 w-7 ml-3  hover:bg-slate-500 ">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="border rounded-full p-1.5 h-7 w-7  hover:bg-slate-500">EN</div>

        </div>

    </header>
</div>


<nav class="container mx-auto py-5 ">
    <div class=" grid grid-cols-8 space-x-2 text-xs  ">

        <a class="col-span-2 mx-auto mt-4 w-1/2 " href="https://qu.edu.sa">
            <img class=" -mt-2 h-10" src="https://data.qu.edu.sa/img/qu_logo.svg" alt="logo">
        </a>

        <a href="#" class=" pt-6 text-blue-950 hover:text-slate-500 ">الجامعة </a>
        <a href="#" class="pt-6 text-blue-950 hover:text-slate-500"> الكليات </a>
        <a href="#" class=" pt-6 text-blue-950 hover:text-slate-500"> القبول </a>
        <a href="#" class=" pt-6 text-blue-950 hover:text-slate-500"> الابحاث </a>
        <a href="#" class=" col-span-2 pt-6  text-blue-950 hover:text-slate-500"> الحياة الجامعية </a>

    </div>
</nav>
<section id="sersh">
    <div class="bg-sky-700  h-52  flex flex-col items-center ">
        <h1 class="   text-center font-bold pt-20 text-white ">
            ابحث عن البينات </h1>

        <input type="text" id="text" name="text" placeholder="بحث "
               class="text-white bg-blue-950 bg-opacity-70 placeholder-white placeholder-opacity-40   mt-4  py-3 px-10 border-white ring-1 ring-white ring-opacity-80 focus:ring-2 focus:ring-white focus:ring-opacity-70 focus:border-white border-0 block w-96 h-9 sm:text-sm ">
        <div class="text-slate-50   text-lg -mt-8 mr-80  ">
            <i class="fa-solid fa-magnifying-glass"></i> <!--Icon-->
        </div>
    </div>

    <!-- <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg> -->


</section>
<sectionn >
    <div class="container  mt-14 mx-auto">
        <div class=" grid grid-cols-4 border  gap-4 mx-8 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 xl:mx-44  ">


            <!-- 1 -->

            <div id="id1"
                 class=" hover:bg-slate-300 col-span-2  xl:col-span-1 lg:col-span-1 md:col-span-1 lg:border-l-2 ">

                <div class=" text-sky-500 text-xl h-7 w-7 md:text-xl  lg:text-2xl ">
                    <i class="fa-solid fa-file mt-5 mr-5  md:mt-6 md:mr-4 lg:mt-5  lg:mr-6"></i> <!--Icon-->
                </div>
                <div class=" -mt-6 py-4   md:pr-4">
                    <p class=" text-center text-xs text-blue-950 md:mt-1 font-bold "> عن البيانات المفتوحة</p>
                </div>
            </div>

            <!-- 2 -->

                <div id="id2"
                    class="  hover:bg-slate-300 col-span-2  xl:col-span-1 lg:col-span-1 md:col-span-1 lg:border-l-2 md:border-l-2">
                    <div class="  text-yellow-200 text-xl h-7 w-7 md:text-lg md:-mr-3  lg:text-2xl ">
                        <i class="fa-solid fa-book mt-5 mr-5  md:mt-6 md:mr-4 lg:mt-5  lg:mr-6"></i> <!--Icon-->
                    </div>
                    <div class=" -mt-6 py-4   md:pr-4">
                        <p class=" text-center text-xs font-bold  text-blue-950 "> مكتبة البيانات المفتوحة</p>
                    </div>
                </div>
            <!-- 3 -->
            <div
                class="  hover:bg-slate-300 col-span-2  xl:col-span-1 lg:col-span-1 md:col-span-1 lg:border-l-2 md:border-l-2">
                <div class="  text-red-400 text-m h-7 w-7 md:text-md  lg:text-xl md:-mr-2 ">
                    <i class="fa-solid fa-warehouse mt-5 mr-5  md:mt-6 md:mr-4 lg:mt-5  lg:mr-6"></i> <!--Icon-->
                </div>
                <div class=" -mt-6 py-4 mr-3  md:pr-4">
                    <p class=" text-center text-xs font-bold  text-blue-950 "> سـيـاسـة البيانات المفتوحة</p>
                </div>
            </div>
            <!-- 4 -->
            <div class="  hover:bg-slate-300 col-span-2  xl:col-span-1 lg:col-span-1 md:col-span-1 md:border-l-2">
                <div class="  text-green-200  text-xl h-7 w-7 md:text-xl  lg:text-2xl   ">
                    <i class="fa-solid fa-folder mt-5 mr-5  md:mt-6 md:mr-4 lg:mt-5  lg:mr-6"></i> <!--Icon-->
                </div>
                <div class=" -mt-6 py-4   md:pr-4">
                    <p class="text-center text-xs font-bold  text-blue-950"> ارشادات الاستخدام</p>
                </div>
            </div>
        </div>

    </div>
</sectionn>

{{--<div id="showhideUsers">--}}

<div class="container  mt-16  mx-auto   mb-96 ">
    <div id="info" class="border-b border bg-white  mr-11 ml-11 mx-auto  px-24 py-14 hidden">

        <h4 class=" text-m  font-bold my-5 text-blue-950 ">
            عن البيانات المفتوحة
        </h4>
        <p class="   font-light mb-8 ">
            البيانات المفتوحة متاحة لجميع مستخدمي البوابة الإلكترونية
            لجامعة القصيم ، وهي تهدف إلى تعزيز المشاركة المجتمعية ورفع
            مستوى نشر المعرفة وعلى زائري البوابة والمستفيدين من خدماتها
            الاطلاع على سياسة استخدام تلك البيانات لمعرفة أي تحديثات يتم
            عليها.
        </p>
    </div>

    <div id="data" class="col-span-full hidden">
        <div class="shadow-lg sm:rounded-md  sm:overflow-hidden mx-5 xl:mx-44">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6  ">
                <div class="mb-16 ">
                    <div class="grid grid-cols-1 gap-6  px-5 border-b border-slate-300 pb-16 ">
                        {{--                    <div class="col-span-full grid grid-cols-2 gap-3 py-5 cursor-pointer" onclick="window.location = &quot;https://data.qu.edu.sa/11&quot;">--}}
                        <h4 class=" col-span-full text-sm text-blue-950 font-bold hover:text-slate-500">
                            بيانات اعضاء هيئة التدريس
                        </h4>
                        <p class=" col-span-full text-xs text-slate-400 font-light ">
                            بيانات اعضاء هيئة التدريس بيانات اعضاء هيئة التدريس بيانات اعضاء هيئة التدريس
                        </p>
                        {{--                    </div>--}}
                    </div></div>
                <div class="grid grid-cols-fll gap-6  px-5 ">
                    {{--                    <div class="col-span-full grid grid-cols-2 gap-3 py-5 cursor-pointer" onclick="window.location = &quot;https://data.qu.edu.sa/11&quot;">--}}
                    <h4 class=" text-sm text-blue-950 font-bold hover:text-slate-500">
                        بيانات المقبولين حسب الجنس
                    </h4>
                    <p class=" text-xs text-slate-400 font-light">
                        بيانات المقبولين حسب الجنس بيانات المقبولين حسب الجنس بيانات المقبولين حسب الجنس
                    </p>
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
{{--     @foreach($test as $data)--}}
{{--            <tr>--}}
{{--            <td>{{$data->Title }}</td>--}}
{{--            <td>{{$data->description }}</td>--}}
{{--            </tr>--}}
{{--        @endforeach --}}
    </div>
</div>
</div>
<!--
<script>

let usersSection = document.querySelector("usersSection");
let isShow= true;
function showhideUsers() {
if (isShow) {
 usersSection.style.display = "none";
isShow =false;
} else {
usersSection.style.display = "block";
isShow= true;
}
}
 </script>
 <script>
   var div =document.getElementById('min')
   var display = 0;
   function hideSow(){
    if (display == 1){
      div.
    }

   }
 </script>

 </section>
 <button>Toggle</button>
 <div id="re" class="h-52 w-56 bg-slate-500 mx-auto hidden" ></div>-->

<footer class="bg-blue-950 ">
    <div class="mx-auto max-w-screen-2xl space-y-8 px-4 py-36 sm:px-6 lg:space-y-48 lg:px-8">
    </div>
</footer>
<script>

    let click1 = document.getElementById("id2");
    let btt = document.getElementById("data");
    let click2 = document.getElementById("id1");
    let btn = document.getElementById("info");

    click1.addEventListener("click", () => {
        if (btt.classList.contains('hidden')) {
            btn.classList.replace('block','hidden');
            btt.classList.replace("hidden", "block");
        } else {
            btt.classList.replace("block", "hidden");
        }
    });

    click2.addEventListener("click", () => {

        if (btn.classList.contains('hidden')) {
            btt.classList.replace('block','hidden');
            btn.classList.replace("hidden", "block");
        } else {
            btn.classList.replace("block", "hidden");
        }});
</script>
{{--<script src="re.js"></script>--}}
</div>
</body>

</html>
