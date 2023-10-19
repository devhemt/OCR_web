<div id="result" class="container-fluid newsletter py-5" style="background: white">
    <div class="container" style="background: #adb5bd">
        <div class="row g-5 align-items-center">
            <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid" src="client/img/newsletter.png" alt="">
            </div>
            <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s" >
                <h1 class="text-white mb-4">Let's upload your photo here</h1>
                <div class="position-relative w-100 mt-3 mb-2">
                    <input wire:model="image" required name="prd_image" onchange="preview();" class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="file" id="formFile"
                           placeholder="Enter Your Email" style="height: 36px;">
                    {{--                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 me-2"><i--}}
                    {{--                                class="fa fa-paper-plane text-primary fs-4"></i></button>--}}
                    {{--                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 " style="margin-right: 3rem"><i--}}
                    {{--                                class="fa fa-paper-plane text-primary fs-4"></i></button>--}}
                </div>
                <div wire:ignore id="view-image">
                </div>
                @if($imageName == null)
                <button style="display: none" id="myDIV" class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
                @endif
                @if($imageName != null)
                <div style="margin-top: 20px">
                    <h3 class="text-white mb-4">Result:</h3>
                    <img src="{{"upload/results/".$imageName}}" style="max-width: 500px;max-height: 1000px;object-fit: cover">
                </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Japanese</th>
                            <th scope="col">Vietnamese</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $flag = 0;
                        @endphp
                        @foreach($text as $t)
                        <tr>
                            <th scope="row">{{$flag+1}}</th>
                            <td>{{$t['text']}}</td>
                            <td>{{$result[$flag]}}</td>
                        </tr>
                        @php
                            $flag++;
                        @endphp
                        @endforeach
                        </tbody>
                    </table>
                @endif
{{--                <small class="text-white-50">If you want to upload multiple photos, you need to register for an account.</small>--}}
                <div class="d-flex align-items-center mt-4">
                    <a wire:click="scanAll" onclick="myFunction()" class="btn btn-danger rounded-pill px-4 me-3" href="#result">SCAN</a>
                </div>
            </div>
        </div>
    </div>
</div>
