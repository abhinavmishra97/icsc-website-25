<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Program Committee | ICSC 2025</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 50px;
            background-color: #ffffff;
            margin: auto;
            max-width: 100%;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            color: #333333;
            margin-bottom: 30px;
        }

        .committee-table {
            margin: auto;
            margin-top: 3rem;
            border-collapse: collapse;
        }

        .committee-table tr {
            background-color: #f8f8f8;
        }

        .committee-table tr:nth-child(odd) {
            background-color: #e8e8e8;
        }

        .committee-table td {
            padding: 12px 16px;
            border: none;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container text-center py-5">
        <span class="dark: text-3xl font-bold">Technical Program Committee</span>
        <table class="committee-table my-10" id="committee-table">
            <!-- Data will be populated here -->
        </table>
    </div>

    <script>
        // Data from JSON file
        const committeeData = [{
                "name": "Dr. Aanchal Agarwal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Aashish Mathur, Indian Institute of Technology, Jodhpur, India"
            },
            {
                "name": "Dr. Aastha Maheshwari, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Abhay Chaturvedi, GLA University, Mathura, India"
            },
            {
                "name": "Dr. Abhay Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Abhijeet Upadhya, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Abhinisha Sinha, Bansal Institute of Science and Technology, Bhopal, India"
            },
            {
                "name": "Dr. Abhishek Jain, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Abhishek Kashyap, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Abhishek Mani Shukla, Indian Institute of Technology Patna, India"
            },
            {
                "name": "Dr. Abhishek Narayan Tripathi, National Institute of Technology Raipur, India"
            },
            {
                "name": "Dr. Adesh Kumar, University of Petroleum and Energy Studies, Dehradun, India"
            },
            {
                "name": "Dr. Adwitiya Sinha, TERI School of Advanced Studies, Delhi, India"
            },
            {
                "name": "Dr. Amit Agarwal, University of Petroleum and Energy Studies, Dehradun, India"
            },
            {
                "name": "Dr. Ajay Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ajay Kumar Verma, Dr. B. R. Ambedkar University, Agra, India"
            },
            {
                "name": "Dr. Ajay Rawat, University of Petroleum and Energy Studies, Dehradun, India"
            },
            {
                "name": "Dr. Ajayveer Chouhan, University Institute of Engineering & Technology, Kurukshetra, India"
            },
            {
                "name": "Dr. Ajeet Singh Verma, Indian Institute of Technology (BHU), Varanasi, India"
            },
            {
                "name": "Dr. Ajit Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Akash Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Akash Tayal, Guru Gobind Singh Indraprastha University, Delhi, India"
            },
            {
                "name": "Dr. Alisha Banga, Galgotias University, Greater Noida, India"
            },
            {
                "name": "Dr. Alka Singhal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Alok Joshi, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Amanpreet Kaur, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Amarjeet Prajapati, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Amit Garg, Ajay Kumar Garg Engineering College, Ghaziabad, India"
            },
            {
                "name": "Dr. Amit Kumar, Galgotias University, Greater Noida, India"
            },
            {
                "name": "Dr. Amit Kumar, Jaypee University of Engineering and Technology, Guna, India"
            },
            {
                "name": "Dr. Amit Kumar, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Amit Kumar Goyal, Manipal Institute of Institute, Manipal"
            },
            {
                "name": "Dr. Amit Kumar Sharma, Jamia Millia Islamia University, New Delhi, India"
            },
            {
                "name": "Dr. Amit Mishra, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Amit Singh, Pandit Deendayal Energy University, Gandhinagar, India"
            },
            {
                "name": "Dr. Amit Singhal, Netaji Subhas University of Technology, Delhi, India"
            },
            {
                "name": "Dr. Amit Srivastava, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Amit Verma, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Amit Vishwakarma, IIITDM, Jabalpur, India"
            },
            {
                "name": "Dr. Amit Wadhwa, GL Bajaj Institute of Technology and Management, Greater Noida, India"
            },
            {
                "name": "Dr. Amol Vasudeva, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Anand Agrawal, Indian Institute of Information Technology, Kota, India"
            },
            {
                "name": "Dr. Anand Nayyar, Duy Tan University, Vietnam"
            },
            {
                "name": "Dr. Anil Bhardwaj, Shri Mata Vaishno Devi University, Katra, India"
            },
            {
                "name": "Dr. Anil Kumar, Chandigarh College of Engineering and Technology, Chandigarh, India"
            },
            {
                "name": "Dr. Anil Kumar, IIITDM, Jabalpur, India"
            },
            {
                "name": "Dr. Anil Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Anil Kumar Dubey, Greater Noida Institute of Technology, Greater Noida, India"
            },
            {
                "name": "Dr. Anil Shukla, Amity University, Noida, India"
            },
            {
                "name": "Dr. Anita Sahoo, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Anjana Bagga, Guru Gobind Singh Indraprastha University, Delhi, India"
            },
            {
                "name": "Dr. Anju Asokan, Karunya Institute of Technology and Sciences, Tamil Nadu, India"
            },
            {
                "name": "Dr. Ankit Sirohi, Indian Institute of Technology Kanpur, Kanpur, India"
            },
            {
                "name": "Dr. Ankit Vidyarthi, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ankita Jaiswal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ankita Verma, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ankita Wadhwa, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ankur Bhardwaj, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Antriksh Goswami, National Institute of Technology Patna, India"
            },
            {
                "name": "Dr. Anubhuti Mohindra, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Anuj Bhardwaj, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Anuja Arora, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Anup Dandapat, National Institute of Technology, Meghalaya, India"
            },
            {
                "name": "Dr. Anuradha Pughat, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Archana Pandey, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Archana Purwar, Shri Mata Vaishno Devi University, Katra, India"
            },
            {
                "name": "Dr. Arjun Abhishek, Indian Institute of Technology, Patna, India"
            },
            {
                "name": "Dr. Arjun Kumar, Xi’an Jiaotong-Liverpool University (XJTLU), Suzhou, China"
            },
            {
                "name": "Dr. Arpita Jadhav Bhatt, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Arti Jain, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Arun Kumar, Jubail University College, Saudi Arabia"
            },
            {
                "name": "Dr. Arun Kumar, National Institute of Technology, Rourkela, India"
            },
            {
                "name": "Dr. Arvind Kumar, Galgotia University, Greater Noida, India"
            },
            {
                "name": "Dr. Arvind Kumar, Sharda University, Greater Noida, India"
            },
            {
                "name": "Dr. Asha Rani Mishra, Galgotias College of Engineering and Technology, Greater Noida, India"
            },
            {
                "name": "Dr. Ashish Gupta, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ashish Mishra, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ashish Pandey, Galgotias College of Engineering and Technology, Greater Noida, India"
            },
            {
                "name": "Dr. Ashish Singh Parihar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ashish Tiwari, C V Raman Global University, Bhubaneswar, India"
            },
            {
                "name": "Dr. Ashutosh Sharma, Southern Federal University, Rostov Oblast, Russia"
            },
            {
                "name": "Dr. Asmita Yadav, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Atul Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Atul Sharma, Kurukshetra University, Kurukshetra, India"
            },
            {
                "name": "Dr. Bajrang Bansal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Baljit Kaur, National Institute of Technology, Delhi, India"
            },
            {
                "name": "Dr. Balwinder Raj, National Institute of Technology Jalandhar, India"
            },
            {
                "name": "Dr. Bansidhar Joshi, D Y Patil International University, Akurdi, Pune, India"
            },
            {
                "name": "Dr. Basant Kumar, Motilal Nehru National Institute of Technology, Allahabad, India"
            },
            {
                "name": "Dr. Bhagwati Chamola, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Bhartendu Chaturvedi, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Bhaskar Gupta, Chandigarh College of Engineering and Technology, Chandigarh, India"
            },
            {
                "name": "Dr. Bhawna Gupta, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Bhawna Mallick, Sharda University, Greater Noida, India"
            },
            {
                "name": "Dr. Bhawna Saxena, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Bhola Jha, Govind Ballabh Pant Institute of Engineering & Technology, Pauri Garhwal, India"
            },
            {
                "name": "Dr. Bireshwar Dass Mazumdar, Bennett University, Greater Noida, India"
            },
            {
                "name": "Dr. Bishnulatpam Pushpa Devi, National Institute of Technology, Meghalaya, India"
            },
            {
                "name": "Dr. Brijesh Kumbhani, Indian Institute of Technology, Ropar, India"
            },
            {
                "name": "Dr. Candy Goyal, Yadavindra College of Engineering Talwandi, Sabo, India"
            },
            {
                "name": "Dr. Chakresh Jain, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Chandan Jyoti Kumar, Cotton University, Guwahati, India"
            },
            {
                "name": "Dr. Chandan Kumar, Dr. Ram Manohar Lohia Awadh University, Ayodhya, India"
            },
            {
                "name": "Dr. Chandni Tiwari, Graphic Era University, Dehradun, India"
            },
            {
                "name": "Dr. Charu Gandhi, Gurugram University, Gurugram, India"
            },
            {
                "name": "Dr. Chetna Gupta, Bennett University, Greater Noida, India"
            },
            {
                "name": "Dr. Chhaya Dalela, JSS Academy of Technical Education, Noida, India"
            },
            {
                "name": "Dr. Chitra Shukla, University of Luxembourg, Luxembourg"
            },
            {
                "name": "Dr. Chitrakant Sahu, National Institute of Technology Raipur, Raipur, India"
            },
            {
                "name": "Dr. D Siva Kumar, AMET Deemed University, Chennai, India"
            },
            {
                "name": "Dr. Davinder Singh Saini, CCET, Chandigarh, India"
            },
            {
                "name": "Dr. Deepali Gupta, Chitkara University, Chandigarh, India"
            },
            {
                "name": "Dr. Deepali Sharma, Guru Tegh Bahadur Institute of Technology, New Delhi, India"
            },
            {
                "name": "Dr. Devendra Kumar Shakya, Samrat Ashok Technological Institute, Vidisha, India"
            },
            {
                "name": "Dr. Devpriya Soni, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Dhanalekshmi Gopinathan, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Dharmendra Kumar, Madan Mohan Malaviya University of Technology, Gorakhpur, India"
            },
            {
                "name": "Dr. Dharmendra Kumar Jhariya, National Institute of Technology, Delhi, India"
            },
            {
                "name": "Dr. Dharmveer Rajpoot, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Dhirendra Kumar Shukla, Galgotias University, Greater Noida, India"
            },
            {
                "name": "Dr. Diksha Chawla, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Dileep Kumar Yadav, Bennett University, Greater Noida, India"
            },
            {
                "name": "Dr. Dinesh Bisht, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Dinesh Kumar Verma, Jaypee University of Engineering & Technology, Guna, India"
            },
            {
                "name": "Dr. Divya Kaushik, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Dushantha Nalin K. Jayakody, Lusofona University, Portugal"
            },
            {
                "name": "Dr. Ekta Gandotra, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Ekta Goel, National Institute of Technology, Warangal, India"
            },
            {
                "name": "Dr. Emjee Puthooran, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Gambhir Singh, Greater Noida Institute of Technology, Greater Noida, India"
            },
            {
                "name": "Dr. Gargi Mishra, Bharati Vidyapeeth College of Engineering, New Delhi, India"
            },
            {
                "name": "Dr. Garima Kapur, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Gaurav Khanna, IIIT, Bhopal, India"
            },
            {
                "name": "Dr. Gaurav Kumar Nigam, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Gaurav Saxena, Jaypee University of Engineering and Technology, Guna, India"
            },
            {
                "name": "Dr. Gaurav Sharma, Chitkara University, Chandigarh, India"
            },
            {
                "name": "Dr. Gaurav Verma, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Gayatri Sakya, Jagadguru Sri Shivarathreeshwara Academy of Technical Education, Noida, India"
            },
            {
                "name": "Dr. Gopal Rawat, Indian Institute of Technology Mandi, Mandi, India"
            },
            {
                "name": "Dr. Gulshan Shrivastava, Bennett University, Greater Noida, India"
            },
            {
                "name": "Dr. Gurmeet Singh, Guru Tegh Bahadur Institute of Technology, Delhi, India"
            },
            {
                "name": "Dr. H. Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Hardeo Kumar Thakur, Manav Rachna University, Gurugram, India"
            },
            {
                "name": "Dr. Harsh Sohal, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Heena Wadhwa, Chitkara University, Chandigarh, India"
            },
            {
                "name": "Dr. Hema N, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Hemant Choubey, Maulana Azad National Institute of Technology, Bhopal, India"
            },
            {
                "name": "Dr. Hemraj Saini, Dehradun Institute of Technology University, Dehradun, India"
            },
            {
                "name": "Dr. Himani Bansal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Himani Gupta, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Himanshu Agrawal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Imran Khan, Integral University, Lucknow, India"
            },
            {
                "name": "Dr. Indu Chawla, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ishpreet Singh Virk, Chandigarh Engineering College, Mohali, India"
            },
            {
                "name": "Dr. Jagendra Singh, Bennett University, Greater Noida, India"
            },
            {
                "name": "Dr. Janki Sharma, Rajasthan Technical University, Jaipur, India"
            },
            {
                "name": "Dr. Jasmin, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Jasmine Saini, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Javalkar Dinesh Kumar, Lingaya's Vidyapeeth, Faridabad, India"
            },
            {
                "name": "Dr. Jawad K. Ali, University of Technology, Iraq"
            },
            {
                "name": "Dr. Jaya Sinha, Sharda University, Greater Noida, India"
            },
            {
                "name": "Dr. Jaynendra Kumar Rai, Amity University, Noida, India"
            },
            {
                "name": "Dr. Jeya Prabha A, SRM Institute of Science and Technology, Kaatankulathur, India"
            },
            {
                "name": "Dr. Jibendu Sekhar Roy, School of Electronics Engineering, KIIT, Bhubaneswar, India"
            },
            {
                "name": "Dr. Jitender Chhabra, Ajay Kumar Garg Engineering College, Ghaziabad, India"
            },
            {
                "name": "Dr. Jitendra Mohan, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Jitendra Raghuwanshi, Jaypee University of Engineering & Technology, Guna, India"
            },
            {
                "name": "Dr. Joshua A. Abolarinwa, Namibia University of Science and Technology, Namibia"
            },
            {
                "name": "Dr. Joysmita Chatterjee, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Juhi Gupta, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Jyotismita Talukdar, Tezpur University, Assam, India"
            },
            {
                "name": "Dr. K Nisha, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. K Vimal Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Kalpana Chauhan, Central University of Haryana, Mahendergarh, India"
            },
            {
                "name": "Dr. Kalpana Sharma, Sikkim Manipal Institute of Technology, Pakyong, India"
            },
            {
                "name": "Dr. Kapil Dev Tyagi, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Kashav Ajmera, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Kaushal Kumar Nigam, National Institute of Technology, Raipur, India"
            },
            {
                "name": "Dr. Kavita Pandey, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Kingsley T. Igulu, Kenule Beeson Saro-Wiwa Polytechnic, Nigeria"
            },
            {
                "name": "Dr. Kiran Ravulakollu, University of Petroleum and Energy Studies, Dehradun, India"
            },
            {
                "name": "Dr. Kirti Aggarwal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Koushick Venkatesh, Vel Tech Rangarajan Dr. Sagunthala R&D Institute of Science and Technology, Chennai, India"
            },
            {
                "name": "Dr. Krishna Asawa, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Krishna Meel, B K Birla Institute of Engineering & Technology, Pilani, India"
            },
            {
                "name": "Dr. Kuldeep Baderia, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Kumar Mohit, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Kumar Pradhan, Indian Institute of Information Technology Design and Manufacturing, Kancheepuram, India"
            },
            {
                "name": "Dr. Kumud Ranjan Jha, Shri Mata Vaishno Devi University, Katra, India"
            },
            {
                "name": "Dr. L Bhagyalakshmi, Rajalakshmi Engineering College, Chennai, TN, India"
            },
            {
                "name": "Dr. Lakhveer Kaur, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Lalita Mishra, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Laxmi Chaudhary, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. M. A. Ansari, Gautam Buddha University, Greater Noida, India"
            },
            {
                "name": "Dr. Madhu Jain, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Madhur D Upadhayay, Shiv Nadar University, Greater Noida, India"
            },
            {
                "name": "Dr. Mahima Shanker Pandey, Sharda University, Greater Noida, India"
            },
            {
                "name": "Dr. Mamta Bisht, Inderprastha Engineering College, Ghaziabad, India"
            },
            {
                "name": "Dr. Mandeep Kaur, Sharda University, Greater Noida, India"
            },
            {
                "name": "Dr. Mandeep Singh Narula, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Mangipudi Parthasarathi, Amity University, Noida, India"
            },
            {
                "name": "Dr. Manika Jha, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Manish Goswami, Indian Institute of Information Technology, Allahabad, India"
            },
            {
                "name": "Dr. Manish Kumar, Central University of Haryana, Mahendergarh, India"
            },
            {
                "name": "Dr. Manish Kumar, Chandigarh Engineering College, Mohali, India"
            },
            {
                "name": "Dr. Manish Patidar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Manish Thakur, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Manish Tiwari, Manipal University, Jaipur, India"
            },
            {
                "name": "Dr. Manju, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Manoj Bohra, Manipal University, Jaipur, India"
            },
            {
                "name": "Dr. Manoj Kumar, National Institute of Technology, Delhi, India"
            },
            {
                "name": "Dr. Manoj Sahani, Pandit Deendayal Upadhyaya National Institute for Persons with Physical Disabilities, Delhi, India"
            },
            {
                "name": "Dr. Manoj Sahni, Sr., Pandit Deendayal Energy University, Gandhinagar, India"
            },
            {
                "name": "Dr. Mayank Kumar Rai, Thapar Institute of Engineering and Technology, Patiala, India"
            },
            {
                "name": "Dr. Meenal Jain, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Megha Rathi, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Mehjabeen Fatima, Sagar Institute of Research and Technology, Bhopal, India"
            },
            {
                "name": "Dr. Mitul Ahirwal, Maulana Azad National Institute of Technology, Bhopal, India"
            },
            {
                "name": "Dr. Mohammad Junaid Khan, Mewat Engineering College, Haryana, India"
            },
            {
                "name": "Dr. Mohammed Hussain, Aligarh Muslim University, Aligarh, India"
            },
            {
                "name": "Dr. Mohammed Mahmood Ali, Osmania, Telangana, India"
            },
            {
                "name": "Dr. Mohd Salman Khan, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Mojtaba Noorallahzadeh, Islamic Azad University, Dezful, Iran"
            },
            {
                "name": "Dr. Monika Singh, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Mridul Gupta, Netaji Subhas University of Technology, Delhi, India"
            },
            {
                "name": "Dr. Mudita Uppal, Chitkara University, Chandigarh, India"
            },
            {
                "name": "Dr. Mukesh Saraswat, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Mukta Goyal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Narendra Beniwal, Bundelkhand Institute of Engineering and Technology, Jhansi, India"
            },
            {
                "name": "Dr. Narendra D Londhe, National Institute of Technology, Raipur, India"
            },
            {
                "name": "Dr. Narendra Singh, Jaypee University of Engineering and Technology, Guna, India"
            },
            {
                "name": "Dr. Narendra Yadava, Madan Mohan Malaviya University of Technology, Gorakhpur, India"
            },
            {
                "name": "Dr. Naresh Kumar, G L Bajaj Institute of Technology and Management, Greater Noida, India"
            },
            {
                "name": "Dr. Nasir Alam, Bankura University, West Bengal, India"
            },
            {
                "name": "Dr. Naveen Jaglan, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Neelesh Gupta, Ajay Kumar Garg Engineering College, Ghaziabad, India"
            },
            {
                "name": "Dr. Neeraj Goel, Netaji Subhas University of Technology, Delhi, India"
            },
            {
                "name": "Dr. Neeraj Jain, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Neeraj Kumar Misra, Vellore Institute of Technology, Chennai, India"
            },
            {
                "name": "Dr. Neeraj Pathak, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Neeraj Rao, Visvesvaraya National Institute of Technology, Nagpur, Maharashtra, India"
            },
            {
                "name": "Dr. Neetu Joshi, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Neetu Sardana, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Neetu Singh, Sr. Engineer, Booble AI, Gurugram, Haryana, India"
            },
            {
                "name": "Dr. Nidhi Tewari, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Nikhat Raza Khan, IES College of Technology, Bhopal, India"
            },
            {
                "name": "Dr. Nikhil Agrawal, Indian Institute of Information Technology, Nagpur, India"
            },
            {
                "name": "Dr. Nikhil Kumar Marriwala, Kurukshetra University, Kurukshetra, India"
            },
            {
                "name": "Dr. Nilufar Yasmin, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Nishant Jain, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Nishi Gupta, Gurugram University, Gurugram, India"
            },
            {
                "name": "Dr. Nitin Muchhal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Nitin Rakesh, Symbiosis Institute of Technology, Nagpur, India"
            },
            {
                "name": "Dr. Nitin Shukla, Bennett University, Greater Noida, India"
            },
            {
                "name": "Dr. Nitin Tyagi, Swami Vivekanand Subharti University, Meerut, India"
            },
            {
                "name": "Dr. Niyati Agrawal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Omar Farooq, Aligarh Muslim University, Aligarh, India"
            },
            {
                "name": "Dr. P Raghu Vamsi, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Pankaj Kumar, G L Bajaj Institute of Technology and Management, Greater Noida, India"
            },
            {
                "name": "Dr. Pankaj Kumar Srivastava, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Pankaj Pal, National Institute of Technology, Uttarakhand, India"
            },
            {
                "name": "Dr. Pankaj Yadav, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Pardeep Garg, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Pardeep Kumar, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Parmeet Kaur, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Partha Pakray, National Institute of Technology, Silchar, India"
            },
            {
                "name": "Dr. Parul Agarwal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Parul Arora, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Parvin Kumar Kaushik, KIET Group of Institutions, Ghaziabad, India"
            },
            {
                "name": "Dr. Pascal Lorenz, University of Haute Alsace, France"
            },
            {
                "name": "Dr. Pato Kumari, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Pawan Kumar Verma, Sharda University, Greater Noida, India"
            },
            {
                "name": "Dr. Pawan Upadhyay, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Payal Khurana Batra, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Pinki Dua, Amity University, Noida, India"
            },
            {
                "name": "Dr. Pradeep Kumar, University of Kwazulu-Natal, South Africa"
            },
            {
                "name": "Dr. Prakash Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Prateek Gupta, Bennett University, Greater Noida, India"
            },
            {
                "name": "Dr. Praveen Kumar Rai, G L Bajaj Institute of Technology and Management, Greater Noida, India"
            },
            {
                "name": "Dr. Praveen P Terang, Jagadguru Sri Shivarathreeshwara Academy of Technical Education, Noida, India"
            },
            {
                "name": "Dr. Pravin R. Prajapati, A D Patel Institute of Technology, Anand, India"
            },
            {
                "name": "Dr. Pritam Khan, SRM Institute of Science and Technology, Kattankulathur, India"
            },
            {
                "name": "Dr. Priyanka Kwatra, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Pulkit Mehndiratta, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Puneet K Jain, National Institute of Technology Rourkela, India"
            },
            {
                "name": "Dr. Pushpa, G L Bajaj Institute of Technology and Management, Greater Noida, India"
            },
            {
                "name": "Dr. Pushpendra Kumar Rajput, University of Petroleum and Energy Studies, Dehradun, India"
            },
            {
                "name": "Dr. Pushpendra Singh, Jawaharlal Nehru University, Delhi, India"
            },
            {
                "name": "Dr. Puspraj Singh Chauhan, Pranveer Singh Institute of Technology, Kanpur, India"
            },
            {
                "name": "Dr. Rabul Laskar, National Institute of Technology, Silchar, India"
            },
            {
                "name": "Dr. Rachna Singh, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Raghvenda Kumar Singh, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Rahul Bansal, Indian Institute of Technology, Kanpur, India"
            },
            {
                "name": "Dr. Rahul Kaushik, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Raj Patel, Madan Mohan Malaviya University of Technology, Gorakhpur, India"
            },
            {
                "name": "Dr. Rajalakshmi Krishnamurthi, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Rajesh Bhatt, Rajasthan Technical University, Kota, India"
            },
            {
                "name": "Dr. Rajesh Kumar Dubey, Central University of Haryana, Mahendergarh, India"
            },
            {
                "name": "Dr. Rajesh Tiwari, CMR Engineering College, Hyderabad, India"
            },
            {
                "name": "Dr. Rajesh Vishwakarma, Jaypee University of Engineering and Technology, Guna, India"
            },
            {
                "name": "Dr. Rajiv Kumar, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Rajkishor Kumar, Vellore Institute of Technology, Chennai, India"
            },
            {
                "name": "Dr. Rajneesh Kumar Singh, Sharda University, Greater Noida, India"
            },
            {
                "name": "Dr. Raju Pal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ramanand Bisauriya, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ranjeet Kumar, Vellore Institute of Technology, Chennai, India"
            },
            {
                "name": "Dr. Ranu Gupta, Jaypee University of Engineering and Technology, Guna, India"
            },
            {
                "name": "Dr. Rashi Rastogi, Shobhit Institute of Engineering and Technology, Meerut, India"
            },
            {
                "name": "Dr. Rashmi Kushwah, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ravi Bolimera, School of Engineering, Nalla Narasimha Reddy Education Societ's Group of Institutions, India"
            },
            {
                "name": "Dr. Ravi Kumar, Jaypee University of Engineering and Technology, Guna, India"
            },
            {
                "name": "Dr. Ravi Tomar, University of Petroleum and Energy Studies, Dehradun, India"
            },
            {
                "name": "Dr. Ravindara Bhatt, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Ravindra Singh Tomar, Anand Engineering College, Agra, India"
            },
            {
                "name": "Dr. Reema Budhiraja, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Rehan Muzammil, Aligarh Muslim University, Aligarh, India"
            },
            {
                "name": "Dr. Renu Sharma, Ajay Kumar Garg Engineering College, Ghaziabad, India"
            },
            {
                "name": "Dr. Reshmy A Krishnankutty, SRM Institute of Science and Technology, Kattankulathur, India"
            },
            {
                "name": "Dr. Reshu Agarwal, Amity University, Noida, India"
            },
            {
                "name": "Dr. Richa Gupta, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Richa Srivastava, KIET Group of Institutions, Meerut, India"
            },
            {
                "name": "Dr. Rinki Gupta, Amity University, Noida, India"
            },
            {
                "name": "Dr. Rishibrind Kumar Upadhyay, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ritu Raj, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ruby Beniwal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Ruchi Gupta, Kurukshetra University, Kurukshetra, India"
            },
            {
                "name": "Dr. Ruchi Singh, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Rudra Sankar Dhar, National Institute of Technology Mizoram, India"
            },
            {
                "name": "Dr. S Mohanalakshmi, Rohini College of Engineering and Technology, Tamilnadu, India"
            },
            {
                "name": "Dr. S Pratap Singh, Thapar University, Patiala, India"
            },
            {
                "name": "Dr. S Ravi Chand, Nalla Narasimha Reddy, Telangana, India"
            },
            {
                "name": "Dr. S V Bonde, SGGS Institute of Engineering & Technology, Nanded, India"
            },
            {
                "name": "Dr. Sachin Lalar, Gurugram University, Gurugram, India"
            },
            {
                "name": "Dr. Sagar Deep Deb, Indian Institute of Technology Patna, India"
            },
            {
                "name": "Dr. Sai Krishna Kondoju, Chaitanya Bharathi Institute of Technology, Hyderabad, India"
            },
            {
                "name": "Dr. Sajai Vir Singh, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Sajal Agarwal, Rajiv Gandhi Institute of Petroleum JAIS, Amethi, India"
            },
            {
                "name": "Dr. Sakshi Gupta, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Salman Talluri, Jaypee University of Engineering and Technology, Guna, India"
            },
            {
                "name": "Dr. Sambit Satpathy, Galgotias College of Engineering and Technology, Greater Noida, India"
            },
            {
                "name": "Dr. Samriti Kalia, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Sandeep Kumar, Central Research Laboratory, Bharat Electronics Ltd., India"
            },
            {
                "name": "Dr. Sandeep Kumar Singh, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Sandhya Arya, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Sandhya Sandeep Save, Thakur College of Engineering and Technology, Mumbai, India"
            },
            {
                "name": "Dr. Sangeeta Mittal, Bennett University, Greater Noida, India"
            },
            {
                "name": "Dr. Sanjay Chauhan, Greater Noida Institute of Technology, Greater Noida, India"
            },
            {
                "name": "Dr. Sanjay Kumar Suman, St Martins Engineering College, Secunderabad, Telangana, India"
            },
            {
                "name": "Dr. Sanjeet Kumar, Birla Institute of Technology Mesra, Ranchi, India"
            },
            {
                "name": "Dr. Sanjeev Kumar Pippal, GL Bajaj Institute of Technology and Management, Greater Noida, India"
            },
            {
                "name": "Dr. Sanjeev Patel, National Institute of Technology, Rourkela, India"
            },
            {
                "name": "Dr. Sanjeev Yadav, University of Petroleum and Energy Studies, Dehradun, India"
            },
            {
                "name": "Dr. Sansar Singh Chauhan, GL Bajaj Institute of Technology and Management, Greater Noida, India"
            },
            {
                "name": "Dr. Sapna Katiyar, Impledge Technologies, Noida, India"
            },
            {
                "name": "Dr. Sarat Kumar Patra, National Institute of Technology, Rourkela, India"
            },
            {
                "name": "Dr. Sarvesh Tanwar, Amity University, Noida, India"
            },
            {
                "name": "Dr. Satish Chandra, Mahindra University, Hyderabad, India"
            },
            {
                "name": "Dr. Satya Prakash Yadav, Bennett University, Greater Noida, India"
            },
            {
                "name": "Dr. Satyanand Singh Sr., Fiji National University, Suva, Fiji"
            },
            {
                "name": "Dr. Satyendra Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Saurabh Chaturvedi, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Saurabh Kumar, Madan Mohan Malaviya University of Technology, Gorakhpur, India"
            },
            {
                "name": "Dr. Saurabh Sharma, Chandigarh Engineering College, Mohali, India"
            },
            {
                "name": "Dr. Senthil A, Mody Institute of Technology and Science, Sikar, India"
            },
            {
                "name": "Dr. Shabir Ali, Galgotias University, Greater Noida, India"
            },
            {
                "name": "Dr. Shahbaz A Siddiqui, Manipal University, Jaipur, India"
            },
            {
                "name": "Dr. Shaheen Khan, Mewat Engineering College, Haryana, India"
            },
            {
                "name": "Dr. Shailendra Tripathi, LNM Institute of Information Technology, Rajasthan, India"
            },
            {
                "name": "Dr. Shailesh Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Shamim Akhter, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Shardha Porwal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Sheeja V Francis, Jerusalem College of Engineering, Chennai, India"
            },
            {
                "name": "Dr. Shefali Sharma, Jaypee University of Engineering and Technology, Guna, India"
            },
            {
                "name": "Dr. Shelly Sachdeva, National Institute of Technology, Delhi, India"
            },
            {
                "name": "Dr. Shikha Jain, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Shikha Mehta, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Shilpa Rani, Lovely Professional University, Punjab, India"
            },
            {
                "name": "Dr. Shilpa Rani, Neil Gogte Institute of Technology, Hyderabad, India"
            },
            {
                "name": "Dr. Shilpi Lavania, Institute of Engineering & Technology, Agra, India"
            },
            {
                "name": "Dr. Shiv Narain Gupta, Greater Noida Institute of Technology, Greater Noida, India"
            },
            {
                "name": "Dr. Shiv Naresh Shivhare, Bennett University, Greater Noida, India"
            },
            {
                "name": "Dr. Shiva Prasad Prasad Koyyada, UPES, Dehradun, India"
            },
            {
                "name": "Dr. Shivani Sharma, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Shradha Saxena, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Shruti Gupta, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Shruti Jain, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Shruti Jaiswal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Shruti Kalra, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Shubhankar Majumdar, National Institute of Technology, Meghalaya, India"
            },
            {
                "name": "Dr. Shweta Pandit, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Shweta Rani, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Shwetank Avikal, Graphic Era University, Dehradun, India"
            },
            {
                "name": "Dr. Shyam Diwakar, Amrita Vishwa Vidyapeetham, Amritapuri, India"
            },
            {
                "name": "Dr. Shyama Barna Bhattacharjee, University of Science and Technology (USTC), Chittagong, Bangladesh"
            },
            {
                "name": "Dr. Sidhartha Sankar Rout, Indraprastha Institute of Information Technology, Delhi, India"
            },
            {
                "name": "Dr. Snigdha Agrawal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Somya Jain, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Sonal Singhal, Shiv Nadar University, Greater Noida, India"
            },
            {
                "name": "Dr. Sonal Tuteja, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Sonam Gupta, Ajay Kumar Garg Engineering College, Ghaziabad, India"
            },
            {
                "name": "Dr. Sreekanth Rallapalli, Nitte Meenakshi Institute of Technology, Bengaluru, India"
            },
            {
                "name": "Dr. Subbulakshmi A, Chennai Institute of Technology, Tamil Nadu, India"
            },
            {
                "name": "Dr. Subodh Singhal, Jaypee University of Engineering and Technology, Guna, India"
            },
            {
                "name": "Dr. Sudeep Varshney, Sharda University, Greater Noida, India"
            },
            {
                "name": "Dr. Sujoy Chatterjee, University of Campinas, Brazil"
            },
            {
                "name": "Dr. Suma Dawn, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Suman Kumar, Troy University, Troy, USA"
            },
            {
                "name": "Dr. Sumit Kumar, Symbiosis Institute of Technology, Pune, India"
            },
            {
                "name": "Dr. Surya Deo Choudhary, Motihari College of Engineering, Bihar, India"
            },
            {
                "name": "Dr. Surya Prakash Singh, Kamla Nehru Institute of Technology, Sultanpur, India"
            },
            {
                "name": "Dr. Taj Alam, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Tajinder Singh Arora, Aligarh Muslim University, Aligarh, India"
            },
            {
                "name": "Dr. Tanmai Kulshreshtha, Pranveer Singh Institute of Technology, Kanpur, India"
            },
            {
                "name": "Dr. Tanupriya Choudhury, Amity University, Noida, India"
            },
            {
                "name": "Dr. Tanvi Gautam, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Tarun Agrawal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Tarun Rawat, Netaji Subhas University of Technology, Delhi, India"
            },
            {
                "name": "Dr. Thamilselvan Rakkiannan, Kongu Engineering College, Erode, India"
            },
            {
                "name": "Dr. Thangalakshmi S, Indian Maritime University, Chennai Campus, India"
            },
            {
                "name": "Dr. Thipendra P Singh, Bennett University, Greater Noida, India"
            },
            {
                "name": "Dr. Tribhuwan Kumar Tewari, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Usha Chauhan, Galgotias University, Greater Noida, India"
            },
            {
                "name": "Dr. Usha Sandeep Mehta, Nirma University, Ahmedabad, India"
            },
            {
                "name": "Dr. Vandana Roy, Rajiv Gandhi Proudyogiki Vishwavidyalaya, Bhopal, India"
            },
            {
                "name": "Dr. Varsha Garg, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Vartika Puri, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Varun Goel, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Varun Mishra, Madhav Institute of Technology & Science, Gwalior, India"
            },
            {
                "name": "Dr. Varun Srivastava, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Vedvyas J. Dwivedi, Indus University, Ahmedabad, India"
            },
            {
                "name": "Dr. Venkatesh P, Ramco Institute of Technology, Rajapalayam, India"
            },
            {
                "name": "Dr. Vijay Prakash, Thapar University, Patiala, India"
            },
            {
                "name": "Dr. Vikas Baghel, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Vikas Chaudhary, Galgotias University, Greater Noida, India"
            },
            {
                "name": "Dr. Vikas Goel, Krishna Institute of Engineering and Technology, Ghaziabad, India"
            },
            {
                "name": "Dr. Vikrant Verma, MIT Academy of Engineering, Pune, India"
            },
            {
                "name": "Dr. Vilas Gaikwad, Sanjeevan Engineering & Technology Institute, Panhala, India"
            },
            {
                "name": "Dr. Vimal Mishra, Madan Mohan Malaviya University of Technology, Gorakhpur, India"
            },
            {
                "name": "Dr. Vinay Anand Tikkiwal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Vinay Kumar, Graphic Era University, Dehradun, India"
            },
            {
                "name": "Dr. Vinay Kumar Mittal, KL University, Guntur, India"
            },
            {
                "name": "Dr. Vineet Khandelwal, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Vipin Balyan, Cape Peninsula University of Technology, South Africa"
            },
            {
                "name": "Dr. Virendra P. Vishwakarma, Guru Gobind Singh Indraprastha University, Delhi, India"
            },
            {
                "name": "Dr. Vishal Narain Saxena, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Vishnu Sharma, ITS Engineering College, Greater Noida, India"
            },
            {
                "name": "Dr. Viswas Sadasivan, Amrita Vishwa Vidyapeetham, Amritapuri, India"
            },
            {
                "name": "Dr. Vivek Dwivedi, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Vivek Kumar Sehgal, Jaypee University of Information Technology, Waknaghat, India"
            },
            {
                "name": "Dr. Vivek Kumar Singh, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Vivekanand Mishra, Sardar Vallabhbhai National Institute of Technology, Surat, India"
            },
            {
                "name": "Dr. Yatindra Gaurav, Madan Mohan Malaviya University of Technology, Gorakhpur, India"
            },
            {
                "name": "Dr. Yogendra Kumar Upadhyaya, Chandigarh University, Chandigarh, India"
            },
            {
                "name": "Dr. Yogesh Chauhan, Gautam Buddha University, Greater Noida, India"
            },
            {
                "name": "Dr. Yogesh Kumar, Jaypee Institute of Information Technology, Noida, India"
            },
            {
                "name": "Dr. Yudhishthir Pandey, Rajkiya Engineering College, Ambedkar Nagar, India"
            }
        ];

        // Populate table
        const table = document.getElementById('committee-table');
        committeeData.forEach(member => {
            const row = document.createElement('tr');
            const nameCell = document.createElement('td');
            const institutionCell = document.createElement('td');
            nameCell.textContent = member.name;
            institutionCell.textContent = member.institution;
            row.appendChild(nameCell);
            row.appendChild(institutionCell);
            table.appendChild(row);
        });
    </script>
</body>

</html>