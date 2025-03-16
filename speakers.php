<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speakers | ICSC 2025</title>
    <?php include 'includes.php' ?>

    <style>
        .flip-container {
            position: relative;
            width: 420px;
            height: 480px;
            perspective: 1000px;
            margin: 10px;
        }

        .flipper {
            position: absolute;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.6s;
        }

        /* Flipping on hover */
        .flip-container:hover .flipper {
            transform: rotateY(180deg);
        }

        /* Front and back sides */
        .card-front,
        .flip-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 10px;
        }

        /* Front side */
        .card-front {
            background: url('https://media.istockphoto.com/id/865577704/photo/blue-abstract-glass-texture-background-or-pattern-creative-design-template.jpg?s=612x612&w=0&k=20&c=F-UBLPZt6XGB97fzjzITYxviW6yUZ_qQ5GmAt4xgBJ4=');
            background-size: cover;
        }

        /* Back side */
        .flip-back {
            background: url('https://media.istockphoto.com/id/865577704/photo/blue-abstract-glass-texture-background-or-pattern-creative-design-template.jpg?s=612x612&w=0&k=20&c=F-UBLPZt6XGB97fzjzITYxviW6yUZ_qQ5GmAt4xgBJ4=');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 20px;
            transform: rotateY(180deg);
            border-radius: 10px;
        }
    </style>


</head>

<body>
    <!-- Navbar begins -->

    <!-- Navbar ends -->

    <div class="relative w-full  mx-auto">
        <section class="z-50 ">
            <?php include 'navbar.php' ?>
        </section>
        <section>

            <h1 class="mt-10 mb-10 text-4xl text-center font-bold">Keynote Speakers</h1>

            <div class="mx-12 my-20 flex justify-around flex-wrap">
                <div class="flip-container">
                    <div class="flipper">
                        <!-- Front side -->
                        <div class="card-front new flex justify-center flex-col rounded-lg">
                            <div class="flex justify-center w-full bg-transparent">
                                <img src="img/speakers/dr surya.jpg" alt="" class="w-52 h-52 m-10 rounded-lg">
                            </div>
                            <div class="justify-center w-full bg-transparent">
                                <div class="text-white text-xl font-bold text-center bg-transparent">Dr. Surya Bhattacharya</div>
                                <div class="text-white text-center bg-transparent p-4 m-4">Director of System in Package (SiP) at A*STAR Institute of Microelectronics (IME), Singapore</div>
                            </div>
                        </div>

                        <!-- Back side -->
                        <div class="flip-back">
                            <p>Dr. Surya Bhattacharya (Senior Member IEEE) is Director and Head of System-in-Package at A*STAR Institute of Microelectronics (IME), Singapore. Over the past 30 years, he has worked on CMOS scaling and Package Scaling at fabless companies, integrated device manufacturer (IDM), and leading Research Institute. At the Institute of Microelectronics, Singapore. Dr. Bhattacharya leads the advanced packaging team to initiate and execute consortia projects to address industry challenges in advanced heterogeneous integration for system scaling.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="flip-container">
                    <div class="flipper">
                        <!-- Front side -->
                        <div class="card-front new flex justify-center flex-col rounded-lg">
                            <div class="flex justify-center w-full bg-transparent">
                                <img src="img/speakers/prof anajan.jpg" alt="" class="w-52 h-52 m-10 rounded-lg">
                            </div>
                            <div class="justify-center w-full bg-transparent">
                                <div class="text-white text-xl font-bold text-center bg-transparent">Prof. Ananjan Basu</div>
                                <div class="text-white text-center bg-transparent p-4 m-4">Professor<br />
                                    Centre for Applied Research in Electronics
                                    IIT Delhi</div>
                            </div>
                        </div>

                        <!-- Back side -->
                        <div class="flip-back">
                            <p>Prof. Ananjan Basu received the B.Tech degree in electrical engineering and M.Tech degree in Communication and Radar engineering from the Indian Institute of Technology Delhi (I.I.T.DeIhi), in 1991 and 1993 respectively, and the PhD. degree in Electrical Engineering from University of California at Los Angeles (UCLA), in 1998. He has been with the Centre for Applied Research in Electronics, I.I.T.DeIhi as an Assistant Professor (2000-2005) and Associate Professor (2005-2012), and Professor (2013 onwards). His specialization is in microwave and millimetre-wave component design and characterization, reconfigurable and active antennas, microwave imaging and guided wave theory.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="flip-container">
                    <div class="flipper">
                        <!-- Front side -->
                        <div class="card-front new flex justify-center flex-col rounded-lg">
                            <div class="flex justify-center w-full bg-transparent">
                                <img src="img/speakers/drvenkata.png" alt="" class="w-52 h-52 m-10 rounded-lg">
                            </div>
                            <div class="justify-center w-full bg-transparent">
                                <div class="text-white text-xl font-bold text-center bg-transparent">Dr. L Venkata Subramaniam</div>
                                <div class="text-white text-center bg-transparent p-4 m-4">Quantum India Leader, IBM </div>
                            </div>
                        </div>

                        <!-- Back side -->
                        <div class="flip-back">
                            <p>With a PhD from IIT Delhi and a 26-year tech career, Dr. Venkata has earned 34 patents, published 150 research papers, and received the title of IBM Master Inventor. Dr. Venkata is dedicated to pushing India to the forefront of quantum computing. He also mentors at IIT Delhi, bridging theory with practical applications.  He is an experienced Leader in Artificial Intelligence and Quantum Computing with a demonstrated history of innovation and product creation. He is a Strong researcher who has developed new products and published in top venues and has been recognised as master inventor. 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flip-container">
                    <div class="flipper">
                        <!-- Front side -->
                        <div class="card-front new flex justify-center flex-col rounded-lg">
                            <div class="flex justify-center w-full bg-transparent">
                                <img src="img/speakers/dr bhim.jpg" alt="" class="w-52 h-52 m-10 rounded-lg">
                            </div>
                            <div class="justify-center w-full bg-transparent">
                                <div class="text-white text-xl font-bold text-center bg-transparent">Prof. (Dr.) Bhim Singh</div>
                                <div class="text-white text-center bg-transparent p-4 m-4">SERB National Science Chair & Emeritus Professor, Department of Electrical EngineeringIIT Delhi
                                </div>
                            </div>
                        </div>

                        <!-- Back side -->
                        <div class="flip-back">
                            <p>Prof. Singh is a Fellow of the Indian National Academy of Engineering (FNAE), The Indian National Science Academy (FNA), The National Academy of Science, India (FNASc), The Indian Academy of Sciences, India (FASc), The World Academy of Sciences (FTWAS), Institute of Electrical and Electronics Engineers (FIEEE), the Institute of Engineering and Technology (FIET), Institution of Engineers (India) (FIE), and Institution of Electronics and Telecommunication Engineers (FIETE) and a Life Member of the Indian Society for Technical Education (ISTE), System Society of India (SSI), and National Institution of Quality and Reliability (NIQR).
                                
                            </p>
                        </div>
                    </div>
                </div>


                <div class="flip-container">
                    <div class="flipper">
                        <!-- Front side -->
                        <div class="card-front new flex justify-center flex-col rounded-lg">
                            <div class="flex justify-center w-full bg-transparent">
                                <img src="img/speakers/dr manish.jpg" alt="" class="w-52 h-52 m-10 rounded-lg">
                            </div>
                            <div class="justify-center w-full bg-transparent">
                                <div class="text-white text-xl font-bold text-center bg-transparent">Dr. Manish Kumar Hooda</div>
                                <div class="text-white text-center bg-transparent p-4 m-4">Director, Indian semiconductor Mission &
                                    Head, Technology development, SCL, Chandigarh
                                    Director, Meity, India</div>
                            </div>
                        </div>

                        <!-- Back side -->
                        <div class="flip-back">
                            <p>Dr. Manish Kumar Hooda, A Process & Process Integration Specialist with expertise in IC, GaN HEMT, Detector, and MEMS fabrication. With a PhD in DRIE-based plasma machining for HARMS, he has led key space application projects, including sensors, microthrusters, and RF devices. He played a vital role in 180nm CMOS process integration at SCL and currently heads the establishment of India’s first exotic compound semiconductor facility. A key contributor to India's semiconductor R&D, he is driving indigenization and technological advancements for future space missions.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="flip-container">
                    <div class="flipper">
                        <!-- Front side -->
                        <div class="card-front new flex justify-center flex-col rounded-lg">
                            <div class="flex justify-center w-full bg-transparent">
                                <img src="img/speakers/prof ramesh.jpg" alt="" class="w-52 h-52 m-10 rounded-lg">
                            </div>
                            <div class="justify-center w-full bg-transparent">
                                <div class="text-white text-xl font-bold text-center bg-transparent">Prof. Ramesh Bansal</div>
                                <div class="text-white text-center bg-transparent p-4 m-4">Department of Electrical Engineering,
                                    University of Sharjah, University City, Sharjah, UAE</div>
                            </div>
                        </div>

                        <!-- Back side -->
                        <div class="flip-back">
                            <p>With over 25 years of experience in teaching, research, and academic leadership across multiple countries, Prof. Ramesh Bansal is currently a Professor in the Department of Electrical Engineering at the University of Sharjah and an Extraordinary Professor at the University of Pretoria. He has published over 450 papers, with over 22,000 Google Scholar citations and an h-index of 70. His research focuses on Renewable Energy, Smart Grids, and Microgrids. He serves as an editor for prestigious journals and is a Fellow of IET-UK, Institution of Engineers (India), SAIEE, and a Senior Member of IEEE-USA.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flip-container">
                    <div class="flipper">
                        <!-- Front side -->
                        <div class="card-front new flex justify-center flex-col rounded-lg">
                            <div class="flex justify-center w-full bg-transparent">
                                <img src="img/speakers/prof ravindra.png" alt="" class="w-52 h-52 m-10 rounded-lg">
                            </div>
                            <div class="justify-center w-full bg-transparent">
                                <div class="text-white text-xl font-bold text-center bg-transparent">Prof. Ravinder Dahiya
                                </div>
                                <div class="text-white text-center bg-transparent p-4 m-4">Professor, ECE Department
                                    Bendable Electronics and Sustainable Technologies (BEST) Group
                                    Northeastern University, Boston, MA 02115, USA
                                </div>
                            </div>
                        </div>

                        <!-- Back side -->
                        <div class="flip-back">
                            <p>Prof. Ravinder Dahiya is Professor in the Department Electrical and Computer Engineering at North-eastern University, Boston, USA. His group (Bendable Electronics and Sustainable Technologies (BEST)) conducts research in flexible printed electronics, electronic skin, and their applications in robotics, wearables, and interactive systems. He has authored/co-authored more than 500 publications, books and submitted/granted patents and disclosures. He has led/contributed to many international projects. Prof. Dahiya is serving on Board of Directors of IEEE as Division 10 Director and served as the President of IEEE Sensors Council (2022-2023). He is the Editor-in-Chief (EiC) of npj Flexible Electronics and served as the founding EiC of IEEE Journal on Flexible Electronics.
                            </p>
                        </div>
                    </div>
                </div>


        </section>


        <hr class="w-full" />
        <section>
            <?php include 'footer.php' ?>
        </section>
    </div>

    <!-- Footer begins -->

    <!-- Footer ends -->
</body>

</html>