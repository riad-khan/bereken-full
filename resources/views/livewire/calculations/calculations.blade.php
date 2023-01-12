@section('meta')
    <title>{{$seo_data[0]->title}}</title>
    <meta name="description" content="{{$seo_data[0]->seo_meta}}">
    <meta name="keywords" content="{{$seo_data[0]->seo_keywords}}">
@endsection
<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <div class="sm:w-[490px] w-full mx-auto px-4 mb-4">
                <div class="flex items-center">
                    <div class="hidden sm:flex sm:flex-none w-14">
                        <img src="{{asset('/frontend/assets/img/calculator-round.svg')}}" alt="icon">
                    </div>
                    <div class="grow text-center">
                        <h1
                            class="text-[#2B313B] font-semibold text-[24px] sm:text-[28px] md:text-[32px] leading-[1.1]">
                            All Calculations that you can find out</h1>
                    </div>
                    <div class="sm:flex sm:flex-none w-14 hidden">
                        <img src="{{asset('/frontend/assets/img/hero-arrow.svg')}}" alt="icon">
                    </div>
                </div>
            </div>
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="inline-flex items-center text-sm font-normal  text-[#2B313B] hover:text-gray-900">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> / </span><a
                                class="ml-1 text-sm font-normal text-[#2B313B] hover:text-gray-900 md:ml-2">Calculations</a>
                        </div>
                    </li>
                    
                </ol>
            </nav>
            <!-- Calculations Start -->
            <div class="services-area w-full py-8">

                <div class="sm:grid-cols-1 gap-2 grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-4">
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                </div>

            </div>
            <!-- Calculations End -->

        </div>
        <!-- container end -->
    </section>

    <section class="bg-[#F5F8FF] w-full p-4 md:p-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex p-6 flex-col items-center ">
                <div class="content text-center sm:text-left flex-none sm:flex sm:justify-center sm:items-center">
                    <div class="img-box w-full sm:w-2/5 order-none mb-6 sm:m-0 sm:order-last">
                        <img src="{{asset('/frontend/assets/img/contact-us.svg')}}" class="mx-auto w-full sm:mx-0" alt="image">
                    </div>
                    <div class="text-content text-center sm:w-3/5 sm:text-left">
                        <h6 class="text-2xl sm:text-xl lg:text-2xl font-normal mb-8 text-[#2B313B]">We are best reached
                            via WhatsApp and chat Feel free to contact us if you want to know more. We are there today
                            until 18:00.</h6>
                        <a href="#"  class="outline-btn btn-translate-z flex w-fit bg-[#112954] text-white text-base font-bold py-2.5 px-6 rounded-lg transition-all">Contact Us</a>
                    </div>
                </div>
            </div>
        </div><!-- container end -->
    </section>
</div>
