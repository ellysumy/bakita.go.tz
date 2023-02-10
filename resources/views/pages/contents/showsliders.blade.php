<x-layout bodyClass="g-sidenav-show  bg-gray-200">
        <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="Words"></x-navbars.navs.auth>
            <!-- End Navbar -->
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">The Sliders List</h6>
                                </div>
                            </div>

                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0 container mb-5">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Sliders Name</th>
                                                
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Description/ Slider Captions</th>

                                                    <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Image</th>
                                                
                                                    <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Action</th>
                                                    
                                                <th class="text-secondary align-middle text-center"><a href="addslider" title="Add new Slider" class="badge badge-sm bg-gradient-success">Add +</a> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($sliders as $slider)



                                             
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        
                                                        <div class="col-12 mb-0" >
                                                            <p class="max-height-vh-100">{{$slider->title}} </p> 
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                <td >
                                                    <div class="d-flex px-2 py-1" >
                                                        <!-- Here we have to cut word and show full in show function -->
                                                        <div class="col-12 mb-0" >
                                                            <p class="max-height-vh-100">{{$slider->title}} </p> 
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                <div>
                                                <td>
                                                    <div class="d-flex">      <img src="{{asset('images/sliders/'.$slider->image_path) }}"
                                                                class="avatar avatar-sm border-radius-lg"
                                                                alt="user1">
                                                        </div>
                                                    </td>
                                            
                                                <td class="align-middle text-center text-sm">
                                                    <a href="/{{$slider->slug}}/edit"
                                                        class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        Edit
                                                    </a> |
                                                    <a href="javascript:;"
                                                        class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        Delete
                                                    </a>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <a href="/sliders/{{ $slider->slug }}"
                                                        class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>

                                            @endforeach 
                                    
                                        </tbody>

                                    </table>
                                    <div class="d-flex justify-content-center">
                                        {!! $sliders->links() !!}
                                    </div>

                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
        <x-plugins></x-plugins>

</x-layout>
