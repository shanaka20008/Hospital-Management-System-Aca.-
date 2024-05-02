<!DOCTYPE html>
<html>
    <title>Arogya Hospital</title>
    <head>
        <link rel="stylesheet" href="home page css.css">
        <script src='https://kit.fontawesome.com/de1c10e5c7.js' crossorigin='anonymous'></script>
      
    </head>

        <body>
        <nav>
            
            <i class='fa fa-hospital-o' style='color: white'></i>
            <label class="logo"> Arogya Hospital </label>
           

            
        </nav></body>
<body 

class="imgslide">



<div class="slider">
    <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">

        <div class="slide first">
           <img src="1.jpg" alt="">
        </div>

        <div class="slide">
            <img src="2.jpg" alt="">
        </div>

        <div class="slide">
            <img src="3.jpg" alt="">
        </div>

        <div class="navigation-auto">
            <div class="auto-btn"></div>
            <div class="auto-btn"></div>
            <div class="auto-btn"></div>
        </div>

    </div>
    <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
    </div>
    
</div>
<script type="text/javascript">
    var counter=1;
    setInterval (function(){
        document.getElementById('radio'+counter).checked=true;
        counter++;
        if(counter>3){
            counter=1;
        }
    },5000);


</script>
<br>
<div class="bt">
    <button type="logout" ><a href="login.php">Log in</button>
</div>

<div class="contact-section">
    <div class="contact-info">
        <div><i class='fa fa-map-marker' style='color: white'></i> NO,16 Peradeniya Rd, Kandy</div>
        <div><i class='fas fa-envelope' style='color: white'></i>Arogya@email.lk</div>
        <div><i class='fa fa-phone' style='color: white'></i>+941106784</div>
        
    </div>
</div>


<br>
<br>    
<h1 class="h1">About us</h1>
<br>
<br>
<br>  
<p>Arogya Hospital, known colloquially as Mount E, is a 345-bed private hospital in sri lanka operated by Parkway Health. Construction began in 1976 and the hospital officially opened on 8 December 1979. The hospital specialises in cardiology, oncology, and neuroscience, among other tertiary services. It is also recognised as a multi-organ transplant speciality hospital. Since 1995, it has been owned by Parkway Holdings Ltd.

    The hospital is accredited by Joint Commission International and is located in sri lanka's Orchard Road, on Mount Elizabeth. It is the first private hospital in Singapore to perform open-heart surgery and to establish a nuclear medicine centre.
    
    The Royal Family of Brunei built a Royal Suite in the hospital for their own use. It was later made available for use by other patients.
    
    In 2016 the cost of a bed in a four-bed ward was $276 a night. A single room was $640 a night.
    
    The adjacent Arogya  Medical Centre (MEMC) houses clinics with private medical specialists only. Doctors have to be specialists accredited by the Sri Lanka Medical Council in order to practice in Arogya Medical Centre. They practice in 31 specialities in total, including anaesthesiology, cardiology, cardiothoracic surgery, dental specialties, endocrinology, gastroenterology, general surgery, medical oncology, neurology, obstetrics and gynaecology, orthopaedic surgery, otorhinolaryngology, paediatric medicine, plastic surgery, renal medicine, respiratory medicine, and urology. Consultation and treatment rates vary per condition, clinic, and specialist.
    
    The medical centre caters to patients of all ages from Sri Lanka, Southeast Asia, and international patients from all countries visiting Sri Lanka. Staff who understand multiple languages such as Indonesian, Russian, and Malay are available on-site to provide translations. The medical centre also contains pharmacies and shops on the second floor.
</p>


</body>
</html>