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

        .organizing-table {
            margin: auto;
            margin-top: 3rem;
            border-collapse: collapse;
        }

        .organizing-table tr {
            background-color: #f8f8f8;
        }

        .organizing-table tr:nth-child(odd) {
            background-color: #e8e8e8;
        }

        .organizing-table td {
            padding: 12px 16px;
            border: none;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container text-center py-5">
        <table class="organizing-table my-10" id="organizing-table">
            <!-- Data will be populated here -->
        </table>
    </div>

    <script>
        // Data from JSON file
        const organisingCommitteeData = [{
                "name": "Aanchal Agarwal"
            },
            {
                "name": "Abhay Kumar"
            },
            {
                "name": "Abhijeet Upadhya"
            },
            {
                "name": "Abhishek Kashyap"
            },
            {
                "name": "Ajay Kumar"
            },
            {
                "name": "Ajit Kumar"
            },
            {
                "name": "Alok Joshi"
            },
            {
                "name": "Amrita Kaul"
            },
            {
                "name": "Ankur Bhardwaj"
            },
            {
                "name": "Ankur Gupta"
            },
            {
                "name": "Archana Pandey"
            },
            {
                "name": "Arti Noor"
            },
            {
                "name": "Ashish Goel"
            },
            {
                "name": "Ashish Gupta"
            },
            {
                "name": "Astha Sharma"
            },
            {
                "name": "Atul Kumar"
            },
            {
                "name": "Atul Kumar Srivastava"
            },
            {
                "name": "B. Suresh"
            },
            {
                "name": "Bajrang Bansal"
            },
            {
                "name": "Bhartendu Chaturvedi"
            },
            {
                "name": "Bhawna Gupta"
            },
            {
                "name": "Bhuvaneshwari S."
            },
            {
                "name": "Chandan Kumar"
            },
            {
                "name": "Divya Kaushik"
            },
            {
                "name": "Garima Kapur"
            },
            {
                "name": "Gaurav Verma"
            },
            {
                "name": "Gorav Kumar Gugliani"
            },
            {
                "name": "Harish Bishwakarma"
            },
            {
                "name": "Hemant Kumar"
            },
            {
                "name": "Himani Gupta"
            },
            {
                "name": "Jasmine Saini"
            },
            {
                "name": "Jitendra Mohan"
            },
            {
                "name": "Joysmita Chatterjee"
            },
            {
                "name": "Juhi Gupta"
            },
            {
                "name": "Jyoti Deshwal Yadav"
            },
            {
                "name": "Jyoti Mishra"
            },
            {
                "name": "Kapil Dev Tyagi"
            },
            {
                "name": "Kuldeep Baderia"
            },
            {
                "name": "Madhu Jain"
            },
            {
                "name": "Madhu Jhariya"
            },
            {
                "name": "Mandeep Narula"
            },
            {
                "name": "Manika Jha"
            },
            {
                "name": "Megha Agarwal"
            },
            {
                "name": "Mohd Salman Khan"
            },
            {
                "name": "Monika"
            },
            {
                "name": "Neetu Joshi"
            },
            {
                "name": "Nidhi Tewari"
            },
            {
                "name": "Nilufar Yasmin"
            },
            {
                "name": "Niraj Kumar"
            },
            {
                "name": "Nisha Venkatesh"
            },
            {
                "name": "Nitesh Kumar"
            },
            {
                "name": "Nitin Muchhal"
            },
            {
                "name": "Pankaj Kumar Yadav"
            },
            {
                "name": "Parul Arora"
            },
            {
                "name": "Piyush Sharma"
            },
            {
                "name": "Prabhakar Jha"
            },
            {
                "name": "Priyanka Kwatra"
            },
            {
                "name": "Rachna Singh"
            },
            {
                "name": "Raghvenda Kumar Singh"
            },
            {
                "name": "Rahul Kaushik"
            },
            {
                "name": "Rahul Kumar"
            },
            {
                "name": "Ramanand Bisauriya"
            },
            {
                "name": "Ravi Prakash Verma"
            },
            {
                "name": "Reema Budhiraja"
            },
            {
                "name": "Richa Gupta"
            },
            {
                "name": "Rishibrind Kumar Upadhyay"
            },
            {
                "name": "Ritesh Kumar Sharma"
            },
            {
                "name": "Ritu Raj"
            },
            {
                "name": "Ruby Beniwal"
            },
            {
                "name": "Ruchi Singh"
            },
            {
                "name": "Sajai Vir Singh"
            },
            {
                "name": "Samriti Kalia"
            },
            {
                "name": "Satya Narayan Patel"
            },
            {
                "name": "Satyendra Kumar"
            },
            {
                "name": "Saurabh Chaturvedi"
            },
            {
                "name": "Shamim Akhter"
            },
            {
                "name": "Shivani"
            },
            {
                "name": "Shradha Saxena"
            },
            {
                "name": "Shruti Kalra"
            },
            {
                "name": "Shweta Srivastava"
            },
            {
                "name": "Shwetabh Singh"
            },
            {
                "name": "Smriti Bhatnagar"
            },
            {
                "name": "Smriti Bhatnagar"
            },
            {
                "name": "Sumit Mahajan"
            },
            {
                "name": "Vaishali Sharma"
            },
            {
                "name": "Varun Goel"
            },
            {
                "name": "Vimal Kumar Mishra"
            },
            {
                "name": "Vijay Khare"
            },
            {
                "name": "Vinay Anand Tikkiwal"
            },
            {
                "name": "Vineet Khandelwal"
            },
            {
                "name": "Vishal Narain Saxena"
            },
            {
                "name": "Vivek Dwivedi"
            },
            {
                "name": "Yogesh Kumar"
            },
            {
                "name": ""
            }
        ]


        // Populate table
        const table = document.getElementById('organizing-table');

        // Create rows with 3 names per row
        for (let i = 0; i < organisingCommitteeData.length; i += 3) {
            const row = document.createElement('tr');

            // Add the first name
            const nameCell1 = document.createElement('td');
            nameCell1.textContent = organisingCommitteeData[i].name;
            row.appendChild(nameCell1);

            // Add the second name (if it exists)
            if (i + 1 < organisingCommitteeData.length) {
                const nameCell2 = document.createElement('td');
                nameCell2.textContent = organisingCommitteeData[i + 1].name;
                row.appendChild(nameCell2);
            }

            // Add the third name (if it exists)
            if (i + 2 < organisingCommitteeData.length) {
                const nameCell3 = document.createElement('td');
                nameCell3.textContent = organisingCommitteeData[i + 2].name;
                row.appendChild(nameCell3);
            }

            // Append the row to the table
            table.appendChild(row);
        }
    </script>
</body>

</html>