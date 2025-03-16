<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICSC 2025 Conference</title>


    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="path/to/owl.carousel.css" rel="stylesheet">
    <link href="path/to/owl.theme.default.css" rel="stylesheet">
    <link href="styles/home.css" rel="stylesheet">



    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <?php include 'includes.php' ?>
</head>
<style>
    .owl-carousel .owl-item img {
        width: 100%;

        height: 70vh;
        /* Set height to 30% of the viewport height */
        object-fit: cover;
    }

    .chief-container {
        background: url('img/bg4.png');
        background-size: 100% 100%;
    }

    
</style>

<body>
    <?php
    $carouselItems = [
        [
            'image' => 'img/slider/1.jpg',
            'caption' => 'Image 1',
        ],
        [
            'image' => 'img/slider/2.jpg',
            'caption' => 'Image 2',
        ],
        [
            'image' => 'img/slider/3.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/4.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/5.jpg',
            'caption' => 'Image 5',
        ],
        [
            'image' => 'img/slider/6.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/7.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/8.jpg',
            'caption' => 'Image 3',
        ],

        [
            'image' => 'img/slider/9.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/10.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/11.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/12.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/13.jpg',
            'caption' => 'Image 3',
        ],
    ];
    ?>



    <div class="relative w-full  mx-auto pb-4">
        <section class="z-50">
            <?php include 'navbar.php' ?>
        </section>
        <!-- <section class="bg-[url('img/frontImg.jpg')] bg-repeat items-center justify-center lg:justify-start flex">
         
            <img src="img/IEEE_up_transparent.png" class="ml-8 w-[16rem] h-[10rem] bg-transparent object-contain" />
        </section> -->
        <div class="grid grid-cols-7">
            <div class="col-span-7 my-10 flex justify-center">
                <span class="text-3xl font-bold text-center">Sponsoring Organization</span>

            </div>
            <div></div>
            <div class="col-span-5 overflow-hidden">

                <div class="overflow-x-auto">
                    <div class="sponsor w-auto mx-auto flex justify-center items-center">

                        <img class="w-1/5" src="img/ants logo.jpg" alt="QR code">

                    </div>

                    <br><br>
                    <div class="divider"></div>
                </div>
            </div>
        </div>

        <div class="px-[5%] m-10">
            <h1 class="text-3xl text-center font-bold mb-5">Chief Guest</h1>
            <div class="chief-container w-[100%] h-[75vh] m-auto flex lg:w-[80%] lg:h-[50vh] justify-between rounded-lg flex-wrap">
                <div class="bg-transparent flex-1">
                    <div class="flex h-full justify-center bg-transparent  md:p-10 md:pl-20 md:mt-0">
                        <img src="img/chief_guest2025.jpeg" alt="" class="h-[50vh] w-[80%] lg:h-[90%] lg:w-[80%] m-5% mx-auto  rounded-lg">
                    </div>

                </div>


                <div class="flex-1 bg-transparent flex flex-col ">
                    <div class="flex h-full justify-center align-center bg-transparent pr-[15%]">
                        <div class="bg-transparent text-white my-[25%]">
                            <h1 class="text-3xl font-bold align-center">Sunil Kumar Barnwal</h1><br>
                            <p class="text-sm text-justify z-100 leading-relaxed">Additional Secretary Department of Higher Education, Ministry of Education, Government of India<br>
                                Indian Administrative Service(IAS) - Government of India. Lee Kuan Yew School of Public Policy<br>
                                New Delhi, Delhi, India</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- <div class="owl-carousel owl-theme">
            <?php foreach ($carouselItems as $item) : ?>
                <div class="item">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['caption']; ?>">

                </div>
            <?php endforeach; ?>
        </div> -->




        <!-- <img src="img/keynote/allspeakers.jpg" class="object-fit h-full w-full"></img> -->
        <!-- <section class="bg-cover">
         
            <div class=" owl-loaded mx-auto my-auto"> 
                <img src="img/keynote/allspeakers.jpg" class="h-[20vh] lg:h-[40vh] w-full object-fit" />
                 <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item"><img src="img/slider/1.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/2.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/3.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/4.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/5.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/6.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/7.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/8.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/9.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/10.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/11.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/12.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/13.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/14.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/15.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/16.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/17.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/18.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/19.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                    </div>
                </div> 
                <img />
            </div>
        </section> -->
        <section class="border-b border-gray-300">
            <div class="flex flex-col md:flex-row items-start justify-around">
                <div class="pt-8 card-body">
                    <h2 class="text-2xl font-bold card-title">Latest News and Announcements</h2>
                    <ol class="flex flex-col space-y-4 mx-8 mt-4 list-decimal">
                        <li class="flex flex-col space-y-1 animate-pulse">
                            <span class="text-red-500 font-bold">Accepted papers will be submitted for inclusion into IEEE Xplore subject to meeting IEEE Xplore’s scope and quality requirements</span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Program Plan</h6>
                            <span>For more details please click <a class="text-primary" href="resources\Program Plan_ICSC 2025.pdf" download="resources\Program Plan_ICSC 2025.pdf">HERE</a></span>


                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Session Plan</h6>
                            <span>For more details please click <a class="text-primary" href="resources/ICSC 2025 FULL Session Plan.pdf" download="resources/ICSC 2025 FULL Session Plan.pdf">HERE</a></span>

                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Inauguration Invitation</h6>
                            <span>For more details please click <a class="text-primary" href="resources/invitation25.pdf" download="resources/invitation25.pdf">HERE</a></span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Latest Updates</h6>
                            <!-- <span>Visit our facebook page for latest updates! <a class="text-primary" href="https://www.facebook.com/profile.php?id=100079333816857" target="_blank">HERE</a></span> -->
                            <!-- <span>Coming soon</span> -->

                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">IEEE Conference Calender</h6>
                            <!-- <span>Find us on official calender, please click<a class="text-primary" target="_blank" href="https://conferences.ieee.org/conferences_events/conferences/conferencedetails/60394">HERE</a></span> -->
                            <!-- <span>Coming soon</span> -->

                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Previous ICSC Conferences</h6>
                            <span>For more details please click <a class="text-primary" href="ICSC23/index.php">HERE</a></span>

                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Call for Papers</h6>
                            <span>For more details please click <a class="text-primary" href="resources/call for papers.pdf" download="resources/call for papers.pdf">HERE</a></span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Instructions for the Authors</h6>
                            <span>For more details please click <a class="text-primary" href="instruction.php">HERE</a></span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">List of Distinguished TPC Members</h6>
                            <span>For more details please click <a class="text-primary" href="tpc.php">HERE</a></span>
                        </li>
                        <!-- <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Instructions for Attendees</h6>
                            <span><a href="#" class="text-primary" >Coming soon</a></span>
                            <span>For more details please click <a class="text-primary" href="http://localhost/icsc2023-updated/instruction.php" >HERE</a></span> 
                        </li> -->
                    </ol>
                </div>
                <div class="card-body text-justify">
                    <h2 class="card-title text-2xl font-bold">Important Deadlines</h2>
                    <hr>
                    <table class="table table-compact w-full">
                        <tbody>
                            <tr>
                                <td class="text-sm md:text-xl">Paper Submission</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">
                                    4th December, 2024<span style="color: red;"> (Call Closed)</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Notification of acceptance</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">7th January, 2025</td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Accepted Paper Registration Date</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">19th January, 2025</td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Final Paper(camera ready) submission Date</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">
                                    20th January, 2025
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Link to paper submission</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">
                                    <a href="https://edas.info/N32576" class="rounded font-bold">EDAS</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="flex flex-col card-body">
            <h2 class="card-title text-3xl">Conference Organizers</h2>
            <hr class="w-full" />
            <div class="flex flex-col lg:flex-row justify-between items-start space-y-4 lg:space-y-0">
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Chief Patron</h6>
                    <ul>
                        <li>Sh. Jaiprakash Gaur Ji</li>
                        <li>Sh. Manoj Gaur Ji</li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Patron</h6>
                    <ul>
                        <li>Prof. S. C. Saxena</li>
                        <li> Prof. B.R. Mehta
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">General Chair</h6>
                    <ul>
                        <li>Prof. Shweta Srivastava</li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Organizing Secretary</h6>
                    <ul>
                        <li>Prof. Sajai Vir Singh</li>
                    </ul>
                </div>
            </div>
        </section>
        <hr class="w-full" />
        <?php include 'footer.php' ?>
    </div>
    <script src="js/owl.carousel.min.js"></script>

</body>

</html>