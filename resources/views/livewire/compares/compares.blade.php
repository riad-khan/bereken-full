@section('meta')
    <title>{{$seo_data[0]->title}}</title>
    <meta name="description" content="{{$seo_data[0]->seo_meta}}">
    <meta name="keywords" content="{{$seo_data[0]->seo_keywords}}">
@endsection
<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <div class="sm:w-[480px] w-full mx-auto px-4 mb-4">
                <div class="flex items-center">
                    <div class="hidden sm:flex sm:flex-none w-14">
                        <img src="{{asset('/frontend/assets/img/umbrella.svg')}}" alt="icon">
                    </div>
                    <div class="grow text-center">
                        <h1
                            class="text-[#2B313B] font-semibold text-[24px] sm:text-[28px] md:text-[32px] leading-[1.1]">
                            All Compares that you can find out</h1>
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
                               
                                class="ml-1 text-sm font-normal text-[#2B313B] hover:text-gray-900 md:ml-2">Compares</a>
                        </div>
                    </li>
                  
                </ol>
            </nav>
            <!-- services Start -->
            <div class="services-area w-full py-8">

                <div class="section-title text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">Insurance</h2>
                </div>
                <div class="sm:grid-cols-1 gap-2 grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-2">
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/Liability Insurance.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            Liability insurance</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/home-insurance.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            Home Insurance</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/Travel Insurance.svg')}}" class="mr-3 h-10 w-10" alt="icon"> Travel insurance
                        </a>
                    </div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href="/car-insurance"><img src="{{asset('/frontend/assets/img/icons/car-insurance.svg')}}" class="mr-3 h-10 w-10" alt="icon"> Car
                            Insurance</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/van-insurance.svg')}}" class="mr-3 h-10 w-10" alt="icon"> Van insurance
                        </a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/scooter-insurance.svg')}}" class="mr-3 h-10 w-10" alt="icon"> Scooter insurance
                        </a></div>
                </div>


                <div class="section-title text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">Internet & Calling</h2>
                </div>
                <div class="sm:grid-cols-1 gap-2 grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-2">
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href="/internet"><img src="{{asset('/frontend/assets/img/icons/Smart-TV.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            Internet & TV</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href="/sim-only"><img src="{{asset('/frontend/assets/img/icons/Sim.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            Sim Only</a></div>
                </div>

                
                <div class="section-title text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">Health Care</h2>
                </div>
                <div class="sm:grid-cols-1 gap-2 grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-2">
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/Health-Insurance.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            Health Insurance</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/physiotherapy.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            Physiotherapy</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/general-practitioner.svg')}}" class="mr-3 h-10 w-10" alt="icon"> General practitioner</a>
                    </div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/Dental.svg')}}" class="mr-3 h-10 w-10" alt="icon"> Dentist</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/hospital.svg')}}" class="mr-3 h-10 w-10" alt="icon"> Hospital</a></div>
                </div>
                

                <div class="section-title text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">Money</h2>
                </div>
                <div class="sm:grid-cols-1 gap-2 grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-2">
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/borrow-money-2.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            Borrow Money</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/cover.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            Cover</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/savings-account.svg')}}" class="mr-3 h-10 w-10" alt="icon"> Savings account</a>
                    </div>
                </div>
                
                
                <div class="section-title text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">Mortgage</h2>
                </div>
                <div class="sm:grid-cols-1 gap-2 grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-2">
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/mortgage.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            House Mortgage</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/mortgage-rates.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            Compare mortgage rates</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/maximum-mortgage.svg')}}" class="mr-3 h-10 w-10" alt="icon"> Maximum mortgage</a>
                    </div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/advisors-in-your-area.svg')}}" class="mr-3 h-10 w-10" alt="icon"> Compare advisors in your area</a></div>
                </div>
                
                
                <div class="section-title text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">Energy</h2>
                </div>
                <div class="sm:grid-cols-1 gap-2 grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-2">
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/Energy-Cost.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            Energy Cost</a></div>
                    <div><a class="service-btn lg:mx-auto flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/solar-panels.svg')}}" class="mr-3 h-10 w-10" alt="icon">
                            Solar panels</a></div>
                </div>
            </div>
            <!-- services End -->

        </div>
        <!-- container end -->
    </section>

      <!-- contact-us - start -->
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
                        <a href="/contact-us"  class="outline-btn btn-translate-z flex w-fit bg-[#112954] text-white text-base font-bold py-2.5 px-6 rounded-lg transition-all">Contact Us</a>
                    </div>
                </div>
            </div>
        </div><!-- container end -->
    </section>
</div>
