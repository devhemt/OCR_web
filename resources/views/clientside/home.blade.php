@extends('layouts.default')
@section('content')

    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">AI.Tech</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Artificial Intelligence for Your Business</h1>
                    <p class="text-white mb-4 animated slideInRight">Tempor rebum no at dolore lorem clita rebum rebum ipsum
                        rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit</p>
                    <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Read More</a>
                    <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="client/img/hero-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    @livewire('scan')

    <!-- Newsletter Start -->

    <!-- Newsletter End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                               placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Team</div>
                    <h1 class="mb-4">Meet Our Experienced Team Members</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="client/img/team-1.jpg" alt="">
                                        <h5 class="mb-0">Boris Johnson</h5>
                                        <small>Founder & CEO</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="client/img/team-2.jpg" alt="">
                                        <h5 class="mb-0">Adam Crew</h5>
                                        <small>Executive Manager</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="client/img/team-3.jpg" alt="">
                                        <h5 class="mb-0">Kate Winslet</h5>
                                        <small>Co Founder</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="client/img/team-4.jpg" alt="">
                                        <h5 class="mb-0">Cody Gardner</h5>
                                        <small>Project Manager</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <script language="JavaScript" type="text/javascript">
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {

            }
        }

        var flagname = 1;
        var flagimage = false;
        function preview() {
            var cell=document.getElementById('view-image');
            while (cell.hasChildNodes()) {
                cell.removeChild(cell.firstChild);
            }

            for (var i = 0; i < event.target.files.length;i++){
                var div=document.createElement('img');
                div.style.maxWidth = "500px";
                div.style.maxHeight = "1000px";
                div.style.objectFit = "cover";
                div.setAttribute('id','image');
                // div.setAttribute('width','130px');
                // div.setAttribute('height','200px');
                div.setAttribute('src',URL.createObjectURL(event.target.files[i]));
                cell.appendChild(div);
                flagimage = true;
            }
            // const image = document.getElementById('image');
            //
            // const cropper = new Cropper(image, {
            //     viewMode: 2,
            //     aspectRatio: NaN,
            //     crop: function (event) {
            //         // Get the cropped image as a data URL
            //         const croppedDataUrl = cropper.getCroppedCanvas().toDataURL();
            //
            //         // Set the value of the hidden input
            //         const croppedImageInput = document.getElementById('croppedImageInput');
            //         croppedImageInput.value = croppedDataUrl;
            //         // const input = document.createElement('input');
            //         // input.type = 'hidden';
            //         // input.name = 'croppedImage'; // Tên của input
            //         // input.value = croppedDataUrl;
            //         // document.getElementById('myForm').appendChild(input);
            //
            //         // Display or use the cropped image as needed
            //         // For example, you can create a new image element to display it
            //         // var croppedImage = new Image();
            //         // croppedImage.src = croppedDataUrl;
            //         // document.getElementById('view-cropped-image').appendChild(croppedImage);
            //
            //         // You can also provide options for downloading or further processing the image
            //         // For downloading, you can create a link element with the data URL
            //         // var downloadLink = document.createElement('a');
            //         // downloadLink.href = croppedDataUrl;
            //         // downloadLink.download = 'cropped_image.png';
            //         // downloadLink.textContent = 'Download Cropped Image';
            //         // document.getElementById('download-link').appendChild(downloadLink);
            //     }
            // });
        }
    </script>
@endsection
