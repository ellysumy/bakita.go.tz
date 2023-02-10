<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Add Contents'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                Contents
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                Creating a new Content
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="true">
                                        <i class="material-icons text-lg position-relative">home</i>
                                        <span class="ms-1">App</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">email</i>
                                        <span class="ms-1">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">settings</i>
                                        <span class="ms-1">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">


     <form method='POST' action="{{ route('contents.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tittle</label>
                                    <input type="text" name="title" class="form-control border border-2 p-2" value="{{old('title')}}">
                                    @error('title')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                                </div>
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Select Content Type</label>
                                    <select id="type" name="type" class="form-control border border-2 p-2" placeholder=" Please Select One content Type">
                                      <option value="post">Post</option>
                                      <option value="news">News</option>
                                      <option value="library">Library</option>
                                      <option value="anouncement">Announcement</option>
                                    </select>
                                    @error('type')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                               
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Date</label>
                                    <input type="date" name="date" class="form-control border border-2 p-2" value="{{old('date')}}">
                                    @error('date')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Publisher</label>
                                    <input type="text" name="publisher" class="form-control border border-2 p-2" value="{{old('publisher')}}">
                                    @error('publisher')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                 <div class="mb-3 col-md-6">
                                    <label class="form-label">Select Content Category</label>
                                    <select id="cars" name="category" class="form-control border border-2 p-2" placeholder=" Please Select One content Category">
                                      <option value="research">Research</option>
                                      <option value="articles">Articles</option>
                                      <option value="contracts">Contacts</option>
                                      <option value="blog">Blog</option>
                                      <option value="guidlines">Guidlines</option>
                                      <option value="publications">Publiations</option>
                                      <option value="stratergy">Strategies</option>
                                      <option value="jobs">Jobs</option>
                                    </select>
                                    @error('category')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>


                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Attachment</label>
                                    <input type="file" name="image" class="form-control border border-2 p-2" value="{{ old('image')}}">
                                    @error('image')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Blog Post Link</label>
                                    <input type="text" name="blogpost" class="form-control border border-2 p-2" value="{{old('blogpost')}}">
                                    @error('blogpost')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="floatingTextarea2">Description</label>
                                    <textarea class="form-control border border-2 p-2"
                                        placeholder=" Content descriptions" id="floatingTextarea2" name="description"
                                        rows="4" cols="50">{{ old('description')}}</textarea>
                                        @error('description')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn bg-gradient-dark">Submit</button>
                        </form>
</div>
            </div>
        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>
